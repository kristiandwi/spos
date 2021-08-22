<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\CekFaktaController;
use App\Http\Controllers\EspospediaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PremiumController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TerpopulerController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\UkswController;
use App\Http\Controllers\UbahlakuController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\PenulisController;  
use App\Http\Controllers\ArsipController; 
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/news', CategoryController::class);
Route::get('/soloraya', CategoryController::class);
Route::get('/lifestyle', CategoryController::class);
Route::get('/jateng', CategoryController::class);
Route::get('/jatim', CategoryController::class);
Route::get('/jogja', CategoryController::class);
Route::get('/otomotif', CategoryController::class);
Route::get('/entertainment', CategoryController::class);
Route::get('/espospedia', EspospediaController::class);
Route::get('/bisnis', CategoryController::class);
Route::get('/sport', CategoryController::class);
Route::get('/teknologi', CategoryController::class);
Route::get('/cekfakta', CekFaktaController::class);
Route::get('/premium', PremiumController::class);
Route::get('/terpopuler', TerpopulerController::class);
Route::get('/videos', VideoController::class);
Route::get('/video', VideoController::class);
Route::get('/jagad-jawa', CategoryController::class);

Route::get('/arsip', ArsipController::class)->name('arsip');
Route::post('/arsip', ArsipController::class)->name('arsip');

Route::get('/wisata-joglosemar', WisataController::class);
Route::get('/wisata-joglosemar/artikel', WisataController::class);
Route::get('/wisata-joglosemar/grafis', WisataController::class);
Route::get('/wisata-joglosemar/foto', WisataController::class);
Route::get('/wisata-joglosemar/video', WisataController::class);
Route::get('/wisata-joglosemar/kontak', WisataController::class);

Route::get('/uksw', UkswController::class);
Route::get('/uksw/berita', UkswController::class);
Route::get('/uksw/prestasi', UkswController::class);
Route::get('/uksw/foto', UkswController::class);
Route::get('/uksw/video', UkswController::class);
Route::get('/uksw/tanya-jawab', UkswController::class);
Route::get('/uksw/kontak', UkswController::class);

Route::get('/ubahlaku', UbahlakuController::class);
Route::get('/ubahlaku/news', UbahlakuController::class);
Route::get('/ubahlaku/info-grafis', UbahlakuController::class);
Route::get('/ubahlaku/video', UbahlakuController::class);
Route::get('/ubahlaku/cek-fakta', UbahlakuController::class);
Route::get('/ubahlaku/data', UbahlakuController::class);
Route::get('/ubahlaku/galeri', UbahlakuController::class);
Route::get('/ubahlaku/faq', UbahlakuController::class);



/**
 * AMP Route
 */
Route::get('/amp',  [HomeController::class, 'index']);
// Route::get('/{category}/amp', CategoryController::class);
Route::get('/tag/{slug}/amp', TagController::class);
Route::get('/{category}/{subcategory}/amp', SubCategoryController::class);
// AMP Category
Route::get('/news/amp', CategoryController::class);
Route::get('/soloraya/amp', CategoryController::class);
Route::get('/bisnis/amp', CategoryController::class);
Route::get('/sport/amp', CategoryController::class);
Route::get('/lifestyle/amp', CategoryController::class);
Route::get('/jateng/amp', CategoryController::class);
Route::get('/jatim/amp', CategoryController::class);
Route::get('/jogja/amp', CategoryController::class);
Route::get('/otomotif/amp', CategoryController::class);
Route::get('/entertainment/amp', CategoryController::class);
Route::get('/videos/amp', CategoryController::class);
Route::get('/foto/amp', CategoryController::class);
Route::get('/espospedia/amp', CategoryController::class);
Route::get('/teknologi/amp', CategoryController::class);
Route::get('/writing-contest/amp', CategoryController::class);
Route::get('/jagad-jawa/amp', CategoryController::class);
Route::get('/loker/amp', CategoryController::class);
// AMP Single
Route::get('{slug}/amp', ReadController::class)->where('slug', '([A-Za-z0-9\-\/]+)');

Route::get('/author/{slug}', PenulisController::class);

Route::get('/tag/{slug}', TagController::class);

// Route::get('/read/{id}', [HomeController::class, 'show']);

// Route khusus category dan sub category
Route::get('/{category}/{subcategory}', SubCategoryController::class);
// Catch all page controller (place at the very bottom)
Route::get('{slug}', ReadController::class)->where('slug', '([A-Za-z0-9\-\/]+)');

// $list_cat = array('news', 'soloraya', 'lifestyle', 'jatim', 'otomotif', 'entertainment', 'espospedia', 'bisnis', 'sport', 'jateng', 'jogja', 'teknologi', 'rehat');
