<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>
<div>
    <div>
        <div role="tablist" class="tabs tabs-bordered p-5">
            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Aktif" checked />
            <div role="tabpanel" class="tab-content p-10">
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
                            <?php
                            $i = 1;
                            foreach ($data as $stock) {
                            ?>
                                <tr>
                                    <th class="border-x-border-w-tipis text-center"><?= $i++ ?></th>
                                    <td class="border-x-border-w-tipis text-center">1</td>
                                    <td class="border-x-border-w-tipis">Quality Control Specialist</td>
                                    <td class="border-x-border-w-tipis text-center">50</td>
                                    <td class="border-x-border-w-tipis text-center">1</td>
                                    <td class="border-x-border-w-tipis text-center">10</td>
                                    <td class="border-x-border-w-tipis text-center">50000000</td>
                                    <th class="border-x-border-w-tipis text-center"><button class="btn btn-ghost btn-xs" action="<?php echo base_url('c_add' . $stock['stock_id']); ?>">Edit</button></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot class=" border-t border-white">
                            <tr></tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <input type="radio" name="my_tabs_1" role="tab" class="tab" aria-label="Tidak Aktif" />
            <div role="tabpanel" class="tab-content p-10">
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
                            <?php
                            $i = 1;
                            foreach ($data as $stock) {
                            ?>
                                <tr>
                                    <th class="border-x-border-w-tipis text-center"><?= $i++ ?></th>
                                    <td class="border-x-border-w-tipis text-center">1</td>
                                    <td class="border-x-border-w-tipis">Quality Control Specialist</td>
                                    <td class="border-x-border-w-tipis text-center">50</td>
                                    <td class="border-x-border-w-tipis text-center">1</td>
                                    <td class="border-x-border-w-tipis text-center">10</td>
                                    <td class="border-x-border-w-tipis text-center">50000000</td>
                                    <th class="border-x-border-w-tipis text-center"><button class="btn btn-ghost btn-xs" action="<?php echo base_url('c_add' . $stock['stock_id']); ?>">Edit</button></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot class=" border-t border-white">
                            <tr></tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
<?= $this->endSection();  ?>