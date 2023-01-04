<?php
use Illuminate\Support\Facades\Route;
use App\About\About;
use App\News\News;
use App\Report\Report;
use App\Partners\Partners;
use App\Mission\Mission;
use App\Position_Categories\Position_Categories;
use App\Leaders\Leaders;
use App\Offers\Offers;
use App\Career\Career;
use App\Categories\Categories;
use App\Products\Products;
use App\Supporter_cat\Supporter_cat;
use App\Partners\Partner_cat;
use App\Supporters\Supporters;
use App\Contact\Contact;
use App\Applies\Applies;
use App\Offers\OfferCat;
use App\Credit\Credit_Apply;
use App\Menus\Menus;
use App\ContactInfo\ContactInfo;
use App\Finance\Finance;
use Illuminate\Support\Facades\View;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $categories = Categories::take(3)->get();
    $offer_cats = OfferCat::take(3)->get();
    return view('main/mainpage',[
        'categories' => $categories,
        'offer_cats' => $offer_cats
    ]);
});

Route::get('/about', function () {
    $about = About::all();
    $partner_cats = Partner_cat::all();
    $partners = Partners::query()
    ->join('partner_cat', 'partners.category' , 'partner_cat.id')
    ->select('partners.id as id', 'partner_cat.category as category', 'partner_cat.id as cat_id', 'name', 'image', 'status')
    ->get();
    $missions = Mission::all();
    $reports = Report::all();
    $menus = Menus::all();
    $leader_cats = Position_Categories::all();
    $leaders = Leaders::all();
    return view('main/about',[
        'about' => $about,
        'missions' => $missions,
        'reports' => $reports,
        'leader_cats' => $leader_cats,
        'leaders' => $leaders,
        'partner_cats' => $partner_cats,
        'partners' => $partners,
        'menus' => $menus
    ]);
});

Route::get('/own-cabinet', function () {
    return view('main/own-cabinet',[
    ]);
});
Route::get('/apply', function () {
    return view('main/apply',[
    ]);
});

View::composer(['main.index'], function ($view) {
    $categories = Categories::take(3)->get();
    $offer_cats = OfferCat::take(3)->get();
    $view->with('categories', $categories);
    $view->with('offer_cats', $offer_cats);
});

Route::get('/furniture/{id}', function ($id) {
    $products = Products::query()
        ->join('categories','products.category','categories.id')
        ->select('products.name as name', 'categories.id as category_id', 'products.about as about', 'image', 'choice', 'choice_img', 'value', 'term', 'min_amount', 'max_amount', 'monthly_payment', 'min_term', 'max_term', 'annual_rate', 'FIFD', 'commission', 'payment_form','financing','age', 'bail', 'documents', 'informations', 'content', 'categories.name as category')
        ->where('products.id',$id)
        ->get();
    return view('main/furniture',[
        'products' => $products
    ]);
});

Route::get('/main_offer/{id}', function ($id) {
    $offers = Offers::query()
        ->join('offer_categories','offers.category','offer_categories.id')
        ->select('offers.name as name', 'offer_categories.id as category_id', 'offers.about as about', 'image', 'choice', 'choice_img', 'value', 'term', 'content', 'offer_categories.name as category')
        ->where('offers.id',$id)
        ->get();
    return view('main/main_offer',[
        'offers' => $offers
    ]);
});

Route::get('/partnership', function () {
    $partner_cats = Partner_cat::all();
    return view('main/partnership',[
        'partner_cats' => $partner_cats
    ]);
});

Route::get('/support', function () {
    $supporter_cats = Supporter_cat::all();
    return view('main/supporters',[
        'supporter_cats' => $supporter_cats
    ]);
});

Route::get('/credit', function () {
    return view('main/credit',[
    ]);
});
Route::get('/overdraft', function () {
    return view('main/overdraft',[
    ]);
});
Route::get('/innews/{id}', function ($id) {
    $news = News::find($id);
    return view('main/innews',[
        'news' => $news
    ]);
});

