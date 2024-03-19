<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="x-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="img/tukangin_icon.png" type="image/x-icon">
  <title>TUKANGIN AJA SOLUSINYA</title>


  <!-- BOX icone -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <!-- father icon -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- coustom CSS -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- AlpineJS -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- app -->
  <script src="src/app.js" async></script>

</head>

<body>

  <!-- header desain -->
  <header class="header" x-data>
    <img src="img/Projek_1_web.png" alt="" />
    <a href="#" class="logo"></a>

    <i class="bx bx-menu" id="menu-icon"></i>

    <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#project">services</a>
      <a href="#services">project</a>
      <a href="#contact">Contact</a>

    </nav>

    <div class="navbar-extra">
      <a href="#" id="shopping-cart-button">
        <!-- <i class='bx bx-cart-download'></i> -->
        <i data-feather="shopping-cart"></i>
        <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity"></span>
      </a>

    </div>

    <!-- Shopping Cart start -->
    <div class="shopping-cart">
      <template x-for="(item, index) in $store.cart.items" x-keys="index">
        <div class="cart-item">
          <img :src="`img/project/${item.img}`" :alt="item.name">
          <div class="item-detail">
            <h3 x-text="item.name"></h3>
            <div class="item-price">
              <span x-text="rupiah(item.price)"></span> &times;
              <button id="remuve" @click="$store.cart.remuve(item.id)">&minus;</button>
              <span x-text="item.quantity"></span>
              <button id="add" @click="$store.cart.add(item)">&plus;</button>&equals;
              <span x-text="rupiah(item.total)"></span>
            </div>
          </div>
        </div>
      </template>
      <h4 x-show="!$store.cart.items.length" style="margin-top: 1rem;">cart is empty</h4>
      <h4 x-show="$store.cart.items.length">Total : <span x-text="rupiah($store.cart.total)"></span></h4>

      <div class="form-container" x-show="$store.cart.items.length">
        <form action="" id="checkoutForm">
          <input type="hidden" name="items" x-model="JSON.stringify($store.cart.items)">
          <input type="hidden" name="total" x-model="$store.cart.total">
          <h5>Custemer Detail</h5>

          <label for="name">
            <span>Nama</span>
            <input type="text" name="name" id="name">
          </label>

          <label for="email">
            <span>email</span>
            <input type="text" name="email" id="email">
          </label>

          <label for="phone">
            <span>phone</span>
            <input type="number" name="phone" id="phone" autocomplete="off">
          </label>

          <button class="checkout-button disabled" type="submit" id="checkout-button" value="checkout">checkout</button>

        </form>
      </div>
    </div>
    <!-- Shopping Cart end -->

  </header>


  <!-- home section desain -->
  <section class="home" id="home">
    <div class="home-content">
      <h3>Hallo semua Selamat datang Di</h3>
      <h1>TUKANGIN</h1>
      <h3>Kami Menawarkan Jasa <span class="multiple-text"></span></h3>
      <p>
        Ini adalah tempat di mana Anda dapat dengan mudah mendapatkan tukang untuk memperbaiki rumah Anda, kami juga
        dapat memperbaiki perabotan rumah</p>
      <div class="social-media">
        <a href=""><i class="bx bxl-facebook-circle"></i></a>
        <a href=""><i class="bx bxl-instagram"></i></a>
        <a href=""><i class="bx bxl-tiktok"></i></a>
        <a href=""><i class="bx bxl-linkedin-square"></i></a>
      </div>
      <a href="" class="btn">DOWNLOAD</a>
    </div>

    <div class="home-img">
      <img src="img/home.png" alt="" />
    </div>
  </section>

  <!-- abaout section desain -->
  <section class="about" id="about">
    <div class="about-img">
      <img src="img/about.png" alt="" />
    </div>

    <div class="about-content">
      <h2 class="heading">Tentang <span>Kami</span></h2>
      <p>
        Tukangin adalah perusahaan jasa pertukangan yang berlokasi di Pontianak, Kalimantan Barat. Kami menawarkan jasa
        renovasi mural dan cat, serta perbaikan saluran air.
        Kami memiliki tim profesional yang berpengalaman dan terlatih dalam bidang pertukangan. Kami selalu mengutamakan
        kualitas dan kepuasan pelanggan dalam setiap pekerjaan kami.
      </p>
      <a href="#" class="btn">Baca lagi</a>
    </div>
  </section>

  <!-- desain yang pernah di kerjakan -->
  <section class="project" id="project" x-data="project">
    <h2 class="heading">Jasa <span>Kami</span></h2>
    <div class="project-container">

      <template x-for="(item, index) in items" x-key="index">
        <div class="project-box">
          <img :src="`img/project/${item.img}`" :alt="item.name" />
          <div class="project-layer">
            <h4 x-text="item.name"></h4>
            <p>
              Tukangin Menyediakan Jasa Propesional Yang Berkualitas
            </p>
            <div class="project-price"> <span x-text="rupiah(item.price)"></span></div>
            <a href="#" @click.prevent="$store.cart.add(item)">
              <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <use href="img/feather-sprite.svg#shopping-cart" />
              </svg>
            </a>
          </div>
        </div>
      </template>
  </section>



  <!-- services section desain -->
  <section class="services" id="services">
    <h2 class="heading">Project <span>tukangin</span></h2>

    <div class="services-container">
      <div class="services-box">
        <i class="bx bxs-paint-roll"></i>
        <h3>Mural & Cat</h3>
        <p>
          Kami menggunakan cat berkualitas tinggi dari berbagai merek ternama. Kami juga memiliki berbagai macam pilihan
          warna yang bisa Anda pilih sesuai dengan keinginan Anda.
        </p>
        <a href="https://wa.me/081346699080" class="btn">Pesan Sekarang</a>
      </div>

      <div class="services-box">
        <i class="bx bxs-home"></i>
        <h3>Renovasi Rumah</h3>
        <p>
          Kami memiliki tim tukang yang berpengalaman dan ahli dalam bidangnya. Kami bisa membantu Anda merenovasi
          rumah, kantor, toko,
          atau bangunan lainnya sesuai dengan keinginan Anda.
        </p>
        <a href="https://wa.me/081346699080" class="btn">Pesan Sekarang</a>
      </div>

      <div class="services-box">
        <i class="bx bx-wrench"></i>
        <h3>Perbaikan Saluran Air</h3>
        <p>
          Kami memiliki tim teknisi yang berpengalaman dan profesional. Kami bisa membantu Anda mengatasi masalah
          saluran air dengan cepat dan efisien.
        </p>
        <a href="https://wa.me/081346699080" class="btn">Pesan Sekarang</a>
      </div>
    </div>
  </section>


  <!-- contact section desing -->
  <section class="contact" id="contact">
    <h2 class="heading">Contact <span>Us!</span></h2>

    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Full Name" />
        <input type="email" placeholder="Email Address" />
      </div>
      <div class="input-box">
        <input type="number" placeholder="Mobile Numbre" />
        <input type="text" placeholder="Email Subject" />
      </div>
      <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
      <input type="submit" value="Kirim pesan" class="btn" />
    </form>
  </section>

  <!-- footer desing -->
  <footer class="footer">
    <div class="footer-text">
      <p>Copyright &copy; 2023 by Kelompok-5 |All Rights Reserver</p>
    </div>

    <div class="footer-iconTop">
      <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
    </div>
  </footer>


  <!-- father icon -->
  <script>
    feather.replace();
  </script>

  <!-- scroll reveal  -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- typed js -->
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>


  <!-- costome js -->
  <script src="js/script.js"></script>
</body>

</html>