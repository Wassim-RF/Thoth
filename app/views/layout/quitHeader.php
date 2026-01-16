<header class="flex items-center justify-between px-6 py-3 bg-white border-b border-gray-200">
    <div class="flex items-center gap-6">
        <a href="/home" class="group flex items-center justify-center w-10 h-10 rounded-full bg-gray-50 hover:bg-blue-50 transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600 group-hover:text-blue-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
    </div>

    <a href="/profile" class="flex items-center gap-4">
        <div class="flex items-center gap-3 pl-2 cursor-pointer">
            <div class="flex items-center justify-center w-10 h-10 text-white bg-blue-600 rounded-full font-semibold">
                <?= $_SESSION['student']['name'][0] ?>
            </div>
            <div class="hidden md:block leading-tight">
                <h4 class="text-sm font-bold text-gray-800"><?= $_SESSION['student']['name'] ?></h4>
                <p class="text-xs text-gray-500"><?= $_SESSION['student']['email'] ?></p>
            </div>
        </div>
    </a>
</header>