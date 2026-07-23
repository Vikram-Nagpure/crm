<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Customer Detail - Business OS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Inter:wght@100..900&display=swap"
        rel="stylesheet" />
    <!-- Theme Configuration -->
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "surface-dim": "#d9dadb",
                    "on-secondary-fixed-variant": "#38485d",
                    "tertiary-container": "#007d55",
                    "on-primary": "#ffffff",
                    "on-surface": "#191c1d",
                    "surface-tint": "#0053db",
                    "secondary-fixed-dim": "#b7c8e1",
                    "surface": "#f8f9fa",
                    "inverse-surface": "#2e3132",
                    "on-secondary-container": "#54647a",
                    "on-error": "#ffffff",
                    "secondary-fixed": "#d3e4fe",
                    "on-primary-container": "#eeefff",
                    "tertiary-fixed-dim": "#4edea3",
                    "on-secondary": "#ffffff",
                    "on-primary-fixed": "#00174b",
                    "tertiary-fixed": "#6ffbbe",
                    "surface-container-high": "#e7e8e9",
                    "primary": "#004ac6",
                    "on-background": "#191c1d",
                    "error": "#ba1a1a",
                    "on-tertiary-container": "#bdffdb",
                    "outline": "#737686",
                    "primary-fixed": "#dbe1ff",
                    "tertiary": "#006242",
                    "secondary-container": "#d0e1fb",
                    "on-primary-fixed-variant": "#003ea8",
                    "secondary": "#505f76",
                    "primary-container": "#2563eb",
                    "inverse-on-surface": "#f0f1f2",
                    "surface-variant": "#e1e3e4",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-fixed": "#0b1c30",
                    "surface-bright": "#f8f9fa",
                    "inverse-primary": "#b4c5ff",
                    "on-tertiary-fixed-variant": "#005236",
                    "on-tertiary": "#ffffff",
                    "surface-container-low": "#f3f4f5",
                    "outline-variant": "#c3c6d7",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-error-container": "#93000a",
                    "error-container": "#ffdad6",
                    "surface-container": "#edeeef",
                    "on-surface-variant": "#434655",
                    "surface-container-highest": "#e1e3e4",
                    "on-tertiary-fixed": "#002113",
                    "background": "#f8f9fa"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "base": "4px",
                    "margin": "24px",
                    "xl": "32px",
                    "gutter": "20px",
                    "lg": "24px",
                    "sm": "8px",
                    "xs": "4px",
                    "md": "16px",
                    "2xl": "48px"
                },
                "fontFamily": {
                    "code-sm": ["JetBrains Mono"],
                    "label-md": ["Inter"],
                    "headline-lg-mobile": ["Geist"],
                    "display": ["Geist"],
                    "headline-md": ["Geist"],
                    "label-sm": ["Inter"],
                    "headline-sm": ["Geist"],
                    "headline-lg": ["Geist"],
                    "body-md": ["Inter"],
                    "body-sm": ["Inter"],
                    "body-lg": ["Inter"]
                },
                "fontSize": {
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "headline-lg-mobile": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
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
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
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
    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }

    body {
        background-color: #f8f9fa;
    }

    .active-tab {
        border-bottom: 2px solid #004ac6;
        color: #004ac6;
        font-weight: 600;
    }

    /* Custom scrollbar for subtle professional look */
    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background: #e1e3e4;
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #c3c6d7;
    }
    </style>
</head>

