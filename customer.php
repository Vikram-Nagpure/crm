<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Customers Management | Business OS</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@400;600;700&amp;family=JetBrains+Mono&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "surface": "#f8f9fa",
                    "on-primary-fixed": "#00174b",
                    "error-container": "#ffdad6",
                    "primary-container": "#2563eb",
                    "on-primary": "#ffffff",
                    "tertiary-fixed-dim": "#4edea3",
                    "on-background": "#191c1d",
                    "outline": "#737686",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-fixed-variant": "#38485d",
                    "on-secondary-fixed": "#0b1c30",
                    "surface-bright": "#f8f9fa",
                    "on-tertiary-fixed": "#002113",
                    "primary-fixed": "#dbe1ff",
                    "outline-variant": "#c3c6d7",
                    "tertiary-fixed": "#6ffbbe",
                    "on-primary-fixed-variant": "#003ea8",
                    "error": "#ba1a1a",
                    "on-surface-variant": "#434655",
                    "tertiary-container": "#007d55",
                    "on-secondary-container": "#54647a",
                    "on-tertiary": "#ffffff",
                    "on-surface": "#191c1d",
                    "tertiary": "#006242",
                    "on-tertiary-container": "#bdffdb",
                    "inverse-primary": "#b4c5ff",
                    "inverse-surface": "#2e3132",
                    "surface-container-low": "#f3f4f5",
                    "surface-dim": "#d9dadb",
                    "surface-variant": "#e1e3e4",
                    "secondary-container": "#d0e1fb",
                    "background": "#f8f9fa",
                    "primary": "#004ac6",
                    "on-error-container": "#93000a",
                    "inverse-on-surface": "#f0f1f2",
                    "surface-container": "#edeeef",
                    "on-primary-container": "#eeefff",
                    "on-tertiary-fixed-variant": "#005236",
                    "secondary": "#505f76",
                    "secondary-fixed-dim": "#b7c8e1",
                    "surface-container-highest": "#e1e3e4",
                    "surface-tint": "#0053db",
                    "secondary-fixed": "#d3e4fe",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-secondary": "#ffffff",
                    "surface-container-high": "#e7e8e9",
                    "on-error": "#ffffff"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "lg": "24px",
                    "2xl": "48px",
                    "xl": "32px",
                    "xs": "4px",
                    "md": "16px",
                    "base": "4px",
                    "sm": "8px",
                    "margin": "24px",
                    "gutter": "20px"
                },
                "fontFamily": {
                    "headline-lg-mobile": ["Geist"],
                    "headline-sm": ["Geist"],
                    "body-lg": ["Inter"],
                    "label-sm": ["Inter"],
                    "display": ["Geist"],
                    "body-md": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-md": ["Geist"],
                    "code-sm": ["JetBrains Mono"],
                    "headline-lg": ["Geist"],
                    "body-sm": ["Inter"]
                },
                "fontSize": {
                    "headline-lg-mobile": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                    "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                    "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                    "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                    "display": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                    "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                    "label-md": ["14px", { "lineHeight": "20px", "fontWeight": "500" }],
                    "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                    "code-sm": ["13px", { "lineHeight": "18px", "fontWeight": "400" }],
                    "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                    "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }]
                }
            },
        },
    }
    </script>
    <style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
        vertical-align: middle;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 8px;
        height: 8px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #c3c6d7;
        border-radius: 4px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #737686;
    }
    </style>
</head>

