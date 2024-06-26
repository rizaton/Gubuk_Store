<?php helper('custom'); ?>
<div class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href=<?= base_url("/") ?>>Home</a></li>
        <li><a href=<?= base_url("/products") ?>>Product</a></li>
        <li><a href=<?= base_url("/about") ?>>About</a></li>
        <li><a href=<?= base_url("/promo") ?>>Promo</a></li>
      </ul>
    </div>
    <a href=<?= base_url("/") ?> class="btn btn-ghost text-xl">Gubuk Store</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a href=<?= base_url("/") ?>>Home</a></li>
      <li><a href=<?= base_url("/products") ?>>Product</a></li>
      <li><a href=<?= base_url("/about") ?>>About</a></li>
      <li><a href=<?= base_url("/promo") ?>>Promo</a></li>
    </ul>
  </div>
  <div class="navbar-end gap-3">
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
        <div class="indicator">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <span class="badge badge-sm indicator-item"><?= session()->get('user_cart')['cart_many']  ?></span>
        </div>
      </div>
      <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
        <div class="card-body">
          <span class="font-bold text-lg"><?= session()->get('user_cart')['cart_many']  ?> Items</span>
          <span class="text-info">Rp.<?= number_format(session()->get('user_cart')['cart_sum'])  ?></span>
          <div class="card-actions">
            <a role="button" href=<?= base_url("/m/cart") ?> class="btn btn-primary">View Cart</a>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
        </div>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li>
          <a href="<?php
                    session()->set('user_data', '');
                    session()->set('login', false);
                    echo base_url('/');
                    ?>">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</div>