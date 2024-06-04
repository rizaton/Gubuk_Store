<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>

<div class="p-10">

  <h1 class="text-3xl font-semibold mb-10">Ubah Stok</h1>

  <form method="post">
    <div class="flex flex-col gap-5">
      <label class="input input-bordered flex items-center gap-2">
        Nama Produk :
        <input id="product_name" name="product_name" type="text" class="grow" placeholder="" value="<?= $data_edit['product_name']  ?>" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Jumlah Produk :
        <input id="product_qty" name="product_qty" type="text" class="grow" placeholder="" value="<?= $data_edit['product_qty']  ?>" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Jumlah Minimal Produk :
        <input id="product_min_qty" name="product_min_qty" type="text" class="grow" placeholder="" value="<?= $data_edit['product_min_qty']  ?>" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Jumlah Maksimal Produk :
        <input id="product_max_qty" name="product_max_qty" type="text" class="grow" placeholder="" value="<?= $data_edit['product_max_qty']  ?>" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Harga Satuan Produk :
        <input id="product_price_per_qty" name="product_price_per_qty" type="text" class="grow" placeholder="" value="<?= $data_edit['product_price_per_qty']  ?>" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Link Gambar Produk :
        <input id="imageUrl" name="imageUrl" type="text" class="grow" placeholder="" value="<?= $data_edit['imageUrl']  ?>" />
      </label>
      <div class="flex justify-end gap-5">
        <input id="stock_id" name="stock_id" class="stock_id" type="text" hidden value="<?= $data_edit['stock_id'] ?>">
        <input id="product_id" name="product_id" class="stock_id" type="text" hidden value="<?= $data_edit['product_id'] ?>">
        <button formaction="<?= base_url('/a/stock/edit/confirm');  ?>" class="btn btn-primary" type="submit">Simpan</button>
        <button formmethod="get" formaction="<?= base_url('/a/stocks');  ?>" class="btn">Batal</button>
      </div>

    </div>
  </form>

</div>

<?= $this->endSection();  ?>