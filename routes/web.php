<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Dashboard
Route::get('/', [AuthController::class, 'index'])->name('login');

Route::view('/dashboard', 'dashboard');
Route::view('/dashboard-analytics', 'template.dashboards.dashboard-analytics');
Route::view('/dashboard-crm', 'template.dashboards.dashboard-crm');
Route::view('/dashboard-ecommerce', 'template.dashboards.dashboard-ecommerce');
Route::view('/dashboard-crypto', 'template.dashboards.dashboard-crypto');
Route::view('/dashboard-job', 'template.dashboards.dashboard-job');
Route::view('/dashboard-nft', 'template.dashboards.dashboard-nft');
Route::view('/dashboard-projects', 'template.dashboards.dashboard-projects');

// Apps
Route::view('/apps-calendar', 'template.apps.apps-calendar');
Route::view('/apps-chat', 'template.apps.apps-chat');
Route::view('/apps-mailbox', 'template.apps.apps-mailbox');
Route::view('/apps-email-basic', 'template.apps.apps-email-basic');

Route::view('/apps-email-ecommerce', 'template.apps.apps-email-ecommerce');
Route::view('/apps-ecommerce-products', 'template.apps.apps-ecommerce-products');
Route::view('/apps-ecommerce-product-details', 'template.apps.apps-ecommerce-product-details');
Route::view('/apps-ecommerce-add-product', 'template.apps.apps-ecommerce-add-product');
Route::view('/apps-ecommerce-orders', 'template.apps.apps-ecommerce-orders');
Route::view('/apps-ecommerce-order-details', 'template.apps.apps-ecommerce-order-details');
Route::view('/apps-ecommerce-customers', 'template.apps.apps-ecommerce-customers');
Route::view('/apps-ecommerce-cart', 'template.apps.apps-ecommerce-cart');
Route::view('/apps-ecommerce-checkout', 'template.apps.apps-ecommerce-checkout');
Route::view('/apps-ecommerce-sellers', 'template.apps.apps-ecommerce-sellers');
Route::view('/apps-ecommerce-seller-details', 'template.apps.apps-ecommerce-seller-details');

Route::view('/apps-projects-list', 'template.apps.apps-projects-list');
Route::view('/apps-projects-overview', 'template.apps.apps-projects-overview');
Route::view('/apps-projects-create', 'template.apps.apps-projects-create');

Route::view('/apps-tasks-kanban', 'template.apps.apps-tasks-kanban');
Route::view('/apps-tasks-list-view', 'template.apps.apps-tasks-list-view');
Route::view('/apps-tasks-details', 'template.apps.apps-tasks-details');

Route::view('/apps-crm-contacts', 'template.apps.apps-crm-contacts');
Route::view('/apps-crm-companies', 'template.apps.apps-crm-companies');
Route::view('/apps-crm-deals', 'template.apps.apps-crm-deals');
Route::view('/apps-crm-leads', 'template.apps.apps-crm-leads');

Route::view('/apps-crypto-transactions', 'template.apps.apps-crypto-transactions');
Route::view('/apps-crypto-buy-sell', 'template.apps.apps-crypto-buy-sell');
Route::view('/apps-crypto-orders', 'template.apps.apps-crypto-orders');
Route::view('/apps-crypto-wallet', 'template.apps.apps-crypto-wallet');
Route::view('/apps-crypto-ico', 'template.apps.apps-crypto-ico');
Route::view('/apps-crypto-kyc', 'template.apps.apps-crypto-kyc');
Route::view('/apps-invoices-list', 'template.apps.apps-invoices-list');

Route::view('/apps-invoices-details', 'template.apps.apps-invoices-details');
Route::view('/apps-invoices-create', 'template.apps.apps-invoices-create');

Route::view('/apps-tickets-list', 'template.apps.apps-tickets-list');
Route::view('/apps-tickets-details', 'template.apps.apps-tickets-details');

Route::view('/apps-nft-marketplace', 'template.apps.apps-nft-marketplace');
Route::view('/apps-nft-explore', 'template.apps.apps-nft-explore');
Route::view('/apps-nft-auction', 'template.apps.apps-nft-auction');
Route::view('/apps-nft-item-details', 'template.apps.apps-nft-item-details');
Route::view('/apps-nft-collections', 'template.apps.apps-nft-collections');
Route::view('/apps-nft-creators', 'template.apps.apps-nft-creators');
Route::view('/apps-nft-ranking', 'template.apps.apps-nft-ranking');
Route::view('/apps-nft-wallet', 'template.apps.apps-nft-wallet');
Route::view('/apps-nft-create', 'template.apps.apps-nft-create');

Route::view('/apps-file-manager', 'template.apps.apps-file-manager');
Route::view('/apps-todo', 'template.apps.apps-todo');

