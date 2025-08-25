<nav
    class="fixed w-full flex items-center justify-between top-0 px-5 md:px-10 xl:px-20 py-3 2xl:py-5 z-50 border-b border-zinc-700 backdrop-blur-md">

    <!-- Logo -->
    <a href="/#home" class="hover:scale-105 transition">
        <x-logo />
    </a>

    <!-- Hamburger (mobile) -->
    <div class="md:hidden">
        <input type="checkbox" id="menu-toggle" class="hidden peer" />
        <label for="menu-toggle" class="cursor-pointer flex flex-col gap-1">
            <span class="w-6 h-0.5 bg-white"></span>
            <span class="w-6 h-0.5 bg-white"></span>
            <span class="w-6 h-0.5 bg-white"></span>
        </label>

        <!-- Dropdown menu -->
        <div
            class="absolute right-5 top-full mt-2 w-40 bg-zinc-900 border border-zinc-700 rounded-xl shadow-lg flex-col gap-3 p-4 hidden peer-checked:flex">
            <a href="/#about" class="hover:text-sky-200">About Us</a>
            <a href="/#events" class="hover:text-sky-200">Events</a>
            <a href="/#gallery" class="hover:text-sky-200">Gallery</a>
            <a href="/#merchandise" class="hover:text-sky-200">Merchandise</a>
        </div>
    </div>

    <!-- Menu (desktop) -->
    <div class="hidden md:flex text-sm lg:text-base xl:text-lg gap-5">
        <a href="/#about" class="hover:text-sky-200">About Us</a>
        <a href="/#events" class="hover:text-sky-200">Events</a>
        <a href="/#gallery" class="hover:text-sky-200">Gallery</a>
        <a href="/#merchandise" class="hover:text-sky-200">Merchandise</a>
    </div>
</nav>