<body class="font-body-md text-on-background min-h-screen">
    <!-- TopNavBar -->
    <?php include "include/header.php"?>
    <!-- Main Content Canvas -->
    <main class="lg:ml-0 mt-16 p-lg bg-background min-h-[calc(100vh-64px)]">
        <div class="max-w-[1440px] mx-auto px-margin">
            <!-- Header Section -->
            <header class="flex flex-col md:flex-row md:items-end justify-between gap-md mb-xl">
                <div class="flex items-center gap-lg">
                    <div
                        class="w-20 h-20 rounded-xl overflow-hidden border border-outline-variant bg-white flex items-center justify-center">
                        <img class="w-full h-full object-cover"
                            data-alt="Close up portrait of a professional woman with a warm expression, wearing a tailored navy suit. The photo is taken in a brightly lit, modern office environment with soft focus greenery in the background. The lighting is natural and sophisticated, matching a premium corporate brand identity."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5e59F7CuoFbDGngK44sY6xUQpmyJX2GxX6ZkoANelgNy2CoqZ4aXw-gKwpje5AR3u3pJ2O_iRAgRKIHmAopGW17gcXzYea8pmlCUHMBUEJibBxFG5YbTabuv3WaSzy-Xc8SnD7UBDz-DbSDb0zPAk7WN66zwJhasgzm4YLsABFdGPHdtyfG93EbeyszahemYcQdlITSABmqUL6kEILMGCsWjgKg8AN8Hf4tAke2rqdkts4NjUzEpFTsvKqtwePUJTm--88Q4HGgw" />
                    </div>
                    <div>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Elena Richardson</h1>
                        <p class="font-body-md text-body-md text-secondary flex items-center gap-xs">
                            <span class="material-symbols-outlined text-[18px]">business</span>
                            Velox Dynamics
                        </p>
                    </div>
                </div>
                <div class="flex items-center gap-md">
                    <button
                        class="px-md py-sm rounded-lg bg-white border border-outline-variant text-primary font-label-md text-label-md hover:bg-surface-container-low transition-colors flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[18px]">edit</span> Edit Profile
                    </button>
                    <!-- <button
                        class="px-md py-sm rounded-lg bg-white border border-outline-variant text-primary font-label-md text-label-md hover:bg-surface-container-low transition-colors flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[18px]">history_edu</span> Log Activity
                    </button> -->
                    <!-- <button
                        class="px-md py-sm rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:opacity-90 transition-colors flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[18px]">mail</span> Send Email
                    </button> -->
                </div>
            </header>
            <!-- Main Layout Grid -->
            <div class="grid grid-cols-12 gap-lg pb-2xl">
                <!-- Left Column (Tabs & Main Content) -->
                <div class="col-span-12 lg:col-span-8 space-y-lg">
                    <!-- Tabbed Navigation -->
                    <div class="border-b border-outline-variant flex gap-xl">
                        <button class="tab-btn active-tab pb-md font-label-md text-label-md transition-all"
                            onclick="switchTab('overview')">Overview</button>
                        <button
                            class="tab-btn pb-md font-label-md text-label-md text-secondary hover:text-primary transition-all"
                            onclick="switchTab('activity')">Activity</button>
                        <button
                            class="tab-btn pb-md font-label-md text-label-md text-secondary hover:text-primary transition-all"
                            onclick="switchTab('deals')">Deals</button>
                        <button
                            class="tab-btn pb-md font-label-md text-label-md text-secondary hover:text-primary transition-all"
                            onclick="switchTab('files')">Files</button>
                    </div>
                    <!-- Content Area -->
                    <div class="space-y-lg" id="tab-content">
                        <!-- Overview Card -->
                        <div class="bg-white border border-outline-variant rounded-xl p-lg">
                            <h2 class="font-headline-sm text-headline-sm mb-md text-on-surface">Customer Overview</h2>
                            <p class="text-secondary leading-relaxed mb-lg">
                                Elena Richardson is the Chief Operations Officer at Velox Dynamics. She has been a
                                primary advocate for our SaaS solutions since early 2023. Currently focused on scaling
                                their European logistics arm. High potential for expansion in the next fiscal quarter.
                            </p>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
                                <div class="p-md rounded-lg bg-surface border border-outline-variant">
                                    <span
                                        class="text-label-sm font-label-sm text-secondary uppercase block mb-xs">Relationship
                                        Score</span>
                                    <div class="flex items-center gap-xs text-primary font-headline-sm">
                                        <span class="material-symbols-outlined">star</span> 9.4/10
                                    </div>
                                </div>
                                <div class="p-md rounded-lg bg-surface border border-outline-variant">
                                    <span class="text-label-sm font-label-sm text-secondary uppercase block mb-xs">Open
                                        Opportunities</span>
                                    <div class="flex items-center gap-xs text-on-surface font-headline-sm">
                                        $42,500
                                    </div>
                                </div>
                                <div class="p-md rounded-lg bg-surface border border-outline-variant">
                                    <span class="text-label-sm font-label-sm text-secondary uppercase block mb-xs">Last
                                        Contact</span>
                                    <div class="flex items-center gap-xs text-on-surface font-headline-sm">
                                        2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Activity Feed -->
                        <div class="space-y-md">
                            <h2
                                class="font-headline-sm text-headline-sm text-on-surface flex items-center justify-between">
                                Recent Activity
                                <button class="text-primary font-label-md text-label-md hover:underline">View
                                    All</button>
                            </h2>
                            <div
                                class="relative pl-8 space-y-lg before:absolute before:left-3 before:top-0 before:h-full before:w-[1px] before:bg-outline-variant">
                                <!-- Activity Item 1 -->
                                <div class="relative">
                                    <div
                                        class="absolute -left-8 top-1 w-6 h-6 rounded-full bg-primary-fixed flex items-center justify-center border-2 border-white ring-2 ring-background z-10">
                                        <span class="material-symbols-outlined text-[14px] text-primary">call</span>
                                    </div>
                                    <div class="bg-white border border-outline-variant rounded-xl p-md">
                                        <div class="flex justify-between items-start mb-sm">
                                            <h4 class="font-label-md text-label-md font-bold">Follow-up Call: Contract
                                                Renewal</h4>
                                            <span class="text-label-sm font-label-sm text-secondary">Oct 14, 2:30
                                                PM</span>
                                        </div>
                                        <p class="text-body-sm text-secondary">Discussed the upcoming renewal terms for
                                            the Enterprise Plan. Elena requested a quote for 50 additional seats.
                                            Meeting scheduled for next Tuesday to finalize.</p>
                                        <div class="mt-md flex items-center gap-sm">
                                            <span
                                                class="bg-secondary-container text-on-secondary-container px-sm py-xs rounded text-[11px] font-bold">Call
                                                Log</span>
                                            <span class="text-secondary text-[12px]">Recorded by David Chen</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Activity Item 2 -->
                                <div class="relative">
                                    <div
                                        class="absolute -left-8 top-1 w-6 h-6 rounded-full bg-tertiary-fixed flex items-center justify-center border-2 border-white ring-2 ring-background z-10">
                                        <span class="material-symbols-outlined text-[14px] text-tertiary">mail</span>
                                    </div>
                                    <div class="bg-white border border-outline-variant rounded-xl p-md">
                                        <div class="flex justify-between items-start mb-sm">
                                            <h4 class="font-label-md text-label-md font-bold">Email Sent: New Feature
                                                Showcase</h4>
                                            <span class="text-label-sm font-label-sm text-secondary">Oct 12, 10:15
                                                AM</span>
                                        </div>
                                        <p class="text-body-sm text-secondary">Sent the requested documentation on the
                                            new AI Analytics module. Included the whitepaper and integration guide.</p>
                                        <div class="mt-md flex items-center gap-sm">
                                            <span
                                                class="bg-secondary-container text-on-secondary-container px-sm py-xs rounded text-[11px] font-bold">Outgoing</span>
                                            <span class="text-secondary text-[12px]">System Generated</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Activity Item 3 -->
                                <div class="relative">
                                    <div
                                        class="absolute -left-8 top-1 w-6 h-6 rounded-full bg-secondary-fixed flex items-center justify-center border-2 border-white ring-2 ring-background z-10">
                                        <span
                                            class="material-symbols-outlined text-[14px] text-on-secondary-fixed-variant">groups</span>
                                    </div>
                                    <div class="bg-white border border-outline-variant rounded-xl p-md">
                                        <div class="flex justify-between items-start mb-sm">
                                            <h4 class="font-label-md text-label-md font-bold">QBR Meeting: Q3
                                                Performance Review</h4>
                                            <span class="text-label-sm font-label-sm text-secondary">Oct 10, 4:00
                                                PM</span>
                                        </div>
                                        <p class="text-body-sm text-secondary">Quarterly Business Review with the Velox
                                            operations team. Reported a 22% increase in system efficiency. Action items:
                                            Follow up on security audit documentation.</p>
                                        <div class="mt-md flex items-center gap-sm">
                                            <span
                                                class="bg-secondary-container text-on-secondary-container px-sm py-xs rounded text-[11px] font-bold">Meeting</span>
                                            <span class="text-secondary text-[12px]">Attended by David Chen, Marcus
                                                Thorne</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Column (Sidebar Panels) -->
                <div class="col-span-12 lg:col-span-4 space-y-lg">
                    <!-- Customer Info Card -->
                    <section class="bg-white border border-outline-variant rounded-xl p-lg">
                        <h3 class="font-label-md text-label-md text-on-surface font-semibold mb-2">Customer Info</h3>
                        <div class="space-y-md">
                            <div class="flex items-start gap-md">
                                <span class="material-symbols-outlined text-secondary">call</span>
                                <div>
                                    <span class="text-label-sm font-label-sm text-secondary block">Phone</span>
                                    <span class="text-body-md font-label-md">+1 (555) 890-2341</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-md">
                                <span class="material-symbols-outlined text-secondary">mail</span>
                                <div>
                                    <span class="text-label-sm font-label-sm text-secondary block">Email</span>
                                    <span class="text-body-md font-label-md">e.richardson@velox.com</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-md">
                                <span class="material-symbols-outlined text-secondary">location_on</span>
                                <div>
                                    <span class="text-label-sm font-label-sm text-secondary block">Address</span>
                                    <span class="text-body-md font-label-md">822 Innovation Way, Ste 400<br />San
                                        Francisco, CA 94105</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-md">
                                <div
                                    class="w-8 h-8 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold text-xs">
                                    DC</div>
                                <div>
                                    <span class="text-label-sm font-label-sm text-secondary block">Assigned To</span>
                                    <span class="text-body-md font-label-md">David Chen</span>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Related Contacts -->
                    <div class="p-lg bg-white border border-outline-variant rounded-xl flex flex-col gap-lg">
                        <div class="flex items-center justify-between">
                            <h3 class="font-label-md text-label-md text-on-surface font-semibold">Related Contacts</h3>
                            <span class="text-label-sm text-on-surface-variant">RS Tech (3)</span>
                        </div>
                        <div class="flex flex-col gap-md">
                            <div class="flex items-center gap-md">
                                <div class="w-10 h-10 rounded-full overflow-hidden bg-surface-container">
                                    <img class="w-full h-full object-cover"
                                        data-alt="A portrait of a cheerful female professional with long dark hair, wearing a stylish beige blazer, smiling warmly in a bright and airy workspace with natural lighting. The image exudes professional friendliness and warmth."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDk7UyOiJliQ9UcCXjyI5E9jSLiZxjFMOTA1KnHjShjy8FRt4IwhXa6C65XoSwhrqbj9jcwAn5to9VesYrmNrX7LLvoEkyle5NpQXsFF28YKsYBA-S9VmEihyXPs6BkVM-AQe254RzEdXXKLWPh8uwMvd8xA7lVrHBY_xXJ7b_hqP9Y_PENXt5Hm7MtrBgw_-IRoQ4k8CBKZ_wbhui-d09iuYMPzerwPBDSCKYf4p8QvRNjLg4rzQJmCLbmlAUFu83UJVRJMuKvNLW6" />
                                </div>
                                <div class="flex-1">
                                    <p class="font-label-md leading-tight">Priya Varma</p>
                                    <p class="text-body-sm text-on-surface-variant">CTO</p>
                                </div>
                                <button
                                    class="material-symbols-outlined text-secondary hover:text-primary transition-colors">mail</button>
                            </div>
                            <div class="flex items-center gap-md">
                                <div class="w-10 h-10 rounded-full overflow-hidden bg-surface-container">
                                    <img class="w-full h-full object-cover"
                                        data-alt="Close-up headshot of a middle-aged male manager with a professional haircut and glasses, wearing a light blue dress shirt, looking directly into the camera with a confident and approachable smile, soft office interior background."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZZ7_3c_ty14j0SAnWzApE0RATgERSq5SSCgqHXhUhnBUn2cVZIf7SMTSQb__0xZxijwV5Maved4dWo9o7JJ6Oaz8YjgyBKoxINI0q7BB8CaJTwtgn3SPBcDMNGjKlYqiECz_lSeMCeOFoUH_-p656kf0052BXQ0kl8U2f8uM-BpQ8umf58Ahy4wULG_TSE8qLz7yBZbW_tN23AQhl68FX4bvi6GQs_h2zhKFzBytWFc96UkMxps4JKeFkFSEvcRyMD8_kiXqb0_Bi" />
                                </div>
                                <div class="flex-1">
                                    <p class="font-label-md leading-tight">Vikram Singh</p>
                                    <p class="text-body-sm text-on-surface-variant">Procurement</p>
                                </div>
                                <button
                                    class="material-symbols-outlined text-secondary hover:text-primary transition-colors">mail</button>
                            </div>
                        </div>
                        <button
                            onclick="openColleagueModal()"
                            class="w-full py-2 text-primary border border-primary/20 rounded-lg font-label-md hover:bg-primary/5 transition-colors">
                            Add Colleague
                        </button>
                    </div>

                    <!-- Recent Deals Card -->
                    <section class="bg-white border border-outline-variant rounded-xl p-lg">
                        <div class="flex justify-between items-center mb-lg">
                            <h3 class="font-label-md text-label-md text-on-surface font-semibold">Recent Deals</h3>
                            <span
                                class="material-symbols-outlined text-secondary cursor-pointer hover:text-primary transition-colors">add_circle</span>
                        </div>
                        <div class="space-y-md">
                            <div
                                class="flex justify-between items-center p-sm rounded-lg hover:bg-surface-container-low transition-colors border border-transparent hover:border-outline-variant group cursor-pointer">
                                <div>
                                    <h4 class="font-label-md text-label-md font-bold">Enterprise Expansion</h4>
                                    <span class="text-label-sm font-label-sm text-secondary">$32,000 • Closed Won</span>
                                </div>
                                <span
                                    class="material-symbols-outlined text-secondary group-hover:text-primary transition-colors">chevron_right</span>
                            </div>
                            <div
                                class="flex justify-between items-center p-sm rounded-lg hover:bg-surface-container-low transition-colors border border-transparent hover:border-outline-variant group cursor-pointer">
                                <div>
                                    <h4 class="font-label-md text-label-md font-bold">EMEA Logistics Module</h4>
                                    <span class="text-label-sm font-label-sm text-secondary">$10,500 •
                                        Negotiation</span>
                                </div>
                                <span
                                    class="material-symbols-outlined text-secondary group-hover:text-primary transition-colors">chevron_right</span>
                            </div>
                            <div
                                class="flex justify-between items-center p-sm rounded-lg hover:bg-surface-container-low transition-colors border border-transparent hover:border-outline-variant group cursor-pointer">
                                <div>
                                    <h4 class="font-label-md text-label-md font-bold">Security Audit Suite</h4>
                                    <span class="text-label-sm font-label-sm text-secondary">$4,200 • Proposal</span>
                                </div>
                                <span
                                    class="material-symbols-outlined text-secondary group-hover:text-primary transition-colors">chevron_right</span>
                            </div>
                        </div>
                    </section>

                    
                    <!-- Tags Card -->
                    <section class="bg-white border border-outline-variant rounded-xl p-lg">
                        <h3 class="font-headline-sm text-headline-sm mb-lg text-on-surface">Tags</h3>
                        <div class="flex flex-wrap gap-sm">
                            <span
                                class="px-md py-xs rounded-full bg-secondary-container text-on-secondary-container text-label-sm font-label-sm">High-Value</span>
                            <span
                                class="px-md py-xs rounded-full bg-secondary-container text-on-secondary-container text-label-sm font-label-sm">Enterprise</span>
                            <span
                                class="px-md py-xs rounded-full bg-secondary-container text-on-secondary-container text-label-sm font-label-sm">SaaS</span>
                            <span
                                class="px-md py-xs rounded-full bg-surface-variant text-on-surface-variant text-label-sm font-label-sm">Strategic
                                Account</span>
                            <span
                                class="px-md py-xs rounded-full border border-outline-variant text-secondary text-label-sm font-label-sm flex items-center gap-xs cursor-pointer hover:bg-surface transition-colors">
                                <span class="material-symbols-outlined text-[14px]">add</span> Add Tag
                            </span>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>


    <!-- Add Colleague Modal -->
