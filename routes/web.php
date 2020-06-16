<?php

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
    if ( Auth::check() )
        return redirect()->route('dashboard');
    else
        return view('auth.login');
})->name('mainpage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');

// CONFIG
Route::get('conf/getposkod/{poskod}', 'CONF\UtamaController@getPoskod')->name('conf.getposkod');
Route::get('conf/getpeghubungan/{id}', 'CONF\UtamaController@getPeghubungan')->name('conf.getpeghubungan');
Route::get('conf/getpajakandetail/{id}', 'CONF\UtamaController@getPajakanDetail')->name('conf.getpajakandetail');
Route::get('conf/getpegkonsesi/{id}', 'CONF\UtamaController@getPegKonsesi')->name('conf.getpegkonsesi');


// KJB
Route::namespace('KJB')->prefix('kjb')->name('kjb.')->group(function(){
    Route::get('/', 'KJBController@index')->name('index');

    // Agensi
    Route::prefix('agensi')->name('agensi.')->group(function(){
        Route::get('/kelulusan/{kjbPesanan}/edit', 'AgensiController@kelulusan')->name('kelulusan');
        Route::put('/kelulusan/{kjbPesanan}', 'AgensiController@kelulusanUpdate')->name('kelulusanupdate');
		Route::get('/dokumen/view/{kjbPesanan}/{docid}', 'AgensiController@viewFile')->name('viewdoc');
		Route::get('/dokumen/cetak/{kjbPesanan}', 'AgensiController@cetakPermohonan')->name('cetakdoc');
		Route::post('/dokumen/upload', 'AgensiController@uploadDoc')->name('upddoc');
		Route::post('/dokumen/delete', 'AgensiController@delFile')->name('deldoc');
    });
    Route::resource('/agensi', 'AgensiController')->parameters(['agensi' => 'kjbPesanan']);

    // MOF
    Route::prefix('mof')->name('mof.')->group(function(){
        Route::get('/semakan/{kjbPesanan}/edit', 'MofController@semakanEdit')->name('semakanedit');
        Route::put('/semakan/{kjbPesanan}', 'MofController@semakanUpdate')->name('semakanupdate');
        Route::get('/perakuan/{kjbPesanan}/edit', 'MofController@perakuanEdit')->name('perakuanedit');
        Route::put('/perakuan/{kjbPesanan}', 'MofController@perakuanUpdate')->name('perakuanupdate');
        Route::get('/kelulusan/{kjbPesanan}/edit', 'MofController@kelulusanEdit')->name('kelulusanedit');
        Route::put('/kelulusan/{kjbPesanan}', 'MofController@kelulusanUpdate')->name('kelulusanupdate');
		Route::get('/dokumen/view/{kjbPesanan}/{docid}', 'MofController@viewFile')->name('viewdoc');
		Route::get('/dokumen/cetak/{kjbPesanan}', 'MofController@cetakPermohonan')->name('cetakdoc');
    });
	
	// Konsesi
	Route::prefix('konsesi')->name('konsesi.')->group(function(){
		Route::get('/semakan/{kjbPesanan}/edit', 'KonsesiController@semakanEdit')->name('konsesisemak');
		Route::put('/semakan/{kjbPesanan}', 'KonsesiController@semakanUpdate')->name('semakanUpdate');
		Route::get('/infokonsesi/{kjbPesanan}/edit', 'KonsesiController@maklumatKonsesi')->name('maklumatKonsesi');
		Route::put('/infokonsesi/{kjbPesanan}', 'KonsesiController@simpanKonsesi')->name('simpaninfokonsesi');
		Route::get('/penghantaran/{kjbPesanan}/edit', 'KonsesiController@maklumatPenghantaran')->name('konsesihantar');
		Route::put('/penghantaran/{kjbPesanan}', 'KonsesiController@simpanPenghantaran')->name('penghantaranupdate');
		Route::get('/dokumen/cetak/{kjbPesanan}', 'KonsesiController@cetakPermohonan')->name('cetakdoc');
		Route::get('/dokumen/cetakaod/{kjbPesanan}', 'KonsesiController@cetakAod')->name('cetakaod');
	});
	
	//Kastam
	Route::prefix('kastam')->name('kastam.')->group(function(){
		Route::get('/semakan/{kjbPesanan}/edit', 'KastamController@semakanEdit')->name('kastamsemak');
		Route::put('/semakan/{kjbPesanan}', 'KastamController@semakanUpdate')->name('semakanUpdate');
		Route::get('/dokumen/cetak/{kjbPesanan}', 'KastamController@cetakPermohonan')->name('cetakdoc');
	});
});

// KJG
Route::namespace('KJG')->prefix('kjg')->name('kjg.')->group(function(){
	Route::get('/', 'KJGController@index')->name('index');
	
	// Agensi
    Route::prefix('agensi')->name('agensi.')->group(function(){
		 Route::get('/cari-kjb', 'AgensiController@cariKjb')->name('cariKjb');
		 Route::post('/carian', 'AgensiController@carian')->name('carianKJB');
	});
});







//test
Route::get('kastam/{kjbPesanan}/edit', 'KJB\MofController@kastam');
Route::get('konsesimohon/{kjbPesanan}/edit', 'KJB\MofController@konsesi1');
Route::get('konsesipajak/{kjbPesanan}/edit', 'KJB\MofController@konsesi2');
//test


// Route::resource('mof', 'MofController');
// Route::resource('konsesi', 'KonsesiController');
// Route::resource('kastam', 'KastamController');
// Testing - start
// Route::view('kjb/borang', 'KJB.borang')->name('kjb.borang');
// Route::view('kelulusan', 'KJB.jabatanlulus');
// Route::view('mofsemak', 'KJB.mofsemak');
// Route::view('mofperaku', 'KJB.mofperaku');
// Route::view('mofpelulus', 'KJB.mofpelulus');
// Route::view('kastam', 'KJB.kastam');
// Route::view('konsesimohon', 'KJB.konsesimohon');
// Route::view('konsesipajak', 'KJB.konsesipajak');


Route::get('/abc', 'TestController@abc');
// Testing - end
