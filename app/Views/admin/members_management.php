<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>
<div class="bg-base-200 p-5">
    <div class="p-5 bg-base-100 border-2 border-gray-700 rounded-xl">
        <div role="tablist" class="tabs tabs-bordered">
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Semua" checked />
            <div role="tabpanel" class="tab-content">
                <label class="input input-bordered flex items-center gap-2 mt-10">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                    </svg>
                </label>
                <div class="overflow-x-auto mt-5 max-h-[55vh]"> <!-- Table -->
                    <table class="table table-pin-cols table-pin-rows">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="text-center">ID User</th>
                                <th class="text-center">Nama User</th>
                                <th class="text-center">Nomor Telepon</th>
                                <th class="text-center">Alamat Email</th>
                                <th class="text-center">Kota</th>
                                <th class="text-center">Point</th>
                                <th class="text-center">Akses User</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($datas as $data) {
                            ?>
                                <tr class="hover border-b-2 border-gray-700">
                                    <th class="text-center">
                                        ID-<?= $data['people_id']  ?>
                                    </th>
                                    <td class="text-center">
                                        <div class="flex items-center gap-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle w-12 h-12">
                                                    <img src="https://img.daisyui.com/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold"><?= $data['people_name']  ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_phone']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_email']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_city']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_points']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?php
                                        if ($data['people_access'] == 'a') {
                                            echo 'Admin';
                                        } else if ($data['people_access'] == 'm') {
                                            echo 'Member';
                                        } else {
                                            echo 'Goib';
                                        }
                                        ?>
                                    </td>
                                    <td class="text-center">
                                        <form method="get">
                                            <input id="people_id" name="people_id" class="stock_status" type="text" hidden value="<?= $data['people_id'] ?>">
                                            <button formaction="<?= base_url('/a/member/edit'); ?>" class="btn btn-primary btn-ghost">Edit</button>
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

            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Admin" />
            <div role="tabpanel" class="tab-content">
                <label class="input input-bordered flex items-center gap-2 mt-10">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                    </svg>
                </label>
                <div class="overflow-x-auto mt-5 max-h-[55vh]"> <!-- Table -->
                    <table class="table table-pin-cols table-pin-rows">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="text-center">ID User</th>
                                <th class="text-center">Nama User</th>
                                <th class="text-center">Nomor Telepon</th>
                                <th class="text-center">Alamat Email</th>
                                <th class="text-center">Kota</th>
                                <th class="text-center">Point</th>
                                <th class="text-center">Akses User</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($admin_data as $data) {
                            ?>
                                <tr class="hover border-b-2 border-gray-700">
                                    <th class="text-center">
                                        ID-<?= $data['people_id']  ?>
                                    </th>
                                    <td class="text-center">
                                        <div class="flex items-center gap-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle w-12 h-12">
                                                    <img src="https://img.daisyui.com/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold"><?= $data['people_name']  ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_phone']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_email']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_city']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_points']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?php
                                        if ($data['people_access'] == 'a') {
                                            echo 'Admin';
                                        } else if ($data['people_access'] == 'm') {
                                            echo 'Member';
                                        } else {
                                            echo 'Goib';
                                        }
                                        ?>
                                    </td>
                                    <th class="text-center">
                                        <form method="get">
                                            <input id="people_id" name="people_id" class="stock_status" type="text" hidden value="<?= $data['people_id'] ?>">
                                            <button formaction="<?= base_url('/a/member/edit'); ?>" class="btn btn-primary btn-ghost">Edit</button>
                                        </form>
                                    </th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Member" />
            <div role="tabpanel" class="tab-content">
                <label class="input input-bordered flex items-center gap-2 mt-10">
                    <input type="text" class="grow" placeholder="Search" />
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                    </svg>
                </label>
                <div class="overflow-x-auto mt-5 max-h-[55vh]"> <!-- Table -->
                    <table class="table table-pin-cols table-pin-rows">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th class="text-center">ID User</th>
                                <th class="text-center">Nama User</th>
                                <th class="text-center">Nomor Telepon</th>
                                <th class="text-center">Alamat Email</th>
                                <th class="text-center">Kota</th>
                                <th class="text-center">Point</th>
                                <th class="text-center">Akses User</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($member_data as $data) {
                            ?>
                                <tr class="hover border-b-2 border-gray-700">
                                    <th class="text-center">
                                        ID-<?= $data['people_id']  ?>
                                    </th>
                                    <td class="text-center">
                                        <div class="flex items-center gap-3">
                                            <div class="avatar">
                                                <div class="mask mask-squircle w-12 h-12">
                                                    <img src="https://img.daisyui.com/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                                                </div>
                                            </div>
                                            <div>
                                                <div class="font-bold"><?= $data['people_name']  ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_phone']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_email']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_city']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?= $data['people_points']  ?>
                                    </td>
                                    <td class="text-center">
                                        <?php
                                        if ($data['people_access'] == 'a') {
                                            echo 'Admin';
                                        } else if ($data['people_access'] == 'm') {
                                            echo 'Member';
                                        } else {
                                            echo 'Goib';
                                        }
                                        ?>
                                    </td>
                                    <th class="text-center">
                                        <form method="get">
                                            <input id="people_id" name="people_id" class="stock_status" type="text" hidden value="<?= $data['people_id'] ?>">
                                            <button formaction="<?= base_url('/a/member/edit'); ?>" class="btn btn-primary btn-ghost">Edit</button>
                                        </form>
                                    </th>
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