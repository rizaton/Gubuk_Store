<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>

<div class="p-10">

  <h1 class="text-3xl font-semibold mb-10">Edit Promo</h1>

  <form>
    <div class="flex flex-col gap-5">
      <label class="input input-bordered flex items-center gap-2">
        Nama Promo :
        <input type="text" class="grow" value="<?= ''  ?>" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Kode Promo :
        <input type="text" class="grow" value="Testing" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Promo Potongan :
        <input type="text" class="grow" value="Testing" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Promo Terjual :
        <input type="text" class="grow" value="Testing" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Promo Batasan :
        <input type="text" class="grow" value="Testing" />
      </label>
      <label class="flex items-center gap-2">
        Status :
        <input type="radio" name="radio-1" class="radio" checked />
        Aktif
        <input type="radio" name="radio-1" class="radio" />
        Tidak Aktif
      </label>
      <div class="flex justify-end gap-5">
        <button class="btn btn-primary" type="submit">Simpan</button>
        <button class="btn">Batal</button>
      </div>
    </div>
  </form>

</div>

<?= $this->endSection();  ?>