<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business OS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="fixed top-0 left-0 w-full z-50 flex justify-between items-center px-lg h-16 bg-surface border-b border-outline-variant">
        <div class="flex items-center gap-xl">
            <!-- Mobile Menu Button (Hamburger) -->
            <button id="menuToggleBtn" 
                class="material-symbols-outlined lg:hidden text-on-surface-variant hover:bg-surface-container-low p-2 rounded-full transition-colors">
                menu
            </button>
            
            <span class="font-headline-md text-headline-md font-bold text-primary">Business OS</span>
        </div>

        <div class="relative w-full max-w-md">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">
                search
            </span>
            <input
                type="text"
                placeholder="Search modules or data..."
                class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-full text-body-sm focus:outline-none focus:ring-2 focus:ring-primary/20">
        </div>

        <div class="flex items-center gap-md relative">
            <!-- Notification Button -->
            <div class="relative">
                <button id="notificationBtn"
                    class="material-symbols-outlined text-on-surface-variant hover:bg-surface-container-low p-2 rounded-full transition-colors relative">
                    notifications
                    <!-- Notification Badge -->
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center">
                        3
                    </span>
                </button>

                <!-- Notification Dropdown -->
                <div id="notificationMenu"
                    class="hidden absolute right-[-40px] mt-2 w-80 bg-white shadow-xl rounded-xl border z-50">
                    <div class="p-4 border-b font-semibold">
                        Notifications
                    </div>
                    <div class="max-h-80 overflow-y-auto">
                        <a href="#" class="block p-4 hover:bg-gray-100 border-b">
                            New order received
                        </a>
                        <a href="#" class="block p-4 hover:bg-gray-100 border-b">
                            Payment completed
                        </a>
                        <a href="#" class="block p-4 hover:bg-gray-100">
                            New customer registered
                        </a>
                    </div>
                    <div class="p-3 text-center border-t">
                        <a href="#" class="text-blue-600 text-sm font-medium">
                            View All
                        </a>
                    </div>
                </div>
            </div>

            <!-- Apps Menu -->
            <div class="relative">
                <button id="appsBtn"
                    class="material-symbols-outlined text-on-surface-variant hover:bg-surface-container-low p-2 rounded-full transition-colors">
                    apps
                </button>

                <!-- Apps Dropdown -->
                <div id="appsMenu"
                    class="hidden absolute right-0 mt-2 w-80 bg-white shadow-2xl rounded-2xl border border-gray-200 z-50 p-3">
                    <div class="grid grid-cols-3 gap-2">
                        <a href="dashboard.php"
                            class="flex flex-col items-center justify-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-all">
                            <span class="material-symbols-outlined text-[28px] text-blue-600">dashboard</span>
                            <span class="text-[11px] mt-1 font-medium">Dashboard</span>
                        </a>
                        <a href="orders.php"
                            class="flex flex-col items-center justify-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-all">
                            <span class="material-symbols-outlined text-[28px] text-green-600">shopping_bag</span>
                            <span class="text-[11px] mt-1 font-medium">Orders</span>
                        </a>
                        <a href="products.php"
                            class="flex flex-col items-center justify-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-all">
                            <span class="material-symbols-outlined text-[28px] text-orange-600">inventory_2</span>
                            <span class="text-[11px] mt-1 font-medium">Products</span>
                        </a>
                        <a href="customers.php"
                            class="flex flex-col items-center justify-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-all">
                            <span class="material-symbols-outlined text-[28px] text-purple-600">group</span>
                            <span class="text-[11px] mt-1 font-medium">Customers</span>
                        </a>
                        <a href="reports.php"
                            class="flex flex-col items-center justify-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-all">
                            <span class="material-symbols-outlined text-[28px] text-red-600">analytics</span>
                            <span class="text-[11px] mt-1 font-medium">Reports</span>
                        </a>
                        <a href="settings.php"
                            class="flex flex-col items-center justify-center p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-all">
                            <span class="material-symbols-outlined text-[28px] text-gray-600">settings</span>
                            <span class="text-[11px] mt-1 font-medium">Settings</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Profile -->
            <div class="relative">
                <button id="profileBtn"
                    class="h-8 w-8 rounded-full bg-primary-container overflow-hidden border border-outline-variant">
                    <img class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBP37MsZFjHv1sPzzKviH1uHFLNV3jj8_rAU583f1dsX2LWCHVIX2hu9BZdAf0rTeJ4zeWo-s32tnLMt_rJ-ApA4M1iqaUS4gsfjdAuGFUosdmcnU3qutjGDhm5ID9cBYjNks9vulL7VHVud0lBbXl418B8NZBfft5fMNyMWCkwMShcX8bXTvDfUNJYmnSayIeMxijjE-d-t09NZGhhTfeaco2Fk9I1ayOmeWSQj0s0gDy5wAuX1D2BaRV4foMpe35c95zlgSic8x6f"
                        alt="Profile">
                </button>

                <!-- Profile Menu -->
                <div id="profileMenu"
                    class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border z-50 overflow-hidden">
                    <a href="#"
                        class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 transition">
                        <span class="material-symbols-outlined text-sm">person</span>
                        My Profile
                    </a>
                    <a href="#"
                        class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 transition">
                        <span class="material-symbols-outlined text-sm">settings</span>
                        Settings
                    </a>
                    <hr>
                    <a href="#"
                        class="flex items-center gap-2 px-4 py-3 text-red-600 hover:bg-red-50 transition">
                        <span class="material-symbols-outlined text-sm">logout</span>
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Overlay (for closing sidebar when clicking outside) -->
    <div id="sidebarOverlay" class="hidden fixed inset-0 bg-black/50 z-40 lg:hidden"></div>

    <!-- Sidebar -->
    <aside id="sidebar"
        class="fixed left-0 top-16 h-[calc(100vh-64px)] w-64 flex flex-col p-md bg-surface-container-lowest border-r border-outline-variant hidden lg:flex lg:visible transition-all duration-300 z-40">
        
        <!-- Close button for mobile -->
        <button id="closeSidebarBtn" class="lg:hidden absolute top-4 right-4 p-2 hover:bg-surface-container-low rounded-full transition-colors">
            <span class="material-symbols-outlined text-on-surface-variant">close</span>
        </button>

        <div class="flex items-center gap-sm px-md py-sm mb-lg">
            <div class="bg-primary-container w-10 h-10 rounded-xl flex items-center justify-center text-on-primary-container">
                <span class="material-symbols-outlined">dashboard</span>
            </div>
            <div>
                <h2 class="font-headline-sm text-headline-sm font-semibold">Home</h2>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Central Hub</p>
            </div>
        </div>

        <div class="space-y-xs flex-1">
            <div class="text-label-sm text-outline px-md py-2 uppercase tracking-wider">Recently Opened</div>
            <a class="flex items-center gap-md px-md py-sm rounded-lg hover:bg-surface-container text-on-surface-variant transition-all"
                href="crmdashboard.php">
                <span class="material-symbols-outlined text-[20px]">leaderboard</span>
                <span class="font-label-md text-label-md">CRM</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm rounded-lg hover:bg-surface-container text-on-surface-variant transition-all"
                href="lead.php">
                <span class="material-symbols-outlined text-[20px]">groups</span>
                <span class="font-label-md text-label-md">Leads</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm rounded-lg hover:bg-surface-container text-on-surface-variant transition-all"
                href="customer.php">
                <span class="material-symbols-outlined text-[20px]">groups</span>
                <span class="font-label-md text-label-md">Customer</span>
            </a>
            <!-- <a class="flex items-center gap-md px-md py-sm rounded-lg hover:bg-surface-container text-on-surface-variant transition-all"
                href="#">
                <span class="material-symbols-outlined text-[20px]">assignment</span>
                <span class="font-label-md text-label-md">Tasks</span>
            </a> -->
            <div class="text-label-sm text-outline px-md py-2 mt-lg uppercase tracking-wider">Quick Actions</div>
            <a class="flex items-center gap-md px-md py-sm rounded-lg hover:bg-surface-container text-on-surface-variant transition-all"
                href="#">
                <span class="material-symbols-outlined text-[20px]">help</span>
                <span class="font-label-md text-label-md">Support</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm rounded-lg hover:bg-surface-container text-on-surface-variant transition-all"
                href="#">
                <span class="material-symbols-outlined text-[20px]">settings</span>
                <span class="font-label-md text-label-md">Settings</span>
            </a>
        </div>

        <div class="mt-auto p-md bg-primary-container/10 rounded-xl border border-primary/20">
            <p class="font-label-md text-label-md text-primary font-semibold mb-1">Upgrade Plan</p>
            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Get advanced automations and AI insights.</p>
            <button class="w-full bg-primary text-on-primary py-2 rounded-lg font-label-md">Explore Plans</button>
        </div>
    </aside>

    <!-- Main Content -->
    <!-- <main class="lg:ml-64 pt-16 p-6">
        <div class="bg-white rounded-lg shadow p-8">
            <h1 class="text-3xl font-bold mb-4">Welcome to Business OS</h1>
            <p class="text-gray-600">This is your main content area. The sidebar menu will appear on mobile when you click the hamburger icon.</p>
        </div>
    </main> -->

    <script>
        // Get elements
        const menuToggleBtn = document.getElementById('menuToggleBtn');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');

        const notificationBtn = document.getElementById('notificationBtn');
        const notificationMenu = document.getElementById('notificationMenu');

        const appsBtn = document.getElementById('appsBtn');
        const appsMenu = document.getElementById('appsMenu');

        const profileBtn = document.getElementById('profileBtn');
        const profileMenu = document.getElementById('profileMenu');

        // Toggle sidebar on mobile
        function toggleSidebar() {
            sidebar.classList.toggle('hidden');
            sidebarOverlay.classList.toggle('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('hidden');
            sidebarOverlay.classList.add('hidden');
        }

        // Menu toggle button
        menuToggleBtn.addEventListener('click', toggleSidebar);

        // Close sidebar button
        closeSidebarBtn.addEventListener('click', closeSidebar);

        // Close sidebar when clicking overlay
        sidebarOverlay.addEventListener('click', closeSidebar);

        // Close sidebar when a link is clicked
        sidebar.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', closeSidebar);
        });

        // Notification toggle
        notificationBtn.addEventListener('click', () => {
            notificationMenu.classList.toggle('hidden');
            appsMenu.classList.add('hidden');
        });

        // Apps toggle
        appsBtn.addEventListener('click', () => {
            appsMenu.classList.toggle('hidden');
            notificationMenu.classList.add('hidden');
        });

        // Profile toggle
        profileBtn.addEventListener('click', () => {
            profileMenu.classList.toggle('hidden');
            notificationMenu.classList.add('hidden');
            appsMenu.classList.add('hidden');
        });

        // Close menus when clicking outside
        document.addEventListener('click', (e) => {
            if (!notificationBtn.contains(e.target) && !notificationMenu.contains(e.target)) {
                notificationMenu.classList.add('hidden');
            }
            if (!appsBtn.contains(e.target) && !appsMenu.contains(e.target)) {
                appsMenu.classList.add('hidden');
            }
            if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
                profileMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>