<div id="colleagueModal"
    class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm p-4">

    <div class="w-full max-w-xl bg-white rounded-2xl shadow-2xl overflow-hidden">

        <!-- Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b">
            <div>
                <h2 class="text-xl font-semibold">Add Colleague</h2>
                <p class="text-sm text-gray-500 mt-1">
                    Add a contact related to this company.
                </p>
            </div>

            <button onclick="closeColleagueModal()"
                class="w-10 h-10 rounded-full hover:bg-gray-100 flex items-center justify-center">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <!-- Body -->
        <div class="p-6 space-y-5">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div>
                    <label class="block text-sm font-medium mb-2">Full Name</label>
                    <input type="text"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
                        placeholder="Enter full name">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Designation</label>
                    <input type="text"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
                        placeholder="e.g. Manager">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Email</label>
                    <input type="email"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
                        placeholder="example@email.com">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Mobile</label>
                    <input type="tel"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
                        placeholder="+91 9876543210">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-2">Department</label>
                    <input type="text"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
                        placeholder="Sales / HR / Accounts">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium mb-2">Notes</label>
                    <textarea rows="3"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary"
                        placeholder="Additional information..."></textarea>
                </div>

            </div>

        </div>

        <!-- Footer -->
        <div class="flex justify-end gap-3 px-6 py-4 border-t bg-gray-50">

            <button onclick="closeColleagueModal()"
                class="px-5 py-2.5 rounded-xl border border-gray-300 hover:bg-gray-100">
                Cancel
            </button>

            <button
                class="px-5 py-2.5 rounded-xl bg-primary text-white hover:opacity-90">
                Save Colleague
            </button>

        </div>

    </div>

