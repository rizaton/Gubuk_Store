<?php session()->setFlashdata('page', 'products'); ?>
<?= $this->extend('templates/main_' . $templates);  ?>

<?= $this->section('content');  ?>
<div>
    <div class="search flex items-center justify-center w-full max-w-full">
        <form action="#" method="post" class="search flex items-center justify-center">
            <div class="join">
                <div class="w-96 max-w-screen-sm">
                    <input class="input input-bordered join-item w-full max-w-full" placeholder="Cari Produk" type="text" />
                </div>
                <select class="select select-bordered join-item">
                    <option disabled selected>Filter</option>
                    <option>Harga Tertinggi</option>
                    <option>Harga Terendah</option>
                    <option>Terlaris</option>
                </select>
                <div class="indicator">
                    <button class="btn join-item" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
    <div class="products flex flex-row flex-wrap gap-6 justify-between px-11">
        <?php
        // foreach ($products as $product) { 
        ?>
        <!-- 
            <div class="grow card w-80 bg-base-300 shadow-xl">
                <figure class="px-10 pt-10">
                    <img src="<?php //echo $product['image_url']  
                                ?>" alt="Shoes" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-left">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions">
                        <button class="btn btn-primary action="<?php //echo base_url('b_now' . $product['id']);
                                                                ?>">Beli Sekarang</button>
                        <button class="btn btn-secondary" action="<?php //echo base_url('c_add' . $product['id']); 
                                                                    ?>">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div> 
        -->
        <?php
        //} 
        ?>
        <?php for ($i = 0; $i < 20; $i++) { ?>
            <div class="grow card w-80 bg-base-300 shadow-xl">
                <figure class="px-10 pt-10">
                    <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-left">
                    <h2 class="card-title">Shoes!</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions">
                        <a role="button" href="/m/cart" class="btn btn-primary">Beli Sekarang</a>
                        <button class="btn btn-secondary">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?= $this->endSection();  ?>