<?php
    include_once __DIR__ . '/../layout/head.php';
?>
<body>
    <?php
        include_once __DIR__ . '/../layout/quitHeader.php';
    ?>
    <main>
        <div class="relative overflow-hidden bg-linear-to-r from-indigo-700 via-purple-700 to-purple-600 p-10 text-white font-sans">
            <div class="absolute inset-0 opacity-20 pointer-events-none">
                <img src="<?= $course['picture_link'] ?>" alt="code background" class="w-full h-full object-cover filter blur-[2px]">
            </div>

            <div class="relative z-10">
                
                <div class="flex gap-2 mb-6">
                <span class="bg-white/20 backdrop-blur-sm px-4 py-1 rounded-full text-xs font-medium">
                    <?= $course['week_duration'] ?> weeks
                </span>
                <span class="bg-white/20 backdrop-blur-sm px-4 py-1 rounded-full text-xs font-medium">
                    <?= $course['lessons_number'] ?> Lessons
                </span>
                </div>

                <h1 class="text-4xl md:text-5xl font-bold mb-6 tracking-tight">
                    <?= $course['title'] ?>
                </h1>

                <p class="text-lg md:text-xl text-gray-100 max-w-3xl leading-relaxed mb-10">
                    <?= $course['description'] ?>
                </p>

                <div class="flex flex-wrap items-center gap-8 text-sm md:text-base">
                
                <div class="flex items-center gap-2 opacity-90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="font-medium"><?= $course['course_creator'] ?></span>
                </div>

                </div>
            </div>
            </div>
    </main>
</body>