Route::get('/new', function () {
    $news = News::all();
    return view('main/news',[
        'news' => $news
    ]);
});

Route::get('/vacancy', function () {
    $vacancies = Career::all();
    return view('main/vacancy',[
        'vacancies' => $vacancies
    ]);
});

Route::get('/admin', function () {
    $about = About::find(1);
    return view('admin/about',[
        'about'=>$about
    ]);
});
Route::get('/mission', function () {
    $mission = Mission::find(1);
    return view('admin/mission',[
        'mission'=>$mission
    ]);
});
Route::get('/add_news', function () {
    return view('admin/add_news',[
    ]);
});
Route::get('/news', function () {
    $news = News::all();
    return view('admin/news',[
        'news'=>$news
    ]);
});

Route::get('/add_finance', function () {
    return view('admin/add_finance');
});

Route::get('/finances', function () {
    $finances = Finance::all();
    return view('admin/finance',[
        'finances'=>$finances
    ]);
});

Route::get('/edit_finance/{id}', function ($id) {
    $finance = Finance::find($id);
    return view('admin/edit_finance',[
        'finance'=>$finance
    ]);
});

Route::get('/edit_news/{id}', function ($id) {
    $news = News::find($id);
    return view('admin/edit_news',[
        'news'=>$news
    ]);
});


Route::get('/report', function () {
    $reports = Report::all();
    return view('admin/reports',[
        'reports'=>$reports
    ]);
});

Route::get('/pos_cat', function () {
    $pos_cats = Position_Categories::all();
    return view('admin/pos_cat',[
        'pos_cats'=>$pos_cats
    ]);
});

Route::get('/leaders', function () {
    $leaders = Leaders::all();
    $categories = Position_Categories::all();
    return view('admin/leaders',[
        'leaders'=>$leaders,
        'categories'=>$categories
    ]);
});

Route::get('/career', function () {
    $career = Career::all();
    return view('admin/career',[
        'career'=>$career
    ]);
});

Route::get('/add_career', function () {
    return view('admin/add_career');
});

Route::get('/finance', function () {
    $finances = Finance::all();
    return view('main/finance',[
        'finances' => $finances
    ]);
});

Route::get('/allproducts', function () {
    $categories = Categories::all();
    return view('main/allproducts',[
        'categories' => $categories
    ]);
});

Route::get('/campaigns', function () {
    $categories = OfferCat::all();
    return view('main/campaigns',[
        'categories' => $categories
    ]);
});

Route::get('/invacancy/{id}', function ($id) {
    $vacancy = Career::find($id);
    return view('main/invacancy',[
        'vacancy' => $vacancy
    ]);
});


Route::get('/branch', function () {
    $contact_info = ContactInfo::find(1);
    return view('main/branch',[
        'contact_info' => $contact_info
    ]);
});
Route::get('/branch-connection', function () {
    return view('main/branch-connection');
});
Route::get('/acceptedapplies', function () {
    return view('main/acceptedapplies');
});
Route::get('/about-card', function () {
    return view('main/about-card');
});

Route::get('/business/{id}', function ($id) {
    $products = Products::query()->where('category',$id)->get();
    $category = Categories::find($id);
    return view('main/business',[
        'products' => $products,
        'category' => $category
    ]);
});

Route::get('/allcampaigns/{id}', function ($id) {
    $campaigns = Offers::query()->where('category',$id)->get();
    $category = OfferCat::find($id);
    return view('main/allcampaigns',[
        'campaigns' => $campaigns,
        'category' => $category
    ]);
});

Route::get('/add_product', function () {
    $categories = Categories::all();
    return view('admin/add_products',[
        'categories'=>$categories
    ]);
});

Route::get('/add_offer', function () {
    $offer_cats = OfferCat::all();
    $offers = Offers::all();
    return view('admin/add_offers',[
        'offer_cats'=>$offer_cats,
        'offers'=>$offers
    ]);
});

Route::get('/edit_career/{id}', function ($id) {
    $career = Career::find($id);
    return view('admin/edit_career',[
        'career'=>$career
    ]);
});

