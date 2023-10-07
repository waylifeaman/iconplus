<?php

namespace App\Http\Controllers;

use App\Models\iconproduk;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Post;
use App\Models\produk;
use App\Models\keunggulan;
use App\Models\produkicon;
use App\Models\woy;

class postControll extends Controller
{
    public function dashboard()
    {
        return view('home', [
            "title" => "Home",
            "welcomehome" => "SELAMAT DATANG DI ICON PLUS KANTOR PERWAKILAN YOGYAKARTA",
            "deswelcome" => "Solusi Layanan Internet Boardband yang Andal(Realiable), Terjangkau(Affordable) dan Tanpa Batas(Unlimited)",
            "profperusahaan" => "Kehadiran PLN Icon Plus sebagai Anak Perusahaan PT PLN (Persero) mengemban misi untuk memenuhi kebutuhan dan harapan Pemangku Kepentingan dalam penyediaan solusi-solusi teknologi informasi dan komunikasi (TIK). Hal ini tidak hanya terbatas pada penyediaan layanan yang handal bagi pelanggan, tetapi juga pada kontribusi ",
            "welcome" => Post::layanan(),
            "produk" => produk::produk(),
            "keunggulan" => keunggulan::keunggulan(),
            "produkicon" => produkicon::plus(),
        ]);
    }
    public function service()
    {
        return view('servic', [
            "title" => "Home",
            "welcomehome" => "SELAMAT DATANG DI ICON PLUS KANTOR PERWAKILAN YOGYAKARTA",
            "deswelcome" => "Solusi Layanan Internet Boardband yang Andal(Realiable), Terjangkau(Affordable) dan Tanpa Batas(Unlimited)",
            "profperusahaan" => "Kehadiran PLN Icon Plus sebagai Anak Perusahaan PT PLN (Persero) mengemban misi untuk memenuhi kebutuhan dan harapan Pemangku Kepentingan dalam penyediaan solusi-solusi teknologi informasi dan komunikasi (TIK). Hal ini tidak hanya terbatas pada penyediaan layanan yang handal bagi pelanggan, tetapi juga pada kontribusi ",
            "welcome" => Post::layanan(),
            "produk" => produk::produk(),
            "produkicon" => produkicon::plus(),

        ]);
    }
    // public function service()
    // {
    //     return view('servic', [
    //         "title" => "Service",
    //         "gambar" => "iconnect.png",
    //         "keunggulan" => keunggulan::keunggulan(),
    //         // "produkicon" => woy::plus(),
    //         // "keunggulan" => keunggulan::keunggulan(),
    //         // "body" => Data::all()
    //     ]);
    // }
    public function hargapaket()
    {
        return view('hargapaket', [
            "title" => "Harga Paket",
            // "body" => Data::all()
        ]);
    }
    public function petawilayah()
    {
        return view('petawilayah', [
            "title" => "Peta Wilayah",
            // "body" => Data::all()
        ]);
    }
}
