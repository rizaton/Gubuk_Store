<?php session()->setFlashdata('page', 'promo'); ?>
<?= $this->extend('templates/main_' . $templates);  ?>

<?= $this->section('content');  ?>
<div class="pt-14">
    <div class="hero min-h-[80vh]" style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-left text-neutral-content bg-green-800">
            <div class="max-w-2xl p-10">
                <h1 class="mb-5 text-5xl font-bold">Promo</h1>
                <p class="text-wrap">Nikmati diskon hemat 25% selama masa pembukaan di Gubuk Store dengan kode promo BELANJAHEMAT25! Hanya dengan belanja minimal Rp150.000, Anda bisa mendapatkan potongan harga yang fantastis. Jangan lewatkan kesempatan ini untuk berbelanja sembako berkualitas dengan harga lebih terjangkau. Ayo, manfaatkan promo ini sekarang dan rasakan hematnya belanja di Gubuk Store!</p>
                <p class="mt-3">Belanja Hemat 25% selama pembukaan - BELANJAHEMAT25
                </p>
                <p class="mb-5">
                    (Min. Belanja Rp.150,000.00)
                </p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>