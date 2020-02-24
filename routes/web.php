<?php

/* Front-End-Routes */

Route::get('/', 'FrontendPagesController@index')->name('index');

/*Payment*/

Route::post('/api/payment/blockchain/check', 'BlockChainController@check')->name('check');
Route::post('/api/payment/blockchain/makepayment', 'BlockChainController@makepayment')->name('makepayment');

/*Payment*/

/* Landing */

Route::get('/contacts', 'FrontendPagesController@contacts')->name('contacts');
Route::get('/login', function () {
    return view("backend.dashboard.dashboard");
});

/* Landing */

Route::group(['middleware' => 'App\Http\Middleware\Authenticate'], function () {

    Route::get('/contacts', 'FrontendPagesController@contacts')->name('contacts');
    Route::get('/affiliate', 'FrontendPagesController@affiliate')->name('affiliate');
    Route::get('/privacy', 'FrontendPagesController@privacy')->name('privacy');
    Route::get('/termsofservice', 'FrontendPagesController@termsofservice')->name('termsofservice');
    Route::get('/licenses', 'FrontendPagesController@licenses')->name('licenses');
    Route::get('/feedback', 'FrontendPagesController@feedback')->name('feedback');
    Route::get('/team', 'FrontendPagesController@team')->name('team');
    Route::get('/advisors', 'FrontendPagesController@advisors')->name('advisors');
    Route::get('/investors', 'FrontendPagesController@investors')->name('investors');
    Route::get('/careers', 'FrontendPagesController@careers')->name('careers');
    Route::get('/fees', 'FrontendPagesController@fees')->name('fees');
    Route::get('/news', 'FrontendPagesController@news')->name('news');
    Route::get('/faq', 'FrontendPagesController@faq')->name('faq');
    Route::get('/resource-center', 'FrontendPagesController@resource-center')->name('resource-center');
    Route::get('/refer-a-friend', 'FrontendPagesController@refer-a-friend')->name('refer-a-friend');
    Route::get('/prohibited-uses', 'FrontendPagesController@prohibited-uses')->name('prohibited-uses');
    Route::get('/products', 'FrontendPagesController@products')->name('products');
    Route::get('/interest-account', 'FrontendPagesController@interest-account')->name('interest-account');
    Route::get('/crypto-loans', 'FrontendPagesController@crypto-loans')->name('crypto-loans');
    Route::get('/trading', 'FrontendPagesController@trading')->name('trading');
    Route::get('/institutions', 'FrontendPagesController@institutions')->name('institutions');
    Route::get('/our-rates', 'FrontendPagesController@our-rates')->name('our-rates');
    Route::get('/blog', 'FrontendPagesController@blog')->name('blog');
    Route::get('/refer-a-friend', 'FrontendPagesController@refer-a-friend')->name('refer-a-friend');
    Route::get('/help-center', 'FrontendPagesController@help-center')->name('help-center');
    Route::get('/crypto-interest-account', 'FrontendPagesController@crypto-interest-account')->name('crypto-interest-account');
    Route::get('/earn-crypto', 'FrontendPagesController@earn-crypto')->name('earn-crypto');
    Route::get('/how-to-get-a-bitcoin-loan', 'FrontendPagesController@how-to-get-a-bitcoin-loan')->name('how-to-get-a-bitcoin-loan');
    Route::get('/earn-bitcoin-interest', 'FrontendPagesController@earn-bitcoin-interest')->name('earn-bitcoin-interest');
    Route::get('/home-loans', 'FrontendPagesController@home-loans')->name('home-loans');
    Route::get('/refinance-debt', 'FrontendPagesController@refinance-debt')->name('refinance-debt');
    Route::get('/fund-crypto-mining', 'FrontendPagesController@fund-crypto-mining')->name('fund-crypto-mining');
    Route::get('/auto-loan', 'FrontendPagesController@auto-loan')->name('auto-loan');

});
Route::view('apps/invoice', 'backend.dashboard.apps.invoice')->name('invoice');
Route::view('apps/inbox', 'backend.dashboard.apps.inbox')->name('inbox');
Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::get('/dashboard/interest/index', 'DashboardController@interest')->name('interest');
Route::get('/dashboard/filesmanager/index', 'DashboardController@filesmanager')->name('files-manager');
Route::get('/dashboard/cryptoloans/index', 'DashboardController@cryptoloans')->name('cryptoloans');
Route::get('/dashboard/chatsupport/index', 'DashboardController@chat')->name('chat');
Route::get('/dashboard/settings/index', 'DashboardController@settings')->name('settings');
Route::get('/pagenotfound', ['as' => 'notfound', 'uses' => 'HomeController@notfound']);
Route::get('/admin/dashboardv1', function () {
    return view('backend.dashboard.dashboard.dashboardv1');
});

