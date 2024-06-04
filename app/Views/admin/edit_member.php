<?= $this->extend('templates/main_admin');  ?>

<?= $this->section('content');  ?>

<div class="p-10">

  <h1 class="text-3xl font-semibold mb-10">Edit User</h1>

  <form method="post">
    <div class="flex flex-col gap-5">
      <label class="input input-bordered flex items-center gap-2">
        Nama :
        <input value="<?php echo $data_edit['people_name'] ?>" id="people_name" name="people_name" type="text" class="grow" placeholder="Nama User" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Nomor Telepon :
        <input value="<?php echo $data_edit['people_phone'] ?>" id="people_phone" name="people_phone" type="text" class="grow" placeholder="Nomor Telepon" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Email :
        <input value="<?php echo $data_edit['people_email'] ?>" id="people_phone" name="people_email" type="text" class="grow" placeholder="Email" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Kota :
        <input value="<?php echo $data_edit['people_city'] ?>" id="people_city" name="people_city" type="text" class="grow" placeholder="Kota" />
      </label>
      <label class="input input-bordered flex items-center gap-2">
        Akses :
        <input value="<?php
                      if ($data_edit['people_access'] == 'a') {
                        echo 'Admin';
                      } else if ($data_edit['people_access'] == 'm') {
                        echo 'Member';
                      } else {
                        echo 'Goib';
                      } ?>" id="people_access" name="people_access" type="text" class="grow" placeholder="Akses" />
      </label>
      <div class="flex justify-end gap-5">
        <button formaction="<?= base_url('/a/member/edit/confirm');  ?>" class="btn btn-primary" type="submit">Simpan</button>
        <button formmethod="get" formaction="<?= base_url('/a/members');  ?>" class="btn">Batal</button>
      </div>
    </div>
  </form>

</div>

<?= $this->endSection();  ?>