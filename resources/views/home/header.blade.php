
<!doctype html>
<html class="no-js new-layout" lang="en" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="referrer" content="unsafe-url">
    <meta name="google-site-verification" id="MetaWebMasterVerify" content="_BKCt60JDbUv1dQdr9-kaJrA5D_4s7gLqAS7d8OpKsw" />
        <meta name="robots" content="noindex, nofollow" />
    @if(!empty($pageTitle))
        <title>{{ $pageTitle }}</title>
    @else
        <title>Online CFD Trading | Trading the Markets | Primeassetstrade</title>
    @endif
        <meta name="description" content="Trade the world’s most popular markets with a leading-CFD provider: CFDs on Forex, Cryptocurrencies, Shares, Commodities, Indices, ETFs &amp; Options." />
    
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="dns-prefetch" href="https://www.google-analytics.com">
    <link rel="dns-prefetch" href="https://stats.g.doubleclick.net">

                <link rel="preload" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100..700&family=Inter:opsz,wght@14..32,100..900&display=swap" as="style">
                <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100..700&family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">

    
    <link rel="preload" fetchpriority="high" as="image" href="Media/Resources/MainSite/Images/hero/hero-dark-bg.webp"/>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Resources/CSS/main/home-new-layout.css"/>
    @isset($pageHead)
        {!! $pageHead !!}
    @endisset

    


    
    
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){ 
        dataLayer.push(arguments);
    }
    gtag('set' , 'developer_id.dYWJhMj', true);
    // Default values for audiences
    gtag('consent', 'default', {"ad_storage":"granted","analytics_storage":"granted","functionality_storage":"granted","personalization_storage":"denied","security_storage":"granted","ad_user_data":"granted","ad_personalization":"denied","wait_for_update":500}); // global audience
    gtag('consent', 'default', {"ad_storage":"granted","analytics_storage":"granted","functionality_storage":"granted","personalization_storage":"granted","security_storage":"granted","ad_user_data":"granted","ad_personalization":"granted","region":["BS","ID","IL","JP","NZ","SG"]}); // no banner no cookie policy audience
    gtag('consent', 'default', {"ad_storage":"granted","analytics_storage":"granted","functionality_storage":"granted","personalization_storage":"denied","security_storage":"granted","ad_user_data":"granted","ad_personalization":"denied","region":["AE","CA","CH","GB","ZA"]}); // gdpr audience
    gtag('consent', 'default', {"ad_storage":"granted","analytics_storage":"granted","functionality_storage":"granted","personalization_storage":"granted","security_storage":"granted","ad_user_data":"granted","ad_personalization":"granted","region":["US"]}); // us audience
</script>
<!-- Google tag (gtag.js) -->




<link rel="dns-prefetch" href="https://cdn.cookielaw.org">

<!-- OptanonConsentNoticeStart -->

<link rel="preload" as="script" href="https://cdn.cookielaw.org/consent/0192b380-614a-7179-a10e-0aaab199e690/OtAutoBlock.js">
<link rel="preload" as="script" href="https://cdn.cookielaw.org/consent/0192b380-614a-7179-a10e-0aaab199e690/otSDKStub.js">

<script type="text/javascript" src="https://cdn.cookielaw.org/consent/0192b380-614a-7179-a10e-0aaab199e690/OtAutoBlock.js" ></script>
<script src="https://cdn.cookielaw.org/consent/0192b380-614a-7179-a10e-0aaab199e690/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="0192b380-614a-7179-a10e-0aaab199e690" ></script>
<script type="text/javascript">
    function OptanonWrapper() {
        if (OptanonWrapper.executed) {
            return;
        }
        OptanonWrapper.executed = true;

        if (typeof OneTrust !== 'object') {
            return;
        }

        try {
            window.VWO = window.VWO || [];
            
            if (OnetrustActiveGroups && OnetrustActiveGroups.includes("C0002")) {
                window.VWO.push(['optInVisitor']);
            } else {
                window.VWO.push(['optOutVisitor', { maintainExperiences: true }]);
            }
                
                    const cookieSettingsButton = document.querySelector("#onetrust-pc-btn-handler");
                    if (cookieSettingsButton){
                        cookieSettingsButton.dataset.analytics = "cookies";
                        cookieSettingsButton.setAttribute("dialogType", "settingsModule");
                        cookieSettingsButton.setAttribute("clickType", "ManagePreferences");
                    }
                
            document.querySelector("#close-pc-btn-handler").addEventListener("click", (e) => {
                e.currentTarget.closest("#onetrust-pc-sdk").addEventListener("transitionstart", () => {
                    document.body.style.paddingInlineEnd = "";
                    document.querySelector("#onetrust-consent-sdk .onetrust-pc-dark-filter").style.display = "none";
                });
            });

            const acceptButton = document.querySelector("#onetrust-accept-btn-handler");
            if (acceptButton){
                acceptButton.dataset.analytics = "cookies";
                acceptButton.setAttribute("dialogType", /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? "popup" : "banner");
                acceptButton.setAttribute("clickType", "AcceptedCookies");
            }
            const cookiePolicyContentElem = document.querySelector("#onetrust-policy-text");
            if(cookiePolicyContentElem){
                const cookiePolicyLink = document.createElement("a");
                cookiePolicyLink.href = "/help/cookiepolicy";
                cookiePolicyLink.textContent = "Cookie Policy";
                cookiePolicyLink.setAttribute("data-analytics", "cookies");
                cookiePolicyLink.setAttribute("aria-label", cookiePolicyLink.textContent);
                cookiePolicyLink.setAttribute("dialogType", /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ? "popup" : "banner");
                cookiePolicyLink.setAttribute("clickType", "CookiePolicyLink");
                cookiePolicyContentElem.appendChild(cookiePolicyLink);
            }


            function replaceHeaders() {
                const container = document.querySelector('#onetrust-consent-sdk');
                if (!container) return;

                const classMap = { H2: 'ot-h2', H3: 'ot-h3', H4: 'ot-h4' };

                container.querySelectorAll('h2, h3, h4').forEach(element => {
                    const newDiv = document.createElement('div');
                    const className = classMap[element.tagName];

                    Array.from(element.attributes).forEach(attr => {
                        newDiv.setAttribute(attr.name, attr.value);
                    });

                    newDiv.innerHTML = element.innerHTML;
                    newDiv.classList.add(className);
                    element.replaceWith(newDiv);
                });
            }
            replaceHeaders();
            
        } catch (error) {
            console.error("Error in OptanonWrapper:", error);
        }
    }
