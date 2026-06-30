<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Leads Management | Business OS</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@400;600;700&amp;family=JetBrains+Mono&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                    "headline-lg-mobile": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }],
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }]
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
                <span class="font-label-sm text-label-sm text-on-surface font-semibold">Leads Management</span>
            </nav>
            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Leads Management</h1>
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
                        placeholder="Search leads by name, email, or ID..." type="text" />
                </div>
                <div class="flex items-center gap-sm">
                    <select
                        class="bg-surface border border-outline-variant rounded-lg py-2 pl-3 pr-8 text-label-md text-on-surface-variant focus:border-primary focus:ring-0 cursor-pointer">
                        <option>All Status</option>
                        <option>New</option>
                        <option>Qualified</option>
                        <option>Nurturing</option>
                        <option>Closed</option>
                    </select>
                    <select
                        class="bg-surface border border-outline-variant rounded-lg py-2 pl-3 pr-8 text-label-md text-on-surface-variant focus:border-primary focus:ring-0 cursor-pointer">
                        <option>All Sources</option>
                        <option>Organic</option>
                        <option>Paid Ads</option>
                        <option>Referral</option>
                        <option>Social Media</option>
                    </select>
                    <!-- <button
                        class="flex items-center gap-2 px-md py-2 border border-outline-variant rounded-lg text-label-md text-on-surface hover:bg-surface-container-low transition-colors">
                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                        Date Added
                    </button> -->

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
                <a href="createlead.php"
                    class="flex items-center gap-2 px-xl py-2 bg-primary text-on-primary rounded-lg font-label-md text-label-md hover:shadow-lg transition-all active:scale-95">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                    Create Lead
