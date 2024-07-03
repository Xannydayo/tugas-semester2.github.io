<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>

</style>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-500 p-4 text-white">
        <div class="flex justify-between items-center">
            <a class="text-lg font-semibold" href="#">Dashboard</a>
            <div class="hidden md:flex space-x-4">
                <a class="hover:bg-blue-700 p-2 rounded" href="#" onclick="document.getElementById('contentFrame').src='home_content.html';">Home</a>
                <a class="hover:bg-blue-700 p-2 rounded" href="#" onclick="document.getElementById('contentFrame').src='features_content.html';">Features</a>
                <a class="hover:bg-blue-700 p-2 rounded" href="#" onclick="document.getElementById('contentFrame').src='pricing_content.html';">Pricing</a>
            </div>
            <button class="text-white focus:outline-none md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </div>
    </nav>



w
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
</body>
</html>