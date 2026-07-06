<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lead Detail - Business OS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Google Fonts: Inter & Geist -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@400;600;700&amp;family=JetBrains+Mono&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Shared Style & Theme Configuration -->
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "surface-tint": "#0053db",
                    "surface-container-high": "#e7e8e9",
                    "inverse-surface": "#2e3132",
                    "on-secondary-fixed": "#0b1c30",
                    "surface-container-low": "#f3f4f5",
                    "background": "#f8f9fa",
                    "surface-bright": "#f8f9fa",
                    "on-primary-fixed": "#00174b",
                    "surface-variant": "#e1e3e4",
                    "on-primary-fixed-variant": "#003ea8",
                    "surface-dim": "#d9dadb",
                    "inverse-primary": "#b4c5ff",
                    "tertiary-container": "#007d55",
                    "on-tertiary-container": "#bdffdb",
                    "on-secondary-container": "#54647a",
                    "on-secondary-fixed-variant": "#38485d",
                    "on-tertiary": "#ffffff",
                    "surface-container": "#edeeef",
                    "on-surface": "#191c1d",
                    "on-primary-container": "#eeefff",
                    "on-secondary": "#ffffff",
                    "surface": "#f8f9fa",
                    "primary-fixed-dim": "#b4c5ff",
                    "tertiary": "#006242",
                    "on-primary": "#ffffff",
                    "secondary-fixed-dim": "#b7c8e1",
                    "surface-container-highest": "#e1e3e4",
                    "surface-container-lowest": "#ffffff",
                    "primary-fixed": "#dbe1ff",
                    "on-error-container": "#93000a",
                    "primary-container": "#2563eb",
                    "primary": "#004ac6",
                    "on-tertiary-fixed-variant": "#005236",
                    "error-container": "#ffdad6",
                    "on-tertiary-fixed": "#002113",
                    "outline": "#737686",
                    "on-surface-variant": "#434655",
                    "on-error": "#ffffff",
                    "secondary": "#505f76",
                    "tertiary-fixed-dim": "#4edea3",
                    "secondary-fixed": "#d3e4fe",
                    "on-background": "#191c1d",
                    "outline-variant": "#c3c6d7",
                    "tertiary-fixed": "#6ffbbe",
                    "secondary-container": "#d0e1fb",
                    "inverse-on-surface": "#f0f1f2",
                    "error": "#ba1a1a"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "xs": "4px",
                    "sm": "8px",
                    "2xl": "48px",
                    "xl": "32px",
                    "margin": "24px",
                    "base": "4px",
                    "md": "16px",
                    "gutter": "20px",
                    "lg": "24px"
                },
                "fontFamily": {
                    "body-md": ["Inter"],
                    "headline-md": ["Geist"],
                    "label-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "headline-sm": ["Geist"],
                    "code-sm": ["JetBrains Mono"],
                    "body-sm": ["Inter"],
                    "label-sm": ["Inter"],
                    "display": ["Geist"],
                    "headline-lg": ["Geist"]
                },
                "fontSize": {
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
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
                    }],
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }]
                }
            },
        },
    }
    </script>
    <style>
    body {
        background-color: #F9FAFB;
        color: #191c1d;
        font-family: 'Inter', sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
        vertical-align: middle;
    }

    .active-tab {
        border-bottom: 2px solid #2563EB;
        color: #004ac6;
    }

    /* Custom scrollbar for clean UI */
    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background: #E5E7EB;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #D1D5DB;
    }
    </style>
</head>