</a>
            </div>
        </div>
        <!-- Data Table Section -->
        <div class="bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden">
            <div class="w-full overflow-x-auto rounded-xl border border-outline-variant bg-white shadow-sm">
                <table class="w-full min-w-[1150px] border-collapse">
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
                                Lead Info</th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Labels</th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Phone</th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Asign by</th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Status</th>
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
                            <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">LD-8821</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-md">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="Corporate headshot of a smiling female marketing director, professional attire, soft daylight from a window, high-resolution aesthetic, business environment background."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCSIZyEX5K1uYvk0fQBEIfYEnawUu-SeC0SJsLEutasWbDyoTaHrR7UKzKbKQhOIIQafsGXHOG6Q5peuwfC0MqlFvDUJ9KaalGS5MGaDwQIcIhiC4kiuv40MVlJn-jbI9Mepn3lWDz7Ll-slFUrGu0oYYQoqbAYzXKSeCkGo-1jYxSoreOSj8DSvb1UyMVvndHcsBRB_D8PbgwfCVSCLNL8PURMhBpA3jgMUANhbb2tVZz0kgv7b_fnBs4kyzcTekbkd0Yc-v2jI6k" />
                                    <div>
                                        <div class="font-label-md text-label-md text-on-surface">Eleanor Vance</div>
                                        <div class="font-body-sm text-body-sm text-on-surface-variant">
                                            e.vance@techflow.io</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-4">
                                <div class="flex flex-wrap gap-xs">
                                    <span
                                        class="px-2 py-0.5 bg-secondary-container text-on-secondary-container rounded font-label-sm text-[11px]">SaaS</span>
                                    <span
                                        class="px-2 py-0.5 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded font-label-sm text-[11px]">High-Value</span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">+1 (555) 012-3456
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">BOD</td>
                            <td class="px-md py-4">
                                <span
                                    class="px-3 py-1 bg-[#10B9811A] text-[#047857] rounded-full font-label-sm text-label-sm border border-[#10B98133]">Qualified</span>
                            </td>
                            <td
                                class="px-md py-4 text-right sticky right-0 bg-surface-container-lowest group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                <div class="flex justify-end gap-1">
                                    <a href="leadDetail.php" class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors"
                                        title="View"><span
                                            class="material-symbols-outlined text-[18px]">visibility</span></a>
                                    <button
                                        class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors"
                                        title="Edit"><span
                                            class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors"
                                        title="Delete"><span
                                            class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 2 (Zebra) -->
                        <tr
                            class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors group border-b border-outline-variant">
                            <td class="px-md py-4">
                                <input class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </td>
                            <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">LD-8822</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-md">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="Professional profile photo of a male operations manager, clean office setting, sharp focus, natural warm lighting, trustworthy and professional appearance."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDC1Ocp2i7L_RZKlI3xd2mINFBoK5wIlr-NEbGNbfLjLqkHem7h6iFqq6CxsbC5B4QQ1zmHG2W7TmxNuaF-S_EnDfeHAmRNccfBUmaa9dKYDdJar0CWYu7dIDntCt51A65WRCz59Shb4GdOtiNDUH_50x3EkTKPfyHfvFxWxl8j2-HFHmspq9-6RqrFoX1I2M7Ve-8oMZeS4WpXfuJ0olKizKzCGQob1BH1PB7yDhCWAmp5DUnyR-PbdVm_7OcGUhRgBlSIxFRSvII" />
                                    <div>
                                        <div class="font-label-md text-label-md text-on-surface">Julian Thorne</div>
                                        <div class="font-body-sm text-body-sm text-on-surface-variant">
                                            j.thorne@apexsolutions.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-4">
                                <div class="flex flex-wrap gap-xs">
                                    <span
                                        class="px-2 py-0.5 bg-secondary-container text-on-secondary-container rounded font-label-sm text-[11px]">Enterprise</span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">+1 (555) 098-7654
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Admin</td>
                            <td class="px-md py-4">
                                <span
                                    class="px-3 py-1 bg-primary-fixed text-on-primary-fixed-variant rounded-full font-label-sm text-label-sm border border-primary/10">New
                                    Lead</span>
                            </td>
                            <td
                                class="px-md py-4 text-right sticky right-0 bg-surface-container-lowest group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                <div class="flex justify-end gap-1">
                                    <button class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors"
                                        title="View"><span
                                            class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button
                                        class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors"
                                        title="Edit"><span
                                            class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors"
                                        title="Delete"><span
                                            class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-md py-4">
                                <input class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </td>
                            <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">LD-8823</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-md">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="Candid-style professional portrait of a tech startup founder, minimalist modern workspace, soft bokeh background, wearing high-end casual attire, creative yet professional mood."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDuaAl7GezoMJ-b2vFz59HtYm8tyWu5jDt1_83S3wMI1ohSp372tKM2w23a_dvzgP2-sl_0PUojWvdE6IQ1Hw3PJh7mxWVlJpDWUuXbsPK_15G00Gb2ua6DZsIGRwTgvEJgbMKfGe_h1NQIEugCw1ivy8lJ3dichZQvfJvmWM_FErOUUWhAg8_jyOCQb-xOuK9_Cdzgp5jFOja285Yav4hM7dbRZX4OqUdIz8-CsRzT8FB2vrslEDHluTPfHQF2wNNEE7xOrk0q4No" />
                                    <div>
                                        <div class="font-label-md text-label-md text-on-surface">Maya Sterling</div>
                                        <div class="font-body-sm text-body-sm text-on-surface-variant">
                                            maya@sterlinglabs.co</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-4">
                                <div class="flex flex-wrap gap-xs">
                                    <span
                                        class="px-2 py-0.5 bg-secondary-container text-on-secondary-container rounded font-label-sm text-[11px]">Retail</span>
                                    <span
                                        class="px-2 py-0.5 bg-error-container text-on-error-container rounded font-label-sm text-[11px]">Follow-up
                                        Required</span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">+44 20 7946 0123
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Manager</td>
                            <td class="px-md py-4">
                                <span
                                    class="px-3 py-1 bg-[#F59E0B1A] text-[#B45309] rounded-full font-label-sm text-label-sm border border-[#F59E0B33]">Nurturing</span>
                            </td>
                            <td
                                class="px-md py-4 text-right sticky right-0 bg-surface-container-lowest group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                <div class="flex justify-end gap-1">
                                    <button class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors"
                                        title="View"><span
                                            class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button
                                        class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors"
                                        title="Edit"><span
                                            class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors"
                                        title="Delete"><span
                                            class="material-symbols-outlined text-[18px]">delete</span></button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors group">
                            <td class="px-md py-4">
                                <input class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </td>
                            <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">LD-8824</td>
                            <td class="px-md py-4">
                                <div class="flex items-center gap-md">
                                    <img class="w-10 h-10 rounded-full object-cover"
                                        data-alt="High-contrast studio headshot of a mature business leader, dark suit, authoritative but welcoming expression, luxury corporate aesthetic, high-quality lighting."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpjDWqqDqR8RxQVNwmS_zjBfl3fxxgaY5o34-iSgz6z4rxRJkLCAOsGMvrm682llbhBysPkiVIUkmQOZycHoKXo8B4tCYs2qAQSEPZGp6peYCSpP6f80cz8mbePKVbm5jK4cX6hXloMxFUdUmjH3TH0Z9tXRpu4hjHiyGS0bZvyjX0Ytdqzb4jvpgkZyY6xJTn6URJqO4aYyDDL4l2JLvCq5ULDupTTNwdVQzdcACN-DQQh82knH_e6X4OhxA9degiobMdQFFO67I" />
                                    <div>
                                        <div class="font-label-md text-label-md text-on-surface">Arthur Pendel</div>
                                        <div class="font-body-sm text-body-sm text-on-surface-variant">
                                            pendel.a@grandhorizon.com</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-md py-4">
                                <div class="flex flex-wrap gap-xs">
                                    <span
                                        class="px-2 py-0.5 bg-secondary-container text-on-secondary-container rounded font-label-sm text-[11px]">Referral</span>
                                </div>
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">+1 (555) 246-8102
                            </td>
                            <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">Admin</td>
                            <td class="px-md py-4">
                                <span
                                    class="px-3 py-1 bg-surface-container-highest text-on-surface-variant rounded-full font-label-sm text-label-sm border border-outline-variant">Closed</span>
                            </td>
                            <td
                                class="px-md py-4 text-right sticky right-0 bg-surface-container-lowest group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                <div class="flex justify-end gap-1">
                                    <button class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors"
                                        title="View"><span
                                            class="material-symbols-outlined text-[18px]">visibility</span></button>
                                    <button
                                        class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors"
                                        title="Edit"><span
                                            class="material-symbols-outlined text-[18px]">edit</span></button>
                                    <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors"
                                        title="Delete"><span
                                            class="material-symbols-outlined text-[18px]">delete</span></button>
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
                        class="font-semibold text-on-surface">10</span> of <span
                        class="font-semibold text-on-surface">1,240</span> leads
                </div>
                <div class="flex items-center gap-sm">
                    <button
                        class="p-2 border border-outline-variant rounded-lg hover:bg-surface transition-colors disabled:opacity-50 disabled:cursor-not-allowed"
                        disabled="">
                        <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                    </button>
                    <div class="flex items-center gap-1">
                        <button
                            class="px-3 py-1.5 bg-primary text-on-primary rounded-lg font-label-md text-label-md">1</button>
                        <button
                            class="px-3 py-1.5 hover:bg-surface rounded-lg font-label-md text-label-md text-on-surface-variant">2</button>
                        <button
                            class="px-3 py-1.5 hover:bg-surface rounded-lg font-label-md text-label-md text-on-surface-variant">3</button>
                        <span class="px-2 text-on-surface-variant">...</span>
                        <button
                            class="px-3 py-1.5 hover:bg-surface rounded-lg font-label-md text-label-md text-on-surface-variant">124</button>
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
    minDate: "today",      // Disable past dates
    allowInput: false
});
</script>
    <script>
    // Simple JavaScript for interaction simulations
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

    // Global Checkbox logic
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
    </script>
</body>

</html>