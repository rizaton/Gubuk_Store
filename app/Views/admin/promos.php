<?= $this->extend('templates/main_admin');  ?>
<?= $this->section('content');  ?>
<div class="bg-base-200 p-5">
    <div class="p-5 bg-base-100 border-2 border-gray-700 rounded-xl">
        <div role="tablist" class="tabs tabs-bordered">
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Aktif" checked />
            <div role="tabpanel" class="tab-content">
                <!-- <label class="input input-bordered flex items-center gap-2 mt-10">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                    </svg>
                </label> -->
                <div class="overflow-x-auto mt-5 max-h-[55vh]"> <!-- Table -->
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
                                <th class="text-center">Status Promo</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($datas as $data) {
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
                                        <?php
                                        if ($data['promo_active'] == 'a') {
                                            echo 'Aktif';
                                        } else if ($data['promo_active'] == 'i') {
                                            echo 'Tidak Aktif';
                                        } else {
                                            echo 'Goib';
                                        }
                                        ?>
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

            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Tidak Aktif" />
            <div role="tabpanel" class="tab-content">
                <label class="input input-bordered flex items-center gap-2 mt-10">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                    </svg>
                </label>
                <div class="overflow-x-auto mt-5 max-h-[55vh]"> <!-- Table -->
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
                                <th class="text-center">Status Promo</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($datas as $data) {
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
                                        <?php
                                        if ($data['promo_active'] == 'a') {
                                            echo 'Aktif';
                                        } else if ($data['promo_active'] == 'i') {
                                            echo 'Tidak Aktif';
                                        } else {
                                            echo 'Goib';
                                        }
                                        ?>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-ghost btn-xs" action="<?= base_url(); ?>">Edit</button>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <!-- foot -->
                        <!-- <tfoot>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Job</th>
                                <th>Favorite Color</th>
                                <th></th>
                            </tr>
                        </tfoot> -->

                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection();  ?>