<body class="bg-surface text-on-surface font-body-md text-body-md antialiased">
    <!-- SideNavBar (Authority: JSON & Context) -->
    <?php include "include/header.php"?>
    <!-- Main Content Area -->
    <div class="lg:ml-0 mt-16 p-lg bg-background min-h-[calc(100vh-64px)]">
        
        <!-- Lead View Canvas -->
        <main class="flex-1 overflow-y-auto p-lg">
            <!-- Detail Header -->
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-xl gap-md">
                <div class="flex items-start gap-md">
                    <div
                        class="w-16 h-16 rounded-xl bg-primary-container/20 flex items-center justify-center text-primary-container shrink-0">
                        <span class="material-symbols-outlined text-4xl" style="color: #004ac6;">person</span>
                    </div>
                    <div>
                        <div class="flex items-center gap-sm">
                            <h2 class="font-headline-lg text-headline-lg text-on-surface">Eleanor Vance</h2>
                            <span
                                class="px-3 py-1 bg-tertiary-container text-on-tertiary-container text-label-sm rounded-full font-bold">Customer</span>
                        </div>
                        <p class="font-body-md text-body-md text-secondary mt-1">VP of Operations at <span
                                class="font-semibold text-on-surface">Starlight Systems Inc.</span></p>
                    </div>
                </div>
                <div class="flex items-center gap-sm">
                    <button
                        class="px-md py-sm bg-white border border-outline-variant text-primary rounded-lg font-label-md flex items-center gap-2 hover:bg-surface-container-low transition-all">
                        <span class="material-symbols-outlined text-sm">edit</span>
                        Edit Lead
                    </button>
                    <!-- <button
                        class="px-md py-sm bg-white border border-outline-variant text-primary rounded-lg font-label-md flex items-center gap-2 hover:bg-surface-container-low transition-all">
                        <span class="material-symbols-outlined text-sm">event_note</span>
                        Log Activity
                    </button>
                    <button
                        class="px-md py-sm bg-primary text-white rounded-lg font-label-md flex items-center gap-2 active:opacity-70 transition-opacity">
                        <span class="material-symbols-outlined text-sm">mail</span>
                        Send Email
                    </button> -->
                    <a href="customer.php"
                        class="px-md py-sm bg-tertiary text-white rounded-lg font-label-md flex items-center gap-2 active:opacity-70 transition-opacity">
                        <span class="material-symbols-outlined text-sm">check_circle</span>
                        Convert to Customer
                    </a>
                </div>
            </div>
            <!-- Bento Layout / Content Grid -->
            <!-- <div
                class="mb-lg p-lg bg-tertiary-container/20 border border-tertiary-container rounded-xl flex items-center gap-md">
                <span class="material-symbols-outlined text-tertiary">check_circle</span>
                <p class="font-body-md text-on-tertiary-container font-semibold">Lead successfully converted to
                    Customer!</p>
            </div> -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
                <!-- Main Content (Left/Center) -->
                <div class="lg:col-span-2 space-y-lg">
                    <!-- Tabs Interface -->
                    <div class="bg-white border border-outline-variant rounded-xl overflow-hidden">
                        <div class="flex border-b border-outline-variant px-lg overflow-x-auto">
                            <button
                                class="py-md px-md font-label-md text-label-md transition-all active-tab whitespace-nowrap"
                                id="tab-overview" onclick="switchTab('overview')">Overview</button>
                            <button
                                class="py-md px-md font-label-md text-label-md text-secondary hover:text-on-surface transition-all whitespace-nowrap"
                                id="tab-activity" onclick="switchTab('activity')">Activity</button>
                            <button
                                class="py-md px-md font-label-md text-label-md text-secondary hover:text-on-surface transition-all whitespace-nowrap"
                                id="tab-notes" onclick="switchTab('notes')">Notes</button>
                            <button
                                class="py-md px-md font-label-md text-label-md text-secondary hover:text-on-surface transition-all whitespace-nowrap"
                                id="tab-files" onclick="switchTab('files')">Files</button>
                            <button
                                class="py-md px-md font-label-md text-label-md text-secondary hover:text-on-surface transition-all whitespace-nowrap"
                                id="tab-followup" onclick="switchTab('followup')">Follow Up</button>    
                        </div>
                        <div class="p-lg">
                            <!-- Overview Content (Shown by script logic) -->
                            <div class="hidden grid grid-cols-1 md:grid-cols-2 gap-xl" id="content-overview">
                                <div class="space-y-md">
                                    <div>
                                        <label class="text-label-sm text-secondary block mb-1">Email Address</label>
                                        <p class="font-body-md text-body-md text-on-surface">
                                            e.vance@starlight-systems.com</p>
                                    </div>
                                    <div>
                                        <label class="text-label-sm text-secondary block mb-1">Phone Number</label>
                                        <p class="font-body-md text-body-md text-on-surface">+1 (555) 234-8901</p>
                                    </div>
                                    <div>
                                        <label class="text-label-sm text-secondary block mb-1">Lead Source</label>
                                        <p class="font-body-md text-body-md text-on-surface">Inbound Conference (Summit
                                            24)</p>
                                    </div>
                                </div>
                                <div class="space-y-md">
                                    <div>
                                        <label class="text-label-sm text-secondary block mb-1">Industry</label>
                                        <p class="font-body-md text-body-md text-on-surface">Renewable Energy Logistics
                                        </p>
                                    </div>
                                    <div>
                                        <label class="text-label-sm text-secondary block mb-1">Assigned To</label>
                                        <div class="flex items-center gap-2">
                                            <div
                                                class="w-6 h-6 rounded-full bg-secondary-container flex items-center justify-center text-[10px] text-on-secondary-container font-bold">
                                                JD</div>
                                            <p class="font-body-md text-body-md text-on-surface">Julian Drake</p>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="text-label-sm text-secondary block mb-1">Last Contacted</label>
                                        <p class="font-body-md text-body-md text-on-surface">Yesterday at 2:45 PM</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Activity Content (Active by default) -->
                            <div class="space-y-lg" id="content-activity">
                                <div class="relative pl-8">
                                    <!-- Timeline Line -->
                                    <div class="absolute left-[11px] top-0 bottom-0 w-[2px] bg-outline-variant"></div>
                                    <!-- Timeline Item 1 -->
                                    <div class="relative mb-lg">
                                        <div
                                            class="absolute -left-[33px] top-1 w-6 h-6 rounded-full bg-primary flex items-center justify-center border-4 border-white shadow-sm">
                                            <span class="material-symbols-outlined text-[12px] text-white">call</span>
                                        </div>
                                        <div>
                                            <div class="flex justify-between items-start">
                                                <h4 class="font-label-md text-label-md text-on-surface">Call with
                                                    Eleanor</h4>
                                                <span class="text-label-sm text-secondary">2h ago</span>
                                            </div>
                                            <p class="text-body-sm text-on-surface-variant mt-1">Discussed the upcoming
                                                expansion and the need for a scalable CRM module. She requested a
                                                detailed demo of the reporting engine.</p>
                                        </div>
                                    </div>
                                    <!-- Timeline Item 2 -->
                                    <div class="relative mb-lg">
                                        <div
                                            class="absolute -left-[33px] top-1 w-6 h-6 rounded-full bg-secondary flex items-center justify-center border-4 border-white shadow-sm">
                                            <span class="material-symbols-outlined text-[12px] text-white">mail</span>
                                        </div>
                                        <div>
                                            <div class="flex justify-between items-start">
                                                <h4 class="font-label-md text-label-md text-on-surface">Email sent:
                                                    "Enterprise Proposal - Starlight"</h4>
                                                <span class="text-label-sm text-secondary">Yesterday</span>
                                            </div>
                                            <p class="text-body-sm text-on-surface-variant mt-1">Follow-up email with
                                                preliminary pricing tiers and case studies from the energy sector.</p>
                                        </div>
                                    </div>
                                    <!-- Timeline Item 3 -->
                                    <div class="relative">
                                        <div
                                            class="absolute -left-[33px] top-1 w-6 h-6 rounded-full bg-tertiary flex items-center justify-center border-4 border-white shadow-sm">
                                            <span
                                                class="material-symbols-outlined text-[12px] text-white">calendar_today</span>
                                        </div>
                                        <div>
                                            <div class="flex justify-between items-start">
                                                <h4 class="font-label-md text-label-md text-on-surface">Demo scheduled
                                                </h4>
                                                <span class="text-label-sm text-secondary">Oct 24, 2023</span>
                                            </div>
                                            <p class="text-body-sm text-on-surface-variant mt-1">Confirmed for 10:00 AM
                                                EST. Invitation sent to Eleanor and two team leads.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Placeholder for Notes & Files -->
                            <div class="hidden py-xl text-center" id="content-notes">
                                <span class="material-symbols-outlined text-outline text-4xl mb-2">description</span>
                                <p class="text-secondary font-body-md">No internal notes yet. Click 'Add Note' to begin.
                                </p>
                            </div>
                            <div class="hidden py-xl text-center" id="content-files">
                                <span class="material-symbols-outlined text-outline text-4xl mb-2">folder_open</span>
                                <p class="text-secondary font-body-md">No files uploaded. Drag and drop here.</p>
                            </div>
                            <div class="space-y-lg" id="content-followup">
                                <div class="relative pl-8">

                                    <!-- Timeline Line -->
                                    <div class="absolute left-[11px] top-0 bottom-0 w-[2px] bg-gray-300"></div>

                                    <!-- Today's Follow Up -->
                                    <div class="relative mb-6">
                                        <div
                                            class="absolute -left-[33px] top-1 w-6 h-6 rounded-full bg-green-600 flex items-center justify-center border-4 border-white shadow">
                                            <span class="material-symbols-outlined text-[12px] text-white">today</span>
                                        </div>

                                        <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                                            <div class="flex justify-between">
                                                <h4 class="font-semibold text-green-700">
                                                    Today's Follow Up
                                                </h4>
                                                <span class="text-sm text-gray-500">
                                                    Today • 11:00 AM
                                                </span>
                                            </div>

                                            <p class="mt-2 text-gray-700">
                                                <strong>Client:</strong> Rahul Sharma
                                            </p>

                                            <p class="text-gray-700">
                                                <strong>Mobile:</strong> +91 9876543210
                                            </p>

                                            <p class="mt-2 text-gray-600">
                                                Call the client regarding the website quotation and confirm
                                                the final budget.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Tomorrow Follow Up -->
                                    <div class="relative mb-6">
                                        <div
                                            class="absolute -left-[33px] top-1 w-6 h-6 rounded-full bg-blue-600 flex items-center justify-center border-4 border-white shadow">
                                            <span class="material-symbols-outlined text-[12px] text-white">event</span>
                                        </div>

                                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                                            <div class="flex justify-between">
                                                <h4 class="font-semibold text-blue-700">
                                                    Tomorrow's Follow Up
                                                </h4>
                                                <span class="text-sm text-gray-500">
                                                    Tomorrow • 03:30 PM
                                                </span>
                                            </div>

                                            <p class="mt-2 text-gray-700">
                                                <strong>Client:</strong> Priya Patel
                                            </p>

                                            <p class="text-gray-700">
                                                <strong>Mobile:</strong> +91 9988776655
                                            </p>

                                            <p class="mt-2 text-gray-600">
                                                Schedule a product demo and discuss the CRM implementation
                                                process.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Completed Follow Up -->
                                    <div class="relative">
                                        <div
                                            class="absolute -left-[33px] top-1 w-6 h-6 rounded-full bg-gray-600 flex items-center justify-center border-4 border-white shadow">
                                            <span class="material-symbols-outlined text-[12px] text-white">check_circle</span>
                                        </div>

                                        <div class="bg-gray-50 p-4 rounded-lg border">
                                            <div class="flex justify-between">
                                                <h4 class="font-semibold">
                                                    Completed Follow Up
                                                </h4>
                                                <span class="text-sm text-gray-500">
                                                    Yesterday • 04:15 PM
                                                </span>
                                            </div>

                                            <p class="mt-2 text-gray-700">
                                                <strong>Client:</strong> Amit Verma
                                            </p>

                                            <p class="text-gray-700">
                                                <strong>Mobile:</strong> +91 9123456789
                                            </p>

                                            <p class="mt-2 text-gray-600">
                                                Discussed pricing and sent the proposal via WhatsApp. Client
                                                will respond within two days.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Additional Context Area -->
                    <div
                        class="bg-surface-container rounded-xl p-lg border border-outline-variant flex items-center gap-md">
                        <div
                            class="w-12 h-12 rounded bg-white flex items-center justify-center border border-outline-variant text-primary shadow-sm">
                            <span class="material-symbols-outlined">insights</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-label-md text-label-md text-on-surface">Lead Health Score: <span
                                    class="text-primary">88/100</span></h3>
                            <div class="w-full h-2 bg-white rounded-full mt-2 overflow-hidden">
                                <div class="bg-primary h-full w-[88%]"></div>
                            </div>
                        </div>
                        <p class="text-label-sm text-secondary italic">Strong engagement recorded over the last 14 days.
                        </p>
                    </div>
                </div>
                <!-- Right Column (Widgets) -->
                <div class="space-y-lg">
                    <!-- Contact Information Card -->
                    <section class="bg-white border border-outline-variant rounded-xl p-lg">
                        <div class="flex items-center justify-between mb-md">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Social Links</h3>
                            <button class="text-primary material-symbols-outlined">more_horiz</button>
                        </div>
                        <div class="space-y-md">
                            <a class="flex items-center gap-3 text-secondary hover:text-primary transition-colors"
                                href="#">
                                <span class="material-symbols-outlined">public</span>
                                <span class="text-body-sm">starlight-systems.com</span>
                            </a>
                            <a class="flex items-center gap-3 text-secondary hover:text-primary transition-colors"
                                href="#">
                                <div
                                    class="w-5 h-5 flex items-center justify-center bg-secondary rounded text-[10px] text-white font-bold">
                                    in</div>
                                <span class="text-body-sm">linkedin.com/in/evance</span>
                            </a>
                            <a class="flex items-center gap-3 text-secondary hover:text-primary transition-colors"
                                href="#">
                                <div
                                    class="w-5 h-5 flex items-center justify-center bg-on-surface rounded text-[10px] text-white font-bold">
                                    X</div>
                                <span class="text-body-sm">@eleanor_vance</span>
                            </a>
                        </div>
                    </section>
                    <!-- Recent Deals Widget -->
                    <section class="bg-white border border-outline-variant rounded-xl p-lg">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface mb-md">Recent Deals</h3>
                        <div class="space-y-sm">
                            <div
                                class="p-sm bg-surface-container-low rounded border border-outline-variant hover:border-primary/40 transition-colors cursor-pointer">
                                <div class="flex justify-between items-center">
                                    <span class="font-label-md text-on-surface">Global Fleet Expansion</span>
                                    <span class="text-label-sm font-bold text-on-surface">$145k</span>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <span class="text-label-sm text-secondary">Negotiation</span>
                                    <span class="text-[10px] text-secondary">Exp. Dec 24</span>
                                </div>
                            </div>
                            <div
                                class="p-sm bg-surface-container-low rounded border border-outline-variant hover:border-primary/40 transition-colors cursor-pointer opacity-70">
                                <div class="flex justify-between items-center">
                                    <span class="font-label-md text-on-surface">Pilot Integration</span>
                                    <span class="text-label-sm font-bold text-on-surface">$22k</span>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <span
                                        class="px-2 py-0.5 bg-[#10B981]/10 text-[#047857] text-[10px] rounded uppercase font-bold">Closed
                                        Won</span>
                                    <span class="text-[10px] text-secondary">Aug 12</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Tags Widget -->
                    <section class="bg-white border border-outline-variant rounded-xl p-lg">
                        <div class="flex items-center justify-between mb-md">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Tags</h3>
                            <button class="text-primary text-label-sm font-semibold hover:underline">Manage</button>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-surface-container-highest text-on-surface-variant text-label-sm rounded-full">High
                                Priority</span>
                            <span
                                class="px-3 py-1 bg-surface-container-highest text-on-surface-variant text-label-sm rounded-full">Decision
                                Maker</span>
                            <span
                                class="px-3 py-1 bg-surface-container-highest text-on-surface-variant text-label-sm rounded-full">Renewal-Likeliness</span>
                            <span
                                class="px-3 py-1 bg-surface-container-highest text-on-surface-variant text-label-sm rounded-full">Strategic
                                Account</span>
                            <button
                                class="px-3 py-1 border border-dashed border-outline text-outline text-label-sm rounded-full flex items-center gap-1 hover:bg-surface-container transition-colors">
                                <span class="material-symbols-outlined text-[14px]">add</span> Add Tag
                            </button>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
    <!-- Floating Action Button (Contextual) -->
    <div class="fixed bottom-lg right-lg">
        <button
            class="w-14 h-14 bg-primary text-white rounded-full shadow-lg hover:shadow-xl active:scale-95 transition-all flex items-center justify-center"
            title="Quick Log">
            <span class="material-symbols-outlined text-2xl">add</span>
        </button>
    </div>
    <script>
    function switchTab(tabId) {
        // Hide all contents
        const contents = ['overview', 'activity', 'notes', 'files', 'followup'];
        contents.forEach(id => {
            document.getElementById(`content-${id}`).classList.add('hidden');
            document.getElementById(`tab-${id}`).classList.remove('active-tab');
            document.getElementById(`tab-${id}`).classList.add('text-secondary');
        });

        // Show active content
        document.getElementById(`content-${tabId}`).classList.remove('hidden');
        document.getElementById(`tab-${tabId}`).classList.add('active-tab');
        document.getElementById(`tab-${tabId}`).classList.remove('text-secondary');
    }

    // Initialize state
    window.onload = () => {
        switchTab('activity');
    };
    </script>
</body>

</html>