<?php session()->setFlashdata('page', 'promo'); ?>
<?= $this->extend('templates/main_' . $templates);  ?>

<?= $this->section('content');  ?>
<div class="pt-14 mx-16">
    <div class="font-semibold text-2xl">Promo</div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center gap-10 my-10">
        <div class="card max-w-96 bg-base-300 shadow-xl">
            <div class="card-body">
                <h2 class="card-title text-3xl">BELANJAHEMAT25</h2>
                <p class="text-slate-400">Belanja Hemat 25% selama pembukaan</p>
                <p class="text-xs text-red-500">Min. Belanja Rp.150,000.00</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card max-w-96 bg-base-300 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">BELANJAHEMAT25</h2>
                <p>Belanja Hemat 25% selama pembukaan</p>
                <p class="text-sm text-red-500">Min. Belanja Rp.150,000.00</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="card max-w-96 bg-base-300 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">BELANJAHEMAT25</h2>
                <p>Belanja Hemat 25% selama pembukaan</p>
                <p class="text-sm text-red-500">Min. Belanja Rp.150,000.00</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>