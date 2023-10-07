<header style="background-color: ">
    <div class="navbar">
        <div class="logo">
            <img src="img/logoheader.png" alt="">
        </div>
        <ul class="links">
            <li class="nav-link {{ $title === "Home" ? 'active' : '' }}"><a href="/">Home</a></li>
            <li class="nav-link {{ $title === "Service" ? 'active' : '' }}"><a href="/service">Service</a></li>
            <li class="nav-link {{ $title === "Harga Paket" ? 'active' : '' }}"><a href="/hargapaket">Harga Paket</a></li>
            <li class="nav-link {{ $title === "Peta Wilayah" ? 'active' : '' }}"><a href="/petawilayah">Peta Wilayah</a></li>

        </ul>
        {{-- <div class="action_btn"><a href="">Get Started</a> </div> --}}
        <a href="" class="action_btn">Pesan Sekarang</a>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>

    <div class="dropdown_menu">
        <li><a href="/">Home</a></li>
        <li><a href="/service">Service</a></li>
        <li><a href="/hargapaket">Harga Paket</a></li>
        <li><a href="/contact">Contact</a></li>
        <li>   <a href="#" class="action_btn">Get Started</a></li>
    </div>
</header>
