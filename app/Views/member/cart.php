<?= $this->extend('templates/' . $templates);  ?>
<?= session()->setFlashdata('page', 'nama_page'); ?>

<?= $this->section('content');  ?>
<div>
    <div class="text-4xl font-bold p-10">Keranjang</div>
    <div class="flex justify-between">
        <!-- DETAIL CART PRODUCT -->
        <div class="w-2/3 flex flex-col gap-5 pl-10 pb-10">
            <!-- TITLE CART PRODUCT -->
            <div class="grid grid-cols-5 justify-items-center justify-self-center">
                <div>Select</div>
                <div>Produk</div>
                <div>Harga</div>
                <div>Jumlah Barang</div>
                <div>Jumlah Harga</div>
            </div>
            <!-- END TITLE CART PRODUCT -->
            <!-- LIST CART PRODUCT -->
            <div class="grid grid-cols-5 justify-items-center items-center">
                <input type="checkbox" class="checkbox" />
                <div class="w-36 h-36 bg-red-500"></div>
                <!-- <img src="" alt="" /> -->
                <div>Rp.12000</div>
                <div class="flex items-center">
                    <button class="btn btn-square">+</button>
                    <div>3</div>
                    <button class="btn btn-square">-</button>
                </div>
                <div>Rp.36000</div>
            </div>
            <div class="grid grid-cols-5 justify-items-center items-center">
                <input type="checkbox" class="checkbox" />
                <div class="w-36 h-36 bg-red-500"></div>
                <!-- <img src="" alt="" /> -->
                <div>Rp.12000</div>
                <div class="flex items-center">
                    <button class="btn btn-square">+</button>
                    <div>3</div>
                    <button class="btn btn-square">-</button>
                </div>
                <div>Rp.36000</div>
            </div>
            <div class="grid grid-cols-5 justify-items-center items-center">
                <input type="checkbox" class="checkbox" />
                <div class="w-36 h-36 bg-red-500"></div>
                <!-- <img src="" alt="" /> -->
                <div>Rp.12000</div>
                <div class="flex items-center">
                    <button class="btn btn-square">+</button>
                    <div>3</div>
                    <button class="btn btn-square">-</button>
                </div>
                <div>Rp.36000</div>
            </div>
            <div class="grid grid-cols-5 justify-items-center items-center">
                <input type="checkbox" class="checkbox" />
                <div class="w-36 h-36 bg-red-500"></div>
                <!-- <img src="" alt="" /> -->
                <div>Rp.12000</div>
                <div class="flex items-center">
                    <button class="btn btn-square">+</button>
                    <div>3</div>
                    <button class="btn btn-square">-</button>
                </div>
                <div>Rp.36000</div>
            </div>
            <!-- END LIST CART PRODUCT -->
        </div>
        <!-- END DETAIL CART PRODUCT -->

        <div class="pr-10 flex flex-col gap-8">
            <!-- PROMO SECTION -->
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Kode Promo</h2>
                    <p>Masukkan kode promo anda disini!</p>
                    <input type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
                    <button class="btn btn-primary">Pakai</button>
                </div>
            </div>
            <!-- CART TOTAL SECTION -->
            <div class="card w-96 bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Total Keranjang</h2>
                    <div class="">
                        <div class="flex justify-between">
                            <div>Subtotal Keranjang</div>
                            <div>Rp.144000</div>
                        </div>
                        <div class="flex justify-between">
                            <div>Diskon Promo</div>
                            <div>Rp.14000</div>
                        </div>
                        <div class="divider"></div>
                        <div class="flex justify-between font-bold">
                            <div>Total Keranjang</div>
                            <div>Rp.130000</div>
                        </div>
                    </div>

                    <button class="btn btn-primary">Bayar Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>