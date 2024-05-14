<?= $this->extend('templates/main_user');  ?>

<?= $this->section('content');  ?>
<div>
    <div class="flex justify-center py-10">
        <div class="card w-96 bg-base-100 shadow-xl p-10 gap-5">
            <h1 class="text-lg font-bold">Password Baru</h1>
            <form method="post" action="<?= base_url('/forgot_auth');  ?>" class="card-body">
                <input type="text" placeholder="Masukkan Password Baru Anda" class="input input-bordered w-full max-w-xs" />
                <input type="text" placeholder="Masukkan Re-Password Baru Anda" class="input input-bordered w-full max-w-xs" />
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Set Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>