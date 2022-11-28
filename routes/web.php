<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\project1;

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

//Route::get('/','project1@index' );
Route::get('/',[project1::class,'Home']);
Route::get('/produk',[project1::class,'Komponen']);
Route::get('/blog',[project1::class,'Code']);
Route::get('/project',[project1::class,'Project']);

//Buat route untuk BLOG+method blog+view Blog
/*
Route::get('/produk',function(){
    echo "<h3>Daftar Produk</h3>";
    echo "<h4>Nama Barang</h4>";
    echo "<h5>Jumlah Barang</h5>";
});
Route::get('/about',function(){
    echo "<h3>Daftar Produk</h3>";
});
Route::get('/produk/produk-{kodeproduk?}',function($kodeproduk=0){
    echo "<h3>Produk ID:".$kodeproduk."</h3>";
});
Route::get('/prd/{id?}',function($id=1){
    $produk = "";
    if($id == '1'){
        $produk = "Kacang Polong";    
    }
    echo "Nama Produk: ".$produk;
})->where('id','[0-9]+');

Route::get('/prdswitch/{id?}',function($id=0){
    $produk = "";
    switch($id){
        case "1":
            $produk = "Kacang Polong";
            break;
        case "2":
            $produk = "Kacang Tanah";
            break;
        case "3":
            $produk = "Kacang Hijau";
            break;
        default:
            $produk = "Aneka Kacang Pilihan";
            break;
    }
    echo "Nama Produk: ".$produk;
});

Route::view('/Hewan','WEBYoga');

Route::get('/teman/{nama}',function($nama){
    return view('teman',compact('nama'));
});
*/