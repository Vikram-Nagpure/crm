<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Deals Management | Business OS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts: Geist & Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.cdnfonts.com/css/geist" rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "tertiary-fixed": "#6ffbbe",
                    "on-error": "#ffffff",
                    "secondary-fixed-dim": "#b7c8e1",
                    "on-tertiary-container": "#bdffdb",
                    "tertiary": "#006242",
                    "on-secondary-container": "#54647a",
                    "outline-variant": "#c3c6d7",
                    "secondary-container": "#d0e1fb",
                    "surface-dim": "#d9dadb",
                    "on-primary": "#ffffff",
                    "surface-tint": "#0053db",
                    "on-tertiary-fixed": "#002113",
                    "on-primary-container": "#eeefff",
                    "primary-fixed": "#dbe1ff",
                    "on-primary-fixed": "#00174b",
                    "background": "#f8f9fa",
                    "error-container": "#ffdad6",
                    "secondary": "#505f76",
                    "tertiary-fixed-dim": "#4edea3",
                    "tertiary-container": "#007d55",
                    "surface-bright": "#f8f9fa",
                    "error": "#ba1a1a",
                    "on-secondary": "#ffffff",
                    "on-background": "#191c1d",
                    "surface-container": "#edeeef",
                    "surface-container-highest": "#e1e3e4",
                    "primary-container": "#2563eb",
                    "inverse-primary": "#b4c5ff",
                    "surface-container-high": "#e7e8e9",
                    "surface": "#f8f9fa",
                    "surface-container-low": "#f3f4f5",
                    "on-secondary-fixed": "#0b1c30",
                    "on-tertiary": "#ffffff",
                    "on-surface-variant": "#434655",
                    "inverse-surface": "#2e3132",
                    "inverse-on-surface": "#f0f1f2",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-surface": "#191c1d",
                    "secondary-fixed": "#d3e4fe",
                    "on-tertiary-fixed-variant": "#005236",
                    "on-secondary-fixed-variant": "#38485d",
                    "surface-container-lowest": "#ffffff",
                    "primary": "#004ac6",
                    "outline": "#737686",
                    "on-primary-fixed-variant": "#003ea8",
                    "surface-variant": "#e1e3e4",
                    "on-error-container": "#93000a"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "gutter": "20px",
                    "base": "4px",
                    "margin": "24px",
                    "2xl": "48px",
                    "xs": "4px",
                    "md": "16px",
                    "xl": "32px",
                    "sm": "8px",
                    "lg": "24px"
                },
                "fontFamily": {
                    "headline-md": ["Geist"],
                    "headline-lg": ["Geist"],
                    "label-md": ["Inter"],
                    "display": ["Geist"],
                    "body-lg": ["Inter"],
                    "headline-sm": ["Geist"],
                    "body-md": ["Inter"],
                    "code-sm": ["JetBrains Mono"],
                    "body-sm": ["Inter"],
                    "label-sm": ["Inter"]
                },
                "fontSize": {
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }]
                }
            },
        },
    }
    </script>
    <style>
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8f9fa;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
        vertical-align: middle;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #e5e7eb;
        border-radius: 10px;
    }
    </style>
</head>

