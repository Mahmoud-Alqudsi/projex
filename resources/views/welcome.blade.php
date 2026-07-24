<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projex v1.0</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="text-center" x-data="{ count: 0 }">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">مرحباً بك في Projex</h1>
        <p class="text-gray-600 mb-6">نظام إدارة المشاريع الاحترافي</p>

        <!-- اختبار بسيط لـ Alpine.js -->
        <button @click="count++" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
            عدد النقرات: <span x-text="count"></span>
        </button>
    </div>
</body>
</html>