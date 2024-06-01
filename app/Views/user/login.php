<?= $this->extend('templates/main_user');  ?>

<?= $this->section('content');  ?>
<div>
    <div class="hero min-h-screen bg-base-200 px-10">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Login now!</h1>
                <p class="py-6">Selamat datang kembali! Silakan masuk untuk melanjutkan.</p>
            </div>
            <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100  lg:mr-32">
                <form method="post" action="<?= base_url('/login_auth');  ?>" class="card-body">
                    <?php
                    try {
                        echo session()->getFlashdata('data_form')['validation'];
                    } catch (\Throwable $th) {
                    }
                    ?>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input name="email" id="email" type="email" placeholder="email" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input name="password" id="password" type="password" placeholder="password" class="input input-bordered" required />
                        <label class="label">
                            <a href=<?= base_url("/forgot") ?> class="label-text-alt link link-hover">Lupa password?</a>
                        </label>
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>