Route::view('/apps-job-statistics', 'template.apps.apps-job-statistics');
Route::view('/apps-job-lists', 'template.apps.apps-job-lists');
Route::view('/apps-job-grid-lists', 'template.apps.apps-job-grid-lists');
Route::view('/apps-job-details', 'template.apps.apps-job-details');
Route::view('/apps-job-candidate-lists', 'template.apps.apps-job-candidate-lists');
Route::view('/apps-job-candidate-grid', 'template.apps.apps-job-candidate-grid');
Route::view('/apps-job-application', 'template.apps.apps-job-application');
Route::view('/apps-job-new', 'template.apps.apps-job-new');
Route::view('/apps-job-companies-lists', 'template.apps.apps-job-companies-lists');
Route::view('/apps-job-categories', 'template.apps.apps-job-categories');

Route::view('/apps-api-key', 'template.apps.apps-api-key');

// Pages

Route::view('/auth-signin-basic', 'template.auth.auth-signin-basic');
Route::view('/auth-signin-cover', 'template.auth.auth-signin-cover');
Route::view('/auth-signup-basic', 'template.auth.auth-signup-basic');
Route::view('/auth-signup-cover', 'template.auth.auth-signup-cover');
Route::view('/auth-pass-reset-basic', 'template.auth.auth-pass-reset-basic');
Route::view('/auth-pass-reset-cover', 'template.auth.auth-pass-reset-cover');
Route::view('/auth-pass-change-basic', 'template.auth.auth-pass-change-basic');
Route::view('/auth-pass-change-cover', 'template.auth.auth-pass-change-cover');
Route::view('/auth-lockscreen-basic', 'template.auth.auth-lockscreen-basic');
Route::view('/auth-lockscreen-cover', 'template.auth.auth-lockscreen-cover');
Route::view('/auth-logout-basic', 'template.auth.auth-logout-basic');
Route::view('/auth-logout-cover', 'template.auth.auth-logout-cover');
Route::view('/auth-success-msg-basic', 'template.auth.auth-success-msg-basic');
Route::view('/auth-success-msg-cover', 'template.auth.auth-success-msg-cover');
Route::view('/auth-twostep-basic', 'template.auth.auth-twostep-basic');
Route::view('/auth-twostep-cover', 'template.auth.auth-twostep-cover');
Route::view('/auth-404-basic', 'template.auth.auth-404-basic');
Route::view('/auth-404-cover', 'template.auth.auth-404-cover');
Route::view('/auth-404-alt', 'template.auth.auth-404-alt');
Route::view('/auth-500', 'template.auth.auth-500');
Route::view('/auth-offline', 'template.auth.auth-offline');

Route::view('/pages-starter', 'template.pages.pages-starter');
Route::view('/pages-profile', 'template.pages.pages-profile');
Route::view('/pages-profile-settings', 'template.pages.pages-profile-settings');
Route::view('/pages-team', 'template.pages.pages-team');
Route::view('/pages-timeline', 'template.pages.pages-timeline');
Route::view('/pages-faqs', 'template.pages.pages-faqs');
Route::view('/pages-pricing', 'template.pages.pages-pricing');
Route::view('/pages-gallery', 'template.pages.pages-gallery');
Route::view('/pages-maintenance', 'template.pages.pages-maintenance');
Route::view('/pages-coming-soon', 'template.pages.pages-coming-soon');
Route::view('/pages-sitemap', 'template.pages.pages-sitemap');
Route::view('/pages-search-results', 'template.pages.pages-search-results');
Route::view('/pages-privacy-policy', 'template.pages.pages-privacy-policy');
Route::view('/pages-term-conditions', 'template.pages.pages-term-conditions');

Route::view('/landing', 'template.landing.landing');
Route::view('/nft-landing', 'template.landing.nft-landing');
Route::view('/job-landing', 'template.landing.job-landing');

// components
Route::view('/ui-alerts', 'template.base_ui.ui-alerts');
Route::view('/ui-badges', 'template.base_ui.ui-badges');
Route::view('/ui-buttons', 'template.base_ui.ui-buttons');
Route::view('/ui-colors', 'template.base_ui.ui-colors');
Route::view('/ui-cards', 'template.base_ui.ui-cards');
Route::view('/ui-carousel', 'template.base_ui.ui-carousel');
Route::view('/ui-dropdowns', 'template.base_ui.ui-dropdowns');
Route::view('/ui-grid', 'template.base_ui.ui-grid');
Route::view('/ui-images', 'template.base_ui.ui-images');
Route::view('/ui-tabs', 'template.base_ui.ui-tabs');
Route::view('/ui-accordions', 'template.base_ui.ui-accordions');
Route::view('/ui-modals', 'template.base_ui.ui-modals');
Route::view('/ui-offcanvas', 'template.base_ui.ui-offcanvas');
Route::view('/ui-placeholders', 'template.base_ui.ui-placeholders');
Route::view('/ui-progress', 'template.base_ui.ui-progress');
Route::view('/ui-notifications', 'template.base_ui.ui-notifications');
Route::view('/ui-media', 'template.base_ui.ui-media');
Route::view('/ui-embed-video', 'template.base_ui.ui-embed-video');
Route::view('/ui-typography', 'template.base_ui.ui-typography');
Route::view('/ui-lists', 'template.base_ui.ui-lists');
Route::view('/ui-links', 'template.base_ui.ui-links');
Route::view('/ui-general', 'template.base_ui.ui-general');
Route::view('/ui-ribbons', 'template.base_ui.ui-ribbons');
Route::view('/ui-utilities', 'template.base_ui.ui-utilities');