</script>
<!-- OptanonConsentNoticeEnd -->
    
    <script>
        function deleteCookie(name, domain, path){
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT; path=" + path +"; domain=" + domain;
        }
        function disableGoogleAnalytics(disable){
            window['ga-disable-UA-7008980-19'] = disable;
            if(disable){
                var cookiesDomain = "localhost";
                if (window.location.host.lastIndexOf("localhost", 0) !== 0){
                    cookiesDomain = "." + window.location.host.split(".").slice(1).join(".");
                }
                deleteCookie("_ga", cookiesDomain, '/')
                deleteCookie("_gid", cookiesDomain, '/')
                deleteCookie("_gat_UA-7008980-19", cookiesDomain, '/')
            }
        }
        if (window.localStorage["Disable3rdPartyAnalytics"] === "true"){
            disableGoogleAnalytics(true)
        }
    </script>



            <script>
                window.dataLayer = window.dataLayer || [];
                //TODO: remove this block when using GA4 only
                window.dataLayer.push(
                    {
                        'customPagePath': '/', //TODO: remove when using GA4 only
                        'urlCountry': 'NG', //TODO: remove when using GA4 only
                        'language': 'en', //TODO: remove when using GA4 only
                        'IsInAppView': 'false' //TODO: remove when using GA4 only
                    }
                );
                let analyticsParameters = {};

                    analyticsParameters["userCountry"]="NG";
                    analyticsParameters["mainSiteSubdomain"]="Main";
                    analyticsParameters["pageType"]="Home";
                    analyticsParameters["experimentName_0"]="HomePageV20New1";
                    analyticsParameters["experimentVariant_0"]="undefined";
                    analyticsParameters["experimentName_1"]="HomePageV20New";
                    analyticsParameters["experimentVariant_1"]="undefined";
                    analyticsParameters["experimentName_2"]="UsHeroV1";
                    analyticsParameters["experimentVariant_2"]="undefined";
                    analyticsParameters["experimentName_3"]="UsHeroV2";
                    analyticsParameters["experimentVariant_3"]="undefined";
                    analyticsParameters["experimentName_4"]="InstrumentPageNewDesign";
                    analyticsParameters["experimentVariant_4"]="undefined";
                    analyticsParameters["pageLanguage"]="en";
                    analyticsParameters["operator"]="InvestSoft";
                    analyticsParameters["productType"]="CFD";

                let experimentVariants = {};

                    experimentVariants['experimentName_0'] = "HomePageV20New1";
                    experimentVariants['experimentVariant_0'] = "undefined";
                    experimentVariants['experimentName_1'] = "HomePageV20New";
                    experimentVariants['experimentVariant_1'] = "undefined";
                    experimentVariants['experimentName_2'] = "UsHeroV1";
                    experimentVariants['experimentVariant_2'] = "undefined";
                    experimentVariants['experimentName_3'] = "UsHeroV2";
                    experimentVariants['experimentVariant_3'] = "undefined";
                    experimentVariants['experimentName_4'] = "InstrumentPageNewDesign";
                    experimentVariants['experimentVariant_4'] = "undefined";

                window.dataLayer.push({
                    'event': 'pageMetaData',
                    ...analyticsParameters,
                    ...experimentVariants
                });
            </script>
            <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
<!-- Google Tag Manager -->
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;
        j.setAttributeNode(d.createAttribute('data-ot-ignore'));
    j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-RQS5');
</script>
<!-- End Google Tag Manager -->

        <script>
        window.addEventListener("DOMContentLoaded", function() {
            loadJS("1.0.0.135220/Resources/Scripts/attribution-cookies-param-to-cta-links.min.js", document.head, function() {
                if (typeof initAttributionCtaLinks === 'function') {
                    initAttributionCtaLinks(
                        "_ga",
                        '_ga_X6GLD6K91S',
                        "_vwo_uuid"
                    );
                }
            }, true);
        });

        (function() {
            let isVisitProcessed = false;
            const interactionEvents = ['scroll', 'click', 'touchstart', 'keydown'];
            const timeoutIds = new Set();

            const performProcessVisit = () => {
                if (isVisitProcessed) return;
                isVisitProcessed = true;

                // Clean up any remaining timeouts. Listeners are handled by `{ once: true }`.
                timeoutIds.forEach(clearTimeout);

                const localPath = "";
                const page = localPath || 'Home';
                const url = '/utils/processvisit' + '?visitPage=' + encodeURIComponent(page);
                
                fetch(url, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    }
                }).catch(error => console.error('Visit processing failed:', error));
            };

            // 1. Primary Trigger: After a 1-second delay in a requestAnimationFrame.
            requestAnimationFrame(() => {
                const id = setTimeout(performProcessVisit, 1000);
                timeoutIds.add(id);
            });

            // 2. User Interaction Trigger: Process immediately on the first user interaction.
            interactionEvents.forEach(event => {
                document.addEventListener(event, performProcessVisit, { passive: true, once: true });
            });

            // 3. Final Fallback Trigger: A failsafe to ensure processing happens after 3 seconds.
            const id = setTimeout(performProcessVisit, 3000);
            timeoutIds.add(id);
        })();
    </script>
    
    <!-- Start VWO Async SmartCode -->
