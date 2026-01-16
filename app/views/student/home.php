<?php
    require_once __DIR__ . '/../layout/head.php';
?>
<body class="w-full min-h-screen bg-[#F5F8FF]">
    <?php
        require_once __DIR__ . '/../layout/header.php';
    ?>
    <main class="w-full h-full p-[3%] flex flex-col gap-10">
        <div class="bg-gray-50 font-sans">
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-slate-900 flex items-center gap-2">
                Welcome back, <?= $_SESSION['student']['name'] ?> <span class="text-2xl">👋</span>
                </h1>
                <p class="text-gray-500 mt-1">Continue your learning journey where you left off</p>
            </div>
    
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex justify-between items-center hover:shadow-xl">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Enrolled Courses</p>
                        <h3 class="text-3xl font-bold text-slate-900 mt-1"><?= $enroledCoursesNbr ?></h3>
                    </div>
                    <div class="p-4 bg-blue-50 rounded-xl text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                </div>
    
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex justify-between items-center hover:shadow-xl">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Learning Hours</p>
                        <h3 class="text-3xl font-bold text-slate-900 mt-1">48</h3>
                    </div>
                    <div class="p-4 bg-green-50 rounded-xl text-green-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
    
                <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm flex justify-between items-center hover:shadow-xl">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Avg. Progress</p>
                        <h3 class="text-3xl font-bold text-slate-900 mt-1">48%</h3>
                    </div>
                    <div class="p-4 bg-purple-50 rounded-xl text-purple-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                </div>
    
            </div>
        </div>
        <div class="bg-gray-50 font-sans">
            <div class="mb-8">
                <div class="flex justify-between items-center">
                    <h2 class="text-2xl font-bold text-slate-900">Available Courses</h2>
                    <form>
                        <div class="relative inline-block w-48">
                            <select 
                                name="category" 
                                id="category"
                                class="block w-full px-4 py-2.5 text-sm text-gray-700 bg-white border border-gray-200 rounded-xl appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent cursor-pointer transition-all shadow-sm"
                            >
                                <option value="all" selected>All Categories</option>
                                <option value="web">Web Development</option>
                                <option value="design">UI/UX Design</option>
                                <option value="business">Business Strategy</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </form>
                </div>
                <p class="text-gray-500">Explore our wide range of courses and start learning today</p>
            </div>

            <div class="grid grid-cols-4 gap-8">
                <?php foreach ($courses as $course) : ?>
                    <?php if (isset($enrolledCourses[$course['id']])) : ?>
                        <a href="/course?id=<?= $course['id'] ?>" class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                            <div class="relative">
                                <img src="<?= $course['picture_link'] ?>" alt="<?= $course['title'] ?>" class="w-full h-48 object-cover">
                                <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">Enrolled</span>
                            </div>
                            <div class="p-5">
                                <h3 class="text-xl font-bold text-slate-900 mb-2"><?= $course['title'] ?></h3>
                                <p class="text-gray-500 text-sm mb-4"><?= $course['description'] ?></p>
                                <div class="flex items-center gap-4 text-gray-400 text-xs mb-6">
                                    <span class="flex items-center gap-1">👤 <?= $course['course_creator'] ?></span>
                                    <span class="flex items-center gap-1">🕒 <?= $course['week_duration'] ?> weeks</span>
                                    <span class="flex items-center gap-1">📖 <?= $course['lessons_number'] ?> lessons</span>
                                </div>

                                <div>
                                    <div class="flex justify-between text-xs font-semibold mb-2">
                                        <span class="text-gray-400">Progress</span>
                                        <span class="text-blue-600"><?= $enrolledCourses[$course['id']] ?>%</span>
                                    </div>
                                    <div class="w-full bg-gray-100 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: <?= $enrolledCourses[$course['id']] ?>%"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php else: ?>
                        <a href="/course?id=<?= $course['id'] ?>" class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                            <img src="<?= $course['picture_link'] ?>" alt="<?= $course['title'] ?>" class="w-full h-48 object-cover">
                            <div class="p-5">
                                <h3 class="text-xl font-bold text-slate-900 mb-2"><?= $course['title'] ?></h3>
                                <p class="text-gray-500 text-sm mb-4"><?= $course['description'] ?></p>
                                <div class="flex items-center gap-4 text-gray-400 text-xs mb-6">
                                    <span class="flex items-center gap-1">👤 <?= $course['course_creator'] ?></span>
                                    <span class="flex items-center gap-1">🕒 <?= $course['week_duration'] ?> weeks</span>
                                    <span class="flex items-center gap-1">📖 <?= $course['lessons_number'] ?> lessons</span>
                                </div>

                                <button class="w-full py-3 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-colors enrolle_button" data-course-id="<?= $course['id'] ?>">
                                    Enroll Now
                                </button>
                            </div>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>



                <!-- <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80" alt="Web Dev" class="w-full h-48 object-cover">
                        <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full">Enrolled</span>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Web Development Bootcamp</h3>
                        <p class="text-gray-500 text-sm mb-4">Learn HTML, CSS, JavaScript, and React from scratch</p>
                        <div class="flex items-center gap-4 text-gray-400 text-xs mb-6">
                            <span class="flex items-center gap-1">👤 Sarah Johnson</span>
                            <span class="flex items-center gap-1">🕒 12 weeks</span>
                            <span class="flex items-center gap-1">📖 48 lessons</span>
                        </div>

                        <div>
                            <div class="flex justify-between text-xs font-semibold mb-2">
                                <span class="text-gray-400">Progress</span>
                                <span class="text-blue-600">65%</span>
                            </div>
                            <div class="w-full bg-gray-100 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                    <img src="https://images.unsplash.com/photo-1544233726-9f1d2b27be8b?auto=format&fit=crop&w=600&q=80" alt="UI/UX" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">UI/UX Design Masterclass</h3>
                        <p class="text-gray-500 text-sm mb-4">Master the art of creating beautiful user experiences</p>
                        <div class="flex items-center gap-4 text-gray-400 text-xs mb-6">
                            <span class="flex items-center gap-1">👤 Michael Chen</span>
                            <span class="flex items-center gap-1">🕒 10 weeks</span>
                            <span class="flex items-center gap-1">📖 36 lessons</span>
                        </div>

                        <button class="w-full py-3 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-colors">
                            Enroll Now
                        </button>
                    </div>
                </div> -->

            </div>
        </div>
    </main>
    <script>
        document.querySelectorAll(".enrolle_button").forEach(btn => {
            btn.addEventListener("click" , function() {
                const courseId = this.dataset.courseId;
                console.log(courseId);
                console.log("clicked");
                fetch('/enroll-course' , {
                    method: 'POST' ,
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        course_id: courseId
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        data.disables = true;
                    }
                })
            });
        });
    </script>
</body>