</div>

<!-- Upload File Modal -->
                            <div id="fileModal"
                                class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm p-4">

                                <div class="w-full max-w-xl bg-white rounded-2xl shadow-2xl overflow-hidden">

                                    <!-- Header -->
                                    <div class="flex items-center justify-between px-6 py-5 border-b">
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-800">
                                                Upload File
                                            </h3>
                                            <p class="text-sm text-gray-500 mt-1">
                                                Upload documents related to this lead.
                                            </p>
                                        </div>

                                        <button id="closeFileModal"
                                            class="w-10 h-10 rounded-full hover:bg-gray-100 transition flex items-center justify-center">
                                            <span class="material-symbols-outlined text-gray-500">
                                                close
                                            </span>
                                        </button>
                                    </div>

                                    <!-- Body -->
                                    <div class="p-6">

                                        <!-- Upload Area -->
                                        <label for="leadFile"
                                            class="block cursor-pointer border-2 border-dashed border-gray-300 rounded-xl p-10 text-center hover:border-primary hover:bg-orange-50 transition">

                                            <div
                                                class="w-16 h-16 mx-auto rounded-full bg-orange-100 flex items-center justify-center mb-4">

                                                <span class="material-symbols-outlined text-primary text-4xl">
                                                    cloud_upload
                                                </span>

                                            </div>

                                            <h4 class="font-semibold text-gray-800 text-lg">
                                                Drag & Drop your file here
                                            </h4>

                                            <p class="text-gray-500 mt-2">
                                                or <span class="text-primary font-medium">Browse Files</span>
                                            </p>

                                            <p class="text-xs text-gray-400 mt-4">
                                                Supported: PDF, DOC, DOCX, XLS, XLSX, JPG, PNG, ZIP
                                            </p>

                                            <p class="text-xs text-gray-400">
                                                Maximum file size: 20 MB
                                            </p>

                                            <input id="leadFile" type="file" class="hidden">
                                        </label>

                                        <!-- Selected File -->
                                        <div class="mt-5">

                                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                                Selected File
                                            </label>

                                            <input type="text"
                                                id="selectedFileName"
                                                class="w-full border rounded-lg px-4 py-3 bg-gray-50"
                                                placeholder="No file selected"
                                                readonly>

                                        </div>

                                    </div>

                                    <!-- Footer -->
                                    <div class="flex justify-end gap-3 px-6 py-5 border-t bg-gray-50">

                                        <button id="cancelFileModal"
                                            class="px-5 py-2.5 rounded-lg border border-gray-300 hover:bg-gray-100 transition">

                                            Cancel

                                        </button>

                                        <button
                                            class="px-6 py-2.5 rounded-lg bg-primary text-white hover:opacity-90 transition flex items-center gap-2">

                                            <span class="material-symbols-outlined text-[18px]">
                                                upload
                                            </span>

                                            Upload File

                                        </button>

                                    </div>

                                </div>

                            </div>

