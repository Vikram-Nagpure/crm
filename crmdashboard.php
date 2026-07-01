<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Business OS - CRM Pro Dashboard</title>
    <!-- Google Fonts & Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@600;700&amp;family=JetBrains+Mono&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "surface-bright": "#f8f9fa",
                    "surface-variant": "#e1e3e4",
                    "on-secondary-fixed": "#0b1c30",
                    "surface-container": "#edeeef",
                    "secondary-container": "#d0e1fb",
                    "on-primary-fixed-variant": "#003ea8",
                    "surface-container-high": "#e7e8e9",
                    "on-primary-fixed": "#00174b",
                    "inverse-on-surface": "#f0f1f2",
                    "secondary": "#505f76",
                    "primary": "#004ac6",
                    "primary-container": "#2563eb",
                    "on-tertiary-fixed": "#002113",
                    "on-surface-variant": "#434655",
                    "tertiary-fixed-dim": "#4edea3",
                    "primary-fixed-dim": "#b4c5ff",
                    "secondary-fixed-dim": "#b7c8e1",
                    "tertiary": "#006242",
                    "on-secondary-container": "#54647a",
                    "on-primary": "#ffffff",
                    "on-background": "#191c1d",
                    "on-secondary-fixed-variant": "#38485d",
                    "background": "#f8f9fa",
                    "on-tertiary-fixed-variant": "#005236",
                    "inverse-surface": "#2e3132",
                    "surface-container-low": "#f3f4f5",
                    "outline-variant": "#c3c6d7",
                    "error": "#ba1a1a",
                    "primary-fixed": "#dbe1ff",
                    "tertiary-fixed": "#6ffbbe",
                    "on-tertiary": "#ffffff",
                    "on-surface": "#191c1d",
                    "on-primary-container": "#eeefff",
                    "tertiary-container": "#007d55",
                    "on-secondary": "#ffffff",
                    "inverse-primary": "#b4c5ff",
                    "surface-container-lowest": "#ffffff",
                    "surface": "#f8f9fa",
                    "secondary-fixed": "#d3e4fe",
                    "surface-dim": "#d9dadb",
                    "outline": "#737686",
                    "on-tertiary-container": "#bdffdb",
                    "on-error-container": "#93000a",
                    "surface-container-highest": "#e1e3e4",
                    "surface-tint": "#0053db",
                    "on-error": "#ffffff",
                    "error-container": "#ffdad6"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "margin": "24px",
                    "lg": "24px",
                    "xs": "4px",
                    "md": "16px",
                    "sm": "8px",
                    "gutter": "20px",
                    "xl": "32px",
                    "2xl": "48px",
                    "base": "4px"
                },
                "fontFamily": {
                    "headline-md": ["Geist"],
                    "label-md": ["Inter"],
                    "display": ["Geist"],
                    "label-sm": ["Inter"],
                    "headline-sm": ["Geist"],
                    "body-lg": ["Inter"],
                    "headline-lg-mobile": ["Geist"],
                    "headline-lg": ["Geist"],
                    "body-sm": ["Inter"],
                    "body-md": ["Inter"],
                    "code-sm": ["JetBrains Mono"]
                },
                "fontSize": {
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
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
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
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
                    "headline-lg-mobile": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
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

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }

    .hover-lift {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .hover-lift:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .sparkline {
        height: 32px;
        width: 64px;
    }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- TopNavBar -->
    
    <?php include "include/header.php"?>
    <!-- Main Content Canvas -->
    <main class="ml-64 pt-16 min-h-screen">
        <div class="p-lg max-w-[1600px] mx-auto">
            <!-- Page Header -->
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-lg gap-md">
                <div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface">CRM Pro Dashboard</h1>
                    <div class="flex items-center gap-sm mt-1 text-on-surface-variant">
                        <span class="material-symbols-outlined text-sm">calendar_today</span>
                        <span class="font-body-sm text-body-sm">Last 30 Days: Oct 12 - Nov 11, 2023</span>
                    </div>
                </div>
                <div class="flex items-center gap-sm">
                    <!-- <button
                        class="flex items-center gap-sm px-md py-2 bg-white border border-outline-variant rounded-lg text-secondary font-label-md text-label-md hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined text-sm">download</span>
                        Export
                    </button> -->
                    <a href="lead.php"
                        class="flex items-center gap-sm px-md py-2 bg-primary text-white rounded-lg font-label-md text-label-md hover:opacity-90 transition-all">
                        <span class="material-symbols-outlined text-sm">add</span>
                        New Deal
                    </a>
                </div>
            </div>
            <!-- Dashboard Grid -->
            <div class="grid grid-cols-12 gap-lg">
                <!-- Left & Center Column (Main Workspace) -->
                <div class="col-span-12 lg:col-span-9 space-y-lg">
                    <!-- KPI Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-lg">
                        <!-- Leads -->
                        <div
                            class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant hover-lift">
                            <div class="flex justify-between items-start mb-2">
                                <span class="p-1.5 bg-primary/10 text-primary rounded-lg"><span
                                        class="material-symbols-outlined text-xl">group</span></span>
                                <div class="con">
                                    <p class="text-xs text-on-surface-variant">Total Leads</p>
                            <p class="font-headline-sm text-headline-sm text-on-surface">1,240</p>
                                </div>
                            </div>
                            
                            <span class="text-[10px] text-tertiary font-bold">+12.5% vs LW</span>
                        </div>
                        <!-- Qualified -->
                        <div
                            class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant hover-lift">
                            <div class="flex justify-between items-start mb-2">
                                <span class="p-1.5 bg-tertiary/10 text-tertiary rounded-lg"><span
                                        class="material-symbols-outlined text-xl">verified</span></span>
                                <div class="con">
                                    <p class="text-xs text-on-surface-variant">Qualified</p>
                            <p class="font-headline-sm text-headline-sm text-on-surface">450</p>
                                </div>
                            </div>
                            
                            <span class="text-[10px] text-tertiary font-bold">+5.2% vs LW</span>
                        </div>
                        <!-- Deals -->
                        <div
                            class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant hover-lift">
                            <div class="flex justify-between items-start mb-2">
                                <span class="p-1.5 bg-secondary-container/10 text-secondary rounded-lg"><span
                                        class="material-symbols-outlined text-xl">handshake</span></span>
                                <div class="con">
                                    <p class="text-xs text-on-surface-variant">Won Deals</p>
                            <p class="font-headline-sm text-headline-sm text-on-surface">82</p>
                                </div>
                            </div>
                            
                            <span class="text-[10px] text-tertiary font-bold">+18.3% vs LW</span>
                        </div>
                        <!-- Avg Deal Size -->
                        <div
                            class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant hover-lift">
                            <div class="flex justify-between items-start mb-2">
                                <span class="p-1.5 bg-primary-container/10 text-primary-container rounded-lg"><span
                                        class="material-symbols-outlined text-xl">attach_money</span></span>
                                <div class="con">
                                    <p class="text-xs text-on-surface-variant">Avg. Deal Size</p>
                            <p class="font-headline-sm text-headline-sm text-on-surface">$12,400</p>
                                </div>
                            </div>
                            
                            <span class="text-[10px] text-tertiary font-bold">+2.4% vs LW</span>
                        </div>
                        <!-- Follow-ups -->
                        <div
                            class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant hover-lift">
                            <div class="flex justify-between items-start mb-2">
                                <span class="p-1.5 bg-error-container/20 text-error rounded-lg"><span
                                        class="material-symbols-outlined text-xl">schedule</span></span>
                                <div class="con">
                                    <p class="text-xs text-on-surface-variant">Pending</p>
                            <p class="font-headline-sm text-headline-sm text-on-surface">24</p>
                                </div>
                            </div>
                            
                            <span class="text-[10px] text-error font-bold">Action Needed</span>
                        </div>
                    </div>
                    <!-- Main Sales Performance Chart -->
                   <div class="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg">

    <!-- Header -->
    <div class="flex justify-between items-start mb-lg flex-wrap gap-md">
        <div>
            <h3 class="font-headline-sm text-headline-sm text-on-surface">Sales Performance</h3>
            <p class="text-sm text-on-surface-variant">Closed Deals vs. Revenue Targets</p>
        </div>

        <div class="flex items-center gap-md">
            <!-- Quick stat -->
            <div class="text-right pr-md border-r border-outline-variant">
                <p class="text-xs text-on-surface-variant">Current</p>
                <p class="text-sm font-semibold text-on-surface">$30k <span class="text-green-600 font-medium">+18%</span></p>
            </div>

            <button id="actualBtn"
                class="flex items-center gap-xs px-3 py-1.5 rounded-lg bg-primary text-white transition shadow-sm">
                <span class="w-2.5 h-2.5 rounded-full bg-white"></span>
                <span class="text-xs font-medium">Actual</span>
            </button>

            <button id="targetBtn"
                class="flex items-center gap-xs px-3 py-1.5 rounded-lg bg-primary text-white transition shadow-sm">
                <span class="w-2.5 h-2.5 rounded-full bg-white"></span>
                <span class="text-xs font-medium">Target</span>
            </button>
        </div>
    </div>

    <!-- Chart -->
    <div class="h-64 w-full relative">
        <svg class="w-full h-full overflow-visible" preserveAspectRatio="none" viewBox="0 0 1000 200">
            <defs>
                <linearGradient id="actualFill" x1="0" y1="0" x2="0" y2="1">
                    <stop offset="0%" stop-color="#2563eb" stop-opacity="0.25" />
                    <stop offset="100%" stop-color="#2563eb" stop-opacity="0" />
                </linearGradient>
            </defs>

            <!-- Grid lines -->
            <g stroke="currentColor" class="text-outline-variant" stroke-width="1" opacity="0.4">
                <line x1="0" y1="40" x2="1000" y2="40" />
                <line x1="0" y1="90" x2="1000" y2="90" />
                <line x1="0" y1="140" x2="1000" y2="140" />
                <line x1="0" y1="190" x2="1000" y2="190" />
            </g>

            <!-- Target line (dashed) -->
            <path id="targetLine"
                d="M0 170 L100 150 L200 130 L300 110 L400 90 L500 70 L600 50 L700 30 L800 20 L900 10 L1000 5"
                fill="none" stroke="#737686" stroke-dasharray="8 4" stroke-opacity="0.5"
                stroke-width="2" stroke-linecap="round" />

            <!-- Actual area fill -->
            <path id="actualFillArea"
                d="M0 180 L100 160 L200 170 L300 120 L400 140 L500 80 L600 100 L700 40 L800 60 L900 20 L1000 30 L1000 200 L0 200 Z"
                fill="url(#actualFill)" stroke="none" />

            <!-- Actual line -->
            <path id="actualLine"
                d="M0 180 L100 160 L200 170 L300 120 L400 140 L500 80 L600 100 L700 40 L800 60 L900 20 L1000 30"
                fill="none" stroke="#2563eb" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" />

            <!-- Actual data points -->
            <g id="actualDots" fill="#2563eb">
                <circle cx="0" cy="180" r="4" />
                <circle cx="100" cy="160" r="4" />
                <circle cx="200" cy="170" r="4" />
                <circle cx="300" cy="120" r="4" />
                <circle cx="400" cy="140" r="4" />
                <circle cx="500" cy="80" r="4" />
                <circle cx="600" cy="100" r="4" />
                <circle cx="700" cy="40" r="4" />
                <circle cx="800" cy="60" r="4" />
                <circle cx="900" cy="20" r="4" />
                <circle cx="1000" cy="30" r="4" />
            </g>
        </svg>

        <div class="absolute bottom-0 w-full flex justify-between pt-4 text-[10px] text-on-surface-variant font-medium border-t border-outline-variant">
            <span>OCT 12</span><span>OCT 19</span><span>OCT 26</span><span>NOV 02</span><span>NOV 11</span>
        </div>
    </div>
</div>
                    <!-- Pipeline & Deals Table Combined Layout -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
                        <!-- Detailed Pipeline -->
                        <div
                            class="lg:col-span-1 bg-surface-container-lowest rounded-xl border border-outline-variant p-lg">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface mb-xl">Pipeline Distribution
                            </h3>
                            <div class="space-y-lg">
                                <div class="space-y-2">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-on-surface-variant">New Leads</span>
                                        <span class="font-bold">124 ($245k)</span>
                                    </div>
                                    <div class="h-2.5 w-full bg-surface-container rounded-full overflow-hidden">
                                        <div class="h-full bg-primary/30 w-[85%] rounded-full"></div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-on-surface-variant">Qualified</span>
                                        <span class="font-bold">52 ($180k)</span>
                                    </div>
                                    <div class="h-2.5 w-full bg-surface-container rounded-full overflow-hidden">
                                        <div class="h-full bg-primary/60 w-[45%] rounded-full"></div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-on-surface-variant">Proposal Sent</span>
                                        <span class="font-bold">31 ($112k)</span>
                                    </div>
                                    <div class="h-2.5 w-full bg-surface-container rounded-full overflow-hidden">
                                        <div class="h-full bg-primary/80 w-[30%] rounded-full"></div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-on-surface-variant">Negotiation</span>
                                        <span class="font-bold">18 ($94k)</span>
                                    </div>
                                    <div class="h-2.5 w-full bg-surface-container rounded-full overflow-hidden">
                                        <div class="h-full bg-primary w-[20%] rounded-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Top High-Value Opportunities Table -->
                        <div
                            class="lg:col-span-2 bg-surface-container-lowest rounded-xl border border-outline-variant p-lg overflow-hidden">
                            <div class="flex justify-between items-center mb-lg">
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">Top Opportunities</h3>
                                <a class="text-primary text-xs font-semibold hover:underline" href="#">View All
                                    Deals</a>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left">
                                    <thead
                                        class="text-xs text-on-surface-variant border-b border-outline-variant uppercase">
                                        <tr>
                                            <th class="pb-3 pr-4 font-semibold">Deal Name</th>
                                            <th class="pb-3 pr-4 font-semibold text-center">Stage</th>
                                            <th class="pb-3 pr-4 font-semibold text-right">Value</th>
                                            <th class="pb-3 pr-4 font-semibold">Prob.</th>
                                            <th class="pb-3 font-semibold text-right">Owner</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-outline-variant">
                                        <tr class="group hover:bg-surface-container-lowest transition-colors">
                                            <td class="py-4 pr-4">
                                                <div class="font-semibold text-on-surface">Global Logistics Expansion
                                                </div>
                                                <div class="text-xs text-on-surface-variant">Acme Corp</div>
                                            </td>
                                            <td class="py-4 pr-4 text-center">
                                                <span
                                                    class="px-2 py-1 bg-secondary-container text-on-secondary-container text-[10px] font-bold rounded-full">PROPOSAL</span>
                                            </td>
                                            <td class="py-4 pr-4 text-right font-medium">$45,000</td>
                                            <td class="py-4 pr-4">
                                                <div
                                                    class="w-20 bg-surface-container h-1.5 rounded-full overflow-hidden">
                                                    <div class="bg-primary h-full w-[70%]"></div>
                                                </div>
                                            </td>
                                            <td class="py-4 text-right">
                                                <img alt="rep"
                                                    class="h-6 w-6 rounded-full inline-block border border-outline-variant"
                                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbQ4TwXrRNua4IkSuQNmw9IFHwnKI-fiU1v6DWUylxupBdrQmPpvK6zX8Wo0Qb5OtV7GiBFKfoE4Tiu7Lby_zN1a4kZf4-zYjSzcgCnp_BRbgUXKaQ08_u8SIqkuZsEOuD-E5rihNbWwuXijiBVzFEMTFpnIwy-OHZSmqKrks8NCz6HVVKMSS7sKVw43r7jJq9wKTNs2H0MTmHYUcNhaJHk_A_PW0bgvokNfIFkwbOfuaNKiU9s5XvjUodQQu6UaBsLTq69uZAOR9f" />
                                            </td>
                                        </tr>
                                        <tr class="group hover:bg-surface-container-lowest transition-colors">
                                            <td class="py-4 pr-4">
                                                <div class="font-semibold text-on-surface">Enterprise SaaS Migration
                                                </div>
                                                <div class="text-xs text-on-surface-variant">TechFlow Inc.</div>
                                            </td>
                                            <td class="py-4 pr-4 text-center">
                                                <span
                                                    class="px-2 py-1 bg-primary-fixed text-on-primary-fixed-variant text-[10px] font-bold rounded-full">NEGOTIATION</span>
                                            </td>
                                            <td class="py-4 pr-4 text-right font-medium">$120,000</td>
                                            <td class="py-4 pr-4">
                                                <div
                                                    class="w-20 bg-surface-container h-1.5 rounded-full overflow-hidden">
                                                    <div class="bg-primary h-full w-[90%]"></div>
                                                </div>
                                            </td>
                                            <td class="py-4 text-right">
                                                <div
                                                    class="h-6 w-6 rounded-full bg-secondary-fixed-dim text-[10px] flex items-center justify-center font-bold inline-block border border-outline-variant">
                                                    SK</div>
                                            </td>
                                        </tr>
                                        <tr class="group hover:bg-surface-container-lowest transition-colors">
                                            <td class="py-4 pr-4">
                                                <div class="font-semibold text-on-surface">Infrastructure Overhaul</div>
                                                <div class="text-xs text-on-surface-variant">Core Systems</div>
                                            </td>
                                            <td class="py-4 pr-4 text-center">
                                                <span
                                                    class="px-2 py-1 bg-tertiary-fixed text-on-tertiary-fixed-variant text-[10px] font-bold rounded-full">QUALIFIED</span>
                                            </td>
                                            <td class="py-4 pr-4 text-right font-medium">$28,500</td>
                                            <td class="py-4 pr-4">
                                                <div
                                                    class="w-20 bg-surface-container h-1.5 rounded-full overflow-hidden">
                                                    <div class="bg-primary h-full w-[40%]"></div>
                                                </div>
                                            </td>
                                            <td class="py-4 text-right">
                                                <div
                                                    class="h-6 w-6 rounded-full bg-primary-fixed text-[10px] flex items-center justify-center font-bold inline-block border border-outline-variant">
                                                    JD</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Sidebar (Activity & Intelligence) -->
                <div class="col-span-12 lg:col-span-3 space-y-lg">
                    <!-- Sales Intelligence (Leaderboard) -->
                    <div class="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg">
                        <h3 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-lg">
                            Top Performers</h3>
                        <div class="space-y-md">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-sm">
                                    <div
                                        class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-xs border border-primary/20">
                                        1</div>
                                    <div>
                                        <p class="text-sm font-semibold">Sarah Jenkins</p>
                                        <p class="text-[10px] text-on-surface-variant">114% of Target</p>
                                    </div>
                                </div>
                                <span class="text-sm font-bold">$1.2M</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-sm">
                                    <div
                                        class="w-8 h-8 rounded-full bg-surface-container text-secondary flex items-center justify-center font-bold text-xs border border-outline-variant">
                                        2</div>
                                    <div>
                                        <p class="text-sm font-semibold">David Miller</p>
                                        <p class="text-[10px] text-on-surface-variant">98% of Target</p>
                                    </div>
                                </div>
                                <span class="text-sm font-bold">$942k</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-sm">
                                    <div
                                        class="w-8 h-8 rounded-full bg-surface-container text-secondary flex items-center justify-center font-bold text-xs border border-outline-variant">
                                        3</div>
                                    <div>
                                        <p class="text-sm font-semibold">Priya Kapoor</p>
                                        <p class="text-[10px] text-on-surface-variant">92% of Target</p>
                                    </div>
                                </div>
                                <span class="text-sm font-bold">$880k</span>
                            </div>
                        </div>
                    </div>
                    <!-- Enhanced Activity Feed -->
                    <div class="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg">
                        <div class="flex items-center justify-between mb-lg">
                            <h3 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">
                                Active Events</h3>
                            <button class="p-1 rounded hover:bg-surface-container transition-colors"><span
                                    class="material-symbols-outlined text-sm">settings</span></button>
                        </div>
                        <div class="space-y-lg relative">
                            <!-- Timeline Line -->
                            <div class="absolute left-4 top-2 bottom-0 w-px bg-outline-variant"></div>
                            <div class="relative pl-10">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-error-container/20 text-error flex items-center justify-center border border-error/20 z-10">
                                    <span class="material-symbols-outlined text-lg">call_missed</span>
                                </div>
                                <p class="text-sm font-semibold">Missed Call: Marcus L.</p>
                                <p class="text-xs text-on-surface-variant mb-3">Enterprise prospect from NYC</p>
                                <div class="flex gap-2">
                                    <button
                                        class="px-3 py-1 bg-primary text-white text-[10px] font-bold rounded-lg hover:opacity-90">Call
                                        Back</button>
                                    <button
                                        class="px-3 py-1 bg-surface-container-high text-on-surface text-[10px] font-bold rounded-lg hover:bg-surface-container-highest">Ignore</button>
                                </div>
                            </div>
                            <div class="relative pl-10">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center border border-primary/20 z-10">
                                    <span class="material-symbols-outlined text-lg">mail</span>
                                </div>
                                <p class="text-sm font-semibold">New Reply: "Contract Qs"</p>
                                <p class="text-xs text-on-surface-variant mb-3">From Sarah at Acme Corp</p>
                                <div class="flex gap-2">
                                    <button
                                        class="px-3 py-1 bg-surface-container-high text-on-surface text-[10px] font-bold rounded-lg hover:bg-surface-container-highest">Quick
                                        Reply</button>
                                    <button
                                        class="px-3 py-1 border border-outline-variant text-on-surface text-[10px] font-bold rounded-lg hover:bg-surface-container-low">View
                                        Email</button>
                                </div>
                            </div>
                            <div class="relative pl-10">
                                <div
                                    class="absolute left-0 top-1 w-8 h-8 rounded-full bg-tertiary/10 text-tertiary flex items-center justify-center border border-tertiary/20 z-10">
                                    <span class="material-symbols-outlined text-lg">description</span>
                                </div>
                                <p class="text-sm font-semibold">Doc Ready for Review</p>
                                <p class="text-xs text-on-surface-variant mb-3">Legal cleared TechFlow MSA</p>
                                <div class="flex gap-2">
                                    <button
                                        class="px-3 py-1 bg-tertiary text-white text-[10px] font-bold rounded-lg hover:opacity-90">Review
                                        &amp; Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Decorative Target Progress -->
                    <div
                        class="relative overflow-hidden bg-primary rounded-xl p-lg text-on-primary-container h-40 flex flex-col justify-end">
                        <div class="absolute inset-0 opacity-10">
                            <svg height="100%" preserveaspectratio="none" viewbox="0 0 100 100" width="100%">
                                <path d="M0 100 C 20 0, 50 0, 100 100 Z" fill="white"></path>
                            </svg>
                        </div>
                        <p class="font-headline-sm text-headline-sm relative z-10">Q4 Sales Goal</p>
                        <p class="text-xs opacity-80 relative z-10 mb-md">$2.4M of $3.2M Targeted</p>
                        <div class="w-full bg-white/20 h-2 rounded-full relative z-10">
                            <div class="bg-white h-full w-[74%] rounded-full shadow-[0_0_8px_white]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
   <script>
const actualBtn = document.getElementById('actualBtn');
const targetBtn = document.getElementById('targetBtn');

const actualLine = document.getElementById('actualLine');
const actualFillArea = document.getElementById('actualFillArea');
const actualDots = document.getElementById('actualDots');
const targetLine = document.getElementById('targetLine');

let showActual = true;
let showTarget = true;

actualBtn.addEventListener('click', () => {
    showActual = !showActual;

    actualLine.style.display = showActual ? '' : 'none';
    actualFillArea.style.display = showActual ? '' : 'none';
    actualDots.style.display = showActual ? '' : 'none';

    actualBtn.classList.toggle('bg-primary', showActual);
    actualBtn.classList.toggle('text-white', showActual);
    actualBtn.classList.toggle('shadow-sm', showActual);
    actualBtn.classList.toggle('bg-surface-container-high', !showActual);
    actualBtn.classList.toggle('border', !showActual);
    actualBtn.classList.toggle('border-outline', !showActual);
    actualBtn.classList.toggle('opacity-50', !showActual);
});

targetBtn.addEventListener('click', () => {
    showTarget = !showTarget;

    targetLine.style.display = showTarget ? '' : 'none';
    targetBtn.classList.toggle('opacity-50', !showTarget);
});
</script>
</body>

</html>