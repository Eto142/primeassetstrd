<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\OtpMail;

class RegisterController extends Controller
{
    /**
     * Show registration form
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle user registration
     */
    public function register(Request $request)
    {
        try {
            // Validate registration input
            $request->validate([
                'name'      => 'required|string|max:255',
                'lname'     => 'required|string|max:255',
                'currency'  => 'required|string|max:255',
                'email'     => 'required|email|unique:users,email',
                'password'  => 'required|string|min:8|confirmed',
            ]);

            // Create new user
            $user = User::create([
                'name'      => $request->input('name'),
                'lname'     => $request->input('lname'),
                'currency'  => $request->input('currency'),
                'email'     => $request->input('email'),
                'password'  => Hash::make($request->input('password')),
            ]);

            // Log the user in immediately
            Auth::login($user);

            // Redirect to step2 for additional details
            return redirect()->route('step2')
                ->with('success', 'Registration successful! Please update your details.');

        } catch (\Throwable $e) {
            Log::error('Registration error:', [
                'message' => $e->getMessage(),
                'file'    => $e->getFile(),
                'line'    => $e->getLine(),
            ]);

            return back()->with('error', 'Registration failed. Please try again.');
        }
    }

    /**
     * Show step2 form (update user details)
     */
    public function showStep2Form()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }
        return view('auth.step2', compact('user'));
    }

    /**
     * Handle step2 details submission
     */
    // public function step2(Request $request)
    // {
    //     try {
    //         $user = Auth::user();

    //         // Protect against null user
    //         if (!$user) {
    //             return redirect()->route('login')->with('error', 'Session expired. Please log in.');
    //         }

    //         // Validate step2 input
    //         $request->validate([
    //             'country' => 'required|string|max:255',
    //             'state'   => 'required|string|max:255',
    //             'pcode'   => 'required|string|max:20',
    //             'address' => 'required|string|max:255',
    //             'phone'   => 'required|string|max:20',
    //         ]);

    //         // Update user details
    //         $user->update([
    //             'country'      => $request->input('country'),
    //             'state'        => $request->input('state'),
    //             'pcode'        => $request->input('pcode'),
    //             'address'      => $request->input('address'),
    //             'phone'        => $request->input('phone'),
    //             'is_activated' => 1,
    //         ]);

    //         // Send welcome email
    //         Mail::to($user->email)->send(new WelcomeMail($user));

    //         return redirect()->route('user.home')
    //             ->with('success', 'Your details have been successfully updated. Welcome aboard!');

    //     } catch (\Throwable $e) {
    //         Log::error('Update details error:', [
    //             'message' => $e->getMessage(),
    //             'file'    => $e->getFile(),
    //             'line'    => $e->getLine(),
    //         ]);

    //         return back()->with('error', 'Failed to update details. Please try again.');
    //     }
    // }




public function step2(Request $request)
{
    try {
        $user = Auth::user();

        // Protect against null user
        if (!$user) {
            return redirect()->route('login')->with('error', 'Session expired. Please log in.');
        }

        // Validate step2 input
        $request->validate([
            'country' => 'required|string|max:255',
            'state'   => 'required|string|max:255',
            'pcode'   => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
        ]);

        // Generate 4-digit OTP
        $otp = random_int(1000, 9999);

        // Update user details and OTP
        $user->update([
            'country'      => $request->input('country'),
            'state'        => $request->input('state'),
            'pcode'        => $request->input('pcode'),
            'address'      => $request->input('address'),
            'phone'        => $request->input('phone'),
            'is_activated' => 1,
            'otp_code'     => $otp,
        ]);

        // Send OTP email — non-blocking so a mail config issue doesn't kill the flow
        try {
            Mail::to($user->email)->send(new OtpMail($user, $otp));
        } catch (\Throwable $mailException) {
            Log::error('OTP mail failed:', [
                'message' => $mailException->getMessage(),
                'file'    => $mailException->getFile(),
                'line'    => $mailException->getLine(),
            ]);
            // Continue — user can resend OTP from the verify page
        }

        return redirect()->route('user.step3.form')
            ->with('success', 'Your details have been updated. An OTP has been sent to your email.');

    } catch (\Throwable $e) {
        Log::error('Update details error:', [
            'message' => $e->getMessage(),
            'file'    => $e->getFile(),
            'line'    => $e->getLine(),
        ]);

        return back()->with('error', 'Error: ' . $e->getMessage());
    }
}




// public function step3(Request $request)
// {
//     try {
//         $user = Auth::user();

//         if (!$user) {
//             return redirect()->route('login')->with('error', 'Session expired. Please log in.');
//         }

//         $request->validate([
//             'otp' => 'required|digits:4',
//         ]);

//         $inputOtp = $request->input('otp');

//         // Check OTP
//         if ($user->otp_code !== $inputOtp) {
//             return back()->with('error', 'Invalid OTP. Please try again.');
//         }

//         // Mark user as fully verified
//         $user->update([
//             'otp_verified' => 1,
//             'otp_code'     => null, // clear OTP after verification
//         ]);

//         return redirect()->route('user.home')
//             ->with('success', 'OTP verified successfully! Your account is now fully activated.');

//     } catch (\Throwable $e) {
//         Log::error('OTP verification error:', [
//             'message' => $e->getMessage(),
//             'file'    => $e->getFile(),
//             'line'    => $e->getLine(),
//         ]);

//         return back()->with('error', 'Failed to verify OTP. Please try again.');
//     }
// }




}
