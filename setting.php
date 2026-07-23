<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Settings - Business OS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts: Geist & Inter -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@400;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Shared Components Configuration -->
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "tertiary-fixed-dim": "#4edea3",
                    "background": "#f8f9fa",
                    "inverse-on-surface": "#f0f1f2",
                    "inverse-primary": "#b4c5ff",
                    "secondary-container": "#d0e1fb",
                    "outline": "#737686",
                    "secondary-fixed": "#d3e4fe",
                    "surface": "#f8f9fa",
                    "on-tertiary-container": "#bdffdb",
                    "on-secondary": "#ffffff",
                    "error-container": "#ffdad6",
                    "secondary-fixed-dim": "#b7c8e1",
                    "on-secondary-fixed-variant": "#38485d",
                    "on-tertiary-fixed-variant": "#005236",
                    "surface-container": "#edeeef",
                    "surface-variant": "#e1e3e4",
                    "on-secondary-fixed": "#0b1c30",
                    "surface-dim": "#d9dadb",
                    "on-background": "#191c1d",
                    "primary-container": "#2563eb",
                    "on-tertiary": "#ffffff",
                    "inverse-surface": "#2e3132",
                    "error": "#ba1a1a",
                    "primary-fixed": "#dbe1ff",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-tertiary-fixed": "#002113",
                    "on-surface-variant": "#434655",
                    "tertiary": "#006242",
                    "on-secondary-container": "#54647a",
                    "primary": "#004ac6",
                    "on-error": "#ffffff",
                    "surface-container-high": "#e7e8e9",
                    "tertiary-fixed": "#6ffbbe",
                    "outline-variant": "#c3c6d7",
                    "surface-container-highest": "#e1e3e4",
                    "on-primary-fixed": "#00174b",
                    "on-primary-container": "#eeefff",
                    "secondary": "#505f76",
                    "surface-tint": "#0053db",
                    "on-surface": "#191c1d",
                    "tertiary-container": "#007d55",
                    "on-primary": "#ffffff",
                    "surface-container-lowest": "#ffffff",
                    "surface-bright": "#f8f9fa",
                    "surface-container-low": "#f3f4f5",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-error-container": "#93000a"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "xl": "32px",
                    "xs": "4px",
                    "2xl": "48px",
                    "base": "4px",
                    "margin": "24px",
                    "sm": "8px",
                    "md": "16px",
                    "lg": "24px",
                    "gutter": "20px"
                },
                "fontFamily": {
                    "code-sm": ["JetBrains Mono"],
                    "display": ["Geist"],
                    "label-sm": ["Inter"],
                    "headline-sm": ["Geist"],
                    "headline-md": ["Geist"],
                    "body-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-lg": ["Geist"],
                    "body-md": ["Inter"],
                    "headline-lg-mobile": ["Geist"],
                    "body-lg": ["Inter"]
                },
                "fontSize": {
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
                    }],
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "headline-lg-mobile": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }]
                }
            },
        },
    }
    </script>
    <style>
    body {
        font-family: 'Inter', sans-serif;
    }

    .font-geist {
        font-family: 'Geist', sans-serif;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .glass-panel {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(8px);
    }
    </style>
</head>

<body class="bg-surface text-on-surface min-h-screen">
    <!-- TopNavBar (Shared Component) -->
    <?php include "include/header.php"?>
    <div class="flex">

        <!-- Main Content -->
        <main class="flex-1 p-margin mt-12 lg:p-xl max-w-[1440px] mx-auto overflow-hidden">
            <header class="mb-xl flex flex-col md:flex-row justify-between items-start md:items-center gap-md">
                <div>
                    <h2 class="font-headline-lg text-headline-lg font-bold text-on-surface">Manage Labels</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Create custom labels that can be
                        assigned to leads, customers, tasks and deals.</p>
                </div>
                <button
                    class="flex items-center gap-2 bg-primary text-on-primary px-lg py-2.5 rounded-xl font-label-md text-label-md hover:opacity-90 transition-all shadow-sm"
                    onclick="openModal()">
                    <span class="material-symbols-outlined">add</span>
                    Create Label
                </button>
            </header>
            <div class="grid grid-cols-1 xl:grid-cols-12 gap-lg items-start">
                <!-- Section 1: Labels Table -->
                <div
                    class="xl:col-span-8 bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-surface-container-low border-b border-outline-variant">
                                <tr>
                                    <th
                                        class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                        Color</th>
                                    <th
                                        class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                        Label Name</th>
                                    <th
                                        class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                        Description</th>
                                    <th
                                        class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                        Created</th>
                                    <th
                                        class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                        Status</th>
                                    <th
                                        class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant" id="label-table-body">
                                <!-- Row: Hot Lead -->
                                <tr class="hover:bg-surface-container transition-colors group">
                                    <td class="px-md py-4">
                                        <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                    </td>
                                    <td class="px-md py-4"><span
                                            class="bg-red-100 text-red-700 px-2.5 py-0.5 rounded-full font-label-sm text-label-sm">Hot
                                            Lead</span></td>
                                    <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">High
                                        interest leads ready for conversion.</td>
                                    <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 12,
                                        2023</td>
                                    <td class="px-md py-4">
                                        <div
                                            class="relative inline-block w-10 h-5 bg-primary rounded-full transition-colors cursor-pointer">
                                            <div
                                                class="absolute left-5 top-0.5 w-4 h-4 bg-white rounded-full transition-transform">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-md py-4 text-right">
                                        <div class="flex justify-end gap-2 transition-opacity">
                                            <button class="p-1 hover:text-primary transition-colors"><span
                                                    class="material-symbols-outlined text-[20px]">edit</span></button>
                                            <button class="p-1 hover:text-error transition-colors"><span
                                                    class="material-symbols-outlined text-[20px]">delete</span></button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row: VIP -->
                                <tr class="hover:bg-surface-container transition-colors group">
                                    <td class="px-md py-4">
                                        <div class="w-3 h-3 rounded-full bg-purple-500"></div>
                                    </td>
                                    <td class="px-md py-4"><span
                                            class="bg-purple-100 text-purple-700 px-2.5 py-0.5 rounded-full font-label-sm text-label-sm">VIP
                                            Customer</span></td>
                                    <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">High-value
                                        recurring clients.</td>
                                    <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Sep 28,
                                        2023</td>
                                    <td class="px-md py-4">
                                        <div
                                            class="relative inline-block w-10 h-5 bg-primary rounded-full transition-colors cursor-pointer">
                                            <div
                                                class="absolute left-5 top-0.5 w-4 h-4 bg-white rounded-full transition-transform">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-md py-4 text-right">
                                        <div class="flex justify-end gap-2 transition-opacity">
                                            <button class="p-1 hover:text-primary transition-colors"><span
                                                    class="material-symbols-outlined text-[20px]">edit</span></button>
                                            <button class="p-1 hover:text-error transition-colors"><span
                                                    class="material-symbols-outlined text-[20px]">delete</span></button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row: Follow Up -->
                                <tr class="hover:bg-surface-container transition-colors group">
                                    <td class="px-md py-4">
                                        <div class="w-3 h-3 rounded-full bg-orange-500"></div>
                                    </td>
                                    <td class="px-md py-4"><span
                                            class="bg-orange-100 text-orange-700 px-2.5 py-0.5 rounded-full font-label-sm text-label-sm">Follow
                                            Up</span></td>
                                    <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Requires
                                        contact within 24 hours.</td>
                                    <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Nov 02,
                                        2023</td>
                                    <td class="px-md py-4">
                                        <div
                                            class="relative inline-block w-10 h-5 bg-primary rounded-full transition-colors cursor-pointer">
                                            <div
                                                class="absolute left-5 top-0.5 w-4 h-4 bg-white rounded-full transition-transform">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-md py-4 text-right">
                                        <div class="flex justify-end gap-2 transition-opacity">
                                            <button class="p-1 hover:text-primary transition-colors"><span
                                                    class="material-symbols-outlined text-[20px]">edit</span></button>
                                            <button class="p-1 hover:text-error transition-colors"><span
                                                    class="material-symbols-outlined text-[20px]">delete</span></button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Row: New Client -->
                                <tr class="hover:bg-surface-container transition-colors group">
                                    <td class="px-md py-4">
                                        <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                    </td>
                                    <td class="px-md py-4"><span
                                            class="bg-green-100 text-green-700 px-2.5 py-0.5 rounded-full font-label-sm text-label-sm">New
                                            Client</span></td>
                                    <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Recently
                                        onboarded business partners.</td>
                                    <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Nov 15,
                                        2023</td>
                                    <td class="px-md py-4">
                                        <div
                                            class="relative inline-block w-10 h-5 bg-primary rounded-full transition-colors cursor-pointer">
                                            <div
                                                class="absolute left-5 top-0.5 w-4 h-4 bg-white rounded-full transition-transform">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-md py-4 text-right">
                                        <div class="flex justify-end gap-2 transition-opacity">
                                            <button class="p-1 hover:text-primary transition-colors"><span
                                                    class="material-symbols-outlined text-[20px]">edit</span></button>
                                            <button class="p-1 hover:text-error transition-colors"><span
                                                    class="material-symbols-outlined text-[20px]">delete</span></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Section 3: Live Preview & Lead Status Cluster -->
                <div class="xl:col-span-4 space-y-lg">
                    <!-- Preview Card -->
                    <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg shadow-sm">
                        <h3 class="font-headline-sm text-headline-sm font-bold mb-md">Live Preview</h3>
                        <div class="space-y-lg">
                            <div class="p-md bg-background rounded-lg border border-outline-variant/50">
                                <p class="font-label-sm text-label-sm text-on-surface-variant mb-sm uppercase">Lead
                                    Labels</p>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-red-100 text-red-700 px-2.5 py-0.5 rounded-full font-label-sm text-label-sm">Hot
                                        Lead</span>
                                    <span
                                        class="bg-purple-100 text-purple-700 px-2.5 py-0.5 rounded-full font-label-sm text-label-sm">VIP
                                        Customer</span>
                                    <span
                                        class="bg-blue-100 text-blue-700 px-2.5 py-0.5 rounded-full font-label-sm text-label-sm">Important</span>
                                    <span
                                        class="bg-orange-100 text-orange-700 px-2.5 py-0.5 rounded-full font-label-sm text-label-sm">Follow
                                        Up</span>
                                </div>
                            </div>
                            <div class="p-md bg-background rounded-lg border border-outline-variant/50">
                                <p class="font-label-sm text-label-sm text-on-surface-variant mb-sm uppercase">Lead
                                    Status Workflow</p>
                                <div
                                    class="flex items-center w-full h-2 bg-surface-variant rounded-full overflow-hidden mb-3">
                                    <div class="w-1/4 h-full bg-blue-500"></div>
                                    <div class="w-1/4 h-full bg-purple-500 opacity-80"></div>
                                    <div class="w-1/4 h-full bg-teal-500 opacity-40"></div>
                                    <div class="w-1/4 h-full bg-surface-variant"></div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="font-label-sm text-label-sm text-teal-600 font-bold">Qualified</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Next:
                                        Proposal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Lead Status Section (Smaller table variant) -->
                </div>
            </div>
            <div class="mt-lg bg-surface-container-lowest border border-outline-variant rounded-xl shadow-sm overflow-hidden"
                id="lead-status-full-table">
                <div
                    class="p-md border-b border-outline-variant flex justify-between items-center bg-surface-container-low">
                    <h3 class="font-headline-sm text-headline-sm font-bold">Lead Status</h3>
                    <button
                        class="flex items-center gap-2 bg-primary text-on-primary px-lg py-2.5 rounded-xl font-label-md text-label-md hover:opacity-90 transition-all shadow-sm"
                        onclick="openStatusModal()">
                        <span class="material-symbols-outlined">add</span>
                        Create Status
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead class="bg-surface-container-low border-b border-outline-variant">
                            <tr>
                                <th
                                    class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Color</th>
                                <th
                                    class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Status Name</th>

                                <th
                                    class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Created</th>
                                <th
                                    class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="px-md py-3 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant" id="status-table-body">
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="px-md py-4">
                                    <div class="w-2.5 h-2.5 rounded-full bg-blue-500"></div>
                                </td>
                                <td class="px-md py-4"><span
                                        class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded-md font-label-sm text-label-sm">New</span>
                                </td>
                                <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 12,
                                    2023</td>

                                <td class="px-md py-4">
                                    <div class="relative inline-block w-10 h-5 bg-primary rounded-full cursor-pointer">
                                        <div class="absolute left-5 top-0.5 w-4 h-4 bg-white rounded-full"></div>
                                    </div>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <div class="flex justify-end gap-2"><button
                                            class="p-1 hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[20px]">edit</span></button><button
                                            class="p-1 hover:text-error transition-colors"><span
                                                class="material-symbols-outlined text-[20px]">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="px-md py-4">
                                    <div class="w-2.5 h-2.5 rounded-full bg-purple-500"></div>
                                </td>
                                <td class="px-md py-4"><span
                                        class="bg-purple-100 text-purple-700 px-2 py-0.5 rounded-md font-label-sm text-label-sm">Contacted</span>
                                </td>
                                <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 12,
                                    2023</td>

                                <td class="px-md py-4">
                                    <div class="relative inline-block w-10 h-5 bg-primary rounded-full cursor-pointer">
                                        <div class="absolute left-5 top-0.5 w-4 h-4 bg-white rounded-full"></div>
                                    </div>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <div class="flex justify-end gap-2"><button
                                            class="p-1 hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[20px]">edit</span></button><button
                                            class="p-1 hover:text-error transition-colors"><span
                                                class="material-symbols-outlined text-[20px]">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="px-md py-4">
                                    <div class="w-2.5 h-2.5 rounded-full bg-teal-500"></div>
                                </td>
                                <td class="px-md py-4"><span
                                        class="bg-teal-100 text-teal-700 px-2 py-0.5 rounded-md font-label-sm text-label-sm">Qualified</span>
                                </td>
                                <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 12,
                                    2023</td>

                                <td class="px-md py-4">
                                    <div class="relative inline-block w-10 h-5 bg-primary rounded-full cursor-pointer">
                                        <div class="absolute left-5 top-0.5 w-4 h-4 bg-white rounded-full"></div>
                                    </div>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <div class="flex justify-end gap-2"><button
                                            class="p-1 hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[20px]">edit</span></button><button
                                            class="p-1 hover:text-error transition-colors"><span
                                                class="material-symbols-outlined text-[20px]">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-surface-container transition-colors">
                                <td class="px-md py-4">
                                    <div class="w-2.5 h-2.5 rounded-full bg-green-500"></div>
                                </td>
                                <td class="px-md py-4"><span
                                        class="bg-green-100 text-green-700 px-2 py-0.5 rounded-md font-label-sm text-label-sm">Won</span>
                                </td>

                                <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 12,
                                    2023</td>

                                <td class="px-md py-4">
                                    <div class="relative inline-block w-10 h-5 bg-primary rounded-full cursor-pointer">
                                        <div class="absolute left-5 top-0.5 w-4 h-4 bg-white rounded-full"></div>
                                    </div>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <div class="flex justify-end gap-2"><button
                                            class="p-1 hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[20px]">edit</span></button><button
                                            class="p-1 hover:text-error transition-colors"><span
                                                class="material-symbols-outlined text-[20px]">delete</span></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-md bg-surface-container-low text-center border-t border-outline-variant"><button
                        class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors">View
                        All Statuses</button></div>
            </div>
        </main>
    </div>
    <!-- Modal Overlay: Create Label -->
    <div class="fixed inset-0 z-[100] bg-on-background/40 backdrop-blur-sm flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300"
        id="modal-overlay">
        <div class="bg-surface-container-lowest w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300"
            id="modal-content">
            <!-- Modal Header -->
            <div class="px-xl py-lg border-b border-outline-variant flex justify-between items-center">
                <h3 class="font-headline-md text-headline-md font-bold text-on-surface">Create New Label</h3>
                <button class="p-2 hover:bg-surface-variant/30 rounded-full transition-colors" onclick="closeModal()">
                    <span class="material-symbols-outlined text-on-surface-variant">close</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="px-xl py-xl space-y-lg">
                <div>
                    <label class="block font-label-md text-label-md mb-2 text-on-surface">Label Name</label>
                    <input id="label-name-input"
                        class="w-full px-md py-3 rounded-xl border border-outline-variant bg-surface focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none"
                        placeholder="e.g. High Priority" type="text" />
                </div>
                <div>
                    <label class="block font-label-md text-label-md mb-3 text-on-surface">Choose Color</label>
                    <div class="flex flex-wrap gap-3" id="label-color-swatches">
                        <button data-color="red" class="w-8 h-8 rounded-full bg-red-500 ring-4 ring-primary/20 ring-offset-2"></button>
                        <button data-color="blue" class="w-8 h-8 rounded-full bg-blue-500"></button>
                        <button data-color="green" class="w-8 h-8 rounded-full bg-green-500"></button>
                        <button data-color="purple" class="w-8 h-8 rounded-full bg-purple-500"></button>
                        <button data-color="orange" class="w-8 h-8 rounded-full bg-orange-500"></button>
                        <button data-color="teal" class="w-8 h-8 rounded-full bg-teal-500"></button>
                        <button data-color="pink" class="w-8 h-8 rounded-full bg-pink-500"></button>
                        <button data-color="slate" class="w-8 h-8 rounded-full bg-slate-500"></button>
                        <button
                            class="w-8 h-8 rounded-full border-2 border-dashed border-outline-variant flex items-center justify-center"><span
                                class="material-symbols-outlined text-[16px]">add</span></button>
                    </div>
                </div>
                <div>
                    <label class="block font-label-md text-label-md mb-2 text-on-surface">Description (Optional)</label>
                    <textarea id="label-description-input"
                        class="w-full px-md py-3 rounded-xl border border-outline-variant bg-surface focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none resize-none"
                        placeholder="Describe when to use this label..." rows="3"></textarea>
                </div>
                <div class="flex items-center justify-between p-md bg-surface-container rounded-xl">
                    <div>
                        <p class="font-label-md text-label-md font-bold">Active Status</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Enable this label for team use
                            immediately.</p>
                    </div>
                    <div
                        class="relative inline-block w-12 h-6 bg-primary rounded-full transition-colors cursor-pointer">
                        <div class="absolute left-6 top-1 w-4 h-4 bg-white rounded-full transition-transform"></div>
                    </div>
                </div>
                <div class="pt-2 border-t border-outline-variant/50">
                    <p class="font-label-sm text-label-sm text-on-surface-variant mb-2">Live Preview</p>
                    <span
                        class="bg-red-100 text-red-700 px-4 py-1.5 rounded-full font-label-md text-label-md font-bold shadow-sm inline-block"
                        id="preview-badge">High Priority</span>
                </div>
            </div>
            <!-- Modal Footer -->
            <div class="px-xl py-lg bg-surface-container-low flex justify-end gap-md border-t border-outline-variant">
                <button
                    class="px-lg py-2.5 rounded-xl border border-outline-variant text-on-surface-variant font-label-md hover:bg-surface-variant transition-colors"
                    onclick="closeModal()">Cancel</button>
                <button id="create-label-btn"
                    class="px-xl py-2.5 rounded-xl bg-primary text-on-primary font-label-md hover:opacity-90 shadow-lg active:scale-95 transition-all">Create
                    Label</button>
            </div>
        </div>
    </div>

    <!-- Modal Overlay: Create Status -->
    <div class="fixed inset-0 z-[100] bg-on-background/40 backdrop-blur-sm flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300"
        id="modal-overlay-status">
        <div class="bg-surface-container-lowest w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform duration-300"
            id="modal-content-status">
            <!-- Modal Header -->
            <div class="px-xl py-lg border-b border-outline-variant flex justify-between items-center">
                <h3 class="font-headline-md text-headline-md font-bold text-on-surface">Create New Status</h3>
                <button class="p-2 hover:bg-surface-variant/30 rounded-full transition-colors" onclick="closeStatusModal()">
                    <span class="material-symbols-outlined text-on-surface-variant">close</span>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="px-xl py-xl space-y-lg">
                <div>
                    <label class="block font-label-md text-label-md mb-2 text-on-surface">Status Name</label>
                    <input id="status-name-input"
                        class="w-full px-md py-3 rounded-xl border border-outline-variant bg-surface focus:border-primary focus:ring-4 focus:ring-primary/10 transition-all outline-none"
                        placeholder="e.g. Proposal Sent" type="text" />
                </div>
                <div>
                    <label class="block font-label-md text-label-md mb-3 text-on-surface">Choose Color</label>
                    <div class="flex flex-wrap gap-3" id="status-color-swatches">
                        <button data-color="blue" class="w-8 h-8 rounded-full bg-blue-500 ring-4 ring-primary/20 ring-offset-2"></button>
                        <button data-color="red" class="w-8 h-8 rounded-full bg-red-500"></button>
                        <button data-color="green" class="w-8 h-8 rounded-full bg-green-500"></button>
                        <button data-color="purple" class="w-8 h-8 rounded-full bg-purple-500"></button>
                        <button data-color="orange" class="w-8 h-8 rounded-full bg-orange-500"></button>
                        <button data-color="teal" class="w-8 h-8 rounded-full bg-teal-500"></button>
                        <button data-color="pink" class="w-8 h-8 rounded-full bg-pink-500"></button>
                        <button data-color="slate" class="w-8 h-8 rounded-full bg-slate-500"></button>
                        <button
                            class="w-8 h-8 rounded-full border-2 border-dashed border-outline-variant flex items-center justify-center"><span
                                class="material-symbols-outlined text-[16px]">add</span></button>
                    </div>
                </div>
                <div class="flex items-center justify-between p-md bg-surface-container rounded-xl">
                    <div>
                        <p class="font-label-md text-label-md font-bold">Active Status</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Make this status available for
                            leads immediately.</p>
                    </div>
                    <div
                        class="relative inline-block w-12 h-6 bg-primary rounded-full transition-colors cursor-pointer">
                        <div class="absolute left-6 top-1 w-4 h-4 bg-white rounded-full transition-transform"></div>
                    </div>
                </div>
                <div class="pt-2 border-t border-outline-variant/50">
                    <p class="font-label-sm text-label-sm text-on-surface-variant mb-2">Live Preview</p>
                    <span
                        class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded-md font-label-sm text-label-sm inline-block"
                        id="preview-status-badge">Proposal Sent</span>
                </div>
            </div>
            <!-- Modal Footer -->
            <div class="px-xl py-lg bg-surface-container-low flex justify-end gap-md border-t border-outline-variant">
                <button
                    class="px-lg py-2.5 rounded-xl border border-outline-variant text-on-surface-variant font-label-md hover:bg-surface-variant transition-colors"
                    onclick="closeStatusModal()">Cancel</button>
                <button id="create-status-btn"
                    class="px-xl py-2.5 rounded-xl bg-primary text-on-primary font-label-md hover:opacity-90 shadow-lg active:scale-95 transition-all">Create
                    Status</button>
            </div>
        </div>
    </div>


    
    <script>
    function openModal() {
        const overlay = document.getElementById('modal-overlay');
        const content = document.getElementById('modal-content');
        overlay.classList.remove('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
    }

    function closeModal() {
        const overlay = document.getElementById('modal-overlay');
        const content = document.getElementById('modal-content');
        overlay.classList.add('opacity-0', 'pointer-events-none');
        content.classList.add('scale-95');
        content.classList.remove('scale-100');
    }

    function openStatusModal() {
        const overlay = document.getElementById('modal-overlay-status');
        const content = document.getElementById('modal-content-status');
        overlay.classList.remove('opacity-0', 'pointer-events-none');
        content.classList.remove('scale-95');
        content.classList.add('scale-100');
    }

    function closeStatusModal() {
        const overlay = document.getElementById('modal-overlay-status');
        const content = document.getElementById('modal-content-status');
        overlay.classList.add('opacity-0', 'pointer-events-none');
        content.classList.add('scale-95');
        content.classList.remove('scale-100');
    }

    // Close on ESC (whichever modal is open)
    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeModal();
            closeStatusModal();
        }
    });

    // Toggle micro-interaction (shared by every on/off switch on the page)
    document.querySelectorAll('.relative.inline-block.w-10, .relative.inline-block.w-12').forEach(toggle => {
        toggle.addEventListener('click', function() {
            const dot = this.querySelector('div');
            const isActive = this.classList.contains('bg-primary');
            if (isActive) {
                this.classList.remove('bg-primary');
                this.classList.add('bg-outline-variant');
                dot.classList.remove('left-5', 'left-6');
                dot.classList.add('left-1');
            } else {
                this.classList.add('bg-primary');
                this.classList.remove('bg-outline-variant');
                dot.classList.add(this.classList.contains('w-12') ? 'left-6' : 'left-5');
                dot.classList.remove('left-1');
            }
        });
    });

    // Shared color palette used by both modals
    const SWATCH_COLORS = {
        red:    { bg: 'bg-red-100',    text: 'text-red-700',    dot: 'bg-red-500' },
        blue:   { bg: 'bg-blue-100',   text: 'text-blue-700',   dot: 'bg-blue-500' },
        green:  { bg: 'bg-green-100',  text: 'text-green-700',  dot: 'bg-green-500' },
        purple: { bg: 'bg-purple-100', text: 'text-purple-700', dot: 'bg-purple-500' },
        orange: { bg: 'bg-orange-100', text: 'text-orange-700', dot: 'bg-orange-500' },
        teal:   { bg: 'bg-teal-100',   text: 'text-teal-700',   dot: 'bg-teal-500' },
        pink:   { bg: 'bg-pink-100',   text: 'text-pink-700',   dot: 'bg-pink-500' },
        slate:  { bg: 'bg-slate-100',  text: 'text-slate-700',  dot: 'bg-slate-500' },
    };

    function todayFormatted() {
        return new Date().toLocaleDateString('en-US', { month: 'short', day: '2-digit', year: 'numeric' });
    }

    // --- Create Label modal: working color selection + live preview ---
    let selectedLabelColor = 'red';
    const labelNameInput = document.getElementById('label-name-input');
    const previewBadge = document.getElementById('preview-badge');
    const labelSwatches = document.querySelectorAll('#label-color-swatches button[data-color]');

    function updateLabelPreview() {
        const name = labelNameInput.value.trim() || 'High Priority';
        const c = SWATCH_COLORS[selectedLabelColor];
        previewBadge.textContent = name;
        previewBadge.className = `${c.bg} ${c.text} px-4 py-1.5 rounded-full font-label-md text-label-md font-bold shadow-sm inline-block`;
    }

    labelNameInput.addEventListener('input', updateLabelPreview);

    labelSwatches.forEach(btn => {
        btn.addEventListener('click', () => {
            labelSwatches.forEach(b => b.classList.remove('ring-4', 'ring-primary/20', 'ring-offset-2'));
            btn.classList.add('ring-4', 'ring-primary/20', 'ring-offset-2');
            selectedLabelColor = btn.dataset.color;
            updateLabelPreview();
        });
    });

    document.getElementById('create-label-btn').addEventListener('click', () => {
        const name = labelNameInput.value.trim();
        if (!name) { labelNameInput.focus(); return; }
        const description = document.getElementById('label-description-input').value.trim() || '—';
        const c = SWATCH_COLORS[selectedLabelColor];

        const tbody = document.getElementById('label-table-body');
        const row = document.createElement('tr');
        row.className = 'hover:bg-surface-container transition-colors group';
        row.innerHTML = `
            <td class="px-md py-4">
                <div class="w-3 h-3 rounded-full ${c.dot}"></div>
            </td>
            <td class="px-md py-4"><span class="${c.bg} ${c.text} px-2.5 py-0.5 rounded-full font-label-sm text-label-sm">${name}</span></td>
            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">${description}</td>
            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">${todayFormatted()}</td>
            <td class="px-md py-4">
                <div class="relative inline-block w-10 h-5 bg-primary rounded-full transition-colors cursor-pointer">
                    <div class="absolute left-5 top-0.5 w-4 h-4 bg-white rounded-full transition-transform"></div>
                </div>
            </td>
            <td class="px-md py-4 text-right">
                <div class="flex justify-end gap-2 transition-opacity">
                    <button class="p-1 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[20px]">edit</span></button>
                    <button class="p-1 hover:text-error transition-colors"><span class="material-symbols-outlined text-[20px]">delete</span></button>
                </div>
            </td>`;
        tbody.appendChild(row);

        row.querySelector('.relative.inline-block').addEventListener('click', function() {
            const dot = this.querySelector('div');
            const isActive = this.classList.contains('bg-primary');
            if (isActive) {
                this.classList.remove('bg-primary'); this.classList.add('bg-outline-variant');
                dot.classList.remove('left-5'); dot.classList.add('left-1');
            } else {
                this.classList.add('bg-primary'); this.classList.remove('bg-outline-variant');
                dot.classList.add('left-5'); dot.classList.remove('left-1');
            }
        });
        row.querySelector('.hover\\:text-error').addEventListener('click', () => row.remove());

        labelNameInput.value = '';
        document.getElementById('label-description-input').value = '';
        selectedLabelColor = 'red';
        labelSwatches.forEach(b => b.classList.remove('ring-4', 'ring-primary/20', 'ring-offset-2'));
        labelSwatches[0].classList.add('ring-4', 'ring-primary/20', 'ring-offset-2');
        updateLabelPreview();
        closeModal();
    });

    // --- Create Status modal: color selection + live preview + row insertion ---
    let selectedStatusColor = 'blue';
    const statusNameInput = document.getElementById('status-name-input');
    const previewStatusBadge = document.getElementById('preview-status-badge');
    const statusSwatches = document.querySelectorAll('#status-color-swatches button[data-color]');

    function updateStatusPreview() {
        const name = statusNameInput.value.trim() || 'Proposal Sent';
        const c = SWATCH_COLORS[selectedStatusColor];
        previewStatusBadge.textContent = name;
        previewStatusBadge.className = `${c.bg} ${c.text} px-2 py-0.5 rounded-md font-label-sm text-label-sm inline-block`;
    }

    statusNameInput.addEventListener('input', updateStatusPreview);

    statusSwatches.forEach(btn => {
        btn.addEventListener('click', () => {
            statusSwatches.forEach(b => b.classList.remove('ring-4', 'ring-primary/20', 'ring-offset-2'));
            btn.classList.add('ring-4', 'ring-primary/20', 'ring-offset-2');
            selectedStatusColor = btn.dataset.color;
            updateStatusPreview();
        });
    });

    document.getElementById('create-status-btn').addEventListener('click', () => {
        const name = statusNameInput.value.trim();
        if (!name) { statusNameInput.focus(); return; }
        const c = SWATCH_COLORS[selectedStatusColor];

        const tbody = document.getElementById('status-table-body');
        const row = document.createElement('tr');
        row.className = 'hover:bg-surface-container transition-colors';
        row.innerHTML = `
            <td class="px-md py-4">
                <div class="w-2.5 h-2.5 rounded-full ${c.dot}"></div>
            </td>
            <td class="px-md py-4"><span class="${c.bg} ${c.text} px-2 py-0.5 rounded-md font-label-sm text-label-sm">${name}</span></td>
            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">${todayFormatted()}</td>
            <td class="px-md py-4">
                <div class="relative inline-block w-10 h-5 bg-primary rounded-full transition-colors cursor-pointer">
                    <div class="absolute left-5 top-0.5 w-4 h-4 bg-white rounded-full transition-transform"></div>
                </div>
            </td>
            <td class="px-md py-4 text-right">
                <div class="flex justify-end gap-2">
                    <button class="p-1 hover:text-primary transition-colors"><span class="material-symbols-outlined text-[20px]">edit</span></button>
                    <button class="p-1 hover:text-error transition-colors"><span class="material-symbols-outlined text-[20px]">delete</span></button>
                </div>
            </td>`;
        tbody.appendChild(row);

        row.querySelector('.relative.inline-block').addEventListener('click', function() {
            const dot = this.querySelector('div');
            const isActive = this.classList.contains('bg-primary');
            if (isActive) {
                this.classList.remove('bg-primary'); this.classList.add('bg-outline-variant');
                dot.classList.remove('left-5'); dot.classList.add('left-1');
            } else {
                this.classList.add('bg-primary'); this.classList.remove('bg-outline-variant');
                dot.classList.add('left-5'); dot.classList.remove('left-1');
            }
        });
        row.querySelector('.hover\\:text-error').addEventListener('click', () => row.remove());

        statusNameInput.value = '';
        selectedStatusColor = 'blue';
        statusSwatches.forEach(b => b.classList.remove('ring-4', 'ring-primary/20', 'ring-offset-2'));
        statusSwatches[0].classList.add('ring-4', 'ring-primary/20', 'ring-offset-2');
        updateStatusPreview();
        closeStatusModal();
    });
    </script>
</body>

</html>