Auth::routes();
Auth::guard();
// Auth


Route::post('/sender', function () {

    $text = request()->text;
    echo $this->text = $text;
    event(new MyEvent($text));

});


Route::get('/signin', 'RegisterPagesController@signin')->name('signin');
Route::get('/signup', 'RegisterPagesController@signup')->name('signup');
Route::get('/reset', 'RegisterPagesController@reset')->name('reset');
Route::post('/reset', 'RegisterPagesController@reset')->name('reset');

/* Chat Message */

Route::get('/dashboard/chat-support/index', 'ChatsController@index');
Route::get('/messages/index', 'ChatsController@index');
Route::get('/messages/sender', 'ChatsController@sender');
Route::post('/messages/senderpost', 'ChatsController@senderpost');
Route::get('/messages', 'ChatsController@fetchMessages');
Route::post('/messages', 'ChatsController@sendMessage');

/* Chat Message */

Route::view('extrakits/dropDown', 'extraKits.dropDown')->name('dropDown');
Route::view('extrakits/imageCroper', 'extraKits.imageCroper')->name('imageCroper');
Route::view('extrakits/loader', 'extraKits.loader')->name('loader');
Route::view('extrakits/laddaButton', 'extraKits.laddaButton')->name('laddaButton');
Route::view('extrakits/toastr', 'extraKits.toastr')->name('toastr');
Route::view('extrakits/sweetAlert', 'extraKits.sweetAlert')->name('sweetAlert');
Route::view('extrakits/tour', 'extraKits.tour')->name('tour');
Route::view('extrakits/upload', 'extraKits.upload')->name('upload');

// Apps

Route::view('apps/invoice', 'apps.invoice')->name('invoice');
Route::view('apps/inbox', 'apps.inbox')->name('inbox');
Route::view('apps/chat', 'apps.chat')->name('chat');
Route::view('apps/calendar', 'apps.calendar')->name('calendar');
Route::view('apps/task-manager-list', 'apps.task-manager-list')->name('task-manager-list');
Route::view('apps/task-manager', 'apps.task-manager')->name('task-manager');
Route::view('apps/toDo', 'apps.toDo')->name('toDo');
Route::view('apps/ecommerce/products', 'apps.ecommerce.products')->name('ecommerce-products');
Route::view('apps/ecommerce/product-details', 'apps.ecommerce.product-details')->name('ecommerce-product-details');
Route::view('apps/ecommerce/cart', 'apps.ecommerce.cart')->name('ecommerce-cart');
Route::view('apps/ecommerce/checkout', 'apps.ecommerce.checkout')->name('ecommerce-checkout');
Route::view('apps/contacts/lists', 'apps.contacts.lists')->name('contacts-lists');
Route::view('apps/contacts/contact-details', 'apps.contacts.contact-details')->name('contact-details');
Route::view('apps/contacts/grid', 'apps.contacts.grid')->name('contacts-grid');
Route::view('apps/contacts/contact-list-table', 'apps.contacts.contact-list-table')->name('contact-list-table');

// Form

Route::view('forms/basic-action-bar', 'forms.basic-action-bar')->name('basic-action-bar');
Route::view('forms/multi-column-forms', 'forms.multi-column-forms')->name('multi-column-forms');
Route::view('forms/smartWizard', 'forms.smartWizard')->name('smartWizard');
Route::view('forms/tagInput', 'forms.tagInput')->name('tagInput');
Route::view('forms/forms-basic', 'forms.forms-basic')->name('forms-basic');
Route::view('forms/form-layouts', 'forms.form-layouts')->name('form-layouts');
Route::view('forms/form-input-group', 'forms.form-input-group')->name('form-input-group');
Route::view('forms/form-validation', 'forms.form-validation')->name('form-validation');
Route::view('forms/form-editor', 'forms.form-editor')->name('form-editor');