Route::get('/edit_products/{id}', function ($id) {
    $product = Products::find($id);
    $categories = Categories::all();
    return view('admin/edit_products',[
        'product'=>$product,
        'categories'=>$categories
    ]);
});

Route::get('/edit_offers/{id}', function ($id) {
    $offer_cats = OfferCat::all();
    $offers = Offers::find($id);
    return view('admin/edit_offers',[
        'offer'=>$offers,
        'offer_cats'=>$offer_cats
    ]);
});

Route::get('/credit_apply_info/{id}', function ($id) {
    $credit_apply = Credit_Apply::find($id);
    return view('admin/credit_apply_info',[
        'credit_apply'=>$credit_apply
    ]);
});

Route::get('/edit_partner/{id}', function ($id) {
    $partner = Partners::find($id);
    $partner_cats = Partner_cat::all();
    return view('admin/edit_partner',[
        'partner'=>$partner,
        'partner_cats'=>$partner_cats
    ]);
});

Route::get('/edit_supporter/{id}', function ($id) {
    $supporter = Supporters::find($id);
    $supporter_cats = Supporter_cat::all();
    return view('admin/edit_supporter',[
        'supporter'=>$supporter,
        'supporter_cats'=>$supporter_cats
    ]);
});

Route::get('/categories', function () {
    $categories = Categories::all();
    return view('admin/categories',[
        'categories'=>$categories
    ]);
});

Route::get('/offer_cat', function () {
    $offer_cats = OfferCat::all();
    return view('admin/offer_cat',[
        'offer_cats'=>$offer_cats
    ]);
});

Route::get('/contact_info', function () {
    $contact_info = ContactInfo::find(1);
    return view('admin/contact_info',[
        'contact_info'=>$contact_info
    ]);
});

Route::get('/products', function () {
    $products = Products::all();
    return view('admin/products',[
        'products'=>$products
    ]);
});

Route::get('/offers', function () {
    $offers = Offers::all();
    return view('admin/offers',[
        'offers'=>$offers
    ]);
});

Route::get('/supporter_cat', function () {
    $supporter_cats = Supporter_cat::all();
    return view('admin/supporter_cat',[
        'supporter_cats'=>$supporter_cats
    ]);
});

Route::get('/partner_cat', function () {
    $partner_cats = Partner_cat::all();
    return view('admin/partner_cat',[
        'partner_cats'=>$partner_cats
    ]);
});

Route::get('/menus', function () {
    $menus = Menus::all();
    return view('admin/menus',[
        'menus'=>$menus
    ]);
});

Route::get('/supporters', function () {
    $supporters = Supporters::query()->leftJoin('supporter_cat', 'supporters.category','supporter_cat.id')->select('supporters.id','supporters.name','supporters.city','supporters.address','supporter_cat.category as category','supporters.phone','supporters.about','supporters.contact_person','supporters.email','supporters.website','supporters.director','supporters.contact_phone','supporters.image','supporters.status')->get();
    return view('admin/supporters',[
        'supporters'=>$supporters
    ]);
});

Route::get('/partners', function () {
    $partners = Partners::query()->leftJoin('partner_cat', 'partners.category','partner_cat.id')->select('partners.id','partners.name','partners.city','partners.address','partner_cat.category as category','partners.phone','partners.about','partners.contact_person','partners.email','partners.website','partners.director','partners.contact_phone','partners.image','partners.status')->get();
    return view('admin/partners',[
        'partners'=>$partners
    ]);
});

Route::get('/contact', function () {
    $contact = Contact::all();
    return view('admin/contact',[
        'contact'=>$contact
    ]);
});

Route::get('/applies', function () {
    $apply = Applies::all();
    return view('admin/applies',[
        'applies'=>$apply
    ]);
});

Route::get('/credit_apply', function () {
    $credit_apply = Credit_Apply::all();
    return view('admin/credit_apply',[
        'credit_apply'=>$credit_apply
    ]);
});