<link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com" crossorigin class="optanon-category-C0002"/>
<script type="text/javascript" id="vwoCode" class="optanon-category-C0002">
    window._vwo_code || (function () {
        var w=window,
            d=document;
        var account_id=697204,
            version=2.2,
            // delay on slow networks.
            settings_tolerance = 2000, // Max 2s wait
            library_tolerance = 2500,
            // LCP optimisation: hide only <main> instead of <body> so header/footer paint
            hide_element='main',
            hide_element_style = 'opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important';
            /* DO NOT EDIT BELOW THIS LINE */
            if(f=!1,v=d.querySelector('#vwoCode'),cc={},-1<d.URL.indexOf('__vwo_disable__')||w._vwo_code)return;try{var e=JSON.parse(localStorage.getItem('_vwo_'+account_id+'_config'));cc=e&&'object'==typeof e?e:{}}catch(e){}function r(t){try{return decodeURIComponent(t)}catch(e){return t}}var s=function(){var e={combination:[],combinationChoose:[],split:[],exclude:[],uuid:null,consent:null,optOut:null},t=d.cookie||'';if(!t)return e;for(var n,i,o=/(?:^|;\s*)(?:(_vis_opt_exp_(\d+)_combi=([^;]*))|(_vis_opt_exp_(\d+)_combi_choose=([^;]*))|(_vis_opt_exp_(\d+)_split=([^:;]*))|(_vis_opt_exp_(\d+)_exclude=[^;]*)|(_vis_opt_out=([^;]*))|(_vwo_global_opt_out=[^;]*)|(_vwo_uuid=([^;]*))|(_vwo_consent=([^;]*)))/g;null!==(n=o.exec(t));)try{n[1]?e.combination.push({id:n[2],value:r(n[3])}):n[4]?e.combinationChoose.push({id:n[5],value:r(n[6])}):n[7]?e.split.push({id:n[8],value:r(n[9])}):n[10]?e.exclude.push({id:n[11]}):n[12]?e.optOut=r(n[13]):n[14]?e.optOut=!0:n[15]?e.uuid=r(n[16]):n[17]&&(i=r(n[18]),e.consent=i&&3<=i.length?i.substring(0,3):null)}catch(e){}return e}();function i(){var e=function(){if(w.VWO&&Array.isArray(w.VWO))for(var e=0;e<w.VWO.length;e++){var t=w.VWO[e];if(Array.isArray(t)&&('setVisitorId'===t[0]||'setSessionId'===t[0]))return!0}return!1}(),t='a='+account_id+'&u='+encodeURIComponent(w._vis_opt_url||d.URL)+'&vn='+version+'&ph=1'+('undefined'!=typeof platform?'&p='+platform:'')+'&st='+w.performance.now();e||((n=function(){var e,t=[],n={},i=w.VWO&&w.VWO.appliedCampaigns||{};for(e in i){var o=i[e]&&i[e].v;o&&(t.push(e+'-'+o+'-1'),n[e]=!0)}if(s&&s.combination)for(var r=0;r<s.combination.length;r++){var a=s.combination[r];n[a.id]||t.push(a.id+'-'+a.value)}return t.join('|')}())&&(t+='&c='+n),(n=function(){var e=[],t={};if(s&&s.combinationChoose)for(var n=0;n<s.combinationChoose.length;n++){var i=s.combinationChoose[n];e.push(i.id+'-'+i.value),t[i.id]=!0}if(s&&s.split)for(var o=0;o<s.split.length;o++)t[(i=s.split[o]).id]||e.push(i.id+'-'+i.value);return e.join('|')}())&&(t+='&cc='+n),(n=function(){var e={},t=[];if(w.VWO&&Array.isArray(w.VWO))for(var n=0;n<w.VWO.length;n++){var i=w.VWO[n];if(Array.isArray(i)&&'setVariation'===i[0]&&i[1]&&Array.isArray(i[1]))for(var o=0;o<i[1].length;o++){var r,a=i[1][o];a&&'object'==typeof a&&(r=a.e,a=a.v,r&&a&&(e[r]=a))}}for(r in e)t.push(r+'-'+e[r]);return t.join('|')}())&&(t+='&sv='+n)),s&&s.optOut&&(t+='&o='+s.optOut);var n=function(){var e=[],t={};if(s&&s.exclude)for(var n=0;n<s.exclude.length;n++){var i=s.exclude[n];t[i.id]||(e.push(i.id),t[i.id]=!0)}return e.join('|')}();return n&&(t+='&e='+n),s&&s.uuid&&(t+='&id='+s.uuid),s&&s.consent&&(t+='&consent='+s.consent),w.name&&-1<w.name.indexOf('_vis_preview')&&(t+='&pM=true'),w.VWO&&w.VWO.ed&&(t+='&ed='+w.VWO.ed),t}code={nonce:v&&v.nonce,library_tolerance:function(){return'undefined'!=typeof library_tolerance?library_tolerance:void 0},settings_tolerance:function(){return cc.sT||settings_tolerance},hide_element_style:function(){return'{'+(cc.hES||hide_element_style)+'}'},hide_element:function(){return performance.getEntriesByName('first-contentful-paint')[0]?'':'string'==typeof cc.hE?cc.hE:hide_element},getVersion:function(){return version},finish:function(e){var t;f||(f=!0,(t=d.getElementById('_vis_opt_path_hides'))&&t.parentNode.removeChild(t),e&&((new Image).src='https://dev.visualwebsiteoptimizer.com/ee.gif?a='+account_id+e))},finished:function(){return f},addScript:function(e){var t=d.createElement('script');t.type='text/javascript',e.src?t.src=e.src:t.text=e.text,v&&t.setAttribute('nonce',v.nonce),d.getElementsByTagName('head')[0].appendChild(t)},load:function(e,t){t=t||{};var n=new XMLHttpRequest;n.open('GET',e,!0),n.withCredentials=!t.dSC,n.responseType=t.responseType||'text',n.onload=function(){if(t.onloadCb)return t.onloadCb(n,e);200===n.status?_vwo_code.addScript({text:n.responseText}):_vwo_code.finish('&e=loading_failure:'+e)},n.onerror=function(){if(t.onerrorCb)return t.onerrorCb(e);_vwo_code.finish('&e=loading_failure:'+e)},n.send()},init:function(){var e,t=this.settings_tolerance();w._vwo_settings_timer=setTimeout(function(){_vwo_code.finish()},t),'body'!==this.hide_element()?(n=d.createElement('style'),e=(t=this.hide_element())?t+this.hide_element_style():'',t=d.getElementsByTagName('head')[0],n.setAttribute('id','_vis_opt_path_hides'),v&&n.setAttribute('nonce',v.nonce),n.setAttribute('type','text/css'),n.styleSheet?n.styleSheet.cssText=e:n.appendChild(d.createTextNode(e)),t.appendChild(n)):(n=d.getElementsByTagName('head')[0],(e=d.createElement('div')).style.cssText='z-index: 2147483647 !important;position: fixed !important;left: 0 !important;top: 0 !important;width: 100% !important;height: 100% !important;background: white !important;',e.setAttribute('id','_vis_opt_path_hides'),e.classList.add('_vis_hide_layer'),n.parentNode.insertBefore(e,n.nextSibling));var n='https://dev.visualwebsiteoptimizer.com/j.php?'+i();-1!==w.location.search.indexOf('_vwo_xhr')?this.addScript({src:n}):this.load(n+'&x=true',{l:1})}};w._vwo_code=code;code.init();
    })();
</script>
<!-- End VWO Async SmartCode -->
    <script>
    const loadedJS = [];
    const pendingJS = {};
    function loadJS(url, element, callback, async = true, errorCallback) {
        if (loadedJS.indexOf(url) > -1) {
            if (callback !== undefined) {
                callback();
            }
            return;
        }

        // Script is already in-flight — queue the callbacks instead of injecting a duplicate tag.
        if (pendingJS[url]) {
            pendingJS[url].push({ callback: callback, errorCallback: errorCallback });
            return;
        }

        pendingJS[url] = [{ callback: callback, errorCallback: errorCallback }];

        const script = document.createElement("script");
        script.async = async;
        script.src = url;
        script.addEventListener("load", function () {
            loadedJS.push(url);
            const pending = pendingJS[url] || [];
            delete pendingJS[url];
            pending.forEach(function (entry) {
                if (entry.callback !== undefined) {
                    entry.callback();
                }
            });
        });
        script.addEventListener("error", function () {
            const pending = pendingJS[url] || [];
            delete pendingJS[url];
            pending.forEach(function (entry) {
                if (entry.errorCallback !== undefined) {
                    entry.errorCallback();
                }
            });
        });
        element.appendChild(script);
    }
