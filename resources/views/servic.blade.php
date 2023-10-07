@extends('layout.main')
@section ('container')
<div class="atas"></div>
<div class="service">
  
    
  <h2 class="paket">PRODUK KAMI<br>_____________</h2>
   <p>Transformasi PLN Icon Plus dari penyedia jaringan komunikasi menjadi penyedia solusi ICT merupakan langkah yang diambil untuk menjawab tantangan era globalisasi saat ini, dan menjadi jawaban atas semua permasahan ICT bagi industri yang membutuhkan konektivitas dan solusi ICT yang handal di seluruh pelosok Nusantara.</p>      
 
</div>
<div class="serviceid">
    <div class="two">
    <div class="jud">
        <h3>LAYANAN dan PRODUK PLN ICON PLUS</h3>
        <p>PLN Icon Plus membagi produknya untuk segmen pelanggan korporasi (enterprise business) kedalam 4 (empat) kategori produk yaitu ICONect, ICONWeb, ICONBase dan ICONApps. Sementara untuk segmen pelanggan retail (rumah) produk Fixed Broadband Internet yang dikenal dengan ICONNET</p>
    </div>
    <div class="row">
        @foreach ($produkicon as $pro)
            

        <div class="col">
            <div class="col" id="content">
                <img src="img/service/{{ $pro['gambar'] }}" alt="" width="100%">
            </div>
                <h5>{{ $pro['name'] }}</h5>
                <p class="hide">{{ $pro['body'] }}</p>
                <div class="selanjutnya">
                    <a href="/toserviceiconect" class="selanjutnya">Selanjutnya</a>
                </div>
        </div>
        @endforeach
        {{-- <div class="col">
            <div class="col" id="content">
                <img src="/img/service/iconweb.png" alt="" width="100%">
            </div>
                <h5>ICONWeb</h5>
                <p class="hide">ICONWeb Solusi Koneksi Internet Kebutuhan pelanggan untuk mendapatkan akses informasi dan komunikasi tanpa batas melalui jaringan Internasional dan peering dengan provider local. Merupakan focus utama ICON+ untuk melayani pelanggannya. Network Security Kemanan jaringan yang sangat tinggi karena...</p>
                <div class="selanjutnya">
                    <a href="/toservice" class="selanjutnya">Selanjutnya</a>
                </div>
        </div>
        <div class="col">
            <div class="col" id="content">
                <img src="/img/service/iconbase.png" alt="" width="100%">
               
            </div>
                <h5>ICONBase</h5>
                <p class="hide">Infrastruktur yang handal menjadi kunci diamana keamanan data menjadi hal yang penting saat ini. ICON+ menyembahkan berbagai macam layanan, infrastruktur yang aman dan dapat memberikan nilai yang lebih bagi efensiensi bisnis pelanggan. Di dukung oleh data center Tier-3 yang berlokasi...</p>
                <div class="selanjutnya">
                    <a href="/toservice" class="selanjutnya">Selanjutnya</a>
                </div>
        </div> --}}
        {{-- <div class="col">
            <div class="col" id="content">
                <img src="img/service/iconapp.png" alt="" width="100%">
            </div>
                <h5>ICONApps</h5>
                <p class="hide"></p>
                <div class="selanjutnya">
                    <a href="/toservice" class="selanjutnya">Selanjutnya</a>
                </div>
        </div> 
    </div> --}}
    {{-- <div class="row">
            @foreach ($keunggulan as $k)
                <div class="col">
                    <div class="icon">
                        <i class= "{{ $k['icon'] }}"></i>
                    </div>
                    <h5>{{ $k['name'] }}</h5>
                        <p class="hide">{{ $k['body'] }}</p>
                 </div>
            @endforeach
</div>
     --}}
@endsection
