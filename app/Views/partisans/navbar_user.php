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
  <div class="navbar-end gap-3 pr-3">
    <a role="button" href=<?= base_url("/login") ?> class="btn btn-primary">Login</a>
    <a role="button" href=<?= base_url("/register") ?> class="btn">Daftar</a>
  </div>
</div>