</script>
    
{{-- <link rel="alternate" href="https://www.plus500.com/" hreflang="x-default" />
<link rel="alternate" href="https://www.plus500.com/cs/" hreflang="cs-CZ" />
<link rel="alternate" href="https://www.plus500.com/en-cz/" hreflang="en-CZ" />
<link rel="alternate" href="https://www.plus500.com/nl/" hreflang="nl-NL" />
<link rel="alternate" href="https://www.plus500.com/en-nl/" hreflang="en-NL" />
<link rel="alternate" href="https://www.plus500.com/en-au/" hreflang="en-AU" />
<link rel="alternate" href="https://www.plus500.com/ar/" hreflang="ar" />
<link rel="alternate" href="https://www.plus500.com/zh/" hreflang="zh" />
<link rel="alternate" href="https://www.plus500.com/bg/" hreflang="bg-BG" />
<link rel="alternate" href="https://www.plus500.com/en-bg/" hreflang="en-BG" />
<link rel="alternate" href="https://www.plus500.com/da/" hreflang="da-DK" />
<link rel="alternate" href="https://www.plus500.com/en-dk/" hreflang="en-DK" />
<link rel="alternate" href="https://www.plus500.com/de-at/" hreflang="de-AT" />
<link rel="alternate" href="https://www.plus500.com/en-at/" hreflang="en-AT" />
<link rel="alternate" href="https://www.plus500.com/de-li/" hreflang="de-LI" />
<link rel="alternate" href="https://www.plus500.com/en-li/" hreflang="en-LI" />
<link rel="alternate" href="https://www.plus500.com/de/" hreflang="de-DE" />
<link rel="alternate" href="https://www.plus500.com/en-de/" hreflang="en-DE" />
<link rel="alternate" href="https://www.plus500.com/el-cy/" hreflang="el-CY" />
<link rel="alternate" href="https://www.plus500.com/en-cy/" hreflang="en-CY" />
<link rel="alternate" href="https://www.plus500.com/el-gr/" hreflang="el-GR" />
<link rel="alternate" href="https://www.plus500.com/en-gr/" hreflang="en-GR" />
<link rel="alternate" href="https://www.plus500.com/en/" hreflang="en-GB" />
<link rel="alternate" href="https://www.plus500.com/en-ie/" hreflang="en-IE" />
<link rel="alternate" href="https://www.plus500.com/en-nz/" hreflang="en-NZ" />
<link rel="alternate" href="https://www.plus500.com/en-sz/" hreflang="en-SZ" />
<link rel="alternate" href="https://www.plus500.com/en-za/" hreflang="en-ZA" />
<link rel="alternate" href="https://www.plus500.com/es-es/" hreflang="es-ES" />
<link rel="alternate" href="https://www.plus500.com/en-es/" hreflang="en-ES" />
<link rel="alternate" href="https://www.plus500.com/et/" hreflang="et-EE" />
<link rel="alternate" href="https://www.plus500.com/en-ee/" hreflang="en-EE" />
<link rel="alternate" href="https://www.plus500.com/fi/" hreflang="fi-FI" />
<link rel="alternate" href="https://www.plus500.com/en-fi/" hreflang="en-FI" />
<link rel="alternate" href="https://www.plus500.com/fr-gf/" hreflang="fr-GF" />
<link rel="alternate" href="https://www.plus500.com/fr-gp/" hreflang="fr-GP" />
<link rel="alternate" href="https://www.plus500.com/fr-lu/" hreflang="fr-LU" />
<link rel="alternate" href="https://www.plus500.com/fr-mq/" hreflang="fr-MQ" />
<link rel="alternate" href="https://www.plus500.com/fr-re/" hreflang="fr-RE" />
<link rel="alternate" href="https://www.plus500.com/en-fr/" hreflang="en-FR" />
<link rel="alternate" href="https://www.plus500.com/fr/" hreflang="fr-FR" />
<link rel="alternate" href="https://www.plus500.com/he/" hreflang="he-IL" />
<link rel="alternate" href="https://www.plus500.com/en-il/" hreflang="en-IL" />
<link rel="alternate" href="https://www.plus500.com/hr/" hreflang="hr-HR" />
<link rel="alternate" href="https://www.plus500.com/en-hr/" hreflang="en-HR" />
<link rel="alternate" href="https://www.plus500.com/en-is/" hreflang="en-IS" />
<link rel="alternate" href="https://www.plus500.com/it/" hreflang="it-IT" />
<link rel="alternate" href="https://www.plus500.com/en-it/" hreflang="en-IT" />
<link rel="alternate" href="https://www.plus500.com/lt/" hreflang="lt-LT" />
<link rel="alternate" href="https://www.plus500.com/lv/" hreflang="lv-LV" />
<link rel="alternate" href="https://www.plus500.com/no/" hreflang="no-NO" />
<link rel="alternate" href="https://www.plus500.com/pl/" hreflang="pl-PL" />
<link rel="alternate" href="https://www.plus500.com/en-pl/" hreflang="en-PL" />
<link rel="alternate" href="https://www.plus500.com/pt/" hreflang="pt-PT" />
<link rel="alternate" href="https://www.plus500.com/ro/" hreflang="ro-RO" />
<link rel="alternate" href="https://www.plus500.com/sk/" hreflang="sk-SK" />
<link rel="alternate" href="https://www.plus500.com/sl/" hreflang="sl-SI" />
<link rel="alternate" href="https://www.plus500.com/sv/" hreflang="sv-SE" />
<link rel="alternate" href="https://www.plus500.com/es/" hreflang="es" />
<link rel="alternate" href="https://www.plus500.com/en-sg/" hreflang="en-SG" />
<link rel="alternate" href="https://www.plus500.com/hu/" hreflang="hu-HU" />
<link rel="alternate" href="https://www.plus500.com/en-ae/" hreflang="en-AE" />
<link rel="alternate" href="https://www.plus500.com/en-qa/" hreflang="en-QA" />
<link rel="alternate" href="https://www.plus500.com/en-bh/" hreflang="en-BH" />
<link rel="alternate" href="https://www.plus500.com/de-ch/" hreflang="de-CH" />
<link rel="alternate" href="https://www.plus500.com/id-id/" hreflang="id-ID" />
<link rel="alternate" href="https://www.plus500.com/en-id/" hreflang="en-ID" />
<link rel="alternate" href="https://jp.plus500.com/" hreflang="ja" />

     --}}
    

    <!-- Add default OpenGraph image tag -->
<meta property="og:image:secure_url" content="/logo.png" />
<meta property="og:image" content="/logo.png" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="400" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="/logo.png" />
<meta name="twitter:image:src" content="/logo.png">
</head>
<body class="home regulator-none country-ng lang-en Win10 safari">
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-RQS5"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<header id="mainHeader" class="sticky-top main-header new-design">




