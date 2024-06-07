<?= $this->extend('templates/main_' . $templates);  ?>

<?= $this->section('content');  ?>
<div>
  <!-- HERO COMPONENT -->
  <div>
    <!-- <div class="hero min-h-screen bg-base-200">
      <div class="hero-content text-center">
        <div class="max-w-2xl">
          <h1 class="text-7xl font-bold">Gubuk Store</h1>
          <p class="text-lg py-6">Temukan segala kebutuhan sembako Anda dengan mudah dan praktis di sini. Dari beras hingga minyak goreng, kami menyediakan berbagai produk berkualitas dengan harga terjangkau. Nikmati kemudahan berbelanja online tanpa repot dan antre.</p>
          <button class="btn btn-primary">Beli Sekarang</button>
        </div>
      </div>
    </div> -->
    <div class="hero min-h-[80vh] bg-base-200 py-10 px-10">
      <div class="hero-content flex-col lg:flex-row-reverse">
        <img src="<?= base_url() ?>assets/img/hero-image-1.png" class="max-w-sm pl-10" />
        <div>
          <h1 class="text-5xl font-bold">Gubuk Store</h1>
          <p class="py-6">Temukan segala kebutuhan sembako Anda dengan mudah dan praktis di sini. Dari beras hingga minyak goreng, kami menyediakan berbagai produk berkualitas dengan harga terjangkau. Nikmati kemudahan berbelanja online tanpa repot dan antre.</p>
          <a role="button" href=<?= base_url("/products") ?> class="btn btn-primary">Beli Sekarang</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END HERO COMPONENT -->
  <!-- PRODUCTS COMPONENT -->
  <!-- END PRODUCTS COMPONENT -->
  <!-- BENEFITS COMPONENT -->
  <div class="max-w-1xl p-14">
    <div class="pb-10 text-4xl font-bold text-center">Manfaat Beli Sembako di Gubuk Store Ini</div>
    <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">

      <li>
        <div class="timeline-middle">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="timeline-start md:text-end mb-10">
          <div class="text-lg font-black">Kemudahan Akses, tanpa ribet mengantre</div>
          Member dapat mengakses toko sembako digital kapan saja dan di mana saja melalui perangkat seluler atau komputer dengan koneksi internet. Ini menghemat waktu dan tenaga pelanggan karena tidak perlu pergi ke toko fisik.
        </div>
        <hr />
      </li>

      <li>
        <hr />
        <div class="timeline-middle">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="timeline-end mb-10">
          <div class="text-lg font-black">Promo khusus untuk member</div>
          Terdapat promo khusus untuk member Gubuk Store sesuai dengan syarat dan ketentuan yang berlaku.
        </div>
        <hr />
      </li>

      <li>
        <hr />
        <div class="timeline-middle">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="timeline-start md:text-end mb-10">
          <div class="text-lg font-black">Transaksi yang Aman dan Amanah</div>
          Dilengkapi dengan sistem pembayaran yang aman, seperti pembayaran online melalui kartu kredit, transfer bank, atau metode pembayaran elektronik lainnya. Ini memberikan rasa aman kepada pelanggan bahwa informasi pembayaran mereka dijamin keamanannya.
        </div>
        <hr />
      </li>
    </ul>
  </div>
  <!-- END BENEFITS COMPONENT -->
  <!-- PROMO-MEMBER COMPONENT -->
  <div class="pt-14">
    <div class="hero min-h-[80vh]" style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
      <div class="hero-overlay bg-opacity-60"></div>
      <div class="hero-content text-left text-neutral-content bg-green-800">
        <div class="max-w-2xl p-10">
          <h1 class="mb-5 text-5xl font-bold">Dapatkan Promo Tiap Belanja</h1>
          <p class="mb-5">Kumpulkan point - point yang bisa anda tukarkan untuk promo/diskon. Untuk penjelasan lebih lanjut silahkan cek pada laman promo.</p>
          <a role="button" href=<?= base_url("/promo") ?> class="btn btn-primary">Lihat Detail Promo</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END PROMO-MEMBER COMPONENT -->
</div>
<?= $this->endSection();  ?>