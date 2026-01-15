<?php
    require_once __DIR__ . '/../layout/head.php';
?>
<body class="w-full h-screen bg-[#F5F8FF] flex justify-center items-center">
    <div class="w-full h-full flex items-center justify-center">
        <section class="bg-white w-full min-h-[75%] max-w-md p-8 rounded-2xl shadow-lg border border-gray-100 flex flex-col gap-4">
            <div class="flex items-center justify-center gap-2.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="#155DFC"><g fill="none" stroke="#155DFC" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m4 10l8-4l8 4l-8 4zm16 0v4"/><path d="M7 12v5s.455 2 5 2c4.546 0 5-2 5-2v-5"/></g></svg>
                <p class="text-[#155DFC] font-semibold text-2xl">Thoth</p>
            </div>

            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-gray-900">Welcome Back, Student!</h1>
                <p class="text-gray-500 mt-2 text-sm">Sign in to continue your learning journey</p>
            </div>

            <form action="/register" method="POST" class="space-y-5">
                <div>
                    <label for="name" class="block text-sm font-bold text-gray-700 mb-1">Full Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name_register--input"
                        placeholder="John Doe" 
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 border border-gray-200"
                        required
                    >
                </div>

                <div>
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-1">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email_register--input"
                        placeholder="you@example.com" 
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 border border-gray-200"
                        required
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-bold text-gray-700 mb-1">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password_register--input"
                        placeholder="Create a strong password" 
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 border border-gray-200"
                        required
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-bold text-gray-700 mb-1">Confirm Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password_register_confirm--input"
                        placeholder="Create a strong password" 
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 border border-gray-200"
                        required
                    >
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg shadow-lg shadow-blue-500/40 transition duration-300 transform hover:-translate-y-0.5 mt-4">
                    Create Account
                </button>
            </form>

            <p class="mt-8 text-center text-sm text-gray-600">
                You have an account? <a href="/login" class="font-bold text-blue-600 hover:text-blue-500 hover:underline">Login</a>
            </p>
        </section>
    </div>
</body>
</html>