<nav class="navbar navbar-expand-xxl navbar-light navbar-main">
		<div class="container-xxl">
			<div class="navbar-wrapper">
				<a class="navbar-brand logo" href="/" aria-label="Primeassetstrade logo/homepage link">
		                <img width="102" height="24" loading="lazy" src="logo1.png" alt="Primeassetstrade logo inside homepage link"/>
									</a>
				<div id="offCanvasNavbar" class="offcanvas offcanvas-end offcanvas-main-header" tabindex="-1" aria-labelledby="offCanvasNavbarLabel">
					<div class="d-xxl-none offcanvas-dismiss-item">
						<button type="button" class="ms-auto navbar-toggler offcanvas-dismiss" data-bs-dismiss="offcanvas" aria-expanded="true" aria-label="Close menu">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
	                <div class="offcanvas-body justify-content-xxl-center align-items-xxl-center">
						<ul class="navbar-nav" role="menu">
								<li role="none" class="nav-item">
									<a id="marketsSubmenuButton" class="nav-link submenu-toggle d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#marketsSubmenu" role="menuitem" aria-expanded="false" aria-controls="marketsSubmenu">
										<span>
											Markets
											<i class="icon icon-chevron-down"></i>
										</span>
					                </a>
									<ul role="menu" id="marketsSubmenu" class="collapse" aria-labelledby="marketsSubmenuButton" data-menu-name="markets">
													<li role="none" class="nav-item nav-header"><span class="dropdown-header">CFDs</span></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('markets.crypto') }}" aria-label="Buy & Sell Cryptocurrency CFDs | Crypto CFD Trading" role="menuitem" data-page="CryptoCurrencies" data-analytics="menuClick">Crypto</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('markets.indices') }}" aria-label="Buy & Sell Index CFDs | Indices CFD Trading" role="menuitem" data-page="Indices" data-analytics="menuClick">Indices</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('markets.forex') }}" aria-label="Buy & Sell Forex CFDs | Forex CFD Trading" role="menuitem" data-page="Forex" data-analytics="menuClick">Forex</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('markets.commodities') }}" aria-label="Buy & Sell Commodity CFDs | Commodities CFD Trading" role="menuitem" data-page="Commodities" data-analytics="menuClick">Commodities</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('markets.shares') }}" aria-label="Buy & Sell Share CFDs | Stocks CFD Trading" role="menuitem" data-page="Stocks" data-analytics="menuClick">Shares</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('markets.options') }}" aria-label="Buy & Sell Options CFDs | Options CFD Trading" role="menuitem" data-page="Options" data-analytics="menuClick">Options</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('markets.etfs') }}" aria-label="Buy & Sell ETF CFDs | ETFs CFD Trading" role="menuitem" data-page="ETFs" data-analytics="menuClick">ETFs</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('markets.all') }}" aria-label="All Major Markets: CFDs on Stocks, FX & More" role="menuitem" data-page="AllInstruments" data-analytics="menuClick">All Markets</a></li>
									</ul>
								</li>
															<li role="none" class="nav-item">
									<a id="tradingSubMenuButton" class="nav-link submenu-toggle d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#tradingSubMenu" role="menuitem" aria-expanded="false" aria-controls="tradingSubMenu">
										<span>
											Trading
											<i class="icon icon-chevron-down"></i>
										</span>
					                </a>
									<ul role="menu" id="tradingSubMenu" class="collapse" aria-labelledby="tradingSubMenuButton" data-menu-name="trading">
												<li  role="none" class="nav-item"><a class="dropdown-item" href="{{ route('trading.feescharges', ['productType' => 'CFD']) }}" aria-label="Fees & Charges | CFD Trading" role="menuitem" data-page="FeesCharges" data-analytics="menuClick">Fees & Charges</a></li>
												<li  role="none" class="nav-item"><a class="dropdown-item" href="{{ route('trading.esg') }}" aria-label="ESG Scoring" role="menuitem" data-page="Esg" data-analytics="menuClick">ESG</a></li>
									</ul>
								</li>
															<li role="none" class="nav-item">
									<a id="companySubMenuButton" class="nav-link submenu-toggle d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#companySubMenu" role="menuitem" aria-expanded="false" aria-controls="companySubMenu">
										<span>
											Company
											<i class="icon icon-chevron-down"></i>
										</span>
					                </a>
									<ul role="menu" id="companySubMenu" class="collapse" aria-labelledby="companySubmenuButton" data-menu-name="company">
									<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('company.aboutus') }}" aria-label="AboutPrimeassetstrade: What IsPrimeassetstrade?" role="menuitem" data-page="AboutUs" data-analytics="menuClick">About Us</a></li>
									<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('company.reviews') }}" aria-label="Is Primeassetstrade a Scam? Reviews from real traders" role="menuitem" data-page="Reviews" data-analytics="menuClick">Primeassetstrade Reviews</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="https://www.500affiliates.com/" aria-label="Affiliates" role="menuitem" target="_blank"rel="noopener noreferrer"data-analytics="menuClick">Affiliates</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="https://investors.plus500.com/" aria-label="Investor Relations" role="menuitem" target="_blank"rel="noopener noreferrer"data-analytics="menuClick">Investor Relations</a></li>
													<li role="none" class="nav-item nav-item-doc"><a class="dropdown-item" href="" aria-label="Privacy and Cookie Policy" role="menuitem" target="_blank"rel="noopener noreferrer"doc-href=""data-analytics="menuClick">Cookies and Privacy</a></li>
													<li role="none" class="nav-item pt-3"></li>
														<li role="none" class="nav-item"><span class="dropdown-header">Sponsorships</span></li>
									<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('company.bulls') }}" aria-label="Sponsor of the Chicago Bulls" role="menuitem" data-page="Bulls" data-analytics="menuClick">Chicago Bulls</a></li>
									<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('company.legiawarsaw') }}" aria-label="Main Sponsor of Legia Warsaw" role="menuitem" data-page="LegiaWarsaw" data-analytics="menuClick">Legia Warsaw</a></li>
									<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('company.youngboys') }}" aria-label="Main Sponsor of BSC Young Boys" role="menuitem" data-page="YoungBoys" data-analytics="menuClick">BSC Young Boys</a></li>
									</ul>
								</li>
															<li role="none" class="nav-item">
									<a id="learnSubMenuButton" class="nav-link submenu-toggle d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#learnSubMenu" role="menuitem" aria-expanded="false" aria-controls="learnSubMenu">
										<span>
											Learn
											<i class="icon icon-chevron-down"></i>
										</span>
					                </a>
									<ul role="menu" id="learnSubMenu" class="collapse" aria-labelledby="learnSubmenuButton" data-menu-name="learn">
									<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('learn.tradingacademy') }}" aria-label="Trading Academy - Learn Trading Online" role="menuitem" data-page="TradingAcademy" data-analytics="menuClick">Trading Academy</a></li>
									<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('learn.glossary') }}" aria-label="Financial Glossary: Trading Terms & Definitions" role="menuitem" data-page="Glossary" data-analytics="menuClick">Glossary</a></li>
													<li role="none" class="nav-item"></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('learn.forecasts') }}" aria-label="Trading Forecasts and Price Outlook" role="menuitem" data-page="Forecasts" data-analytics="menuClick">Forecasts</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('learn.demoAccount') }}" aria-label="Free Demo Trading Simulator" role="menuitem" data-page="DemoAccount" data-analytics="menuClick">Demo Trading</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('learn.insights') }}" aria-label="Trading Data From +Insights" role="menuitem" data-page="Insights" data-analytics="menuClick">+Insights</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('learn.economiccalendar') }}" aria-label="Economic Calendar | Financial Events" role="menuitem" data-page="EconomicCalendar" data-analytics="menuClick">Economic Calendar</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('learn.riskmanagement') }}" aria-label="Risk Management Tools | CFD Trading" role="menuitem" data-page="RiskManagement" data-analytics="menuClick">Risk Management</a></li>
													<li role="none" class="nav-item"><a class="dropdown-item" href="{{ route('learn.alerts') }}" aria-label="Real Time Alerts | Trading Alerts" role="menuitem" data-page="Alerts" data-analytics="menuClick">Alerts</a></li>
									</ul>
								</li>
																					<li role="none" class="d-xxl-none">
								<hr class="dropdown-divider"/>
							</li>
							<li role="none" class="nav-item nav-item-extra d-xxl-none">
								<a role="menuitem" data-analytics="menu_Support" class="nav-link nav-link-extra d-flex align-items-center nav-link-support" href="{{url('faqs')}}" aria-label="24/7 Support">
									<svg class="icon icon-support" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="36" height="36" fill="none">
									  <path fill="#E8F5FF" d="M17.532 21.265c-.854 0-1.314-.432-1.314-1.28v-.182c0-1.512.821-2.326 1.938-3.107 1.347-.947 1.987-1.462 1.987-2.51 0-1.146-.887-1.943-2.25-1.943-1.001 0-1.79.498-2.331 1.412l-.263.35c-.296.398-.64.647-1.182.647A1.106 1.106 0 0 1 13 13.506c0-.266.05-.515.131-.781.444-1.462 2.217-2.725 4.894-2.725C20.7 10 23 11.445 23 14.054c0 1.86-1.035 2.775-2.562 3.788-1.05.698-1.576 1.246-1.592 2.11v.183c-.017.631-.51 1.13-1.314 1.13ZM17.499 26c-.92 0-1.724-.731-1.724-1.662 0-.93.788-1.66 1.724-1.66.953 0 1.724.713 1.724 1.66 0 .948-.788 1.662-1.724 1.662Z"/>
									  <path fill="#E8F5FF" d="M29 18c0-6.073-4.927-11-11-11S7 11.927 7 18s4.927 11 11 11v2c-7.178 0-13-5.823-13-13 0-7.178 5.822-13 13-13 7.177 0 13 5.822 13 13 0 7.177-5.823 13-13 13v-2c6.073 0 11-4.927 11-11Z"/>
									</svg>
									<span>Support</span>
								</a>
							</li>
								<li role="none" class="nav-item nav-item-extra d-xxl-none">
									<a role="menuitem" data-analytics="menuLogin" class="nav-link nav-link-extra d-flex align-items-center nav-link-login" href="{{route('login')}}">
										<svg class="icon icon-login" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" width="36" height="36" fill="none">
										  <path fill="#E8F5FF" d="m12.747 22.12 3.682-3.681-3.682-3.682a1.286 1.286 0 0 1 1.818-1.818l4.591 4.59.089.099c.412.505.382 1.25-.089 1.72l-4.59 4.591a1.286 1.286 0 1 1-1.82-1.818Z"/>
										  <path fill="#E8F5FF" d="M24.11 7.729a2.571 2.571 0 0 1 2.571 2.57v15.972a2.572 2.572 0 0 1-2.571 2.571h-7.456a2.571 2.571 0 0 1-2.557-2.309l-.014-.262H24.11V10.3H14.083a2.571 2.571 0 0 1 2.571-2.571h7.456Z"/>
										  <path fill="#E8F5FF" d="M5 17.173h11.772v2.572h-9.2A2.571 2.571 0 0 1 5 17.173"/>
										</svg>
										<span>
											Log in
										</span>
									</a>
								</li>
		                </ul>
					</div>
	            </div>
