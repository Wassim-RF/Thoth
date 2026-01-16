<header class="flex items-center justify-between px-6 py-3 bg-white border-b border-gray-200">
    <a href="/home" class="flex items-center gap-2 cursor-pointer">
        <div class="flex items-center justify-center gap-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="#155DFC"><g fill="none" stroke="#155DFC" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m4 10l8-4l8 4l-8 4zm16 0v4"/><path d="M7 12v5s.455 2 5 2c4.546 0 5-2 5-2v-5"/></g></svg>
            <p class="text-[#155DFC] font-semibold text-2xl">Thoth</p>
        </div>
    </a>

    <div class="flex-1 max-w-2xl mx-10 hidden sm:block">
        <div class="relative group">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </span>
            <input 
                type="text" 
                placeholder="Search courses..." 
                class="w-full py-2 pl-10 pr-4 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition-all"
            >
        </div>
    </div>

    <div class="flex items-center gap-6">
        <a href="/profile" class="flex items-center gap-3 hover:opacity-80 transition-opacity">
            <div class="flex items-center justify-center w-10 h-10 text-white bg-blue-600 rounded-full font-semibold shadow-sm">
                <?= $_SESSION['student']['name'][0] ?>
            </div>
            <div class="hidden md:block leading-tight">
                <h4 class="text-sm font-bold text-gray-800"><?= $_SESSION['student']['name'] ?></h4>
                <p class="text-xs text-gray-500"><?= $_SESSION['student']['email'] ?></p>
            </div>
        </a>

        <form action="/logout" method="POST" class="border-l pl-6 border-gray-200">
            <button type="submit" class="flex items-center gap-2 text-gray-500 hover:text-red-600 font-medium text-sm transition-colors group">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="hidden lg:block">Logout</span>
            </button>
        </form>
    </div>
</header>