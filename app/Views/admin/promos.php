<?= $this->extend('templates/main_admin');  ?>
<?= $this->section('content');  ?>
<div class="bg-base-200 p-5">
    <div class="p-5 bg-base-100 border-2 border-gray-700 rounded-xl">
        <div role="tablist" class="tabs tabs-bordered">
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Semua Promo" checked />
            <div role="tabpanel" class="tab-content">
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
                            foreach ($all as $data) {
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
                                        <form method="get">
                                            <input id="promo_id" name="promo_id" class="promo_id" type="text" hidden value="<?= $data['promo_id']; ?>">
                                            <button class="btn btn-primary btn-ghost" formaction="<?= base_url('/a/promo/edit'); ?>">Edit</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Aktif" />
            <div role="tabpanel" class="tab-content">
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
                            foreach ($active as $data) {
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
                                        <form method="get">
                                            <input id="promo_id" name="promo_id" class="promo_id" type="text" hidden value="<?= $data['promo_id']; ?>">
                                            <button class="btn btn-primary btn-ghost" formaction="<?= base_url('/a/promo/edit'); ?>">Edit</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Nonaktif" />
            <div role="tabpanel" class="tab-content">
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
                            foreach ($inactive as $data) {
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
                                        <form method="get">
                                            <input id="promo_id" name="promo_id" class="promo_id" type="text" hidden value="<?= $data['promo_id']; ?>">
                                            <button class="btn btn-primary btn-ghost" formaction="<?= base_url('/a/promo/edit'); ?>">Edit</button>
                                        </form>
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
    </div>
</div>
<?= $this->endSection();  ?>