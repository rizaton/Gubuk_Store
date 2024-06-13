<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>

<div class="p-10">

  <h1 class="text-3xl font-semibold mb-10">Edit Promo</h1>

  <form method="post">
    <div class="flex flex-col gap-5">
      <label class="input input-bordered flex items-center gap-2">
        Nama Promo :
        <input type="text" class="grow" value="<?= $data_edit['promo_name']  ?>" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Kode Promo :
        <input type="text" class="grow" value="<?= $data_edit['promo_code']  ?>" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Promo Potongan :
        <input type="text" class="grow" value="<?= $data_edit['promo_price']  ?>" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Promo Terjual :
        <input type="text" class="grow" value="<?= $data_edit['promo_sold']  ?>" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Promo Batasan :
        <input type="text" class="grow" value="<?= $data_edit['promo_limit']  ?>" />
      </label>
      <label class="flex items-center gap-2">
        Status :
        <?php if ($data_edit['promo_active'] == "a") {
          echo '<input value="a" type="radio" name="status" class="radio" checked />';
        } else {
          echo '<input value="a" type="radio" name="status" class="radio" />';
        } ?>
        Aktif
        <?php if ($data_edit['promo_active'] == "i") {
          echo '<input value="i" type="radio" name="status" class="radio" checked />';
        } else {
          echo '<input value="i" type="radio" name="status" class="radio" />';
        } ?>
        Tidak Aktif
      </label>
      <div class="flex justify-end gap-5">
        <button formmethod="post" class="btn btn-primary" formaction="<?= base_url('/a/promo/edit/confirm');  ?>" type="submit">Simpan</button>
        <button formmethod="get" class="btn btn-neutral" formaction="<?= base_url("/a/promos") ?>">Batal</button>
        <button formmethod="post" class="btn btn-error" formaction="<?= base_url("/a/promos/edit/delete") ?>">Hapus</button>
      </div>
    </div>
  </form>

</div>

<?= $this->endSection();  ?>