<div class="search-widget-wrapper">
    <a id="globalSearchButton" class="d-flex align-items-center justify-content-center nav-link nav-link-extra nav-link-search dropdown-toggle dropdown-toggle-search" data-bs-toggle="dropdown" href="#globalSearchDropdown" role="button" data-bs-auto-close="outside" aria-expanded="false" aria-controls="globalSearchDropdown" aria-labelledby="searchInstruments">
        <span>
            <svg class="icon icon-search" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 3C15.4183 3 19 6.58172 19 11C19 12.8486 18.3703 14.5487 17.3174 15.9033L21.7061 20.293C22.0965 20.6836 22.0957 21.3176 21.7051 21.708C21.3144 22.0981 20.6813 22.0975 20.291 21.707L15.9033 17.3174C14.5487 18.3703 12.8486 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3ZM11 5C7.68629 5 5 7.68629 5 11C5 14.3137 7.68629 17 11 17C14.3137 17 17 14.3137 17 11C17 7.68629 14.3137 5 11 5Z" fill="#E8F5FF"/>
            </svg>
        </span>    
    </a>
    <div id="globalSearchDropdown" class="dropdown-menu dropdown-menu-end dropdown-menu-search">
        <div id="searchDropdownContent">
            <label class="visually-hidden" for="searchInstruments">Search</label>
            <div class="search-input-wrapper">
                <div class="input-group rounded-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M4.08984 10.2721C4.08984 9.3801 4.25907 8.54483 4.59752 7.76632C4.93597 6.9824 5.40544 6.29309 6.00591 5.6984C6.60639 5.1037 7.29967 4.63876 8.08575 4.30357C8.87729 3.96838 9.72342 3.80078 10.6241 3.80078C11.5248 3.80078 12.3682 3.96838 13.1543 4.30357C13.9459 4.63876 14.6419 5.1037 15.2424 5.6984C15.8428 6.29309 16.3123 6.9824 16.6507 7.76632C16.9892 8.54483 17.1584 9.3801 17.1584 10.2721C17.1584 11.0128 17.0383 11.7156 16.7981 12.3806C16.5634 13.0456 16.2359 13.6484 15.8155 14.189L19.8196 18.1789C19.907 18.2654 19.9725 18.3654 20.0161 18.4789C20.0653 18.5925 20.0898 18.7141 20.0898 18.8439C20.0898 19.0223 20.0489 19.1845 19.967 19.3304C19.8906 19.4764 19.7814 19.5899 19.6395 19.671C19.4976 19.7575 19.3338 19.8008 19.1482 19.8008C19.0172 19.8008 18.8916 19.7765 18.7715 19.7278C18.6569 19.6845 18.5504 19.617 18.4522 19.5251L14.4235 15.5271C13.8885 15.9055 13.299 16.2029 12.6548 16.4191C12.0107 16.6354 11.3338 16.7435 10.6241 16.7435C9.72342 16.7435 8.87729 16.5759 8.08575 16.2407C7.29967 15.9055 6.60639 15.4406 6.00591 14.8459C5.40544 14.2512 4.93597 13.5646 4.59752 12.7861C4.25907 12.0022 4.08984 11.1642 4.08984 10.2721ZM5.49005 10.2721C5.49005 10.975 5.62106 11.6345 5.88309 12.2509C6.15057 12.8618 6.51905 13.3997 6.98851 13.8646C7.46344 14.3296 8.00933 14.6945 8.62618 14.9594C9.24849 15.2243 9.91448 15.3568 10.6241 15.3568C11.3338 15.3568 11.997 15.2243 12.6139 14.9594C13.2362 14.6945 13.7821 14.3296 14.2516 13.8646C14.721 13.3997 15.0895 12.8618 15.357 12.2509C15.6245 11.6345 15.7582 10.975 15.7582 10.2721C15.7582 9.56932 15.6245 8.91246 15.357 8.30154C15.0895 7.68522 14.721 7.14459 14.2516 6.67965C13.7821 6.2093 13.2362 5.84437 12.6139 5.58487C11.997 5.31996 11.3338 5.1875 10.6241 5.1875C9.91448 5.1875 9.24849 5.31996 8.62618 5.58487C8.00933 5.84437 7.46344 6.2093 6.98851 6.67965C6.51905 7.14459 6.15057 7.68522 5.88309 8.30154C5.62106 8.91246 5.49005 9.56932 5.49005 10.2721Z" fill="#7C7C7C"/>
                    </svg>
                    <input id="searchInstruments" type="text" v-model="searchTerm" autocomplete="off" placeholder="Search"/>
                    <button type="button" v-on:click="clearSearchInput($event)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M12 20.5C10.8278 20.5 9.72778 20.2778 8.7 19.8333C7.67222 19.3944 6.76944 18.7861 5.99167 18.0083C5.21389 17.225 4.60278 16.3222 4.15833 15.3C3.71944 14.2722 3.5 13.1722 3.5 12C3.5 10.8278 3.71944 9.72778 4.15833 8.7C4.60278 7.67222 5.21389 6.76944 5.99167 5.99167C6.76944 5.21389 7.67222 4.60556 8.7 4.16667C9.72778 3.72222 10.8278 3.5 12 3.5C13.1722 3.5 14.2722 3.72222 15.3 4.16667C16.3278 4.60556 17.2306 5.21389 18.0083 5.99167C18.7861 6.76944 19.3944 7.67222 19.8333 8.7C20.2778 9.72778 20.5 10.8278 20.5 12C20.5 13.1722 20.2778 14.2722 19.8333 15.3C19.3944 16.3222 18.7861 17.225 18.0083 18.0083C17.2306 18.7861 16.3278 19.3944 15.3 19.8333C14.2722 20.2778 13.1722 20.5 12 20.5ZM9.2 15.5C9.4 15.5 9.56944 15.4333 9.70833 15.3L12.0083 12.9833L14.3167 15.3C14.4444 15.4333 14.6083 15.5 14.8083 15.5C15.0028 15.5 15.1667 15.4333 15.3 15.3C15.4333 15.1611 15.5 14.9972 15.5 14.8083C15.5 14.6028 15.4333 14.4389 15.3 14.3167L12.9833 12.0083L15.3083 9.69167C15.4417 9.55278 15.5083 9.38889 15.5083 9.2C15.5083 9.01111 15.4417 8.85 15.3083 8.71667C15.175 8.58333 15.0139 8.51667 14.825 8.51667C14.6417 8.51667 14.4833 8.58333 14.35 8.71667L12.0083 11.0417L9.68333 8.725C9.54444 8.59722 9.38333 8.53333 9.2 8.53333C9.01111 8.53333 8.85 8.6 8.71667 8.73333C8.58333 8.86111 8.51667 9.02222 8.51667 9.21667C8.51667 9.4 8.58333 9.56111 8.71667 9.7L11.0333 12.0083L8.71667 14.325C8.58333 14.4583 8.51667 14.6194 8.51667 14.8083C8.51667 14.9972 8.58333 15.1611 8.71667 15.3C8.85 15.4333 9.01111 15.5 9.2 15.5Z" fill="#7C7C7C"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="results" class="results">
                <div v-if="isTyping" :class="[isTyping ? 'searching' : '']" v-cloak>
                    <div class="search-animation-wrapper">
                        <svg class="icon icon-loading" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <g clip-path="url(#paint0_angular_9698_43602_clip_path)" data-figma-skip-parse="true"><g transform="matrix(0 0.012 -0.012 0 12.5 12)"><foreignObject x="-1083.33" y="-1083.33" width="2166.67" height="2166.67"><div xmlns="http://www.w3.org/1999/xhtml" style="background:conic-gradient(from 90deg,rgba(196, 196, 196, 0) 0deg,rgba(46, 134, 254, 1) 360deg);height:100%;width:100%;opacity:1"></div></foreignObject></g></g><path d="M24.5 12C24.5 18.6274 19.1274 24 12.5 24C5.87258 24 0.5 18.6274 0.5 12C0.5 5.37258 5.87258 0 12.5 0C19.1274 0 24.5 5.37258 24.5 12ZM2.9 12C2.9 17.3019 7.19807 21.6 12.5 21.6C17.8019 21.6 22.1 17.3019 22.1 12C22.1 6.69807 17.8019 2.4 12.5 2.4C7.19807 2.4 2.9 6.69807 2.9 12Z" data-figma-gradient-fill="{&quot;type&quot;:&quot;GRADIENT_ANGULAR&quot;,&quot;stops&quot;:[{&quot;color&quot;:{&quot;r&quot;:0.76862746477127075,&quot;g&quot;:0.76862746477127075,&quot;b&quot;:0.76862746477127075,&quot;a&quot;:0.0},&quot;position&quot;:0.0},{&quot;color&quot;:{&quot;r&quot;:0.18039216101169586,&quot;g&quot;:0.52549022436141968,&quot;b&quot;:0.99607843160629272,&quot;a&quot;:1.0},&quot;position&quot;:1.0}],&quot;stopsVar&quot;:[{&quot;color&quot;:{&quot;r&quot;:0.76862746477127075,&quot;g&quot;:0.76862746477127075,&quot;b&quot;:0.76862746477127075,&quot;a&quot;:0.0},&quot;position&quot;:0.0},{&quot;color&quot;:{&quot;r&quot;:0.18039216101169586,&quot;g&quot;:0.52549022436141968,&quot;b&quot;:0.99607843160629272,&quot;a&quot;:1.0},&quot;position&quot;:1.0}],&quot;transform&quot;:{&quot;m00&quot;:1.4695762231022014e-15,&quot;m01&quot;:-24.0,&quot;m02&quot;:24.50,&quot;m10&quot;:24.0,&quot;m11&quot;:1.4695762231022014e-15,&quot;m12&quot;:-1.4695762231022014e-15},&quot;opacity&quot;:1.0,&quot;blendMode&quot;:&quot;NORMAL&quot;,&quot;visible&quot;:true}"/>
                            <defs>
                                <clipPath id="paint0_angular_9698_43602_clip_path"><path d="M24.5 12C24.5 18.6274 19.1274 24 12.5 24C5.87258 24 0.5 18.6274 0.5 12C0.5 5.37258 5.87258 0 12.5 0C19.1274 0 24.5 5.37258 24.5 12ZM2.9 12C2.9 17.3019 7.19807 21.6 12.5 21.6C17.8019 21.6 22.1 17.3019 22.1 12C22.1 6.69807 17.8019 2.4 12.5 2.4C7.19807 2.4 2.9 6.69807 2.9 12Z"/></clipPath>
                            </defs>
                        </svg>
                        <span>Searching</span>
                    </div>
                </div>
                <div v-else>
                    <div v-if="results.length" :class="[results.length ? 'results-list-wrapper' : '']" v-cloak>
                        <ul class="results-list" v-for="category in categories">
                            <li class="results-list-category">
                                <span class="d-flex w-100" v-html="toCategoryName(category)"></span>
                            </li>
                            <li class="results-list-item" v-for="result in getCategoryResults(category)">
                                <a class="result-link" :href="result.url" v-on:click="onSearchResultClick(result.title, $event)">
                                    <figure v-if="result.category === 9" class="skeleton-box icon-with-border" v-instrument-icon :data-instrument="result.instrumentSymbol">
                                        <img v-if="result.instrumentLogoImage" height="16" width="16" loading="lazy" :src="result.instrumentLogoImage" :alt="result.name" aria-hidden="true"/>
                                    </figure>
                                    <span class="result-title" v-html="result.title"></span>
                                    <span class="icon icon-chevron"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div v-else-if="isDisplayPlaceholder" :class="[isDisplayPlaceholder ? 'results-list-wrapper' : '']" v-cloak>
                        <ul class="results-list">
                            <li class="results-list-item" v-for="r in placeholderResults">
                                <a class="result-link" :href="r.url">
                                    <figure class="skeleton-box icon-with-border" v-instrument-icon :data-instrument="r.symbol">
                                        <img v-if="r.icon" height="16" width="16" loading="lazy" :src="r.icon" :alt="r.name" aria-hidden="true"/>
                                    </figure>
                                    <span class="result-title" v-html="r.name"></span>
                                    <span class="icon icon-chevron"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div v-else :class="[!results.length && !isDisplayPlaceholder ? 'no-results' : '']" v-cloak>
                        <div class="no-results-wrapper">
                            <strong>No results found</strong>
                            <span>Try adjusting your search or use different words</span>
                        </div>
                    </div>
                </div>
                <div class="placeholder-container placeholder-shimmer mb-3" aria-hidden="true">
                    <div class="placeholder col-10 my-3">&nbsp;</div>
                    <div class="placeholder col-8 my-3">&nbsp;</div>
                    <div class="placeholder col-10 my-3">&nbsp;</div>
                    <div class="placeholder col-8 my-3">&nbsp;</div>
                    <div class="placeholder col-10 my-3">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>
				<a role="button" data-analytics="menu_support" class="d-flex align-items-center justify-content-center nav-link nav-link-extra nav-link-support" href="{{url('faqs')}}" aria-label="24/7 Support" title="24/7 Support">
					<span>
						<svg class="icon icon-support" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						  <path d="M21.5 12C21.5 6.75516 17.2448 2.5 12 2.5C6.75516 2.5 2.5 6.75516 2.5 12C2.5 17.2448 6.75516 21.5 12 21.5V23C5.92673 23 1 18.0733 1 12C1 5.92673 5.92673 1 12 1C18.0733 1 23 5.92673 23 12C23 18.0733 18.0733 23 12 23V21.5C17.2448 21.5 21.5 17.2448 21.5 12Z" fill="#E8F5FF"/>
						  <path d="M11.8687 14.5732C11.2754 14.5732 10.9312 14.1924 10.9312 13.6284V13.2915C10.9312 12.1489 11.6636 11.3872 12.7036 10.6914C13.6777 10.0469 14.2124 9.55615 14.2124 8.62598C14.2124 7.57129 13.2969 6.89014 12.1177 6.89014C11.1362 6.89014 10.3818 7.32227 10.0449 8.4502C9.89844 8.85303 9.56885 9.0874 9.13672 9.0874C8.5874 9.0874 8.26514 8.73584 8.26514 8.22314C8.26514 7.92285 8.33838 7.59326 8.49219 7.271C9.09277 5.99658 10.5063 5.24951 12.1982 5.24951C14.4761 5.24951 16.1973 6.49463 16.1973 8.61133C16.1973 9.93701 15.4795 10.8525 14.2563 11.6509C13.1284 12.3906 12.8135 12.7422 12.7622 13.5552C12.7549 13.6211 12.7549 13.6943 12.7476 13.7529C12.7036 14.251 12.4033 14.5732 11.8687 14.5732ZM11.8833 18.4624C11.2168 18.4624 10.6821 17.9351 10.6821 17.2832C10.6821 16.6313 11.2168 16.1113 11.8833 16.1113C12.5425 16.1113 13.0845 16.6313 13.0845 17.2832C13.0845 17.9351 12.5425 18.4624 11.8833 18.4624Z" fill="#E8F5FF"/>
						</svg>
					</span>
				</a>
									<div id="headerCtaWrapper" class="header-cta-wrapper">

<a data-analytics="CTA_sticky_cta" data-start-trading data-cta-name="start-trading-real-cfd" class="btn  bs-gradient btn-primary link-real start-trading" 
   href="{{ route('register') }}">
        <span class="d-xxl-none">Trade</span>
        <span class="d-none d-xxl-block">Start trading</span>
</a>
					</div>
				<button type="button" class="navbar-toggler d-xxl-none" data-bs-toggle="offcanvas" data-bs-target="#offCanvasNavbar" aria-controls="offCanvasNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
			</div>
        </div>
	</nav>
</header>

