<?php
    require_once __DIR__ . '/../layout/head.php';
?>
<body class="w-full h-screen bg-[#F5F8FF] flex justify-center items-center">
    <div class="w-full h-full flex items-center justify-center">
        <section class="bg-white w-full h-[75%] max-w-md p-8 rounded-2xl shadow-lg border border-gray-100 flex flex-col gap-4">
            <div class="flex items-center justify-center gap-2.5">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="#155DFC"><g fill="none" stroke="#155DFC" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m4 10l8-4l8 4l-8 4zm16 0v4"/><path d="M7 12v5s.455 2 5 2c4.546 0 5-2 5-2v-5"/></g></svg>
                <p class="text-[#155DFC] font-semibold text-2xl">Thoth</p>
            </div>

            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-gray-900">Welcome Back, Student!</h1>
                <p class="text-gray-500 mt-2 text-sm">Sign in to continue your learning journey</p>
            </div>

            <form class="space-y-5">
                <div>
                    <label for="email" class="block text-sm font-bold text-gray-700 mb-1">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email_login--input"
                        placeholder="you@example.com" 
                        class="w-full px-4 py-3 rounded-lg bg-gray-100 border-transparent focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 border border-gray-200"
                    >
                </div>

                <div>
                    <label for="password" class="block text-sm font-bold text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <input 
                            type="password" 
                            id="password"
                            name="password_login--input" 
                            placeholder="Enter your password" 
                            class="w-full px-4 py-3 rounded-lg bg-gray-100 border-transparent focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition-all text-gray-700 placeholder-gray-400 border border-gray-200"
                        >
                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-gray-700">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded cursor-pointer">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-600 cursor-pointer select-none">Remember me</label>
                    </div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-blue-600 hover:text-blue-500">Forgot password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="w-full cursor-pointer flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors shadow-blue-500/30">
                        Sign In
                    </button>
                </div>

            </form>

            <p class="mt-8 text-center text-sm text-gray-600">
                Don't have an account? <a href="#" class="font-bold text-blue-600 hover:text-blue-500 hover:underline">Create Account</a>
            </p>
        </section>
    </div>
</body>
</html>