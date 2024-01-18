<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LogementsController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\ImageGalleryController;
use App\Http\Controllers\CategoryGallerieController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\WelcomeController;



use App\Models\Post;

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


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],function(){
        /*
    Route::get('/', function () {
        return view('welcome');
    });
    */
    Route::get('/home', [WelcomeController::class, 'welcome']);
    Route::get('/gallery', [ArticleController::class, 'mediatheque']);
    Route::get('/gallery', [ArticleController::class, 'mediatheque']);
    Route::get('/a-propos', [ArticleController::class, 'about'])->name('about');
    Route::get('/projets-front', [ArticleController::class, 'projets'])->name('projets.front.index');
    Route::get('/projets-details', [ArticleController::class, 'projetShow'])->name('projets.front.show');
    Route::get('/temoignages', [ArticleController::class, 'temoignages'])->name('temoignages.index');
    Route::get('/temoignages-details', [ArticleController::class, 'temoignageShow'])->name('temoignages.show');
    Route::get('/article/{slg}', [WelcomeController::class, 'article_details'])->name('post.show');
    Route::post('missionaire',[UserController::class,'Missionairestore'])->name('missionaire.store');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('logements', LogementsController::class);
    Route::resource('clients', CustomerController::class);
    Route::resource('prospects', ProspectController::class);
    Route::get('all-prospects',[ProspectController::class, 'prospects'])->name('prospects.all');
    Route::get('settings', [SettingController::class,'index']);
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('projets',ProjetController ::class);
    Route::get('/mydepences/{id}',[ProjetController::class,'depenceByProjet'])->name('depense.projet');
    Route::get('/partenairebyprojets/{id}',[ProjetController::class,'partenaireByProjet'])->name('partenaire.projet');
    Route::resource('depenses', DepenseController::class);
    Route::get('/depensecreate/{id}',[DepenseController::class,'create'])->name('depenses.create');
    Route::get('/admin_dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/single_projet', [App\Http\Controllers\HomeController::class, 'projectShow'])->name('home.projectShow');
    Route::get('paiement/notificiation',[App\Http\Controllers\HomeController::class, 'projectPaiementNotifications'])->name('notification.paiement');
    Route::get('/paiement/{id}',[App\Http\Controllers\HomeController::class, 'projectPaiement'])->name('project.paiement');
    Route::post('/paiement',[App\Http\Controllers\HomeController::class, 'projectPaiementProcess'])->name('project.paiement.store');
    Route::get('/soutiens',[App\Http\Controllers\HomeController::class, 'soutiens'])->name('project.soutiens');
    Route::get('/soutiens-add',[App\Http\Controllers\HomeController::class, 'soutienAdd'])->name('soutien.add');
    Route::post('/soutiens-add',[App\Http\Controllers\HomeController::class, 'soutienstore'])->name('soutien.store');
    Route::get('/myoffers',[App\Http\Controllers\HomeController::class, 'myOffers'])->name('myOffers');
    Route::get('/soutiens/confirm/{id}',[App\Http\Controllers\HomeController::class, 'soutienConfirm'])->name('soutiens.confirm');
    Route::get('/categories',[CategoryController::class, 'index'])->name('categoriearticle.index');
    Route::post('/categories',[CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/edit',[CategoryController::class, 'edit'])->name('categopriearticles.edit');

    Route::get('/categories_gallerie',[CategoryGallerieController::class, 'index'])->name('categoriegallerie.index');
    Route::post('/categories_gallerie',[CategoryGallerieController::class, 'store'])->name('categoriesgallerie.store');
    Route::get('/categories_gallerie/edit',[CategoryGallerieController::class, 'edit'])->name('categopriegallerie.edit');

    Route::get('/articles-ajouter',[ArticleController::class, 'create'])->name('article-create');
    Route::post('articles-ajouter',[CkeditorController::class, 'store'])->name('article.create');
    Route::get('articles-listes',[CkeditorController::class, 'index'])->name('articleliste.index');
    Route::post('ckeditor/upload',[CkeditorController::class, 'upload'])->name('image.upload');
    Route::get('/gallerie-ajouter',[ImageGalleryController::class, 'create'])->name('gallerie-create');
    Route::post('/gallerie-ajouter',[ImageGalleryController::class, 'store'])->name('gallerie.store');
    Route::get('/galleries-admin',[ImageGalleryController::class,'index'])->name('galleries.index');
    Route::delete('image-gallery/{id}', [ImageGalleryController::class,'destroy'])->name('galleries.destroy');
});