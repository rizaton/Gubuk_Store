<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>

<div class="p-10">

  <h1 class="text-3xl font-semibold mb-10">Edit Member</h1>

  <form>
    <div class="flex flex-col gap-5">
      <label class="input input-bordered flex items-center gap-2">
        Nama :
        <input type="text" class="grow" placeholder="KAL" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Nomor Telepon :
        <input type="text" class="grow" placeholder="0892814941" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Email :
        <input type="text" class="grow" placeholder="daisy@site.com" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Alamat :
        <input type="text" class="grow" placeholder="Jaksel" />
      </label>
      <div class="flex justify-end gap-5">
        <button class="btn btn-primary" type="submit">Simpan</button>
        <button class="btn">Batal</button>
      </div>
    </div>
  </form>

</div>

<?= $this->endSection();  ?>