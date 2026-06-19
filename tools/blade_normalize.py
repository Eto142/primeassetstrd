from pathlib import Path
import re

root = Path('resources/views/home')

def normalize_file(path: Path):
    text = path.read_text(encoding='utf-8')
    if "@include('home.header')" not in text:
        return False
    # remove leading BOM if any
    text = text.lstrip('\ufeff')
    # find head block and body block to preserve page-specific head styles only
    if '<!DOCTYPE html>' not in text:
        return False
    # remove current HTML wrapper
    # keep content inside <body> only, and any custom head content as partial strings
    head_content = ''
    title_match = re.search(r'<title>(.*?)</title>', text, re.S)
    title = title_match.group(1).strip() if title_match else ''
    head_match = re.search(r'<head>(.*?)</head>', text, re.S)
    if head_match:
        head_block = head_match.group(1)
        # remove title and preserve other tags/styles/scripts
        head_block = re.sub(r'<title>.*?</title>', '', head_block, flags=re.S)
        head_content = head_block.strip()
    body_match = re.search(r'<body[^>]*>(.*?)</body>', text, re.S)
    if not body_match:
        print(f'No body in {path}')
        return False
    body_content = body_match.group(1).strip()
    # normalize body content whitespace
    body_content = body_content + '\n'
    # Build normalized file
    page_title = title.replace("'", "\\'")
    if head_content:
        normalized = f"@php\n$pageTitle = '{page_title}';\n$pageHead = <<<'PAGEHEAD'\n{head_content}\nPAGEHEAD;\n@endphp\n\n@include('home.header')\n\n{body_content}@include('home.footer')\n"
    else:
        normalized = f"@php\n$pageTitle = '{page_title}';\n@endphp\n\n@include('home.header')\n\n{body_content}@include('home.footer')\n"
    if normalized != text:
        path.write_text(normalized, encoding='utf-8')
        return True
    return False

files = []
for folder in ['learn','company','markets','trading']:
    p = root / folder
    if p.exists():
        for f in sorted(p.glob('*.blade.php')):
            files.append(f)

updated = []
for f in files:
    if normalize_file(f):
        updated.append(f.relative_to(root))

print('Updated files:')
for f in updated:
    print(f)
