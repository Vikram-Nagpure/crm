<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

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
                class="lg:hidden p-2 rounded-full hover:bg-surface-container-low transition-colors">
                <span class="material-symbols-outlined text-on-surface-variant">
                    menu
                </span>
            </button>
            
            <span class="hidden md:block font-headline-md text-headline-md font-bold text-primary">
                Business OS
            </span>
        </div>

        <div class="relative w-full max-w-md hidden lg:block">
            <div class="flex items-center justify-center gap-6 px-5 py-2 bg-surface-container-low border border-outline-variant rounded-full">

                <a href="crmdashboard.php"
                    class="text-body-sm transition-colors duration-200
                    <?= ($currentPage == 'crmdashboard.php') ? 'font-medium text-primary border-b-2 border-primary pb-1' : 'text-on-surface hover:text-primary'; ?>">
                    Dashboard
                </a>

                <a href="lead.php"
                    class="text-body-sm transition-colors duration-200
                    <?= ($currentPage == 'lead.php') ? 'font-medium text-primary border-b-2 border-primary pb-1' : 'text-on-surface hover:text-primary'; ?>">
                    Leads
                </a>

                <a href="customer.php"
                    class="text-body-sm transition-colors duration-200
                    <?= ($currentPage == 'customer.php') ? 'font-medium text-primary border-b-2 border-primary pb-1' : 'text-on-surface hover:text-primary'; ?>">
                    Customers
                </a>

                <a href="deal.php"
                    class="text-body-sm transition-colors duration-200
                    <?= ($currentPage == 'deal.php') ? 'font-medium text-primary border-b-2 border-primary pb-1' : 'text-on-surface hover:text-primary'; ?>">
                    Deals
                </a>

            </div>
        </div>

        <div class="flex items-center gap-sm relative">
            <!-- Create Button -->
            <div class="relative">
                <button id="createBtn"
                    class="w-10 h-10 flex items-center justify-center rounded-lg bg-primary text-white hover:bg-primary-700 transition">
                    <span class="material-symbols-outlined">add</span>
                </button>

                <!-- Create Records Menu -->
                <div id="createMenu"
                    class="hidden absolute right-[-80px] mt-2 w-80 bg-white rounded-2xl shadow-2xl border border-gray-200 z-50 p-5">

                    <h3 class="text-2xl font-semibold text-gray-700 mb-4">
                        Create Records
                    </h3>

                    <!-- Menu Items -->
                    <div class="space-y-1">

                        <a href="createlead.php"
                            class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition">
                            <span class="text-lg">+</span>
                            <span>Lead</span>
                        </a>

                        <a href="customercreate.php"
                            class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition">
                            <span class="text-lg">+</span>
                            <span>Customer</span>
                        </a>

                        <!-- Follow Up Button -->
                        <a href="javascript:void(0)"
                            onclick="openFollowUpModal()"
                            class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition">
                            <span class="text-lg">+</span>
                            <span>Follow Up</span>
                        </a>

                        <!-- Follow Up Modal -->
                        <div id="followUpModal"
                            class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

                            <div class="bg-white rounded-xl shadow-xl w-full max-w-md p-6 relative">

                                <!-- Header -->
                                <div class="flex justify-between items-center mb-5">
                                    <h2 class="text-xl font-semibold">Add Follow Up</h2>

                                    <button onclick="closeFollowUpModal()"
                                        class="text-gray-500 hover:text-red-500 text-2xl">
                                        &times;
                                    </button>
                                </div>

                                <!-- Form -->
                                <form action="" method="POST">

                                    <!-- Mobile Number -->
                                    <div class="mb-4">
                                        <label class="block mb-1 font-medium">
                                            Mobile Number
                                        </label>
                                        <input
                                            type="text"
                                            name="mobile"
                                            placeholder="Enter Mobile Number"
                                            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 outline-none">
                                    </div>

                                    <!-- Date -->
                                    <div class="mb-4">
                                        <label class="block mb-1 font-medium">
                                            Follow Up Date
                                        </label>
                                        <input
                                            type="date"
                                            name="followup_date"
                                            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 outline-none">
                                    </div>

                                    <!-- Time -->
                                    <div class="mb-4">
                                        <label class="block mb-1 font-medium">
                                            Follow Up Time
                                        </label>
                                        <input
                                            type="time"
                                            name="followup_time"
                                            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 outline-none">
                                    </div>

                                    <!-- Description -->
                                    <div class="mb-5">
                                        <label class="block mb-1 font-medium">
                                            Description
                                        </label>
                                        <textarea
                                            name="description"
                                            rows="4"
                                            placeholder="Enter Follow Up Details..."
                                            class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="flex justify-end gap-3">

                                        <button
                                            type="button"
                                            onclick="closeFollowUpModal()"
                                            class="px-4 py-2 rounded-lg border hover:bg-gray-100">
                                            Cancel
                                        </button>

                                        <button
                                            type="submit"
                                            name="save_followup"
                                            class="px-5 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">
                                            Save Follow Up
                                        </button>

                                    </div>

                                </form>

                            </div>

                        </div>

                        <a href="deal.php"
                            class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition">
                            <span class="text-lg">+</span>
                            <span>Deal</span>
                        </a>
                        <!-- task button -->
                        <a href="javascript:void(0)"
                            id="openTaskModal"
                            class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition">

                            <span class="text-lg">+</span>
                            <span>Task</span>
                        </a>
                        <!-- Task Modal -->
                        <div id="taskModal" class="fixed inset-0 bg-black/50 hidden z-50 flex items-center justify-center p-4">

                            <div class="bg-white rounded-2xl shadow-xl w-full max-w-2xl">

                                <!-- Header -->
                                <div class="flex justify-between items-center px-6 py-5 border-b">
                                    <h2 class="text-xl font-semibold">Create Task</h2>

                                    <button id="closeTaskModal">
                                        <span class="material-symbols-outlined">close</span>
                                    </button>
                                </div>

                                <!-- Body -->
                                <div class="p-6 space-y-5">

                                    <!-- Title -->
                                    <div>
                                        <label class="block text-sm font-medium mb-2">Task Title</label>

                                        <input
                                            type="text"
                                            placeholder="Enter task title"
                                            class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">
                                    </div>

                                    <!-- Description -->
                                    <div>
                                        <label class="block text-sm font-medium mb-2">Description</label>

                                        <textarea
                                            rows="4"
                                            placeholder="Task description..."
                                            class="w-full border rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
                                    </div>

                                    <div class="grid grid-cols-2 gap-4">

                                        <!-- Assign -->
                                        <div>
                                            <label class="block text-sm font-medium mb-2">Assign To</label>

                                            <select class="w-full border rounded-lg px-4 py-3">
                                                <option>Select Employee</option>
                                                <option>Marcus K.</option>
                                                <option>Sarah L.</option>
                                                <option>Daniel R.</option>
                                            </select>
                                        </div>

                                        <!-- Priority -->
                                        <div>
                                            <label class="block text-sm font-medium mb-2">Priority</label>

                                            <select class="w-full border rounded-lg px-4 py-3">
                                                <option>Low</option>
                                                <option>Medium</option>
                                                <option>High</option>
                                                <option>Urgent</option>
                                            </select>
                                        </div>

                                    </div>

                                    <!-- Due Date -->
                                    <div>
                                        <label class="block text-sm font-medium mb-2">Due Date</label>

                                        <input
                                            type="date"
                                            class="w-full border rounded-lg px-4 py-3">
                                    </div>

                                </div>

                                <!-- Footer -->
                                <div class="flex justify-end gap-3 border-t px-6 py-4">

                                    <button
                                        id="cancelTask"
                                        class="px-5 py-2 rounded-lg border hover:bg-gray-100">

                                        Cancel

                                    </button>

                                    <button
                                        class="px-5 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700">

                                        Save Task

                                    </button>

                                </div>

                            </div>

                        </div>

                        <a href="invoicecreate.php"
                            class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition">
                            <span class="text-lg">+</span>
                            <span>Invoice</span>
                        </a>

                        <a href="praposal2.php"
                            class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition">
                            <span class="text-lg">+</span>
                            <span>Praposal</span>
                        </a>

                        <a href="campaign.php"
                            class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 transition">
                            <span class="text-lg">+</span>
                            <span>Campaign</span>
                        </a>

                    </div>

                </div>
            </div>
            <!-- Search -->
            <div class="relative">
                <button id="searchBtn"
                    class="material-symbols-outlined text-on-surface-variant hover:bg-surface-container-low p-2 rounded-full transition-colors">
                    search
                </button>

                <!-- Search Popup -->
                <div id="searchMenu"
                    class="hidden absolute right-[-60px] mt-2 w-72 bg-white rounded-xl shadow-xl border border-gray-200 z-50 p-4">

                    <h3 class="text-sm font-semibold mb-3">Search</h3>

                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-[20px]">
                            search
                        </span>

                        <input
                            type="text"
                            placeholder="Search..."
                            class="w-full pl-10 pr-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                </div>
            </div>
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
                    <a href="setting.php"
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
    class="fixed left-0 top-16 h-[calc(100vh-64px)] w-64 flex flex-col p-md bg-surface-container-lowest border-r border-outline-variant flex lg:hidden transition-all duration-300 z-40">
        
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
        const searchBtn = document.getElementById("searchBtn");
        const searchMenu = document.getElementById("searchMenu");

        searchBtn.addEventListener("click", (e) => {
            e.stopPropagation();
            searchMenu.classList.toggle("hidden");
        });

        // Close when clicking outside
        document.addEventListener("click", (e) => {
            if (!searchMenu.contains(e.target) && !searchBtn.contains(e.target)) {
                searchMenu.classList.add("hidden");
            }
        });
    </script>
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

    <script>
        const createBtn = document.getElementById("createBtn");
        const createMenu = document.getElementById("createMenu");

        createBtn.addEventListener("click", function (e) {
            e.stopPropagation();

            createMenu.classList.toggle("hidden");

            // Close other menus if open
            searchMenu.classList.add("hidden");
            notificationMenu.classList.add("hidden");
            appsMenu.classList.add("hidden");
            profileMenu.classList.add("hidden");
        });

        document.addEventListener("click", function (e) {
            if (!createMenu.contains(e.target) && !createBtn.contains(e.target)) {
                createMenu.classList.add("hidden");
            }
        });
    </script>

    <script>
        function openFollowUpModal() {
            const modal = document.getElementById('followUpModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeFollowUpModal() {
            const modal = document.getElementById('followUpModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Close modal when clicking outside
        document.getElementById('followUpModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeFollowUpModal();
            }
        });
    </script>
    <script>
        const taskModal = document.getElementById("taskModal");

        document.getElementById("openTaskModal").addEventListener("click", function () {
            taskModal.classList.remove("hidden");
        });

        document.getElementById("closeTaskModal").addEventListener("click", function () {
            taskModal.classList.add("hidden");
        });

        document.getElementById("cancelTask").addEventListener("click", function () {
            taskModal.classList.add("hidden");
        });

        // Close when clicking outside the modal
        taskModal.addEventListener("click", function (e) {
            if (e.target === taskModal) {
                taskModal.classList.add("hidden");
            }
        });
    </script>
</body>
</html>