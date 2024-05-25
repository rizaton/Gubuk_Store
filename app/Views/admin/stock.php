<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>
<div class="file-content">
    <div role="tablist" class="tabs tabs-bordered"> <!-- Tab List -->
        <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Active" checked />
        <div role="tabpanel" class="tab-content">
            <div class="overflow-x-auto py-6"> <!-- Table -->
                <table class="table table-zebra table-pin-cols">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Product</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Min qty</th>
                            <th class="text-center">Max qty</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($stocks as $stock) {
                            $i++;
                        ?>
                            <!-- <tr class="hover:base-content"> -->
                            <tr class="hover"> <!-- hover: error to add color -->
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
                                            <!-- <div class="font-bold">Hart Hagerty</div> -->
                                            <!-- <div class="text-sm opacity-50">United States</div> -->
                                            <div class="text-sm opacity-50">
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
                                <td class="text-center mr-9">
                                    <button class="btn btn-primary btn-ghost" action="<?= '' ?>">
                                        Edit
                                    </button>
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

        <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Inactive" />
        <div role="tabpanel" class="tab-content">
            <div class="overflow-x-auto py-6"> <!-- Table -->
                <table class="table table-zebra table-pin-cols">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Product</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Min qty</th>
                            <th class="text-center">Max qty</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($stocks as $stock) {
                            $i++;
                        ?>
                            <!-- <tr class="hover:base-content"> -->
                            <tr class="hover"> <!-- hover: error to add color -->
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
                                            <!-- <div class="font-bold">Hart Hagerty</div> -->
                                            <!-- <div class="text-sm opacity-50">United States</div> -->
                                            <div class="text-sm opacity-50">
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
                                <td class="text-center mr-9">
                                    <button class="btn btn-primary btn-ghost" action="<?= '' ?>">
                                        Edit
                                    </button>
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
<?= $this->endSection();  ?>