Route::view('/advance-ui-sweetalerts', 'template.advance_ui.advance-ui-sweetalerts');
Route::view('/advance-ui-nestable', 'template.advance_ui.advance-ui-nestable');
Route::view('/advance-ui-scrollbar', 'template.advance_ui.advance-ui-scrollbar');
Route::view('/advance-ui-animation', 'template.advance_ui.advance-ui-animation');
Route::view('/advance-ui-tour', 'template.advance_ui.advance-ui-tour');
Route::view('/advance-ui-swiper', 'template.advance_ui.advance-ui-swiper');
Route::view('/advance-ui-ratings', 'template.advance_ui.advance-ui-ratings');
Route::view('/advance-ui-highlight', 'template.advance_ui.advance-ui-highlight');
Route::view('/advance-ui-scrollspy', 'template.advance_ui.advance-ui-scrollspy');

Route::view('/widgets', 'template.widgets');

Route::view('/forms-elements', 'template.forms.forms-elements');
Route::view('/forms-select', 'template.forms.forms-select');
Route::view('/forms-checkboxs-radios', 'template.forms.forms-checkboxs-radios');
Route::view('/forms-pickers', 'template.forms.forms-pickers');
Route::view('/forms-masks', 'template.forms.forms-masks');
Route::view('/forms-advanced', 'template.forms.forms-advanced');
Route::view('/forms-range-sliders', 'template.forms.forms-range-sliders');
Route::view('/forms-validation', 'template.forms.forms-validation');
Route::view('/forms-wizard', 'template.forms.forms-wizard');
Route::view('/forms-editors', 'template.forms.forms-editors');
Route::view('/forms-file-uploads', 'template.forms.forms-file-uploads');
Route::view('/forms-layouts', 'template.forms.forms-layouts');
Route::view('/forms-select2', 'template.forms.forms-select2');

Route::view('/tables-basic', 'template.tables.tables-basic');
Route::view('/tables-gridjs', 'template.tables.tables-gridjs');
Route::view('/tables-listjs', 'template.tables.tables-listjs');
Route::view('/tables-datatables', 'template.tables.tables-datatables');

Route::view('/charts-apex-line', 'template.charts.charts-apex-line');
Route::view('/charts-apex-area', 'template.charts.charts-apex-area');
Route::view('/charts-apex-column', 'template.charts.charts-apex-column');
Route::view('/charts-apex-bar', 'template.charts.charts-apex-bar');
Route::view('/charts-apex-mixed', 'template.charts.charts-apex-mixed');
Route::view('/charts-apex-timeline', 'template.charts.charts-apex-timeline');
Route::view('/charts-apex-range-area', 'template.charts.charts-apex-range-area');
Route::view('/charts-apex-funnel', 'template.charts.charts-apex-funnel');
Route::view('/charts-apex-candlestick', 'template.charts.charts-apex-candlestick');
Route::view('/charts-apex-boxplot', 'template.charts.charts-apex-boxplot');
Route::view('/charts-apex-bubble', 'template.charts.charts-apex-bubble');
Route::view('/charts-apex-scatter', 'template.charts.charts-apex-scatter');
Route::view('/charts-apex-heatmap', 'template.charts.charts-apex-heatmap');
Route::view('/charts-apex-treemap', 'template.charts.charts-apex-treemap');
Route::view('/charts-apex-pie', 'template.charts.charts-apex-pie');
Route::view('/charts-apex-radialbar', 'template.charts.charts-apex-radialbar');
Route::view('/charts-apex-radar', 'template.charts.charts-apex-radar');
Route::view('/charts-apex-polar', 'template.charts.charts-apex-polar');
Route::view('/charts-chartjs', 'template.charts.charts-chartjs');
Route::view('/charts-echarts', 'template.charts.charts-echarts');

Route::view('/icons-remix', 'template.icons.icons-remix');
Route::view('/icons-boxicons', 'template.icons.icons-boxicons');
Route::view('/icons-materialdesign', 'template.icons.icons-materialdesign');
Route::view('/icons-lineawesome', 'template.icons.icons-lineawesome');
Route::view('/icons-feather', 'template.icons.icons-feather');
Route::view('/icons-crypto', 'template.icons.icons-crypto');

Route::view('/maps-google', 'template.maps.maps-google');
Route::view('/maps-vector', 'template.maps.maps-vector');
Route::view('/maps-leaflet', 'template.maps.maps-leaflet');