Route::post('/about',[\App\Http\Controllers\Admin\AdminController::class, 'about'])->name( 'about');
Route::post('/mission',[\App\Http\Controllers\Admin\AdminController::class, 'mission'])->name( 'mission');
Route::post('/add_report',[\App\Http\Controllers\Admin\AdminController::class, 'add_report'])->name( 'add_report');
Route::post('/edit_report',[\App\Http\Controllers\Admin\AdminController::class, 'edit_report'])->name( 'edit_report');
Route::post('/delete_report',[\App\Http\Controllers\Admin\AdminController::class, 'delete_report'])->name( 'delete_report');



Route::post('/add_finance',[\App\Http\Controllers\Admin\AdminController::class, 'add_finance'])->name( 'add_finance');
Route::post('/edit_finance',[\App\Http\Controllers\Admin\AdminController::class, 'edit_finance'])->name( 'edit_finance');
Route::post('/delete_finance',[\App\Http\Controllers\Admin\AdminController::class, 'delete_finance'])->name( 'delete_finance');

Route::post('/add_category',[\App\Http\Controllers\Admin\AdminController::class, 'add_category'])->name( 'add_category');
Route::post('/edit_category',[\App\Http\Controllers\Admin\AdminController::class, 'edit_category'])->name( 'edit_category');
Route::post('/delete_category',[\App\Http\Controllers\Admin\AdminController::class, 'delete_category'])->name( 'delete_category');

Route::post('/add_leader',[\App\Http\Controllers\Admin\AdminController::class, 'add_leader'])->name( 'add_leader');
Route::post('/edit_leader',[\App\Http\Controllers\Admin\AdminController::class, 'edit_leader'])->name( 'edit_leader');
Route::post('/delete_leader',[\App\Http\Controllers\Admin\AdminController::class, 'delete_leader'])->name( 'delete_leader');

Route::post('/add_career',[\App\Http\Controllers\Admin\AdminController::class, 'add_career'])->name( 'add_career');
Route::post('/edit_career',[\App\Http\Controllers\Admin\AdminController::class, 'edit_career'])->name( 'edit_career');
Route::post('/delete_career',[\App\Http\Controllers\Admin\AdminController::class, 'delete_career'])->name( 'delete_career');

Route::post('/add_main_category',[\App\Http\Controllers\Admin\AdminController::class, 'add_main_category'])->name( 'add_main_category');
Route::post('/edit_main_category',[\App\Http\Controllers\Admin\AdminController::class, 'edit_main_category'])->name( 'edit_main_category');
Route::post('/delete_main_category',[\App\Http\Controllers\Admin\AdminController::class, 'delete_main_category'])->name( 'delete_main_category');

Route::post('/add_offer_cat',[\App\Http\Controllers\Admin\AdminController::class, 'add_offer_cat'])->name( 'add_offer_cat');
Route::post('/edit_offer_cat',[\App\Http\Controllers\Admin\AdminController::class, 'edit_offer_cat'])->name( 'edit_offer_cat');
Route::post('/delete_offer_cat',[\App\Http\Controllers\Admin\AdminController::class, 'delete_offer_cat'])->name( 'delete_offer_cat');

Route::post('/add_product',[\App\Http\Controllers\Admin\AdminController::class, 'add_product'])->name( 'add_product');
Route::post('/add_product2',[\App\Http\Controllers\Admin\AdminController::class, 'add_product2'])->name( 'add_product2');
Route::post('/edit_product',[\App\Http\Controllers\Admin\AdminController::class, 'edit_product'])->name( 'edit_product');
Route::post('/edit_product2',[\App\Http\Controllers\Admin\AdminController::class, 'edit_product2'])->name( 'edit_product2');
Route::post('/delete_product',[\App\Http\Controllers\Admin\AdminController::class, 'delete_product'])->name( 'delete_product');

Route::post('/add_offer',[\App\Http\Controllers\Admin\AdminController::class, 'add_offer'])->name( 'add_offer');
Route::post('/edit_offer',[\App\Http\Controllers\Admin\AdminController::class, 'edit_offer'])->name( 'edit_offer');
Route::post('/delete_offer',[\App\Http\Controllers\Admin\AdminController::class, 'delete_offer'])->name( 'delete_offer');