<!-- Colleague Modal js -->
<script>
function openColleagueModal() {
    const modal = document.getElementById("colleagueModal");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeColleagueModal() {
    const modal = document.getElementById("colleagueModal");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

// Close when clicking outside
document.getElementById("colleagueModal").addEventListener("click", function (e) {
    if (e.target === this) {
        closeColleagueModal();
    }
});
</script>


    <script>
    function switchTab(tabName) {
        const tabs = document.querySelectorAll('.tab-btn');
        tabs.forEach(tab => {
            tab.classList.remove('active-tab', 'text-primary', 'font-semibold');
            tab.classList.add('text-secondary');
            if (tab.innerText.toLowerCase() === tabName) {
                tab.classList.add('active-tab');
                tab.classList.remove('text-secondary');
            }
        });

        const content = document.getElementById('tab-content');

        // Interaction logic for demo
        if (tabName === 'deals') {
            content.innerHTML = `
                    <div class="bg-white border border-outline-variant rounded-xl overflow-hidden">
                        <table class="w-full text-left">
                            <thead class="bg-surface border-b border-outline-variant">
                                <tr>
                                    <th class="p-md text-label-sm font-label-sm text-secondary uppercase">Deal Name</th>
                                    <th class="p-md text-label-sm font-label-sm text-secondary uppercase">Stage</th>
                                    <th class="p-md text-label-sm font-label-sm text-secondary uppercase text-right">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-outline-variant hover:bg-surface-container transition-colors">
                                    <td class="p-md font-label-md">Enterprise Expansion</td>
                                    <td class="p-md"><span class="px-sm py-xs bg-tertiary-container/10 text-tertiary-container rounded text-xs font-bold uppercase">Closed Won</span></td>
                                    <td class="p-md text-right font-label-md">$32,000</td>
                                </tr>
                                <tr class="border-b border-outline-variant hover:bg-surface-container transition-colors">
                                    <td class="p-md font-label-md">EMEA Logistics Module</td>
                                    <td class="p-md"><span class="px-sm py-xs bg-secondary-container text-on-secondary-container rounded text-xs font-bold uppercase">Negotiation</span></td>
                                    <td class="p-md text-right font-label-md">$10,500</td>
                                </tr>
                                <tr class="hover:bg-surface-container transition-colors">
                                    <td class="p-md font-label-md">Security Audit Suite</td>
                                    <td class="p-md"><span class="px-sm py-xs bg-surface-variant text-on-surface-variant rounded text-xs font-bold uppercase">Proposal</span></td>
                                    <td class="p-md text-right font-label-md">$4,200</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                `;
        } else if (tabName === 'activity') {
            // Re-render activity feed (simplification)
            content.innerHTML =
                `<div class="bg-white border border-outline-variant rounded-xl p-lg">
                    <div class="space-y-md">
                            <h2
                                class="font-headline-sm text-headline-sm text-on-surface flex items-center justify-between">
                                Recent Activity
                                <button class="text-primary font-label-md text-label-md hover:underline">View
                                    All</button>
                            </h2>
                            <div
                                class="relative pl-8 space-y-lg before:absolute before:left-3 before:top-0 before:h-full before:w-[1px] before:bg-outline-variant">
                                <!-- Activity Item 1 -->
                                <div class="relative">
                                    <div
                                        class="absolute -left-8 top-1 w-6 h-6 rounded-full bg-primary-fixed flex items-center justify-center border-2 border-white ring-2 ring-background z-10">
                                        <span class="material-symbols-outlined text-[14px] text-primary">call</span>
                                    </div>
                                    <div class="bg-white border border-outline-variant rounded-xl p-md">
                                        <div class="flex justify-between items-start mb-sm">
                                            <h4 class="font-label-md text-label-md font-bold">Follow-up Call: Contract
                                                Renewal</h4>
                                            <span class="text-label-sm font-label-sm text-secondary">Oct 14, 2:30
                                                PM</span>
                                        </div>
                                        <p class="text-body-sm text-secondary">Discussed the upcoming renewal terms for
                                            the Enterprise Plan. Elena requested a quote for 50 additional seats.
                                            Meeting scheduled for next Tuesday to finalize.</p>
                                        <div class="mt-md flex items-center gap-sm">
                                            <span
                                                class="bg-secondary-container text-on-secondary-container px-sm py-xs rounded text-[11px] font-bold">Call
                                                Log</span>
                                            <span class="text-secondary text-[12px]">Recorded by David Chen</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Activity Item 2 -->
                                <div class="relative">
                                    <div
                                        class="absolute -left-8 top-1 w-6 h-6 rounded-full bg-tertiary-fixed flex items-center justify-center border-2 border-white ring-2 ring-background z-10">
                                        <span class="material-symbols-outlined text-[14px] text-tertiary">mail</span>
                                    </div>
                                    <div class="bg-white border border-outline-variant rounded-xl p-md">
                                        <div class="flex justify-between items-start mb-sm">
                                            <h4 class="font-label-md text-label-md font-bold">Email Sent: New Feature
                                                Showcase</h4>
                                            <span class="text-label-sm font-label-sm text-secondary">Oct 12, 10:15
                                                AM</span>
                                        </div>
                                        <p class="text-body-sm text-secondary">Sent the requested documentation on the
                                            new AI Analytics module. Included the whitepaper and integration guide.</p>
                                        <div class="mt-md flex items-center gap-sm">
                                            <span
                                                class="bg-secondary-container text-on-secondary-container px-sm py-xs rounded text-[11px] font-bold">Outgoing</span>
                                            <span class="text-secondary text-[12px]">System Generated</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Activity Item 3 -->
                                <div class="relative">
                                    <div
                                        class="absolute -left-8 top-1 w-6 h-6 rounded-full bg-secondary-fixed flex items-center justify-center border-2 border-white ring-2 ring-background z-10">
                                        <span
                                            class="material-symbols-outlined text-[14px] text-on-secondary-fixed-variant">groups</span>
                                    </div>
                                    <div class="bg-white border border-outline-variant rounded-xl p-md">
                                        <div class="flex justify-between items-start mb-sm">
                                            <h4 class="font-label-md text-label-md font-bold">QBR Meeting: Q3
                                                Performance Review</h4>
                                            <span class="text-label-sm font-label-sm text-secondary">Oct 10, 4:00
                                                PM</span>
                                        </div>
                                        <p class="text-body-sm text-secondary">Quarterly Business Review with the Velox
                                            operations team. Reported a 22% increase in system efficiency. Action items:
                                            Follow up on security audit documentation.</p>
                                        <div class="mt-md flex items-center gap-sm">
                                            <span
                                                class="bg-secondary-container text-on-secondary-container px-sm py-xs rounded text-[11px] font-bold">Meeting</span>
                                            <span class="text-secondary text-[12px]">Attended by David Chen, Marcus
                                                Thorne</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>`;
        } else if (tabName === 'files') {
    content.innerHTML = `
        <div class="flex justify-end mb-5">
    <button
        onclick="openFileModal()"
        class="inline-flex items-center gap-2 px-5 py-3 bg-primary text-white rounded-xl font-medium shadow-md hover:shadow-lg hover:scale-[1.02] transition-all duration-200">

        <span class="material-symbols-outlined text-[20px]">
            upload_file
        </span>

        Upload File
    </button>
</div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-md">

            <div class="p-md bg-white border border-outline-variant rounded-xl flex items-center gap-md hover:border-primary transition-all cursor-pointer">
                <span class="material-symbols-outlined text-[32px] text-error">
                    picture_as_pdf
                </span>

                <div class="overflow-hidden">
                    <h4 class="font-label-md text-label-md truncate">
                        Service_Contract_2024.pdf
                    </h4>

                    <span class="text-label-sm font-label-sm text-secondary">
                        2.4 MB • Oct 10
                    </span>
                </div>
            </div>

            <div class="p-md bg-white border border-outline-variant rounded-xl flex items-center gap-md hover:border-primary transition-all cursor-pointer">
                <span class="material-symbols-outlined text-[32px] text-primary">
                    description
                </span>

                <div class="overflow-hidden">
                    <h4 class="font-label-md text-label-md truncate">
                        Q3_Review_Slides.pptx
                    </h4>

                    <span class="text-label-sm font-label-sm text-secondary">
                        8.1 MB • Oct 08
                    </span>
                </div>
            </div>

        </div>
    `;
} else {
            location.reload(); // Quick reset for "Overview"
        }
    }
    </script>

    <!-- modal js -->

    <script>
        function openFileModal() {
    const modal = document.getElementById("fileModal");
    modal.classList.remove("hidden");
    modal.classList.add("flex");
}

function closeFileModal() {
    const modal = document.getElementById("fileModal");
    modal.classList.add("hidden");
    modal.classList.remove("flex");
}

document.getElementById("closeFileModal").onclick = closeFileModal;
document.getElementById("cancelFileModal").onclick = closeFileModal;

// Close when clicking outside
document.getElementById("fileModal").addEventListener("click", function (e) {
    if (e.target === this) {
        closeFileModal();
    }
});

// Show selected file name
document.getElementById("leadFile").addEventListener("change", function () {
    document.getElementById("selectedFileName").value =
        this.files.length ? this.files[0].name : "";
});
    </script>
</body>

</html>