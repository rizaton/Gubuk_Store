<div class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href=<?= base_url("/a/dashboard") ?>>Home</a></li>
                <li><a href=<?= base_url("/a/stocks") ?>>Stocks</a></li>
                <li><a href=<?= base_url("/a/members") ?>>Users Management</a></li>
                <li><a href=<?= base_url("/a/promos") ?>>Promo</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl">Gubuk Store</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href=<?= base_url("/a/dashboard") ?>>Home</a></li>
            <li><a href=<?= base_url("/a/stocks") ?>>Stocks</a></li>
            <li><a href=<?= base_url("/a/members") ?>>Users Management</a></li>
            <li><a href=<?= base_url("/a/promos") ?>>Promo</a></li>
        </ul>
    </div>
    <div class="navbar-end gap-3">
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
                <li><a>Logout</a></li>
            </ul>
        </div>
    </div>
</div>