<!DOCTYPE html>
<html lang="en" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Geist:wght@400;600;700;800;900&amp;family=JetBrains+Mono&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=block"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    try {
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary": "#505f76",
                        "on-background": "#191c1d",
                        "error-container": "#ffdad6",
                        "tertiary-fixed-dim": "#4edea3",
                        "surface-container": "#edeeef",
                        "inverse-surface": "#2e3132",
                        "on-primary-fixed": "#00174b",
                        "on-error": "#ffffff",
                        "surface-container-low": "#f3f4f5",
                        "secondary-fixed-dim": "#b7c8e1",
                        "secondary-container": "#d0e1fb",
                        "inverse-primary": "#b4c5ff",
                        "primary-container": "#2563eb",
                        "background": "#f8f9fa",
                        "surface-container-lowest": "#ffffff",
                        "surface": "#f8f9fa",
                        "on-secondary-fixed-variant": "#38485d",
                        "on-primary-container": "#eeefff",
                        "outline": "#737686",
                        "on-surface": "#191c1d",
                        "surface-container-high": "#e7e8e9",
                        "tertiary-fixed": "#6ffbbe",
                        "on-secondary-fixed": "#0b1c30",
                        "surface-bright": "#f8f9fa",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#002113",
                        "on-error-container": "#93000a",
                        "surface-container-highest": "#e1e3e4",
                        "tertiary-container": "#007d55",
                        "surface-dim": "#d9dadb",
                        "secondary-fixed": "#d3e4fe",
                        "on-tertiary-container": "#bdffdb",
                        "primary-fixed": "#dbe1ff",
                        "on-tertiary-fixed-variant": "#005236",
                        "tertiary": "#006242",
                        "inverse-on-surface": "#f0f1f2",
                        "on-surface-variant": "#434655",
                        "primary": "#004ac6",
                        "on-secondary-container": "#54647a",
                        "primary-fixed-dim": "#b4c5ff",
                        "outline-variant": "#c3c6d7",
                        "surface-variant": "#e1e3e4",
                        "surface-tint": "#0053db",
                        "error": "#ba1a1a",
                        "on-primary-fixed-variant": "#003ea8",
                        "on-tertiary": "#ffffff",
                        "on-secondary": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "lg": "24px",
                        "sm": "8px",
                        "base": "4px",
                        "gutter": "20px",
                        "margin": "24px",
                        "xs": "4px",
                        "xl": "32px",
                        "2xl": "48px",
                        "md": "16px"
                    },
                    "fontFamily": {
                        "body-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-lg": ["Geist"],
                        "body-md": ["Inter"],
                        "headline-md": ["Geist"],
                        "code-sm": ["JetBrains Mono"],
                        "label-md": ["Inter"],
                        "display": ["Geist"],
                        "label-sm": ["Inter"],
                        "headline-sm": ["Geist"]
                    }
                }
            }
        }
    } catch (_e) {}
    </script>
    <meta charset="utf-8">
</head>