<body class="bg-surface text-on-surface font-body-md text-body-md antialiased">
    <!-- TopNavBar from Shared Components -->
    <?php include "include/header.php"?>

    <!-- Main Content Canvas -->
    <main class="ml-64 mt-16 p-lg min-h-screen">

        <!-- Breadcrumb & Title Section -->
        <div class="mb-lg">
            <nav class="flex items-center gap-2 text-on-surface-variant mb-2">
                <a class="font-label-sm text-label-sm hover:text-primary transition-colors" href="#">CRM</a>
                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                <span class="font-label-sm text-label-sm text-on-surface font-semibold">Customers Management</span>
            </nav>
            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Customers Management</h1>
        </div>

        <!-- Action Bar -->
        <div
            class="bg-surface-container-lowest border border-outline-variant rounded-lg p-md mb-lg flex flex-wrap items-center justify-between gap-md">
            <div class="flex items-center gap-md flex-1 min-w-[300px]">
                <div class="relative w-full max-w-sm">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none text-body-sm transition-all"
                        placeholder="Search customers by name, email, or ID..." type="text" />
                </div>
                <div class="flex items-center gap-sm">
                    <select
                        class="bg-surface border border-outline-variant rounded-lg py-2 pl-3 pr-8 text-label-md text-on-surface-variant focus:border-primary focus:ring-0 cursor-pointer">
                        <option>All Assigned</option>
                        <option>Marcus K.</option>
                        <option>Sarah L.</option>
                        <option>Daniel R.</option>
                    </select>
                    <select
                        class="bg-surface border border-outline-variant rounded-lg py-2 pl-3 pr-8 text-label-md text-on-surface-variant focus:border-primary focus:ring-0 cursor-pointer">
                        <option>All Status</option>
                        <option>Active</option>
                        <option>Pending</option>
                        <option>Inactive</option>
                    </select>

                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[18px] text-gray-500">
                            calendar_today
                        </span>
                        <input
                            type="text"
                            id="dateRange"
                            placeholder="Select Date Range"
                            class="pl-10 pr-4 py-2 border border-outline-variant rounded-lg text-label-md bg-white w-72 focus:outline-none focus:ring-2 focus:ring-primary cursor-pointer"
                            readonly>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-md">
                <!-- <button
                    class="flex items-center gap-2 px-md py-2 border border-outline-variant rounded-lg text-label-md text-on-surface hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-[18px]">file_download</span>
                    Export
                </button> -->
                <a href="customercreate.php"
                    class="flex items-center gap-2 px-xl py-2 bg-primary text-on-primary rounded-lg font-label-md text-label-md hover:shadow-lg transition-all active:scale-95">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                    Add Customer
                </a>
            </div>
        </div>

        <!-- Data Table Section -->
        <div class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden">
            <div class="w-full overflow-x-auto rounded-xl border border-outline-variant bg-white shadow-sm">
                <table class="w-full min-w-[1200px] border-collapse">
                    <thead>
                        <tr class="bg-surface-container border-b border-outline-variant">
                            <th class="px-md py-4 w-12">
                                <input class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                ID</th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider min-w-[240px]">
                                Customer Info</th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Company</th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Phone</th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Assigned By</th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Date</th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right sticky right-0 bg-surface-container shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">

                        <!-- Row 1 -->
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-md py-4">
                                <input class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </td>
                            <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">#C-8210</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-md">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="A portrait of a young woman with a sharp, professional appearance. She is wearing minimal geometric jewelry and a crisp white blouse."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBU-R5Xe5-BMYi42sJW3xnQUdt07_stfMNScQLJSChY8OmyiIGz036wHkRhd5g8mGRiAoa8psawRIqXNViPIRvC-YdpjlvuOhSb6KzPxRYEZ6cDB6N7x5baN8YFihXhTnBe7eBcgUlpRge7ZNb7Sq3HATdmwI7EBOogg1RhTPgCTbcLO-oPv_le2f39FCUiQHYxrefg_IgF_JRa9W1TeGL7d1UN3SFyJ7NAjcbyQCr25Pnv-brjvsox6WjIqaaszeFBYah5hn7cMv4" />
                                    <div>
                                        <div class="font-label-md text-label-md text-on-surface">Elena Richardson</div>
                                        <div class="font-body-sm text-body-sm text-on-surface-variant">elena.r@velox.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface">Velox Dynamics</td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">+1 (555) 012-3456</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-sm">
                                    <div
                                        class="w-7 h-7 rounded-full bg-secondary-fixed text-on-secondary-fixed text-[10px] flex items-center justify-center font-bold">
                                        MK</div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Marcus K.</span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 12, 2023</td>
                            <td
                                class="px-md py-4 text-right sticky right-0 bg-surface-container-lowest group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                <div class="flex justify-end gap-1">
                                    <a href="customerview.php" class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors"
                                        title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></a>
                                    <button class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors"
                                        title="Edit"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors"
                                        title="Delete"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 (Zebra) -->
                        <tr class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors group border-b border-outline-variant">
                            <td class="px-md py-4">
                                <input class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </td>
                            <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">#C-8211</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-md">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="A profile of a middle-aged businessman with a distinguished look, featuring salt-and-pepper hair and a tailored charcoal gray suit."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4Uk57vCu1oqST4wNz4lKCkrZHfMM0hKar9JNd39WQO92A581gJIhGASLfgVjSVdE_PN5yRrxn-cyCQrqsFM15jTB4E_Sman1MbQSUGbIDKTJsVJn7cn8a89IGnJ8A7qanPT094byZ_WvB359ERxlG3kbJoxNqTTgN6JLXAiWE2lQsdVXjnuaLedjq1uZFtrKaxd75XcsaYvmOBnf-l9eYO0RIaHXnn-KLeDZqnjMSmfOSPOzdKh0hO_aPFlSCxqOIwuHMMk9Y4uk" />
                                    <div>
                                        <div class="font-label-md text-label-md text-on-surface">Jonathan Sterling</div>
                                        <div class="font-body-sm text-body-sm text-on-surface-variant">j.sterling@nexus.io</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface">Nexus Capital</td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">+44 20 7123 4567</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-sm">
                                    <div
                                        class="w-7 h-7 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-[10px] flex items-center justify-center font-bold">
                                        SL</div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Sarah L.</span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 11, 2023</td>
                            <td
                                class="px-md py-4 text-right sticky right-0 bg-surface-container-lowest group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                <div class="flex justify-end gap-1">
                                    <a href="customerview.php" class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors"
                                        title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></a>
                                    <button class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors"
                                        title="Edit"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors"
                                        title="Delete"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-md py-4">
                                <input class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </td>
                            <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">#C-8212</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-md">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="A portrait of a creative director in her early 30s with a modern, artistic style. She wears bold-framed black glasses and a minimalist black knit sweater."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHSAkqOIqDYnLGeO9qUJY2Sbh6V4x6sTwgdaj1ANDLO4Mlv_yxm-5oqp8zeeWQvM9mcFchA5n614GVwieREoPYtRq9UmsteIBd6gqFyZ_A9o5uwdlocRA7Cw0S6K1jGZZPBEPSW3g7ck0dCpSe_ADff3Hl3VnrU-WlRGZ3mmXoEKubmjuJz2u_cZy41yWc4mOnG3eqDQ_zOydNw2Y_uFSViKTrYxk2q5kh-PvpDuDcWkvaTtMqzo9EpD1uxmD9HbT2WdIicvSSaZg" />
                                    <div>
                                        <div class="font-label-md text-label-md text-on-surface">Amara Okafor</div>
                                        <div class="font-body-sm text-body-sm text-on-surface-variant">amara@creative.co</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface">Creative Core</td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">+234 80 9876 5432</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-sm">
                                    <div
                                        class="w-7 h-7 rounded-full bg-primary-fixed text-on-primary-fixed text-[10px] flex items-center justify-center font-bold">
                                        MK</div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Marcus K.</span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 11, 2023</td>
                            <td
                                class="px-md py-4 text-right sticky right-0 bg-surface-container-lowest group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                <div class="flex justify-end gap-1">
                                    <a href="customerview.php" class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors"
                                        title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></a>
                                    <button class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors"
                                        title="Edit"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors"
                                        title="Delete"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 (Zebra) -->
                        <tr class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors group">
                            <td class="px-md py-4">
                                <input class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </td>
                            <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">#C-8213</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-md">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="A portrait of a tech entrepreneur in a modern office, wearing a casual but expensive light blue button-down shirt."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBp2LwfJAb2kHnxhvUAMYBCHixcddtUkat2QIsBmrsmwozoWo-iAnAsp5toL7tnjSbQyVDY3nowGMluAAYL21yqyVXuU5JEbVjFpJC3ZOvtBtABEBe1S649tOCUfYAvQWcZVvFspatoLuVbMy5EYfQG0WwRwniaj2ATaA4hxVA6BoAu8JynnJKRAJuQaPnN9YkoNwNhIZxOyycKaR0B1yQkWG0_rX1Hj5AgQhNwqswDGAaVGrkvpd4k4U7Fc6HMyJSBcmFdJjcIx_E" />
                                    <div>
                                        <div class="font-label-md text-label-md text-on-surface">David Chen</div>
                                        <div class="font-body-sm text-body-sm text-on-surface-variant">d.chen@lumina.sg</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface">Lumina Tech</td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">+65 6789 0123</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-sm">
                                    <div
                                        class="w-7 h-7 rounded-full bg-secondary-fixed-dim text-on-secondary-fixed text-[10px] flex items-center justify-center font-bold">
                                        DR</div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Daniel R.</span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 10, 2023</td>
                            <td
                                class="px-md py-4 text-right sticky right-0 bg-surface-container-lowest group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                <div class="flex justify-end gap-1">
                                    <a href="customerview.php" class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors"
                                        title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></a>
                                    <button class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors"
                                        title="Edit"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors"
                                        title="Delete"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-md py-4">
                                <input class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </td>
                            <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">#C-8214</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-md">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="Close-up headshot of a senior executive woman with grey hair, styled in a modern bob. She wears a minimal silver necklace and a dark grey blazer."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVfgM90dWx_8MiE5_lWrR-KAahEVSTFGZY6y7N7o6D-8nghHfRpCWkQFBGr3S5oYtDlogs7Pwy-vmUkYHn0t2kOe1LRxtJfuOeI4fN6sr6XlsYor0T4DxaWWyOFLhEBf6anNlZNBc4MJOMxUnfVYxRBFRaE5gqRsBCh4Ciafd6VNRBn8K5677KbbPtMqRW2B6mI4cFkFNyUfSkiS7CathMX4fhcTsi4Pv54KYMBzR56UsLijR_X3LAInVxVBHXwngYN4tB-_1JQjA" />
                                    <div>
                                        <div class="font-label-md text-label-md text-on-surface">Sophie Dubois</div>
                                        <div class="font-body-sm text-body-sm text-on-surface-variant">s.dubois@etoile.fr</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface">Etoile Luxe</td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">+33 1 42 68 55 00</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-sm">
                                    <div
                                        class="w-7 h-7 rounded-full bg-outline-variant text-on-surface-variant text-[10px] flex items-center justify-center font-bold">
                                        SL</div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Sarah L.</span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 09, 2023</td>
                            <td
                                class="px-md py-4 text-right sticky right-0 bg-surface-container-lowest group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                <div class="flex justify-end gap-1">
                                    <a href="customerview.php" class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors"
                                        title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></a>
                                    <button class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors"
                                        title="Edit"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors"
                                        title="Delete"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6 (Zebra) -->
                        <tr class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors group">
                            <td class="px-md py-4">
                                <input class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </td>
                            <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">#C-8215</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-md">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="A portrait of a male engineer in his late 20s with a modern, focused look. He is wearing a dark navy polo shirt."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_6sgh2PCRB_5ry2ItFKrvi6xY59kcN2JodpW_RDxR5RMyw7TxAC-CuPe_bRBvo7XmkimxmmJEsLCLYuGHcLUNZvZCfcOr478uKEWthSFZbVldbZFs7ptmG2L73cV_FcDhRhlh4JGo-MkySqjvRA3L9Vbpin-PJcf0RywYSho_EI7_SelKlf_lXPbP87hOnLgNCgS_zMmjoqzNtQu54jbUgNEip97appKV1nnM7lB_nTcPFliGCWNQA3VD8UPPbCfgNI4h60aYx_g" />
                                    <div>
                                        <div class="font-label-md text-label-md text-on-surface">Marco Rossi</div>
                                        <div class="font-body-sm text-body-sm text-on-surface-variant">m.rossi@veloce.it</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface">Veloce SpA</td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">+39 02 1234 5678</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-sm">
                                    <div
                                        class="w-7 h-7 rounded-full bg-primary-fixed-dim text-on-primary-fixed text-[10px] flex items-center justify-center font-bold">
                                        MK</div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Marcus K.</span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Oct 08, 2023</td>
                            <td
                                class="px-md py-4 text-right sticky right-0 bg-surface-container-lowest group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                <div class="flex justify-end gap-1">
                                    <a href="customerview.php" class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors"
                                        title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></a>
                                    <button class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors"
                                        title="Edit"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors"
                                        title="Delete"><span class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Pagination Section -->
            <div
                class="flex items-center justify-between px-lg py-md border-t border-outline-variant bg-surface-container">
                <div class="font-body-sm text-body-sm text-on-surface-variant">
                    Showing <span class="font-semibold text-on-surface">1</span> to <span
                        class="font-semibold text-on-surface">20</span> of <span
                        class="font-semibold text-on-surface">1,240</span> customers
                </div>
                <div class="flex items-center gap-sm">
                    <button
                        class="p-2 border border-outline-variant rounded-lg hover:bg-surface transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                        disabled="">
                        <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                    </button>
                    <div class="flex items-center gap-1">
                        <button class="px-3 py-1.5 bg-primary text-on-primary rounded-lg font-label-md text-label-md">1</button>
                        <button class="px-3 py-1.5 hover:bg-surface rounded-lg font-label-md text-label-md text-on-surface-variant">2</button>
                        <button class="px-3 py-1.5 hover:bg-surface rounded-lg font-label-md text-label-md text-on-surface-variant">3</button>
                        <span class="px-2 text-on-surface-variant">...</span>
                        <button class="px-3 py-1.5 hover:bg-surface rounded-lg font-label-md text-label-md text-on-surface-variant">62</button>
                    </div>
                    <button class="p-2 border border-outline-variant rounded-lg hover:bg-surface transition-colors">
                        <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Footer / Stats Footer -->
        <footer class="mt-lg flex justify-between items-center text-on-surface-variant font-body-sm text-body-sm">
            <p>© 2023 Business OS Enterprise. All rights reserved.</p>
            <div class="flex gap-md">
                <a class="hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="hover:text-primary transition-colors" href="#">Terms of Service</a>
                <a class="hover:text-primary transition-colors" href="#">Documentation</a>
            </div>
        </footer>
    </main>

    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
    flatpickr("#dateRange", {
        mode: "range",
        dateFormat: "d M Y",
        allowInput: false
    });
    </script>

    <script>
    // Row checkbox highlight
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', (e) => {
            const tr = e.target.closest('tr');
            if (tr && !tr.querySelector('th')) {
                if (e.target.checked) {
                    tr.classList.add('bg-primary/5');
                } else {
                    tr.classList.remove('bg-primary/5');
                }
            }
        });
    });

    // Global checkbox logic
    const headCheckbox = document.querySelector('thead input[type="checkbox"]');
    const bodyCheckboxes = document.querySelectorAll('tbody input[type="checkbox"]');

    if (headCheckbox) {
        headCheckbox.addEventListener('change', (e) => {
            bodyCheckboxes.forEach(cb => {
                cb.checked = e.target.checked;
                cb.dispatchEvent(new Event('change'));
            });
        });
    }

    // Live search
    const searchInput = document.querySelector('input[placeholder*="Search customers"]');
    searchInput.addEventListener('input', (e) => {
        const term = e.target.value.toLowerCase();
        document.querySelectorAll('tbody tr').forEach(row => {
            const text = row.innerText.toLowerCase();
            row.style.display = text.includes(term) ? '' : 'none';
        });
    });
    </script>
</body>

</html>