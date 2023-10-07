<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "name" => "Produk",
            "slug" => "Produk Iconnet",
            "deskripsi" =>  "PLN Icon Plus membagi produknya untuk segmen pelanggan korporasi (enterprise business) kedalam 4 (empat) kategori produk yaitu ICONect, ICONWeb",
        ],
        [
            "name" => "Assets",
            "slug" => "Asset iconnet,",
            "deskripsi" =>  "consectetur adipisicing , accusantium esse aperiam harum odio placeat.",
        ],
        [
            "name" => "News",
            "slug" => "News iconnet,",
            "deskripsi" =>  "consectetur adipisicing elit. Voluptatibus dolore corporis repudiandae quisquam laboriosam, accusantium esse aperiam harum odio placeat.",
        ],

    ];
    public static function layanan()
    {
        return self::$blog_posts;
    }
    public static function slug($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}


class produk
{
    private static $produk = [
        [
            "kecepatan" => "10 MBps",
            "gambar" => "image.png"
        ],
        [
            "kecepatan" => "20 MBps",
            "gambar" => "image.png"
        ],
        [
            "kecepatan" => "50 MBps",
            "gambar" => "image.png"
        ],
        [
            "kecepatan" => "100 MBps",
            "gambar" => "image.png"
        ],
    ];
    public static function produk()
    {
        return self::$produk;
    }
}
class keunggulan
{
    static $keunggulan = [
        [
            "icon" => "fa-regular fa-thumbs-up fa-2xl",
            'name' => "Reliable",
            'slug' => "Detail Reliable",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae iste ab laboriosam quidem magni veniam sequi et! Tempore, dolorum quaerat?"
        ],
        [
            "icon" => "fa-solid fa-hands-clapping fa-2xl",
            'name' => "Profesional",
            'slug' => "Detail Profesional",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae iste ab laboriosam quidem magni veniam sequi et! Tempore, dolorum quaerat?"
        ],
        [
            "icon" => "fa-regular fa-circle-check fa-2xl",
            'name' => "Terjamin",
            'slug' => "Detail Terjamin",
            "body" => "sam quidem magni veniam sequi et! Tempore, dolorum quaerat?"
        ],

    ];
    static function keunggulan()
    {
        return self::$keunggulan;
    }
}
class produkicon
{
    private static $produkicon = [
        [
            "gambar" => "iconnect.png",
            "name" => "ICONect",
            "body" => "Layanan ini merupakan solusi konektifitas yang memberikan nilai lebih bagi pelanggan. Solusi yang diberikan berupa komunikasi data yang menghubungkan lokasi pelanggan di berbagai wilayah Indonesia. Jaringan end to end fiber optic akan menjamin kelancaran pertukaran informasi yang cepat dan aman..."
        ],
        [
            "gambar" => "iconweb.png",
            "name" => "ICONWeb",
            "body" => "ICONWeb Solusi Koneksi Internet Kebutuhan pelanggan untuk mendapatkan akses informasi dan komunikasi tanpa batas melalui jaringan Internasional dan peering dengan provider local. Merupakan focus utama ICON+ untuk melayani pelanggannya. Network Security Kemanan jaringan yang sangat tinggi karena..."
        ],
        [
            "gambar" => "iconbase.png",
            "name" => "ICONBase",
            "body" => "Infrastruktur yang handal menjadi kunci diamana keamanan data menjadi hal yang penting saat ini. ICON+ menyembahkan berbagai macam layanan, infrastruktur yang aman dan dapat memberikan nilai yang lebih bagi efensiensi bisnis pelanggan. Di dukung oleh data center Tier-3 yang berlokasi..."
        ],
        [
            "gambar" => "iconapp.png",
            "name" => "ICONApps",
            "body" => "Sebagai “ICT Enabler of PLN“, ICON+ memberikan berbagai solusi aplikasi untuk menunjang integrasi proses bisnis PLN. Solusi-solusi tersebut ditujukan untuk dapat senantiasa membantu PLN memberikan pelayanan terbaik bagi pelanggannya. Real Time Online Layanan IconApps mendukung pemantauan..."
        ],

    ];
    public static function plus()
    {
        return self::$produkicon;
    }
}


// class woy
// {
//     private static $produkicon = [
//         [
//             "gambar" => "iconnect.png",
//             "name" => "ICONect",
//             "body" => "Layanan ini merupakan solusi konektifitas yang memberikan nilai lebih bagi pelanggan. Solusi yang diberikan berupa komunikasi data yang menghubungkan lokasi pelanggan di berbagai wilayah Indonesia. Jaringan end to end fiber optic akan menjamin kelancaran pertukaran informasi yang cepat dan aman..."
//         ],
//         [
//             "gambar" => "iconnect.png",
//             "name" => "ICONect",
//             "body" => "Layanan ini merupakan solusi konektifitas yang memberikan nilai lebih bagi pelanggan. Solusi yang diberikan berupa komunikasi data yang menghubungkan lokasi pelanggan di berbagai wilayah Indonesia. Jaringan end to end fiber optic akan menjamin kelancaran pertukaran informasi yang cepat dan aman..."
//         ],
//     ];
//     public  static function plus()
//     {
//         return self::$produkicon;
//     }
// }
