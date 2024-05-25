<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>

<div class="p-10">

  <h1 class="text-3xl font-semibold mb-10">Edit Produk</h1>

  <form>
    <div class="flex flex-col gap-5">
      <label class="input input-bordered flex items-center gap-2">
        Nama Produk :
        <input type="text" class="grow" placeholder="Kecap Bango" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Jumlah Produk :
        <input type="text" class="grow" placeholder="23" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Jumlah Minimal Produk :
        <input type="text" class="grow" placeholder="20" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Jumlah Maksimal Produk :
        <input type="text" class="grow" placeholder="40" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Harga Satuan Produk :
        <input type="text" class="grow" placeholder="7000" />
      </label>

      <div class="flex justify-end gap-5">
        <button class="btn btn-primary" type="submit">Simpan</button>
        <button class="btn">Batal</button>
      </div>
    </div>
  </form>

</div>

<?= $this->endSection();  ?>