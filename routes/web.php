<?php


Auth::routes();
Auth::guard();

/* Front-End-Routes */
Route::group(['middleware' => 'App\Http\Middleware\Authenticate'], function () {

    Route::get('/', 'FrontendPagesController@index')->name('index');
    Route::post('/api/payment/blockchain/check', 'BlockChainController@check')->name('check');
    Route::post('/api/payment/blockchain/makepayment', 'BlockChainController@makepayment')->name('makepayment');
    Route::get('/contacts', 'FrontendPagesController@contacts')->name('contacts');
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

    Route::get('/apps/invoice', 'DashboardController@invoice')->name('invoice');
    Route::get('/apps/inbox', 'DashboardController@inbox')->name('inbox');
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
    Route::get('/dashboard/interest/index', 'DashboardController@interest')->name('interest');
    Route::get('/dashboard/filesmanager/index', 'DashboardController@filesmanager')->name('files-manager');
    Route::get('/dashboard/cryptoloans/index', 'DashboardController@cryptoloans')->name('cryptoloans');
    Route::get('/dashboard/chatsupport/index', 'DashboardController@chat')->name('chat');
    Route::get('/dashboard/settings/index', 'DashboardController@settings')->name('settings');
    Route::get('/pagenotfound', ['as' => 'notfound', 'uses' => 'HomeController@notfound']);
    Route::get('/admin/dashboardv1', 'DashboardController@dashboardv1')->name('dashboardv1');

    Route::post('/sender', 'ChatsController@sender')->name('sender');
    Route::get('/signin', 'RegisterPagesController@signin')->name('signin');
    Route::get('/signup', 'RegisterPagesController@signup')->name('signup');
    Route::get('/reset', 'RegisterPagesController@reset')->name('reset');
    Route::post('/reset', 'RegisterPagesController@reset')->name('reset');

    Route::get('/dashboard/chat-support/index', 'ChatsController@index');
    Route::get('/messages/index', 'ChatsController@index');
    Route::get('/messages/sender', 'ChatsController@sender');
    Route::post('/messages/senderpost', 'ChatsController@senderpost');
    Route::get('/messages', 'ChatsController@fetchMessages');
    Route::post('/messages', 'ChatsController@sendMessage');
    Route::post('/chatkit', 'ChatsController@sendMessage');

    Route::get('/apps/invoice', 'DashboardController@invoice')->name('invoice');
    Route::get('/apps/inbox', 'DashboardController@inbox')->name('inbox');
    Route::get('/apps/chat', 'DashboardController@chat')->name('chat');
    Route::get('/apps/calendar', 'DashboardController@calendar')->name('calendar');
    Route::get('/apps/task-manager-list', 'DashboardController@task-manager-list')->name('task-manager-list');
    Route::get('/apps/task-manager', 'DashboardController@task-manager')->name('task-manager');
    Route::get('/apps/toDo', 'DashboardController@toDo')->name('toDo');
    Route::get('/apps/ecommerce/products', 'DashboardController@products')->name('ecommerce-products');
    Route::get('/apps/ecommerce/product-details', 'DashboardController@product-details')->name('ecommerce-product-details');
    Route::get('/apps/ecommerce/cart', 'DashboardController@cart')->name('ecommerce-cart');
    Route::get('/apps/ecommerce/checkout', 'DashboardController@checkout')->name('ecommerce-checkout');
    Route::get('/apps/contacts/lists', 'DashboardController@lists')->name('contacts-lists');
    Route::get('/apps/contacts/contact-details', 'DashboardController@contact-details')->name('contact-details');
    Route::get('/apps/contacts/grid', 'DashboardController@grid')->name('contacts-grid');
    Route::get('/apps/contacts/contact-list-table', 'DashboardController@contact-list-table')->name('contact-list-table');

    Route::get('/forms/basic-action-bar', 'DashboardController@basic-action-bar')->name('basic-action-bar');
    Route::get('/forms/multi-column-forms', 'DashboardController@multi-column-forms')->name('multi-column-forms');
    Route::get('/forms/smartWizard', 'DashboardController@smartWizard')->name('smartWizard');
    Route::get('/forms/tagInput', 'DashboardController@tagInput')->name('tagInput');
    Route::get('/forms/forms-basic', 'DashboardController@forms-basic')->name('forms-basic');
    Route::get('/forms/form-layouts', 'DashboardController@form-layouts')->name('form-layouts');
    Route::get('/forms/form-input-group', 'DashboardController@form-input-group')->name('form-input-group');
    Route::get('/forms/form-validation', 'DashboardController@form-validation')->name('form-validation');
    Route::get('/forms/form-editor', 'DashboardController@form-editor')->name('form-editor');
    Route::get('/charts/echarts', 'DashboardController@echarts')->name('echarts');
    Route::get('/charts/chartjs', 'DashboardController@chartjs')->name('chartjs');
    Route::get('/charts/apexLineCharts', 'DashboardController@apexLineCharts')->name('apexLineCharts');
    Route::get('/charts/apexAreaCharts', 'DashboardController@apexAreaCharts')->name('apexAreaCharts');
    Route::get('/charts/apexBarCharts', 'DashboardController@apexBarCharts')->name('apexBarCharts');
    Route::get('/charts/apexColumnCharts', 'DashboardController@apexColumnCharts')->name('apexColumnCharts');
    Route::get('/charts/apexRadialBarCharts', 'DashboardController@apexRadialBarCharts')->name('apexRadialBarCharts');
    Route::get('/charts/apexRadarCharts', 'DashboardController@apexRadarCharts')->name('apexRadarCharts');
    Route::get('/charts/apexPieDonutCharts', 'DashboardController@apexPieDonutCharts')->name('apexPieDonutCharts');
    Route::get('/charts/apexSparklineCharts', 'DashboardController@apexSparklineCharts')->name('apexSparklineCharts');
    Route::get('/charts/apexScatterCharts', 'DashboardController@apexScatterCharts')->name('apexScatterCharts');
    Route::get('/charts/apexBubbleCharts', 'DashboardController@apexBubbleCharts')->name('apexBubbleCharts');
    Route::get('/charts/apexCandleStickCharts', 'DashboardController@apexCandleStickCharts')->name('apexCandleStickCharts');
    Route::get('/charts/apexMixCharts', 'DashboardController@apexMixCharts')->name('apexMixCharts');
    Route::get('/datatables/basic-tables', 'DashboardController@basic-tables')->name('basic-tables');
    Route::get('/sessions/forgot', 'DashboardController@forgot')->name('forgot');
    Route::get('/widgets/card', 'DashboardController@card')->name('widget-card');
    Route::get('/widgets/statistics', 'DashboardController@statistics')->name('widget-statistics');
    Route::get('/widgets/list', 'DashboardController@list')->name('widget-list');
    Route::get('/widgets/app', 'DashboardController@app')->name('widget-app');
    Route::get('/widgets/weather-app', 'DashboardController@weather-app')->name('widget-weather-app');
    Route::get('/others/notFound', 'DashboardController@notFound')->name('notFound');
    Route::get('/others/user-profile', 'DashboardController@user-profile')->name('user-profile');
    Route::get('/others/starter', 'DashboardController@starter')->name('starter');
    Route::get('/others/faq', 'DashboardController@faq')->name('faq');
    Route::get('/others/pricing-table', 'DashboardController@pricing-table')->name('pricing-table');
    Route::get('/others/search-result', 'DashboardController@search-result')->name('search-result');

    // Route::post('/MessageGeoIP', 'Messages@index')->name('makepayment');
    // Route::post('/MessageGeoIP', 'Messages@index')->name('makepayment');

    // User ID Group Filters like tags              //
    // Route group for 3 types of users             //

    // Route::get('chat support');                  // 1
    // Route::get('chat support');                  // 2
    // Route::get('chat support');                  // 3

    // Route Costume Data                           //
    // Insert Costume Data To Route like JSON Data  //
    // Route Costume Data                           //

    Route::get("horizontal-bar/dashboard/dashboard1");
    // Profile Settings                             //
    Route::get('large-compact-sidebar/dashboard/dashboard1', 'DashboardController@compact')->name('compact');
    Route::get('others/search-result', 'DashboardController@search-result')->name('search-result');
    // Profile Settings                             //

    Route::get('/', 'ChatkitController@index');
    Route::post('/', 'ChatkitController@join');
    Route::get('chat', 'ChatkitController@chat')->name('chat');
    Route::post('logout', 'ChatkitController@logout')->name('logout');
    Route::get("parse_there_json_data@index");

    Route::get('large-compact-sidebar/dashboard/dashboard1', 'SideBarController@compact')->name('compact');
    Route::get('large-sidebar/dashboard/dashboard1', 'SideBarController@normal')->name('normal');
    Route::get('horizontal-bar/dashboard/dashboard1', 'SideBarController@horizontal')->name('horizontal');
    Route::get('vertical/dashboard/dashboard1', 'SideBarController@vertical')->name('vertical');

});

// Middleware Auth and Rules //