<body class="bg-background text-on-surface">
    <!-- Fixed SideNavBar -->
    <?php include "include/header.php"?>
    <!-- Main Content Wrapper -->
    <main class="lg:ml-0 mt-16 p-lg bg-background min-h-[calc(100vh-64px)]">
        <!-- TopNavBar -->

        <!-- Page Content -->
        <div class="p-margin max-w-[1440px] mx-auto w-full space-y-lg">
            <!-- Dashboard Header -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div>
                    <h2 class="font-headline-md text-headline-md text-on-surface">Deals Pipeline Overview</h2>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Real-time performance and pipeline
                        health monitoring</p>
                </div>
                <div class="flex items-center gap-3">
                    <div
                        class="flex items-center gap-2 px-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg cursor-pointer hover:bg-surface-container-low transition-colors">
                        <span class="material-symbols-outlined !text-[18px] text-on-surface-variant"
                            data-icon="calendar_today">calendar_today</span>
                        <span class="font-label-md text-label-md">Oct 1 - Oct 31, 2024</span>
                        <span class="material-symbols-outlined !text-[16px] text-on-surface-variant"
                            data-icon="expand_more">expand_more</span>
                    </div>
                    <button
                        class="px-4 py-2 bg-surface-container-lowest border border-outline-variant text-on-surface-variant rounded-lg font-label-md text-label-md flex items-center gap-2 hover:bg-surface-container-low transition-colors">
                        <span class="material-symbols-outlined !text-[18px]"
                            data-icon="file_download">file_download</span>
                        Export
                    </button>
                </div>
            </div>
            <!-- KPI Cards Row -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-lg">
                <!-- KPI Card 1 -->
                <div class="bg-surface-container-lowest p-md border border-outline-variant rounded-xl shadow-none">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-on-surface-variant font-label-md text-label-md">Total Pipeline Value</span>
                        <div class="p-1.5 bg-primary/10 text-primary rounded-lg">
                            <span class="material-symbols-outlined !text-[18px]"
                                data-icon="trending_up">trending_up</span>
                        </div>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <h3 class="font-headline-md text-headline-md">$450,200</h3>
                        <span
                            class="text-[12px] font-bold text-[#10B981] bg-[#10B981]/10 px-1.5 py-0.5 rounded">+12%</span>
                    </div>
                    <p class="text-on-surface-variant font-label-sm text-[11px] mt-1">vs. last month ($402k)</p>
                </div>
                <!-- KPI Card 2 -->
                <div class="bg-surface-container-lowest p-md border border-outline-variant rounded-xl">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-on-surface-variant font-label-md text-label-md">Active Deals</span>
                        <div class="p-1.5 bg-secondary-container text-on-secondary-container rounded-lg">
                            <span class="material-symbols-outlined !text-[18px]"
                                data-icon="show_chart">show_chart</span>
                        </div>
                    </div>
                    <h3 class="font-headline-md text-headline-md">24</h3>
                    <p class="text-on-surface-variant font-label-sm text-[11px] mt-1">4 deals closed this week</p>
                </div>
                <!-- KPI Card 3 -->
                <div class="bg-surface-container-lowest p-md border border-outline-variant rounded-xl">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-on-surface-variant font-label-md text-label-md">Win Rate</span>
                        <div class="p-1.5 bg-tertiary/10 text-tertiary rounded-lg">
                            <span class="material-symbols-outlined !text-[18px]" data-icon="verified">verified</span>
                        </div>
                    </div>
                    <h3 class="font-headline-md text-headline-md">68%</h3>
                    <div class="w-full bg-surface-container-high h-1.5 rounded-full mt-2">
                        <div class="bg-tertiary h-1.5 rounded-full" style="width: 68%"></div>
                    </div>
                </div>
                <!-- KPI Card 4 -->
                <div class="bg-surface-container-lowest p-md border border-outline-variant rounded-xl">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-on-surface-variant font-label-md text-label-md">Avg. Deal Size</span>
                        <div class="p-1.5 bg-surface-variant text-on-surface-variant rounded-lg">
                            <span class="material-symbols-outlined !text-[18px]" data-icon="payments">payments</span>
                        </div>
                    </div>
                    <h3 class="font-headline-md text-headline-md">$18,750</h3>
                    <p class="text-on-surface-variant font-label-sm text-[11px] mt-1">Maintaining Q3 baseline</p>
                </div>
            </div>
            <!-- Pipeline Visual Stages -->
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl p-6">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-headline-sm text-headline-sm">Sales Funnel</h3>
                    <button class="text-primary font-label-md text-label-md flex items-center gap-1 hover:underline">
                        Detailed View
                        <span class="material-symbols-outlined !text-[16px]"
                            data-icon="arrow_forward">arrow_forward</span>
                    </button>
                </div>
                <div class="flex flex-col lg:flex-row items-stretch gap-2">
                    <!-- Qualification -->
                    <div
                        class="flex-1 min-w-0 bg-surface-container-low/50 border border-outline-variant/50 rounded-lg p-4 group hover:bg-primary/5 transition-colors cursor-pointer">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="font-label-sm text-[10px] uppercase tracking-wider text-on-surface-variant font-bold">Qualification</span>
                            <span class="text-primary bg-primary/10 px-2 py-0.5 rounded font-bold text-[12px]">8</span>
                        </div>
                        <div class="text-headline-sm font-headline-sm">$84k</div>
                        <div class="mt-4 h-1 bg-primary/20 rounded-full overflow-hidden">
                            <div class="h-full bg-primary" style="width: 100%"></div>
                        </div>
                    </div>
                    <!-- Discovery -->
                    <div
                        class="flex-1 min-w-0 bg-surface-container-low/50 border border-outline-variant/50 rounded-lg p-4 group hover:bg-primary/5 transition-colors cursor-pointer">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="font-label-sm text-[10px] uppercase tracking-wider text-on-surface-variant font-bold">Discovery</span>
                            <span class="text-primary bg-primary/10 px-2 py-0.5 rounded font-bold text-[12px]">5</span>
                        </div>
                        <div class="text-headline-sm font-headline-sm">$112k</div>
                        <div class="mt-4 h-1 bg-primary/20 rounded-full overflow-hidden">
                            <div class="h-full bg-primary" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- Proposal -->
                    <div
                        class="flex-1 min-w-0 bg-surface-container-low/50 border border-outline-variant/50 rounded-lg p-4 group hover:bg-primary/5 transition-colors cursor-pointer">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="font-label-sm text-[10px] uppercase tracking-wider text-on-surface-variant font-bold">Proposal</span>
                            <span class="text-primary bg-primary/10 px-2 py-0.5 rounded font-bold text-[12px]">6</span>
                        </div>
                        <div class="text-headline-sm font-headline-sm">$156k</div>
                        <div class="mt-4 h-1 bg-primary/20 rounded-full overflow-hidden">
                            <div class="h-full bg-primary" style="width: 60%"></div>
                        </div>
                    </div>
                    <!-- Negotiation -->
                    <div
                        class="flex-1 min-w-0 bg-surface-container-low/50 border border-outline-variant/50 rounded-lg p-4 group hover:bg-primary/5 transition-colors cursor-pointer">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="font-label-sm text-[10px] uppercase tracking-wider text-on-surface-variant font-bold">Negotiation</span>
                            <span class="text-primary bg-primary/10 px-2 py-0.5 rounded font-bold text-[12px]">3</span>
                        </div>
                        <div class="text-headline-sm font-headline-sm">$68k</div>
                        <div class="mt-4 h-1 bg-primary/20 rounded-full overflow-hidden">
                            <div class="h-full bg-primary" style="width: 40%"></div>
                        </div>
                    </div>
                    <!-- Closing -->
                    <div
                        class="flex-1 min-w-0 bg-surface-container-low/50 border border-outline-variant/50 rounded-lg p-4 group hover:bg-primary/5 transition-colors cursor-pointer">
                        <div class="flex justify-between items-center mb-3">
                            <span
                                class="font-label-sm text-[10px] uppercase tracking-wider text-on-surface-variant font-bold">Closing</span>
                            <span class="text-primary bg-primary/10 px-2 py-0.5 rounded font-bold text-[12px]">2</span>
                        </div>
                        <div class="text-headline-sm font-headline-sm">$30k</div>
                        <div class="mt-4 h-1 bg-primary/20 rounded-full overflow-hidden">
                            <div class="h-full bg-primary" style="width: 20%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Opportunities Table -->
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-outline-variant flex items-center justify-between">
                    <h3 class="font-headline-sm text-headline-sm">Recent Opportunities</h3>
                    <div class="flex items-center gap-2">
                        <button
                            class="p-1.5 text-on-surface-variant hover:bg-surface-container-low rounded-lg transition-colors">
                            <span class="material-symbols-outlined !text-[20px]"
                                data-icon="filter_list">filter_list</span>
                        </button>
                        <button
                            class="p-1.5 text-on-surface-variant hover:bg-surface-container-low rounded-lg transition-colors">
                            <span class="material-symbols-outlined !text-[20px]" data-icon="sort">sort</span>
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto rounded-xl border border-gray-300 bg-white">
                    <table class="w-full border-collapse">
                        <thead class="bg-surface-bright border-b border-outline-variant">
                            <tr>
                                <th
                                    class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Deal Name</th>
                                <th
                                    class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Customer</th>
                                <th
                                    class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Value</th>
                                <th
                                    class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Stage</th>
                                <th
                                    class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Close Date</th>
                                <th
                                    class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <!-- Row 1 -->
                            <tr class="hover:bg-surface-container-low/30 transition-colors group">
                                <td class="px-6 py-[14px]">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded bg-primary-container/20 flex items-center justify-center text-primary">
                                            <span class="material-symbols-outlined !text-[18px]"
                                                data-icon="cloud">cloud</span>
                                        </div>
                                        <span
                                            class="font-label-md text-label-md text-on-surface group-hover:text-primary transition-colors">Enterprise
                                            Cloud Expansion</span>
                                    </div>
                                </td>
                                <td class="px-6 py-[14px] font-body-sm text-body-sm">Velox Dynamics</td>
                                <td class="px-6 py-[14px] font-label-md text-label-md font-semibold text-on-surface">
                                    $45,000</td>
                                <td class="px-6 py-[14px]">
                                    <span
                                        class="px-2 py-1 bg-secondary-container/30 text-on-secondary-fixed-variant rounded-lg font-label-sm text-[11px] font-bold border border-secondary-container">Negotiation</span>
                                </td>
                                <td class="px-6 py-[14px] font-body-sm text-body-sm text-on-surface-variant">Oct 24,
                                    2024</td>
                                <td class="px-6 py-[14px] text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="px-3 py-1.5 font-label-sm text-label-sm bg-surface-container-high text-on-surface rounded-lg hover:bg-outline-variant transition-colors">View</button>
                                        <button
                                            class="px-3 py-1.5 font-label-sm text-label-sm border border-outline text-on-surface-variant rounded-lg hover:border-primary hover:text-primary transition-colors">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-surface-container-low/30 transition-colors group">
                                <td class="px-6 py-[14px]">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded bg-tertiary-container/20 flex items-center justify-center text-tertiary">
                                            <span class="material-symbols-outlined !text-[18px]"
                                                data-icon="vpn_key">vpn_key</span>
                                        </div>
                                        <span
                                            class="font-label-md text-label-md text-on-surface group-hover:text-primary transition-colors">SaaS
                                            Licensing</span>
                                    </div>
                                </td>
                                <td class="px-6 py-[14px] font-body-sm text-body-sm">Acme Corp</td>
                                <td class="px-6 py-[14px] font-label-md text-label-md font-semibold text-on-surface">
                                    $12,500</td>
                                <td class="px-6 py-[14px]">
                                    <span
                                        class="px-2 py-1 bg-surface-container/50 text-on-surface-variant rounded-lg font-label-sm text-[11px] font-bold border border-outline-variant">Proposal</span>
                                </td>
                                <td class="px-6 py-[14px] font-body-sm text-body-sm text-on-surface-variant">Nov 02,
                                    2024</td>
                                <td class="px-6 py-[14px] text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="px-3 py-1.5 font-label-sm text-label-sm bg-surface-container-high text-on-surface rounded-lg hover:bg-outline-variant transition-colors">View</button>
                                        <button
                                            class="px-3 py-1.5 font-label-sm text-label-sm border border-outline text-on-surface-variant rounded-lg hover:border-primary hover:text-primary transition-colors">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="hover:bg-surface-container-low/30 transition-colors group">
                                <td class="px-6 py-[14px]">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded bg-error-container/20 flex items-center justify-center text-error">
                                            <span class="material-symbols-outlined !text-[18px]"
                                                data-icon="devices">devices</span>
                                        </div>
                                        <span
                                            class="font-label-md text-label-md text-on-surface group-hover:text-primary transition-colors">Hardware
                                            Refresh</span>
                                    </div>
                                </td>
                                <td class="px-6 py-[14px] font-body-sm text-body-sm">TechFlow Inc</td>
                                <td class="px-6 py-[14px] font-label-md text-label-md font-semibold text-on-surface">
                                    $28,000</td>
                                <td class="px-6 py-[14px]">
                                    <span
                                        class="px-2 py-1 bg-primary/10 text-primary rounded-lg font-label-sm text-[11px] font-bold border border-primary/20">Discovery</span>
                                </td>
                                <td class="px-6 py-[14px] font-body-sm text-body-sm text-on-surface-variant">Oct 18,
                                    2024</td>
                                <td class="px-6 py-[14px] text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="px-3 py-1.5 font-label-sm text-label-sm bg-surface-container-high text-on-surface rounded-lg hover:bg-outline-variant transition-colors">View</button>
                                        <button
                                            class="px-3 py-1.5 font-label-sm text-label-sm border border-outline text-on-surface-variant rounded-lg hover:border-primary hover:text-primary transition-colors">Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr class="hover:bg-surface-container-low/30 transition-colors group border-b-0">
                                <td class="px-6 py-[14px]">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-8 h-8 rounded bg-secondary-fixed/30 flex items-center justify-center text-on-secondary-fixed-variant">
                                            <span class="material-symbols-outlined !text-[18px]"
                                                data-icon="psychology">psychology</span>
                                        </div>
                                        <span
                                            class="font-label-md text-label-md text-on-surface group-hover:text-primary transition-colors">AI
                                            Consulting Services</span>
                                    </div>
                                </td>
                                <td class="px-6 py-[14px] font-body-sm text-body-sm">Nova Sphere</td>
                                <td class="px-6 py-[14px] font-label-md text-label-md font-semibold text-on-surface">
                                    $15,000</td>
                                <td class="px-6 py-[14px]">
                                    <span
                                        class="px-2 py-1 bg-[#10B981]/10 text-[#047857] rounded-lg font-label-sm text-[11px] font-bold border border-[#10B981]/20">Closing</span>
                                </td>
                                <td class="px-6 py-[14px] font-body-sm text-body-sm text-on-surface-variant">Oct 30,
                                    2024</td>
                                <td class="px-6 py-[14px] text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <button
                                            class="px-3 py-1.5 font-label-sm text-label-sm bg-surface-container-high text-on-surface rounded-lg hover:bg-outline-variant transition-colors">View</button>
                                        <button
                                            class="px-3 py-1.5 font-label-sm text-label-sm border border-outline text-on-surface-variant rounded-lg hover:border-primary hover:text-primary transition-colors">Edit</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-6 py-3 border-t border-outline-variant bg-surface-container-lowest flex items-center justify-between">
                    <p class="font-label-sm text-label-sm text-on-surface-variant">Showing 1-4 of 24 opportunities</p>
                    <div class="flex items-center gap-1">
                        <button class="p-1.5 hover:bg-surface-container-low rounded disabled:opacity-50" disabled="">
                            <span class="material-symbols-outlined !text-[18px]"
                                data-icon="chevron_left">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-primary text-on-primary rounded-lg font-label-sm text-label-sm">1</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center hover:bg-surface-container-low rounded-lg font-label-sm text-label-sm">2</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center hover:bg-surface-container-low rounded-lg font-label-sm text-label-sm">3</button>
                        <button class="p-1.5 hover:bg-surface-container-low rounded">
                            <span class="material-symbols-outlined !text-[18px]"
                                data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Bottom Spacer -->
            <div class="h-10"></div>
        </div>
    </main>
    <script>
    // Micro-interactions and effects
    document.addEventListener('DOMContentLoaded', () => {
        // Ripples or hover feedback logic could go here
        const kpiCards = document.querySelectorAll('.grid-cols-4 > div');
        kpiCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('border-primary/30');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('border-primary/30');
            });
        });

        // Active Tab Logic helper
        const navItems = document.querySelectorAll('nav a');
        navItems.forEach(item => {
            item.addEventListener('click', (e) => {
                navItems.forEach(i => {
                    i.classList.remove('bg-secondary-container',
                        'text-on-secondary-container', 'font-semibold');
                    i.classList.add('text-secondary');
                });
                item.classList.add('bg-secondary-container', 'text-on-secondary-container',
                    'font-semibold');
                item.classList.remove('text-secondary');
            });
        });
    });
    </script>
</body>

</html>