<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>
<div>
    <div class=" py-5 lg:flex lg:flex-col">
        <div class="stats shadow">

            <div class="stat">
                <div class="stat-figure text-secondary"> <!-- ICON STOK -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="stat-title">Total Stok</div>
                <div class="stat-value"><?= $total_stock;  ?></div>
                <!-- <div class="stat-desc">Jan 1st - Feb 1st</div> -->
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary"> <!-- ICON ORANG-->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                    </svg>
                </div>
                <div class="stat-title">Total Member</div>
                <div class="stat-value"><?= $total_member;  ?></div>
                <!-- <div class="stat-desc">↗︎ 400 (22%)</div> -->
            </div>

            <div class="stat">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                    </svg>
                </div>
                <div class="stat-title">New Registers</div>
                <div class="stat-value">1,200</div>
                <div class="stat-desc">↘︎ 90 (14%)</div>
            </div>

        </div>
    </div>
    <div class="m-96 p-5 bg-base-100 border-2 border-gray-700 rounded-xl">
        <div class="py-5">
            <h1 class=" text-lg font-semibold">Promo Aktif</h1>
        </div>
        <div class="overflow-x-auto">
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
    <div class="p-5 pb-10">
        <div class="py-5">
            <h1 class=" text-lg font-semibold">Draft Penjualan</h1>
        </div>
        <div class="overflow-x-auto p-5">
            <table class="table table-xs">
                <thead>
                    <tr class=" border">
                        <th class="border-x-border-w-tipis text-center">#</th>
                        <th class="border-x-border-w-tipis text-center">ID</th>
                        <th class="border-x-border-w-tipis text-center">Name Product</th>
                        <th class="border-x-border-w-tipis text-center">Qty</th>
                        <th class="border-x-border-w-tipis text-center">Min qty</th>
                        <th class="border-x-border-w-tipis text-center">Max qty</th>
                        <th class="border-x-border-w-tipis text-center">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 10; $i++) {

                    ?>
                        <tr>
                            <th class="border-x-border-w-tipis text-center"><?= $i + 1; ?></th>
                            <td class="border-x-border-w-tipis text-center">1</td>
                            <td class="border-x-border-w-tipis">Quality Control Specialist</td>
                            <td class="border-x-border-w-tipis text-center">50</td>
                            <td class="border-x-border-w-tipis text-center">1</td>
                            <td class="border-x-border-w-tipis text-center">10</td>
                            <td class="border-x-border-w-tipis text-center">50000000</td>
                            <th class="border-x-border-w-tipis text-center"><button class="btn btn-ghost btn-xs">Edit</button></th>
                        </tr>
                    <?php } ?>

                </tbody>
                <tfoot class=" border-t border-white">
                    <tr></tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>