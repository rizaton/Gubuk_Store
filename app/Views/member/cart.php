<?php session()->setFlashdata('page', 'cart'); ?>
<?= $this->extend('templates/main_member');  ?>

<?= $this->section('content');  ?>
<div>
    <div class="text-4xl font-bold p-10">Keranjang</div>
    <div class="flex flex-col items-center justify-center lg:flex-row lg:items-start lg:justify-between">
        <!-- DETAIL CART PRODUCT -->
        <div class="px-5 lg:w-2/3 flex flex-col gap-5 lg:pl-10 pb-10 text-xs lg:text-sm">
            <!-- TITLE CART PRODUCT -->
            <div class="grid grid-cols-6 justify-items-center justify-self-center items-center">
                <div class="flex gap-3 items-center">
                    <input type="checkbox" class="checkbox" />
                    <div>Pilih Semua</div>
                </div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <button class="btn btn-primary btn-xs lg:btn-sm">Hapus</button>
            </div>
            <!-- END TITLE CART PRODUCT -->
            <!-- LIST CART PRODUCT -->
            <div class="grid grid-cols-6 justify-items-center items-center shadow-xl">
                <input type="checkbox" class="checkbox" />
                <div class="w-20 h-20 lg:w-36 lg:h-36 bg-red-500"></div>
                <!-- <img src="" alt="" /> -->
                <div>Rp.12000</div>
                <div class="flex items-center">
                    <button class="btn btn-xs lg:btn-sm">+</button>
                    <div class="p-1 lg:p-3">3</div>
                    <button class="btn btn-xs lg:btn-sm">-</button>
                </div>
                <div>Rp.36000</div>
                <button class="btn btn-primary btn-sm">X</button>
            </div>
            <div class="grid grid-cols-6 justify-items-center items-center shadow-xl">
                <input type="checkbox" class="checkbox" />
                <div class="w-20 h-20 lg:w-36 lg:h-36 bg-red-500"></div>
                <!-- <img src="" alt="" /> -->
                <div>Rp.12000</div>
                <div class="flex items-center">
                    <button class="btn btn-xs lg:btn-sm">+</button>
                    <div class="p-1 lg:p-3">3</div>
                    <button class="btn btn-xs lg:btn-sm">-</button>
                </div>
                <div>Rp.36000</div>
                <button class="btn btn-primary btn-sm">X</button>
            </div>
            <div class="grid grid-cols-6 justify-items-center items-center shadow-xl">
                <input type="checkbox" class="checkbox" />
                <div class="w-20 h-20 lg:w-36 lg:h-36 bg-red-500"></div>
                <!-- <img src="" alt="" /> -->
                <div>Rp.12000</div>
                <div class="flex items-center">
                    <button class="btn btn-xs lg:btn-sm">+</button>
                    <div class="p-1 lg:p-3">3</div>
                    <button class="btn btn-xs lg:btn-sm">-</button>
                </div>
                <div>Rp.36000</div>
                <button class="btn btn-primary btn-sm">X</button>
            </div>
            <div class="grid grid-cols-6 justify-items-center items-center shadow-xl">
                <input type="checkbox" class="checkbox" />
                <div class="w-20 h-20 lg:w-36 lg:h-36 bg-red-500"></div>
                <!-- <img src="" alt="" /> -->
                <div>Rp.12000</div>
                <div class="flex items-center">
                    <button class="btn btn-xs lg:btn-sm">+</button>
                    <div class="p-1 lg:p-3">3</div>
                    <button class="btn btn-xs lg:btn-sm">-</button>
                </div>
                <div>Rp.36000</div>
                <button class="btn btn-primary btn-sm">X</button>
            </div>
            <!-- END LIST CART PRODUCT -->
        </div>
        <!-- END DETAIL CART PRODUCT -->

        <div class="flex flex-col gap-8 sticky top-0 lg:pr-10">
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