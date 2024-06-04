<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>
<div class="file-content">
    <div class="bg-base-200 p-5">
        <div class="p-5 bg-base-100 border-2 border-gray-700 rounded-xl">
            <div role="tablist" class="tabs tabs-bordered"> <!-- Tab List -->
                <?php
                if (
                    (session()->getFlashdata('search_data') != null) && (session()->getFlashdata('search_data')[0] == 'all')
                ) {
                    echo '<input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Semua" checked />';
                } else if (session()->getFlashdata('search_data_all') != null) {
                    echo '<input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Semua" />';
                } else {
                    echo '<input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Semua" checked />';
                }
                ?>
                <div role="tabpanel" class="tab-content">
                    <form action="<?= base_url('/a/stocks') ?>" method="get">
                        <label class="input input-bordered flex items-center gap-2 mt-10">
                            <?php
                            if (session()->getFlashdata('search_data')[1] == '') {
                                echo '<input name="search_data_all" id="search_data" type="text" class="grow" value="" placeholder="Search" />';
                            } else {
                                echo '<input name="search_data_all" id="search_data" type="text" class="grow" value="' . session()->getFlashdata('search_data')[1] . '" placeholder="Search" />';
                            }
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                                <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                            </svg>
                        </label>
                    </form>
                    <div class="overflow-x-auto mt-5 max-h-[55vh]"> <!-- Table -->
                        <table class="table table-pin-cols table-pin-rows">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama Produk</th>
                                    <th class="text-center">Kuantitas</th>
                                    <th class="text-center">Kuantitas Minimal</th>
                                    <th class="text-center">Kuantitas Maksimal</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($stocks as $stock) {
                                    $i++;
                                ?>
                                    <!-- <tr class="hover:base-content"> -->
                                    <tr class="hover border-b-2 border-gray-700"> <!-- hover: error to add color -->
                                        <th class="text-center">
                                            <?= $stock['product_id'];  ?>
                                        </th>
                                        <td>
                                            <div class="flex items-center gap-3">
                                                <div class="avatar">
                                                    <div class="mask mask-squircle w-12 h-12">
                                                        <img src="<?= $stock['imageUrl'];  ?>" alt="product_<?= $stock['product_id'];  ?>" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-sm">
                                                        <?= $stock['product_name'];  ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <?= $stock['product_qty'];  ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $stock['product_min_qty'];  ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $stock['product_max_qty'];  ?>
                                        </td>
                                        <td class="text-center">
                                            Rp. <?= number_format($stock['product_price_per_qty']);  ?>
                                        </td>
                                        <td class="flex items-center justify-center">
                                            <form method="post">
                                                <input id="stock_id" name="stock_id" class="stock_id" type="text" hidden value="<?= $stock['stock_id'] ?>">
                                                <input id="stock_status" name="stock_status" class="stock_status" type="text" hidden value="<?= $stock['stock_active'] ?>">
                                                <button formmethod="get" formaction="<?= base_url('/a/stock/edit'); ?>" class="btn btn-primary btn-ghost">
                                                    Edit
                                                </button>
                                                <button formaction="<?= base_url('/a/stock/toggle'); ?>" class="btn btn-primary btn-ghost">
                                                    <?php if ($stock['stock_active'] == 'a') {
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#ffffff" fill="none">
                                                        <path d="M21.544 11.045C21.848 11.4713 22 11.6845 22 12C22 12.3155 21.848 12.5287 21.544 12.955C20.1779 14.8706 16.6892 19 12 19C7.31078 19 3.8221 14.8706 2.45604 12.955C2.15201 12.5287 2 12.3155 2 12C2 11.6845 2.15201 11.4713 2.45604 11.045C3.8221 9.12944 7.31078 5 12 5C16.6892 5 20.1779 9.12944 21.544 11.045Z" stroke="currentColor" stroke-width="1.5" />
                                                        <path d="M15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12Z" stroke="currentColor" stroke-width="1.5" />
                                                    </svg>';
                                                    } else if ($stock['stock_active'] == 'i') {
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#ffffff" fill="none">
                                                        <path d="M22 8C22 8 18 14 12 14C6 14 2 8 2 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                        <path d="M15 13.5L16.5 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 11L22 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2 13L4 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M9 13.5L7.5 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>';
                                                    } else {
                                                        echo 'ERR';
                                                    }
                                                    ?>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot class="p-36">
                                <tr></tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

                <?php
                if (
                    (session()->getFlashData('search_data') != null) && (session()->getFlashdata('search_data')[0] == 'active')
                ) {
                    echo '<input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Aktif" checked />';
                } else {
                    echo '<input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Aktif" />';
                }
                ?>
                <div role="tabpanel" class="tab-content">
                    <form action="<?= base_url('/a/stocks')  ?>" method="get">
                        <label class="input input-bordered flex items-center gap-2 mt-10">
                            <?php
                            if (session()->getFlashdata('search_data')[1] == '') {
                                echo '<input name="search_data_active" id="search_data" type="text" class="grow" value="" placeholder="Search" />';
                            } else {
                                echo '<input name="search_data_active" id="search_data" type="text" class="grow" value="' . session()->getFlashdata('search_data')[1] . '" placeholder="Search" />';
                            }
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                                <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                            </svg>
                        </label>
                    </form>
                    <div class="overflow-x-auto mt-5 max-h-[55vh]"> <!-- Table -->

                        <table class="table table-pin-cols table-pin-rows">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama Produk</th>
                                    <th class="text-center">Kuantitas</th>
                                    <th class="text-center">Kuantitas Minimal</th>
                                    <th class="text-center">Kuantitas Maksimal</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($activeStocks as $stock) {
                                    $i++;
                                ?>
                                    <tr class="hover border-b-2 border-gray-700"> <!-- hover: error to add color -->
                                        <th class="text-center">
                                            <?= $stock['product_id'];  ?>
                                        </th>
                                        <td>
                                            <div class="flex items-center gap-3">
                                                <div class="avatar">
                                                    <div class="mask mask-squircle w-12 h-12">
                                                        <img src="<?= $stock['imageUrl'];  ?>" alt="product_<?= $stock['product_id'];  ?>" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-sm">
                                                        <?= $stock['product_name'];  ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <?= $stock['product_qty'];  ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $stock['product_min_qty'];  ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $stock['product_max_qty'];  ?>
                                        </td>
                                        <td class="text-center">
                                            Rp. <?= number_format($stock['product_price_per_qty']);  ?>
                                        </td>
                                        <td class="flex items-center justify-center">
                                            <form method="post">
                                                <input id="stock_id" name="stock_id" class="stock_id" type="text" hidden value="<?= $stock['stock_id'] ?>">
                                                <input id="stock_status" name="stock_status" class="stock_status" type="text" hidden value="<?= $stock['stock_active'] ?>">
                                                <button formmethod="get" formaction="<?= base_url('/a/stock/edit'); ?>" class="btn btn-primary btn-ghost">
                                                    Edit
                                                </button>
                                                <button formaction="<?= base_url('/a/stock/toggle'); ?>" class="btn btn-primary btn-ghost">
                                                    <?php if ($stock['stock_active'] == 'a') {
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#ffffff" fill="none">
                                                        <path d="M21.544 11.045C21.848 11.4713 22 11.6845 22 12C22 12.3155 21.848 12.5287 21.544 12.955C20.1779 14.8706 16.6892 19 12 19C7.31078 19 3.8221 14.8706 2.45604 12.955C2.15201 12.5287 2 12.3155 2 12C2 11.6845 2.15201 11.4713 2.45604 11.045C3.8221 9.12944 7.31078 5 12 5C16.6892 5 20.1779 9.12944 21.544 11.045Z" stroke="currentColor" stroke-width="1.5" />
                                                        <path d="M15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12Z" stroke="currentColor" stroke-width="1.5" />
                                                    </svg>';
                                                    } else if ($stock['stock_active'] == 'i') {
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#ffffff" fill="none">
                                                        <path d="M22 8C22 8 18 14 12 14C6 14 2 8 2 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                        <path d="M15 13.5L16.5 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 11L22 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2 13L4 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M9 13.5L7.5 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>';
                                                    } else {
                                                        echo 'ERR';
                                                    }
                                                    ?>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot class="p-36">
                                <tr></tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <?php
                if (
                    (session()->getFlashdata('search_data') != null) && (session()->getFlashdata('search_data')[0] == 'inactive')
                ) {
                    echo '<input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Nonaktif" checked />';
                } else {
                    echo '<input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Nonaktif" />';
                }
                ?>
                <div role="tabpanel" class="tab-content">
                    <form action="<?= base_url('/a/stocks')  ?>" method="get">
                        <label class="input input-bordered flex items-center gap-2 mt-10">
                            <?php
                            if (session()->getFlashdata('search_data')[1] == '') {
                                echo '<input name="search_data_inactive" id="search_data" type="text" class="grow" value="" placeholder="Search" />';
                            } else {
                                echo '<input name="search_data_inactive" id="search_data" type="text" class="grow" value="' . session()->getFlashdata('search_data')[1] . '" placeholder="Search" />';
                            }
                            ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                                <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                            </svg>
                        </label>
                    </form>
                    <div class="overflow-x-auto mt-5 max-h-[55vh]"> <!-- Table -->
                        <table class="table table-pin-cols">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Nama Produk</th>
                                    <th class="text-center">Kuantitas</th>
                                    <th class="text-center">Kuantitas Minimal</th>
                                    <th class="text-center">Kuantitas Maksimal</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($inactiveStocks as $stock) {
                                    $i++;
                                ?>
                                    <!-- <tr class="hover:base-content"> -->
                                    <tr class="hover border-b-2 border-gray-700"> <!-- hover: error to add color -->
                                        <th class="text-center">
                                            <?= $stock['product_id'];  ?>
                                        </th>
                                        <td>
                                            <div class="flex items-center gap-3">
                                                <div class="avatar">
                                                    <div class="mask mask-squircle w-12 h-12">
                                                        <img src="<?= $stock['imageUrl'];  ?>" alt="product_<?= $stock['product_id'];  ?>" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="text-sm">
                                                        <?= $stock['product_name'];  ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <?= $stock['product_qty'];  ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $stock['product_min_qty'];  ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $stock['product_max_qty'];  ?>
                                        </td>
                                        <td class="text-center">
                                            Rp. <?= number_format($stock['product_price_per_qty']);  ?>
                                        </td>
                                        <td class="flex items-center justify-center">
                                            <form method="post">
                                                <input id="stock_id" name="stock_id" class="stock_id" type="text" hidden value="<?= $stock['stock_id'] ?>">
                                                <input id="stock_status" name="stock_status" class="stock_status" type="text" hidden value="<?= $stock['stock_active'] ?>">
                                                <button formmethod="get" formaction="<?= base_url('/a/stock/edit'); ?>" class="btn btn-primary btn-ghost">
                                                    Edit
                                                </button>
                                                <button formaction="<?= base_url('/a/stock/toggle'); ?>" class="btn btn-primary btn-ghost">
                                                    <?php if ($stock['stock_active'] == 'a') {
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#ffffff" fill="none">
                                                        <path d="M21.544 11.045C21.848 11.4713 22 11.6845 22 12C22 12.3155 21.848 12.5287 21.544 12.955C20.1779 14.8706 16.6892 19 12 19C7.31078 19 3.8221 14.8706 2.45604 12.955C2.15201 12.5287 2 12.3155 2 12C2 11.6845 2.15201 11.4713 2.45604 11.045C3.8221 9.12944 7.31078 5 12 5C16.6892 5 20.1779 9.12944 21.544 11.045Z" stroke="currentColor" stroke-width="1.5" />
                                                        <path d="M15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12Z" stroke="currentColor" stroke-width="1.5" />
                                                    </svg>';
                                                    } else if ($stock['stock_active'] == 'i') {
                                                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" color="#ffffff" fill="none">
                                                        <path d="M22 8C22 8 18 14 12 14C6 14 2 8 2 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                        <path d="M15 13.5L16.5 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20 11L22 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M2 13L4 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M9 13.5L7.5 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>';
                                                    } else {
                                                        echo 'ERR';
                                                    }
                                                    ?>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot class="p-36">
                                <tr></tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>