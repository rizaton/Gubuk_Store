<?= $this->extend('templates/main_user');  ?>

<?= $this->section('content');  ?>
<div class="flex justify-center py-10">
    <div class="card w-96 bg-base-100 shadow-xl p-10 gap-5">
        <h1 class="text-lg font-bold">Verifikasi Akun</h1>
        <input type="text" placeholder="Masukkan Email Anda" class="input input-bordered w-full max-w-xs" />
        <input type="text" placeholder="Masukkan Nomor Telepon Anda" class="input input-bordered w-full max-w-xs" />
        <div class="card-actions justify-end">
            <button class="btn btn-primary">Check Account</button>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>