// Charts
Route::view('charts/echarts', 'charts.echarts')->name('echarts');
Route::view('charts/chartjs', 'charts.chartjs')->name('chartjs');
Route::view('charts/apexLineCharts', 'charts.apexLineCharts')->name('apexLineCharts');
Route::view('charts/apexAreaCharts', 'charts.apexAreaCharts')->name('apexAreaCharts');
Route::view('charts/apexBarCharts', 'charts.apexBarCharts')->name('apexBarCharts');
Route::view('charts/apexColumnCharts', 'charts.apexColumnCharts')->name('apexColumnCharts');
Route::view('charts/apexRadialBarCharts', 'charts.apexRadialBarCharts')->name('apexRadialBarCharts');
Route::view('charts/apexRadarCharts', 'charts.apexRadarCharts')->name('apexRadarCharts');
Route::view('charts/apexPieDonutCharts', 'charts.apexPieDonutCharts')->name('apexPieDonutCharts');
Route::view('charts/apexSparklineCharts', 'charts.apexSparklineCharts')->name('apexSparklineCharts');
Route::view('charts/apexScatterCharts', 'charts.apexScatterCharts')->name('apexScatterCharts');
Route::view('charts/apexBubbleCharts', 'charts.apexBubbleCharts')->name('apexBubbleCharts');
Route::view('charts/apexCandleStickCharts', 'charts.apexCandleStickCharts')->name('apexCandleStickCharts');
Route::view('charts/apexMixCharts', 'charts.apexMixCharts')->name('apexMixCharts');

// Datatables

Route::view('datatables/basic-tables', 'datatables.basic-tables')->name('basic-tables');

// Sessions

Route::view('sessions/forgot', 'sessions.forgot')->name('forgot');

// Widgets

Route::view('widgets/card', 'widgets.card')->name('widget-card');
Route::view('widgets/statistics', 'widgets.statistics')->name('widget-statistics');
Route::view('widgets/list', 'widgets.list')->name('widget-list');
Route::view('widgets/app', 'widgets.app')->name('widget-app');
Route::view('widgets/weather-app', 'widgets.weather-app')->name('widget-weather-app');

// Others

Route::view('others/notFound', 'others.notFound')->name('notFound');
Route::view('others/user-profile', 'others.user-profile')->name('user-profile');
Route::view('others/starter', 'starter')->name('starter');
Route::view('others/faq', 'others.faq')->name('faq');
Route::view('others/pricing-table', 'others.pricing-table')->name('pricing-table');
Route::view('others/search-result', 'others.search-result')->name('search-result');

// Extra UIKits

Route::get('large-compact-sidebar/dashboard/dashboard1', function () {
    // set layout sesion(key)
    session(['layout' => 'compact']);
    return view('dashboard.dashboardv1');
})->name('compact');
Route::get('large-sidebar/dashboard/dashboard1', function () {
    // set layout sesion(key)
    session(['layout' => 'normal']);
    return view('dashboard.dashboardv1');
})->name('normal');
Route::get('horizontal-bar/dashboard/dashboard1', function () {
    // set layout sesion(key)
    session(['layout' => 'horizontal']);
    return view('dashboard.dashboardv1');
})->name('horizontal');
Route::get('vertical/dashboard/dashboard1', function () {
    // set layout sesion(key)
    session(['layout' => 'vertical']);
    return view('dashboard.dashboardv1');
})->name('vertical');


// Route group for 3 types of users //
// User ID Group Filters like tags //

// Route::get('chat support'); //1
// Route::get('chat support'); //2
// Route::get('chat support'); //3

// Route Costume Data //
// Insert Costume Data To Route like JSON Data //
// Route Costume Data //

// New User //
Route::get('horizontal-bar/dashboard/dashboard1');
// User Edit //
