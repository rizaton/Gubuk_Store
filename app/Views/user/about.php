<?php session()->setFlashdata('page', 'about'); ?>
<?= $this->extend('templates/main_' . $templates);  ?>

<?= $this->section('content');  ?>
<div>
    <div class="hero min-h-96" style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Tentang Gubuk Store</h1>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="lg:col-span-2">
            <div class="text-5xl font-bold p-10">Tentang Gubuk Store</div>
            <div class="px-10 pb-10">
                Selamat datang di Gubuk Store, rumahnya kebutuhan sembako Anda dengan sentuhan digital yang nyaman dan mudah. Kami adalah penyedia solusi online untuk memenuhi kebutuhan harian Anda dengan berbagai produk sembako berkualitas.

                Gubuk Store lahir dari semangat untuk memberikan akses yang mudah dan nyaman bagi semua orang untuk memperoleh barang-barang sembako dengan cepat dan efisien. Kami berkomitmen untuk memberikan layanan yang dapat diandalkan serta kualitas produk yang terjamin, sehingga Anda dapat memiliki pengalaman belanja yang memuaskan setiap kali berkunjung ke Gubuk Store.
            </div>
        </div>
        <div class="m-auto">
            <img src="<?= base_url() ?>assets/img/about1.webp" class="w-[500px]" />
        </div>
        <div class="p-10">
            <div class="text-5xl font-bold">Visi Kami</div>
            <br>
            <div>Visi kami adalah menjadi mitra terpercaya bagi masyarakat dalam memenuhi kebutuhan sembako mereka secara mudah dan efisien. Kami ingin menciptakan pengalaman belanja online yang menyenangkan dan tanpa repot bagi pelanggan kami, sambil tetap memastikan ketersediaan produk berkualitas tinggi dengan harga yang terjangkau.</div>
        </div>
        <div class="p-10">
            <div class="text-5xl font-bold">Misi Kami</div>
            <br>
            <ul class="list-decimal">
                <li>Memberikan Kemudahan: Kami berusaha untuk menyediakan platform belanja online yang ramah pengguna, intuitif, dan mudah diakses bagi semua kalangan, sehingga setiap pelanggan dapat menemukan apa yang mereka cari dengan cepat dan tanpa kesulitan.</li>
                <br />
                <li>Menjamin Kualitas: Kami bekerja erat dengan para pemasok terpercaya untuk memastikan bahwa setiap produk yang kami tawarkan memenuhi standar kualitas yang tinggi. Kepuasan pelanggan adalah prioritas utama kami, dan kami tidak berkompromi dalam hal ini.</li>
                <br />
                <li>Menyediakan Pilihan yang Luas: Kami menyadari bahwa setiap pelanggan memiliki preferensi dan kebutuhan yang berbeda. Oleh karena itu, kami berkomitmen untuk menyediakan beragam produk sembako dengan pilihan yang luas, sehingga setiap orang dapat menemukan barang yang tepat sesuai dengan kebutuhan mereka.</li>
                <br />
                <li>Memberikan Pelayanan Terbaik: Kami percaya bahwa pelayanan yang baik adalah kunci keberhasilan dalam bisnis. Tim kami siap membantu Anda dengan setiap pertanyaan atau masalah yang Anda miliki, dan kami berkomitmen untuk memberikan pelayanan pelanggan yang ramah, responsif, dan profesional.</li>
            </ul>
        </div>
        <div class="m-auto">
            <img src="<?= base_url() ?>assets/img/about2.webp" class="w-[500px] mb-10" />

        </div>

    </div>

    <div>

    </div>
</div>
<?= $this->endSection();  ?>