<body class="bg-background text-on-background">
    <!-- SideNavBar (Fixed) -->
    <?php include "include/header.php"?>
    <!-- Main Content Area -->
    <main class="lg:ml-0 mt-16 p-lg bg-background min-h-[calc(100vh-64px)]">
       
        <!-- Content Canvas -->
        <div class="p-8 mx-auto">
            <div class="mb-8">
                <h2 class="font-headline-lg text-headline-lg font-bold text-on-surface">Account Settings</h2>
                <p class="text-body-md text-secondary mt-1">Manage your professional identity and security preferences.
                </p>
            </div>
            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">
                <!-- 1. Profile Information -->
                <section
                    class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col gap-6">
                    <div class="flex items-center gap-4 border-b border-outline-variant pb-4">
                        <span class="material-symbols-outlined text-primary">person</span>
                        <h3 class="font-headline-sm text-headline-sm">Profile Information</h3>
                    </div>
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="relative">
                            <img class="w-24 h-24 rounded-full object-cover ring-4 ring-surface-container"
                                data-alt="Circular headshot of Alex Rivera, focused and professional. The image has a clean, high-key lighting style common in corporate modern design systems, emphasizing trust and clarity. Background is a solid, very light gray to match the enterprise UI."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEg5OF7IYCY0ShWSu1N3vP1G5uKn2XmM59FlgGMg9gyCh_OyUuvphRP2zchjt6Av8VgblEnTHLy-ruxTFMZ6ptfdGy2-yMjCZ-FeAPhMogRL5QvdunAlguSTv9hK563taLTY8Y19H33oIjRY-CmqC26Xhvj1H4uhe69-WUMua26Tzt6ZrUuaUSe7PQbe4IkLjmAHqjaFSmpDsgUvkrOL4TW9s5HQ_dEmAPe_noA7E1aFCUVIunPuNRvLU8N6bEbrsqyPaFgqT-eXI">
                            <!-- <button
                                class="absolute bottom-0 right-0 bg-primary text-white p-1.5 rounded-full border-2 border-white shadow-lg hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-sm">edit</span>
                            </button> -->
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex gap-3">
                                <button
                                    class="px-4 py-2 bg-primary text-white rounded-lg font-label-md text-label-md hover:opacity-90 transition-opacity">Upload
                                    Photo</button>
                                <button
                                    class="px-4 py-2 border border-outline text-on-surface rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">Remove</button>
                            </div>
                            <p class="text-[12px] text-secondary">JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-label-md text-secondary">Full Name</label>
                            <input
                                class="border border-outline-variant rounded-lg p-2.5 text-body-md focus:border-primary focus:ring-2 focus:ring-primary/10"
                                type="text" value="Alex Rivera">
                        </div>
                        
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-label-md text-secondary">Email Address</label>
                            <input
                                class="border border-outline-variant rounded-lg p-2.5 text-body-md focus:border-primary focus:ring-2 focus:ring-primary/10"
                                type="email" value="alex.rivera@businessos.com">
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-label-md text-secondary">Mobile</label>
                            <input
                                class="border border-outline-variant rounded-lg p-2.5 text-body-md focus:border-primary focus:ring-2 focus:ring-primary/10"
                                type="tel" value="+1 (555) 123-4567">
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-label-md text-secondary">Company</label>
                            <input
                                class="border border-outline-variant rounded-lg p-2.5 text-body-md focus:border-primary focus:ring-2 focus:ring-primary/10"
                                type="text" value="Business OS Corp">
                        </div>
                    </div>
                    <div class="flex justify-end gap-3 pt-4 border-t border-outline-variant mt-auto"><button
                            class="px-4 py-2 text-secondary font-label-md text-label-md hover:bg-surface-container transition-colors rounded-lg">Cancel</button><button
                            class="px-6 py-2 bg-primary text-on-primary font-label-md text-label-md rounded-lg shadow-sm hover:opacity-90 transition-all">Save
                            Changes</button></div>
                </section>
                <!-- 2. Account Security Stats -->
                <section class="grid grid-cols-2 gap-4">
                    <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm">
                        <p class="text-secondary font-label-md text-label-md">Last Password Change</p>
                        <h4 class="font-headline-sm text-headline-sm mt-1">24 days ago</h4>
                        <div
                            class="mt-4 flex items-center gap-1 text-primary cursor-pointer hover:underline text-label-md">
                            <span class="">Update now</span>
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm">
                        <p class="text-secondary font-label-md text-label-md">Last Login</p>
                        <h4 class="font-headline-sm text-headline-sm mt-1">2 hours ago</h4>
                        <div class="mt-4 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                            <span class="text-label-md text-on-surface">San Francisco, US</span>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm">
                        <p class="text-secondary font-label-md text-label-md">Failed Attempts</p>
                        <h4 class="font-headline-sm text-headline-sm mt-1">0 <span
                                class="text-body-sm text-secondary font-normal">(7 days)</span></h4>
                        <div class="mt-4 text-tertiary font-label-sm text-label-sm flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">check_circle</span>
                            Secure
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm">
                        <p class="text-secondary font-label-md text-label-md">Recovery Methods</p>
                        <h4 class="font-headline-sm text-headline-sm mt-1">2 Active</h4>
                        <div class="mt-4 flex -space-x-2">
                            <div
                                class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-primary border-2 border-white shadow-sm">
                                <span class="material-symbols-outlined text-sm">mail</span>
                            </div>
                            <div
                                class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed border-2 border-white shadow-sm">
                                <span class="material-symbols-outlined text-sm">smartphone</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 3. Change Email/Mobile -->
                <section
                    class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col gap-6">
                    <div class="flex items-center justify-between border-b border-outline-variant pb-4">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-primary">contact_phone</span>
                            <h3 class="font-headline-sm text-headline-sm">Verification Settings</h3>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="flex flex-col gap-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-md text-label-md text-secondary">Current Email</label>
                                    <input
                                        class="bg-surface-container border border-outline-variant rounded-lg p-2.5 text-body-md text-secondary cursor-not-allowed"
                                        readonly="" type="text" value="alex.rivera@businessos.com">
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-md text-label-md text-secondary">New Email</label>
                                    <div class="flex gap-2">
                                        <input
                                            class="flex-1 border border-outline-variant rounded-lg p-2.5 text-body-md focus:border-primary focus:ring-2 focus:ring-primary/10"
                                            placeholder="Enter new email" type="email">
                                        <!-- <button
                                            class="bg-primary text-white px-3 rounded-lg hover:opacity-90">Send</button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-md text-label-md text-secondary">Verification Code</label>
                                <div class="flex gap-3">
                                    <input
                                        class="w-12 h-12 text-center border border-outline-variant rounded-lg text-headline-sm focus:border-primary focus:ring-2 focus:ring-primary/10"
                                        maxlength="1" type="text">
                                    <input
                                        class="w-12 h-12 text-center border border-outline-variant rounded-lg text-headline-sm focus:border-primary focus:ring-2 focus:ring-primary/10"
                                        maxlength="1" type="text">
                                    <input
                                        class="w-12 h-12 text-center border border-outline-variant rounded-lg text-headline-sm focus:border-primary focus:ring-2 focus:ring-primary/10"
                                        maxlength="1" type="text">
                                    <input
                                        class="w-12 h-12 text-center border border-outline-variant rounded-lg text-headline-sm focus:border-primary focus:ring-2 focus:ring-primary/10"
                                        maxlength="1" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end gap-3 pt-4 border-t border-outline-variant mt-auto"><button
                            class="px-4 py-2 text-secondary font-label-md text-label-md hover:bg-surface-container transition-colors rounded-lg">Cancel</button><button
                            class="px-6 py-2 bg-primary text-on-primary font-label-md text-label-md rounded-lg shadow-sm hover:opacity-90 transition-all">Save
                            Changes</button></div>
                </section>
                <!-- 4. Change Password -->
                <section
                    class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col gap-6">
                    <div class="flex items-center gap-4 border-b border-outline-variant pb-4">
                        <span class="material-symbols-outlined text-primary">lock</span>
                        <h3 class="font-headline-sm text-headline-sm">Security &amp; Password</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-label-md text-secondary">Current Password</label>
                            <div class="relative">
                                <input class="w-full border border-outline-variant rounded-lg p-2.5 text-body-md pr-10"
                                    type="password" value="••••••••••••">
                                <span
                                    class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline cursor-pointer hover:text-on-surface">visibility</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-md text-label-md text-secondary">New Password</label>
                                <div class="relative">
                                    <input
                                        class="w-full border border-outline-variant rounded-lg p-2.5 text-body-md pr-10 focus:border-primary"
                                        placeholder="Min 8 characters" type="password">
                                    <span
                                        class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline cursor-pointer">visibility_off</span>
                                </div>
                                
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-md text-label-md text-secondary">Confirm Password</label>
                                <input class="border border-outline-variant rounded-lg p-2.5 text-body-md"
                                    placeholder="Repeat new password" type="password">
                            </div>
                        </div>
                        
                    </div>
                    <div class="flex justify-end gap-3 pt-4 border-t border-outline-variant mt-auto"><button
                            class="px-4 py-2 text-secondary font-label-md text-label-md hover:bg-surface-container transition-colors rounded-lg">Cancel</button><button
                            class="px-6 py-2 bg-primary text-on-primary font-label-md text-label-md rounded-lg shadow-sm hover:opacity-90 transition-all">Update
                            Password</button></div>
                </section>
                <!-- 5. Two Factor Authentication -->
                <section
                    class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col gap-6">
                    <div class="flex items-center justify-between border-b border-outline-variant pb-4">
                        <div class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-primary">verified_user</span>
                            <h3 class="font-headline-sm text-headline-sm">Two-Factor Authentication</h3>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input checked="" class="sr-only peer" type="checkbox">
                            <div
                                class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary">
                            </div>
                        </label>
                    </div>
                    <div class="flex gap-8 items-start">
                        <div class="p-2 border-2 border-dashed border-outline-variant rounded-xl bg-surface">
                            <div class="w-32 h-32 flex items-center justify-center bg-white">
                                <span class="material-symbols-outlined text-5xl text-outline-variant">qr_code_2</span>
                            </div>
                        </div>
                        <div class="flex-1 space-y-4">
                            <p class="text-body-sm text-secondary">Scan the QR code with your authenticator app (e.g.,
                                Google Authenticator, Authy) to link your account.</p>
                            <div class="space-y-2">
                                <p class="font-label-md text-label-md">Backup Codes</p>
                                <div
                                    class="grid grid-cols-2 gap-2 font-code-sm text-code-sm bg-surface-container p-3 rounded-lg">
                                    <span class="">XXXX - 4589</span>
                                    <span class="">XXXX - 1102</span>
                                    <span class="">XXXX - 9855</span>
                                    <span class="">XXXX - 2234</span>
                                </div>
                                <button
                                    class="flex items-center gap-2 text-primary font-label-md text-label-md hover:underline pt-2">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                    Download Codes
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end gap-3 pt-4 border-t border-outline-variant mt-auto"><button
                            class="px-4 py-2 text-secondary font-label-md text-label-md hover:bg-surface-container transition-colors rounded-lg">Cancel</button><button
                            class="px-6 py-2 bg-primary text-on-primary font-label-md text-label-md rounded-lg shadow-sm hover:opacity-90 transition-all">Save
                            Preferences</button></div>
                </section>
                <!-- 6. Notification Preferences -->
                <section
                    class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col gap-6">
                    <div class="flex items-center gap-4 border-b border-outline-variant pb-4">
                        <span class="material-symbols-outlined text-primary">notifications_active</span>
                        <h3 class="font-headline-sm text-headline-sm">Notifications</h3>
                    </div>
                    <div class="space-y-4">
                        <div
                            class="flex items-center justify-between p-3 hover:bg-surface-container-low rounded-lg transition-colors">
                            <div class="flex gap-3 items-center">
                                <span class="material-symbols-outlined text-secondary">mail</span>
                                <div>
                                    <p class="font-label-md text-label-md">Email Notifications</p>
                                    <p class="text-label-sm text-secondary">Reports and account activity</p>
                                </div>
                            </div>
                            <input checked=""
                                class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary"
                                type="checkbox">
                        </div>
                        <div
                            class="flex items-center justify-between p-3 hover:bg-surface-container-low rounded-lg transition-colors">
                            <div class="flex gap-3 items-center">
                                <span class="material-symbols-outlined text-secondary">sms</span>
                                <div>
                                    <p class="font-label-md text-label-md">SMS Alerts</p>
                                    <p class="text-label-sm text-secondary">Urgent security notifications</p>
                                </div>
                            </div>
                            <input checked=""
                                class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary"
                                type="checkbox">
                        </div>
                        <div
                            class="flex items-center justify-between p-3 hover:bg-surface-container-low rounded-lg transition-colors">
                            <div class="flex gap-3 items-center">
                                <span class="material-symbols-outlined text-secondary">chat</span>
                                <div>
                                    <p class="font-label-md text-label-md">WhatsApp</p>
                                    <p class="text-label-sm text-secondary">Project updates and chat</p>
                                </div>
                            </div>
                            <input class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary"
                                type="checkbox">
                        </div>
                        
                    </div>
                    <div class="flex justify-end gap-3 pt-4 border-t border-outline-variant mt-auto"><button
                            class="px-4 py-2 text-secondary font-label-md text-label-md hover:bg-surface-container transition-colors rounded-lg">Cancel</button><button
                            class="px-6 py-2 bg-primary text-on-primary font-label-md text-label-md rounded-lg shadow-sm hover:opacity-90 transition-all">Save
                            Preferences</button></div>
                </section>
                <!-- 7. Login Sessions (Full Width) -->
                <section
                    class="xl:col-span-2 bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm overflow-hidden">
                    <div class="p-6 flex items-center gap-4 border-b border-outline-variant">
                        <span class="material-symbols-outlined text-primary">devices</span>
                        <h3 class="font-headline-sm text-headline-sm">Active Sessions</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-surface-container-low border-b border-outline-variant">
                                <tr>
                                    <th class="px-6 py-3 font-label-sm text-label-sm text-secondary uppercase">Device /
                                        Browser</th>
                                    <th class="px-6 py-3 font-label-sm text-label-sm text-secondary uppercase">IP
                                        Address</th>
                                    <th class="px-6 py-3 font-label-sm text-label-sm text-secondary uppercase">Last
                                        Activity</th>
                                    <th
                                        class="px-6 py-3 font-label-sm text-label-sm text-secondary uppercase text-right">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant">
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <span
                                                class="material-symbols-outlined text-primary text-3xl">laptop_mac</span>
                                            <div>
                                                <div class="flex items-center gap-2">
                                                    <p class="font-label-md text-label-md font-bold">Chrome on macOS</p>
                                                    <span
                                                        class="px-2 py-0.5 bg-tertiary-container/10 text-tertiary text-[10px] font-bold rounded-full">CURRENT</span>
                                                </div>
                                                <p class="text-label-sm text-secondary">Version 118.0.0</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 font-code-sm text-code-sm text-on-surface">192.168.1.45</td>
                                    <td class="px-6 py-4 text-body-sm text-on-surface">Just now</td>
                                    <td class="px-6 py-4 text-right">
                                        <span class="text-label-md text-secondary">Managed by IT</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface-container-low transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <span
                                                class="material-symbols-outlined text-secondary text-3xl">smartphone</span>
                                            <div>
                                                <p class="font-label-md text-label-md">Safari on iPhone 15</p>
                                                <p class="text-label-sm text-secondary">Mobile App</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 font-code-sm text-code-sm text-on-surface">72.14.192.11</td>
                                    <td class="px-6 py-4 text-body-sm text-on-surface">2 hours ago</td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="text-error font-label-md text-label-md hover:underline">Logout</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- 8. Danger Zone -->
                <section
                    class="xl:col-span-2 bg-error-container/20 p-6 rounded-xl border border-error/30 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-error/10 flex items-center justify-center text-error">
                            <span class="material-symbols-outlined text-2xl">warning</span>
                        </div>
                        <div>
                            <h3 class="font-headline-sm text-headline-sm text-error">Danger Zone</h3>
                            <p class="text-body-sm text-on-error-container/80 max-w-xl">These actions are permanent and
                                cannot be undone. Once you delete your account, all data will be purged from our
                                servers.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <button
                            class="px-6 py-2.5 border border-error text-error rounded-lg font-label-md text-label-md hover:bg-error hover:text-white transition-all">Deactivate</button>
                        <button
                            class="px-6 py-2.5 bg-error text-white rounded-lg font-label-md text-label-md hover:opacity-90 transition-opacity shadow-lg shadow-error/20">Delete
                            Account</button>
                    </div>
                </section>
            </div>
        </div>
    </main>
    
    <script>
    // Micro-interactions for inputs
    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('focus', () => {
            input.parentElement.classList.add('scale-[1.01]');
            input.parentElement.style.transition = 'transform 0.2s ease';
        });
        input.addEventListener('blur', () => {
            input.parentElement.classList.remove('scale-[1.01]');
        });
    });

    // Toggle visibility simulation
    const visibilityIcons = document.querySelectorAll('.material-symbols-outlined');
    visibilityIcons.forEach(icon => {
        if (icon.innerText.includes('visibility')) {
            icon.addEventListener('click', function() {
                const input = this.previousElementSibling;
                if (input.type === 'password') {
                    input.type = 'text';
                    this.innerText = 'visibility_off';
                } else {
                    input.type = 'password';
                    this.innerText = 'visibility';
                }
            });
        }
    });
    </script>

</body>

</html>