<?php
    require_once __DIR__ . '/../layout/head.php';
?>
<body class="bg-gray-50 flex items-center justify-center min-h-screen">

    <div class="text-center px-6">
        <div class="relative mb-8 flex justify-center">
            <div class="p-6 bg-blue-50 rounded-full inline-block animate-bounce">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#155DFC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m4 10l8-4l8 4l-8 4zm16 0v4"/>
                    <path d="M7 12v5s.455 2 5 2c4.546 0 5-2 5-2v-5"/>
                    <line x1="9" y1="9" x2="15" y2="15" stroke-red-500 />
                </svg>
            </div>
            <h1 class="absolute -bottom-4 text-7xl font-black opacity-50 z-[-1]">404</h1>
        </div>

        <h2 class="text-3xl font-bold text-gray-900 mb-3">Oops! Page not found</h2>
        <p class="text-gray-500 max-w-sm mx-auto mb-10 leading-relaxed">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/home" class="px-8 py-3 bg-[#155DFC] hover:bg-blue-700 text-white font-bold rounded-xl shadow-lg shadow-blue-200 transition-all active:scale-95 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Back to Home
            </a>
            
            <a href="mailto:support@thoth.com" class="px-8 py-3 bg-white border border-gray-200 text-gray-600 font-semibold rounded-xl hover:bg-gray-50 transition-all">
                Contact Support
            </a>
        </div>
    </div>

</body>