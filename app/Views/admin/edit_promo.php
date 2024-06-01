<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>

<div class="p-10">

  <h1 class="text-3xl font-semibold mb-10">Edit Promo</h1>

  <form>
    <div class="flex flex-col gap-5">
      <label class="input input-bordered flex items-center gap-2">
        Nama Promo :
        <input type="text" class="grow" placeholder="Daisy" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Promo Terjual :
        <input type="text" class="grow" placeholder="Daisy" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Promo Aktif :
        <input type="text" class="grow" placeholder="daisy@site.com" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Promo Harga :
        <input type="text" class="grow" placeholder="Daisy" />
      </label>
      <div class="flex justify-end gap-5">
        <button class="btn btn-primary" type="submit">Simpan</button>
        <button class="btn">Batal</button>
      </div>
    </div>
  </form>

</div>

<?= $this->endSection();  ?>