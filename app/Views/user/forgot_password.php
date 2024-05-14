<?= $this->extend('templates/main_user');  ?>

<?= $this->section('content');  ?>
<div class="flex justify-center py-10">
    <div class="card w-550 bg-base-100 shadow-xl p-10 gap-5">
        <h1 class="text-lg font-bold">Verifikasi Akun</h1>
        <form method="post" action="<?= base_url('/forgot_auth');  ?>" class="card-body">
            <input id="city" name="city" type="text" placeholder="Masukkan Kota Asal Anda" class="input input-bordered w-full max-w-xs" />
            <input id="email" name="email" type="text" placeholder="Masukkan Email Anda" class="input input-bordered w-full max-w-xs" />
            <input id="phone" name="phone" type="text" placeholder="Masukkan Nomor Telepon Anda" class="input input-bordered w-full max-w-xs" />
            <div class="card-actions justify-end">
                <button type="submit" class="btn btn-primary">Check Account</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection();  ?>