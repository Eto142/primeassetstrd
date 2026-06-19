<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\User\WithdrawalController;
use Illuminate\Support\Facades\Route;








Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/faqs', function () {
    return view('home.faqs');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/trade', function () {
    return view('home.trade');
});

// Market Pages Routes
Route::get('/trading/cryptocurrencies', function () {
    return view('home.markets.crypto');
})->name('markets.crypto');

Route::get('/trading/indices', function () {
    return view('home.markets.indices');
})->name('markets.indices');

Route::get('/trading/forex', function () {
    return view('home.markets.forex');
})->name('markets.forex');

Route::get('/trading/commodities', function () {
    return view('home.markets.commodities');
})->name('markets.commodities');

Route::get('/trading/stocks', function () {
    return view('home.markets.shares');
})->name('markets.shares');

Route::get('/trading/options', function () {
    return view('home.markets.options');
})->name('markets.options');

Route::get('/trading/etfs', function () {
    return view('home.markets.etfs');
})->name('markets.etfs');

Route::get('/instruments', function () {
    return view('home.markets.all-markets');
})->name('markets.all');

// Trading Pages Routes
Route::get('/help/feescharges', function () {
    return view('home.trading.feescharges');
})->name('trading.feescharges');

Route::get('/trading/esg', function () {
    return view('home.trading.esg');
})->name('trading.esg');

// Company Pages Routes
Route::get('/aboutus', function () {
    return view('home.company.aboutus');
})->name('company.aboutus');

Route::get('/aboutus/reviews', function () {
    return view('home.company.reviews');
})->name('company.reviews');

Route::get('/promotions/bulls', function () {
    return view('home.company.bulls');
})->name('company.bulls');

Route::get('/promotions/legiawarsaw', function () {
    return view('home.company.legiawarsaw');
})->name('company.legiawarsaw');

Route::get('/promotions/youngboys', function () {
    return view('home.company.youngboys');
})->name('company.youngboys');

// Learn Pages Routes
Route::get('/tradingacademy', function () {
    return view('home.learn.tradingacademy');
})->name('learn.tradingacademy');

Route::get('/glossary', function () {
    return view('home.learn.glossary');
})->name('learn.glossary');

Route::get('/forecasts', function () {
    return view('home.learn.forecasts');
})->name('learn.forecasts');

Route::get('/demo-account', function () {
    return view('home.learn.demo-account');
})->name('learn.demoAccount');

Route::get('/insights', function () {
    return view('home.learn.insights');
})->name('learn.insights');

Route::get('/economiccalendar', function () {
    return view('home.learn.economiccalendar');
})->name('learn.economiccalendar');

Route::get('/tradingacademy/riskmanagement', function () {
    return view('home.learn.riskmanagement');
})->name('learn.riskmanagement');

Route::get('/help/alerts', function () {
    return view('home.learn.alerts');
})->name('learn.alerts');



// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('show.register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');



// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Logout Route
Route::post('/logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('user.logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/step2', [AuthController::class, 'showpersonalDetailsForm'])->name('step2');
    Route::post('/step2', [RegisterController::class, 'step2'])->name('user.step2');
    Route::get('/step3', [AuthController::class, 'showVerifyForm'])->name('user.step3.form');
    Route::post('/step3', [AuthController::class, 'step3'])->name('user.step3');
    Route::post('/resend-otp', [AuthController::class, 'resendOtp'])->name('user.resend.otp');
    Route::get('/update-details', [AuthController::class, 'showpersonalDetailsForm'])->name('update.details');
    Route::get('/verify', [AuthController::class, 'showVerifyForm'])->name('verify.form');
    Route::post('/verify', [AuthController::class, 'verifyCode'])->name('verify.code');
});





Route::get('forgot-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot.password.form');
Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forgot.password.submit');

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.form');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.submit');




Route::prefix('user')
    ->as('user.')
    ->middleware(['auth']) // add your UserMiddleware alias
    ->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('home'); // user.home
    Route::get('/forex', [DashboardController::class, 'UserForex'])->name('forex'); // user.forex
    Route::get('/binary', [DashboardController::class, 'Binary'])->name('binary'); // user.forex
    Route::get('/stocks', [DashboardController::class, 'Stocks'])->name('stocks'); // user.forex
    Route::get('/crypto', [DashboardController::class, 'Crypto'])->name('crypto'); // user.forex
     Route::get('/crypto-buy', [DashboardController::class, 'CryptoBuy'])->name('crypto.buy'); // user.forex
    Route::get('/copy', [DashboardController::class, 'Copy'])->name('copy'); // user.forex
    Route::get('/buy-plan', [DashboardController::class, 'BuyPlan'])->name('buy.plan'); // user.forex
    Route::get('/wallet', [DashboardController::class, 'Wallet'])->name('wallet'); // user.forex
     Route::get('/profile', [DashboardController::class, 'Profile'])->name('profile'); // user.forex
     Route::get('/accounthistory', [DashboardController::class, 'AccountHistory'])->name('accounthistory'); // user.forex
      Route::get('/referuser', [DashboardController::class, 'Referuser'])->name('refer'); // user.forex
     Route::get('/notifications', [DashboardController::class, 'UserNotification'])->name('notifications'); // user.forex
      Route::post('/notifications/mark-all-read', [DashboardController::class, 'markAllRead'])->name('notifications.markAllRead');



Route::get('/verify-account', [DashboardController::class, 'verifyAccount'])->name('verify.account');
Route::get('/upload-kyc', [DashboardController::class, 'uploadKyc']);
Route::post('/upload-kyc', [DashboardController::class, 'uploadKyc'])->name('upload.kyc');

Route::post('/profile-update',  [DashboardController::class, 'profileUpdate'])->name('profile.update');

Route::get('/photo', [DashboardController::class, 'Photo'])->name('photo');
Route::post('/upload-picture', [DashboardController::class, 'uploadProfile'])->name('upload.picture');

     



     
     Route::get('/logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout.perform');
    Route::post('/change-password', 'App\Http\Controllers\UserController@updatePassword')->name('update-password');
    Route::post('/confirm-password', 'App\Http\Controllers\UserController@ConfirmPassword')->name('confirm-password');


// ✅ Deposit dashboard page (fund wallet)
Route::get('/investments', [DepositController::class, 'investmentHistory'])->name('investment');

// ✅ Deposit dashboard page (fund wallet)
Route::get('/fund-wallet', [DepositController::class, 'index'])->name('fund.wallet');

// ✅ Fetch deposit data (AJAX or POST request)
Route::post('/get-deposit', [DepositController::class, 'getDeposit'])->name('deposit.get');


// ✅ Make a new deposit
Route::post('/make-deposit', [DepositController::class, 'makeDeposit'])->name('deposit.make');

// ✅ Buy Plan
Route::post('/buy-plan', [DepositController::class, 'buyPlans'])->name('buy.plan');







Route::post('/get-withdrawal', [WithdrawalController::class, 'getUserWithdrawal'])->name('get.withdrawal');

// ✅ User withdrawal main page
Route::get('/withdrawal', [WithdrawalController::class, 'index'])->name('withdrawal');


// ✅ Withdrawal funds page
Route::get('/withdraw-funds', [WithdrawalController::class, 'withdrawFunds'])->name('withdraw.funds');

// ✅ Normal withdrawal request
Route::post('/make-withdrawal', [WithdrawalController::class, 'makeWithdrawal'])->name('make.withdrawal');

// ✅ Bitcoin or crypto withdrawal request
Route::post('/make-bwithdrawal', [WithdrawalController::class, 'makeBWithdrawal'])->name('withdraw.makeb');

});

