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
use App\Http\Controllers\WisataController;  
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

Route::get('/tag/{slug}', TagController::class);

// Route::get('/read/{id}', [HomeController::class, 'show']);

// Route khusus category dan sub category
Route::get('/{category}/{subcategory}', SubCategoryController::class);
// Catch all page controller (place at the very bottom)
Route::get('{slug}', ReadController::class)->where('slug', '([A-Za-z0-9\-\/]+)');

// $list_cat = array('news', 'soloraya', 'lifestyle', 'jatim', 'otomotif', 'entertainment', 'espospedia', 'bisnis', 'sport', 'jateng', 'jogja', 'teknologi', 'rehat');
