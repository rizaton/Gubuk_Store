<?= $this->extend('templates/main_member');  ?>

<?= $this->section('content');  ?>
<div class="p-5">
    <div class="p-5 bg-base-100 border-2 border-gray-700 rounded-xl">
        <h1 class=" text-lg font-semibold">Total Point: 1,500</h1>
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
                            15,000
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
<?= $this->endSection();  ?>