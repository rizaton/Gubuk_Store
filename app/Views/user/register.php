<?= $this->extend('templates/main_user');  ?>

<?= $this->section('content');  ?>
<div>
    <div class="hero min-h-screen bg-base-200 py-10">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Daftar Member Sekarang!</h1>
                <p class="py-6">Mulailah berbelanja sekarang! Lengkapi pendaftaran untuk membuat akun Anda.</p>
            </div>
            <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100  lg:mr-32">
                <form class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama Lengkap</span>
                        </label>
                        <input type="text" placeholder="nama lengkap" class="input input-bordered" id="nama" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" placeholder="email" class="input input-bordered" id="email" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="password" class="input input-bordered" id="password" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Re-Password</span>
                        </label>
                        <input type="password" placeholder="password" class="input input-bordered" id="repassword" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nomor Telepon</span>
                        </label>
                        <input type="text" placeholder="nomor telepon" class="input input-bordered" id="nomortelepon" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Alamat</span>
                        </label>
                        <input type="text" placeholder="alamat lengkap" class="input input-bordered" id="alamat" required />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>