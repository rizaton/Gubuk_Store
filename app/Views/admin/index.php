<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>
<div class="flex flex-col justify-center gap-20 lg:flex-row">
    <div class="">

        <div class="py-5 max-w-full">
            <div class="flex flex-col shadow gap-10">


                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" color="#ffffff" fill="none">
                            <path d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z" stroke="currentColor" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div class="stat-title">Total Member</div>
                    <div class="stat-value">4,200</div>
                    <div class="stat-desc">↗︎ 400 (22%)</div>
                </div>

                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30" height="30" color="#ffffff" fill="none">
                            <path d="M20.198 3H3.802C3.05147 3 2.6762 3 2.41637 3.17726C2.28768 3.26505 2.18133 3.38109 2.10567 3.51627C1.9529 3.78921 1.99024 4.15793 2.06493 4.89537C2.18958 6.12624 2.2519 6.74168 2.57823 7.18168C2.74084 7.40095 2.94701 7.58519 3.18414 7.72315C3.65999 8 4.28635 8 5.53908 8H18.4609C19.7136 8 20.34 8 20.8159 7.72315C21.053 7.58519 21.2592 7.40095 21.4218 7.18168C21.7481 6.74168 21.8104 6.12624 21.9351 4.89537C22.0098 4.15793 22.0471 3.78921 21.8943 3.51627C21.8187 3.38109 21.7123 3.26505 21.5836 3.17726C21.3238 3 20.9485 3 20.198 3Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 8L3 13.0408C3 16.7928 3 18.6688 4.17157 19.8344C5.34315 21 7.22876 21 11 21H13C16.7712 21 18.6569 21 19.8284 19.8344C21 18.6688 21 16.7928 21 13.0408V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 11H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </div>
                    <div class="stat-title">Stock Warning</div>
                    <div class="stat-value">31K</div>
                    <div class="stat-desc">Jan 1st - Feb 1st</div>
                </div>

            </div>
        </div>
    </div>

    <div class="">

        <div class="p-5">
            <div class="p-5 bg-base-100 border-2 border-gray-700 rounded-xl">
                <h1 class=" text-lg font-semibold">Promo Aktif</h1>
                <div class="overflow-x-auto mt-5 max-h-[55vh]">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Nama Promo</th>
                                <th class="text-center">Kode Promo</th>
                                <th class="text-center">Potongan</th>
                                <th class="text-center">Promo Terpakai</th>
                                <th class="text-center">Batasan Promo</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($promos as $data) {
                            ?>
                                <tr class="hover border-b-2 border-gray-700">
                                    <th class="text-center">
                                        <?= $data['promo_id'];  ?>
                                    </th>
                                    <td class="text-center">
                                        <?= $data['promo_name'];  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['promo_code'];  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['promo_price'];  ?>%
                                    </td>
                                    <td class="text-center">
                                        <?= $data['promo_sold'];  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['promo_limit'];  ?>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-ghost btn-xs" action="<?= base_url(); ?>">Edit</button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="p-5">
            <div class="p-5 bg-base-100 border-2 border-gray-700 rounded-xl">
                <h1 class=" text-lg font-semibold">Daftar Transaksi</h1>
                <div class="overflow-x-auto mt-5 max-h-[55vh]">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Tanggal Transaksi</th>
                                <th class="text-center">Promo Digunakan</th>
                                <th class="text-center">Akumulasi Point</th>
                                <th class="text-center">Total Transaksi</th>
                                <th class="text-center">Produk</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // foreach ($promos as $data) {
                            ?>
                            <tr class="hover border-b-2 border-gray-700">
                                <th class="text-center">
                                    1
                                </th>
                                <td class="text-center">
                                    08:56:55_28-05-2024
                                </td>
                                <td class="text-center">
                                    BELANJAYATIAPHARI
                                </td>
                                <td class="text-center">
                                    1,500
                                </td>
                                <td class="text-center">
                                    Rp. 150,000.00
                                </td>
                                <td class="text-center">
                                    Ayam Negeri Utuh Frozen 1 kg
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-ghost btn-xs" action="<?= base_url(); ?>">Edit</button>
                                </td>
                            </tr>
                            <?php
                            // }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
</div>
<?= $this->endSection();  ?>