<?= $this->extend('templates/main_user');  ?>

<?= $this->section('content');  ?>
<div>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Daftar Member Sekarang!</h1>
                <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            </div>
            <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100  lg:mr-32">
                <form method="post" action="<?= base_url('/register_auth');  ?>" class="card-body">
                    <?php
                    try {
                        echo session()->getFlashdata('data_form')['validation'];
                    } catch (\Throwable $th) {
                    } ?>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nama Lengkap</span>
                        </label>
                        <input id="fullname" name="fullname" type="text" placeholder="nama lengkap" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Kota Asal</span>
                        </label>
                        <input id="city" name="city" type="text" placeholder="kota asal" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Nomor Telefon</span>
                        </label>
                        <input name="phone" type="text" placeholder="nomor telefon" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input name="email" type="email" placeholder="email" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input name="password" type="password" placeholder="password" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Re-Password</span>
                        </label>
                        <input name="reenterpassword" type="password" placeholder="password" class="input input-bordered" required />
                    </div>
                    <div class="form-control mt-6">
                        <button onclick="" type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();  ?>