<?php session()->setFlashdata('page', 'products'); ?>
<?= $this->extend('templates/main_' . $templates);  ?>

<?= $this->section('content');  ?>
<div>
    <div class="search flex items-center justify-center w-full max-w-full pt-10">
        <form action="<?= base_url('/products')  ?>" method="get" class="search flex items-center justify-center">
            <div class="join">
                <div class="w-96 max-w-screen-sm">
                    <?php
                    if (session()->getFlashdata('search_value') == '') {
                        echo '<input name="search_data" id="search_data" class="input input-bordered join-item w-full max-w-full" value="" placeholder="Cari Produk" type="text" />';
                    } else {
                        echo '<input name="search_data" id="search_data" class="input input-bordered join-item w-full max-w-full" value="' . session()->getFlashdata('search_value') . '" placeholder="Cari Produk" type="text" />';
                    }
                    ?>
                </div>
                <select id="filter_search" name="filter_search" class="select select-bordered join-item">
                    <option disabled selected>Filter</option>
                    <option value="highest">Harga Tertinggi</option>
                    <option value="lowest">Harga Terendah</option>
                </select>
                <div class="indicator">
                    <button class="btn btn-primary join-item" type="submit">
                        Cari
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="products flex flex-row flex-wrap gap-6 justify-between p-10">
        <?php
        foreach ($products as $product) {
        ?>
            <div class="grow card w-80 bg-base-300 shadow-xl">
                <figure class="px-10 pt-10">
                    <img src="<?= $product['imageUrl'] ?>" alt="<?= $product['product_name'];  ?>" class="rounded-xl" />
                </figure>
                <div class="card-body items-center text-left">
                    <h2 class="card-title"><?= $product['product_name'];  ?></h2>
                    <p>Rp.<?= number_format($product['product_price_per_qty']); ?></p>
                    <div class="card-actions">
                        <button class="btn btn-primary" action=" <?php echo base_url('b_now' . $product['product_id']); ?>">Beli Sekarang</button>
                        <button class="btn btn-secondary" action="<?php echo base_url('c_add' . $product['product_id']); ?>">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?= $this->endSection();  ?>