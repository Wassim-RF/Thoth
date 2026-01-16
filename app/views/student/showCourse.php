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
        <div class="bg-gray-50 min-h-screen font-sans p-[3%]">
            <nav class="flex gap-6 mb-8 border-b border-gray-200">
                <button class="pb-3 text-sm font-bold border-b-2 border-black">Overview</button>
                <button class="pb-3 text-sm font-medium text-gray-500 hover:text-black">Lessons</button>
                <button class="pb-3 text-sm font-medium text-gray-500 hover:text-black">Assignments</button>
            </nav>

            <div class="grid grid-cols-4 gap-8 text-gray-800">
                
                <div class="col-span-3 bg-white p-10 rounded-2xl border border-gray-100 shadow-sm">
                    <h1 class="text-3xl font-extrabold mb-8 text-slate-900">Course Overview</h1>
                    
                    <div class="space-y-6 text-gray-600 leading-relaxed text-lg">
                        <p>Master web development from scratch with this comprehensive bootcamp. Learn HTML, CSS, JavaScript, React, and modern web development practices. Build real-world projects and gain hands-on experience.</p>
                        <p>This comprehensive course will take you from beginner to advanced level in web development. You'll learn by doing, building real projects that you can add to your portfolio.</p>
                    </div>

                    <h2 class="text-2xl font-bold mt-10 mb-6 text-slate-900">What You'll Learn:</h2>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <span class="text-green-500 text-xl font-bold">✔</span>
                            <span class="text-gray-700">Master HTML, CSS, and JavaScript fundamentals</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-green-500 text-xl font-bold">✔</span>
                            <span class="text-gray-700">Build responsive websites that work on all devices</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-green-500 text-xl font-bold">✔</span>
                            <span class="text-gray-700">Learn modern React and component-based architecture</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-green-500 text-xl font-bold">✔</span>
                            <span class="text-gray-700">Understand web development best practices and workflows</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-6">
                    
                    <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm text-center">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-xl font-bold">Course Progress</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                        </div>
                        
                        <div class="mb-2">
                            <span class="text-5xl font-extrabold text-blue-600">65%</span>
                            <p class="text-gray-400 text-sm mt-1">Keep going!</p>
                        </div>

                        <div class="w-full bg-gray-100 h-2.5 rounded-full my-6 overflow-hidden">
                            <div class="bg-slate-900 h-full w-[65%] rounded-full"></div>
                        </div>

                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-xl transition-all shadow-lg shadow-blue-100">
                            Continue Learning
                        </button>
                    </div>

                    <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                        <h3 class="text-xl font-bold mb-6">Quick Links</h3>
                        <ul class="space-y-4">
                            <li><a href="#" class="text-blue-500 hover:underline font-medium">Course syllabus</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline font-medium">Discussion forum</a></li>
                            <li><a href="#" class="text-blue-500 hover:underline font-medium">Resources & downloads</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            
            <div class="mt-8 bg-white p-8 rounded-2xl border border-gray-100 shadow-sm">
                <h2 class="text-xl font-bold mb-6 text-slate-900">About the Instructor</h2>
                <div class="flex items-start gap-5">
                    <div class="shrink-0 w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white text-xl font-bold shadow-lg shadow-blue-100">
                    SJ
                    </div>
                    
                    <div class="space-y-1">
                    <h3 class="text-lg font-bold text-gray-900">Sarah Johnson</h3>
                    <p class="text-sm font-medium text-gray-500">Senior Web Developer & Instructor</p>
                    <p class="text-gray-600 mt-3 leading-relaxed max-w-2xl">
                        With over 10 years of experience in web development and teaching, Sarah has helped thousands of students launch their careers in tech.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>