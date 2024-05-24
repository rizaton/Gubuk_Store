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

            <?php
            if ([] != $productCarts) {
                foreach ($productCarts as $productCart) {
            ?>
                    <form method="post">
                        <div class="grid grid-cols-6 justify-items-center items-center shadow-xl">
                            <input type="checkbox" class="checkbox" />
                            <div class="flex flex-col items-center">
                                <div class="w-20 h-20 lg:w-36 lg:h-36 bg-red-500"></div>
                                <div><?= $productCart['product_name'] ?></div>
                            </div>
                            <!-- <img src="" alt="" /> -->
                            <div>Rp. <?= number_format($productCart['product_price_per_qty']) ?></div>
                            <div class="flex items-center">
                                <input id="cart_id" name="cart_id" class="cart_id" type="text" hidden value="<?= $productCart['cart_id'] ?>">
                                <button formaction="<?= base_url('/m/cart_up_add');  ?>" type="submit" class="btn btn-xs btn-square lg:btn-sm">
                                    <svg class="w-[12px] h-[12px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
                                    </svg>
                                </button>
                                <div class="p-1 lg:p-3"><?= $productCart['cart_qty'] ?></div>
                                <button formaction="<?= base_url('/m/cart_up_sub');  ?>" type="submit" class="btn btn-xs btn-square lg:btn-sm">
                                    <svg class="w-[12px] h-[12px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14" />
                                    </svg>
                                </button>
                            </div>
                            <div>Rp. <?= number_format(($productCart['cart_qty'] * $productCart['product_price_per_qty'])) ?></div>
                            <button formmethod="post" formaction="<?= base_url('/m/cart_del');  ?>" class="btn btn-sm btn-square">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                </svg>
                            </button>
                        </div>
                    </form>
            <?php }
            } else {
                // ISI CART KOSONG
            }
            ?>
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

                    <a role="button" href=<?= base_url("/m/payments") ?> class="btn btn-primary">Bayar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>