Route::post('/add_sup_category',[\App\Http\Controllers\Admin\AdminController::class, 'add_sup_category'])->name( 'add_sup_category');
Route::post('/edit_sup_category',[\App\Http\Controllers\Admin\AdminController::class, 'edit_sup_category'])->name( 'edit_sup_category');
Route::post('/delete_sup_category',[\App\Http\Controllers\Admin\AdminController::class, 'delete_sup_category'])->name( 'delete_sup_category');

Route::post('/add_supporter',[\App\Http\Controllers\Admin\AdminController::class, 'add_supporter'])->name( 'add_supporter');
Route::post('/edit_supporter',[\App\Http\Controllers\Admin\AdminController::class, 'edit_supporter'])->name( 'edit_supporter');
Route::post('/supporter_active',[\App\Http\Controllers\Admin\AdminController::class, 'supporter_active'])->name( 'supporter_active');
Route::post('/supporter_deactive',[\App\Http\Controllers\Admin\AdminController::class, 'supporter_deactive'])->name( 'supporter_deactive');
Route::post('/delete_supporter',[\App\Http\Controllers\Admin\AdminController::class, 'delete_supporter'])->name( 'delete_supporter');

Route::post('/add_par_category',[\App\Http\Controllers\Admin\AdminController::class, 'add_par_category'])->name( 'add_par_category');
Route::post('/edit_par_category',[\App\Http\Controllers\Admin\AdminController::class, 'edit_par_category'])->name( 'edit_par_category');
Route::post('/delete_par_category',[\App\Http\Controllers\Admin\AdminController::class, 'delete_par_category'])->name( 'delete_par_category');

Route::post('/add_partner',[\App\Http\Controllers\Admin\AdminController::class, 'add_partner'])->name( 'add_partner');
Route::post('/edit_partner',[\App\Http\Controllers\Admin\AdminController::class, 'edit_partner'])->name( 'edit_partner');
Route::post('/partner_active',[\App\Http\Controllers\Admin\AdminController::class, 'partner_active'])->name( 'partner_active');
Route::post('/partner_deactive',[\App\Http\Controllers\Admin\AdminController::class, 'partner_deactive'])->name( 'partner_deactive');
Route::post('/delete_partner',[\App\Http\Controllers\Admin\AdminController::class, 'delete_partner'])->name( 'delete_partner');

Route::post('/add_contact',[\App\Http\Controllers\Admin\AdminController::class, 'add_contact'])->name( 'add_contact');
Route::post('/delete_contact',[\App\Http\Controllers\Admin\AdminController::class, 'delete_contact'])->name( 'delete_contact');

Route::post('/add_credit_apply',[\App\Http\Controllers\Main\MainController::class, 'add_credit_apply'])->name( 'add_credit_apply');
Route::post('/delete_credit_apply',[\App\Http\Controllers\Main\MainController::class, 'delete_credit_apply'])->name( 'delete_credit_apply');

Route::post('/add_apply',[\App\Http\Controllers\Main\MainController::class, 'add_apply'])->name( 'add_apply');
Route::post('/delete_apply',[\App\Http\Controllers\Main\MainController::class, 'delete_apply'])->name( 'delete_apply');

Route::post('/menu_active',[\App\Http\Controllers\Admin\AdminController::class, 'menu_active'])->name( 'menu_active');
Route::post('/menu_deactive',[\App\Http\Controllers\Admin\AdminController::class, 'menu_deactive'])->name( 'menu_deactive');

Route::post('/contact_info',[\App\Http\Controllers\Admin\AdminController::class, 'contact_info'])->name( 'contact_info');

Auth::routes();

Route::post('/add_user',[\App\Http\Controllers\Main\MainController::class, 'add_user'])->name( 'add_user');
Route::post('/edit_user',[\App\Http\Controllers\Main\MainController::class, 'edit_user'])->name( 'edit_user');

Route::get('/home', 'HomeController@index')->name('home');
