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

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
                    "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                    "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                    "label-md": ["14px", { "lineHeight": "20px", "fontWeight": "500" }],
                    "display": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                    "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                    "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "600" }],
                    "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                    "code-sm": ["13px", { "lineHeight": "18px", "fontWeight": "400" }],
                    "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                    "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }]
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

    th.sortable {
        cursor: pointer;
        user-select: none;
    }

    th.sortable .sort-icon {
        font-size: 16px;
        vertical-align: middle;
        opacity: .35;
        transition: opacity .15s, transform .15s;
    }

    th.sortable.sort-asc .sort-icon,
    th.sortable.sort-desc .sort-icon {
        opacity: 1;
        color: #004ac6;
    }

    th.sortable.sort-desc .sort-icon {
        transform: rotate(180deg);
    }

    .stage-pill {
        display: inline-flex;
        align-items: center;
        padding: 4px 8px;
        border-radius: 8px;
        font-size: 11px;
        font-weight: 700;
        line-height: 16px;
        border-width: 1px;
    }

    .dropdown-option {
        width: 100%;
        padding: 12px 16px;
        text-align: left;
        transition: .2s;
    }

    .dropdown-option:hover {
        background: #EEF4FF;
        color: #2563EB;
    }
    </style>
</head>

<body class="bg-background text-on-surface">
    <!-- Fixed SideNavBar -->
    <?php include "include/header.php" ?>
    <!-- Main Content Wrapper -->
    <main class="lg:ml-0 mt-16 p-lg bg-background min-h-[calc(100vh-64px)]">
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
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[18px] text-gray-500">
                            calendar_today
                        </span>

                        <input type="text" id="dateRange" placeholder="Select Date Range"
                            class="pl-10 pr-4 py-2 border border-outline-variant rounded-lg text-label-md bg-white w-72 focus:outline-none focus:ring-2 focus:ring-primary cursor-pointer"
                            readonly>
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
                        <h3 class="font-headline-md text-headline-md" id="kpiPipelineValue">₹450,200</h3>
                        <span
                            class="text-[12px] font-bold text-[#10B981] bg-[#10B981]/10 px-1.5 py-0.5 rounded">+12%</span>
                    </div>
                    <p class="text-on-surface-variant font-label-sm text-[11px] mt-1">vs. last month (₹402k)</p>
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
                    <h3 class="font-headline-md text-headline-md" id="kpiActiveDeals">24</h3>
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
                    <h3 class="font-headline-md text-headline-md">₹18,750</h3>
                    <p class="text-on-surface-variant font-label-sm text-[11px] mt-1">Maintaining Q3 baseline</p>
                </div>
            </div>

            <!-- Recent Opportunities Table -->
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
                <div class="px-6 py-4 border-b border-outline-variant flex flex-wrap items-center justify-between gap-3">
                    <h3 class="font-headline-sm text-headline-sm">Recent Opportunities</h3>
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[18px]">search</span>
                            <input id="dealSearch"
                                class="pl-9 pr-3 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none text-body-sm transition-all w-56"
                                placeholder="Search deals..." type="text" />
                        </div>
                        <!-- Stage Dropdown -->
                        <div class="relative custom-dropdown w-44" data-filter="stage">
                            <button type="button"
                                class="dropdown-btn w-full h-10 px-3 bg-white border border-gray-300 rounded-lg flex items-center justify-between text-gray-700 shadow-sm hover:border-blue-500 transition text-label-md">
                                <span class="selected-text">All Stages</span>
                                <span class="material-symbols-outlined transition-transform duration-200 !text-[18px]">expand_more</span>
                            </button>
                            <div
                                class="dropdown-menu absolute right-0 left-0 mt-2 bg-white rounded-xl shadow-xl border border-gray-200 overflow-hidden opacity-0 invisible scale-95 transition-all duration-200 z-50">
                                <button class="dropdown-option" data-value="All Stages">All Stages</button>
                                <button class="dropdown-option" data-value="Qualification">Qualification</button>
                                <button class="dropdown-option" data-value="Discovery">Discovery</button>
                                <button class="dropdown-option" data-value="Proposal">Proposal</button>
                                <button class="dropdown-option" data-value="Negotiation">Negotiation</button>
                                <button class="dropdown-option" data-value="Closing">Closing</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto rounded-xl border border-gray-300 bg-white">
                    <table class="w-full border-collapse" id="dealsTable">
                        <thead class="bg-surface-bright border-b border-outline-variant">
                            <tr>
                                <th data-sort="dealName" data-type="text"
                                    class="sortable px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Deal Name <span class="material-symbols-outlined sort-icon">arrow_upward</span>
                                </th>
                                <th data-sort="customer" data-type="text"
                                    class="sortable px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Customer <span class="material-symbols-outlined sort-icon">arrow_upward</span>
                                </th>
                                <th data-sort="value" data-type="number"
                                    class="sortable px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Value <span class="material-symbols-outlined sort-icon">arrow_upward</span>
                                </th>
                                <th data-sort="stage" data-type="text"
                                    class="sortable px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Stage <span class="material-symbols-outlined sort-icon">arrow_upward</span>
                                </th>
                                <th data-sort="closeDate" data-type="date"
                                    class="sortable px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                    Close Date <span class="material-symbols-outlined sort-icon">arrow_upward</span>
                                </th>
                                <th
                                    class="px-6 py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant" id="dealsTbody">
                            <!-- Rows rendered by JS -->
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-6 py-3 border-t border-outline-variant bg-surface-container-lowest flex items-center justify-between flex-wrap gap-3">
                    <p class="font-label-sm text-label-sm text-on-surface-variant" id="paginationSummary">
                        Showing <span id="pageStart">1</span>-<span id="pageEnd">4</span> of
                        <span id="pageTotal">0</span> opportunities
                    </p>
                    <div class="flex items-center gap-3">
                        <label class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface-variant">
                            Rows
                            <select id="pageSizeSelect"
                                class="ml-1 border border-outline-variant rounded-lg py-1 pl-2 pr-6 text-label-sm bg-white focus:outline-none focus:ring-2 focus:ring-primary">
                                <option value="4" selected>4</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                            </select>
                        </label>
                        <div class="flex items-center gap-1">
                            <button id="prevPage" class="p-1.5 hover:bg-surface-container-low rounded disabled:opacity-50 disabled:cursor-not-allowed">
                                <span class="material-symbols-outlined !text-[18px]" data-icon="chevron_left">chevron_left</span>
                            </button>
                            <div class="flex items-center gap-1" id="pageNumbers"></div>
                            <button id="nextPage" class="p-1.5 hover:bg-surface-container-low rounded disabled:opacity-50 disabled:cursor-not-allowed">
                                <span class="material-symbols-outlined !text-[18px]" data-icon="chevron_right">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Spacer -->
            <div class="h-10"></div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
    flatpickr("#dateRange", {
        mode: "range",
        dateFormat: "d M Y",
        allowInput: false,
        onChange: function (selectedDates) {
            state.dateRange = selectedDates;
            state.page = 1;
            render();
        }
    });
    </script>

    <script>
    /* =========================================================
       DATA — swap this array for a server-side / API source
       ========================================================= */
    const DEALS = [
        { dealName: "Enterprise Cloud Expansion", customer: "Velox Dynamics", value: 45000, stage: "Negotiation", closeDate: "2024-10-24", icon: "cloud", iconBg: "bg-primary-container/20 text-primary" },
        { dealName: "SaaS Licensing", customer: "Acme Corp", value: 12500, stage: "Proposal", closeDate: "2024-11-02", icon: "vpn_key", iconBg: "bg-tertiary-container/20 text-tertiary" },
        { dealName: "Hardware Refresh", customer: "TechFlow Inc", value: 28000, stage: "Discovery", closeDate: "2024-10-18", icon: "devices", iconBg: "bg-error-container/20 text-error" },
        { dealName: "AI Consulting Services", customer: "Nova Sphere", value: 15000, stage: "Closing", closeDate: "2024-10-30", icon: "psychology", iconBg: "bg-secondary-fixed/30 text-on-secondary-fixed-variant" },
        { dealName: "Data Migration Package", customer: "Lumina Tech", value: 32500, stage: "Qualification", closeDate: "2024-11-08", icon: "database", iconBg: "bg-primary-container/20 text-primary" },
        { dealName: "Security Audit Retainer", customer: "Nexus Capital", value: 9800, stage: "Discovery", closeDate: "2024-11-14", icon: "shield", iconBg: "bg-error-container/20 text-error" },
        { dealName: "Custom CRM Rollout", customer: "Etoile Luxe", value: 52000, stage: "Negotiation", closeDate: "2024-11-05", icon: "dashboard", iconBg: "bg-primary-container/20 text-primary" },
        { dealName: "API Integration Sprint", customer: "Orbital Systems", value: 18750, stage: "Proposal", closeDate: "2024-11-20", icon: "api", iconBg: "bg-tertiary-container/20 text-tertiary" },
        { dealName: "Support Plan Renewal", customer: "Bravo Logistics", value: 6400, stage: "Closing", closeDate: "2024-10-27", icon: "support_agent", iconBg: "bg-secondary-fixed/30 text-on-secondary-fixed-variant" },
        { dealName: "Analytics Dashboard Build", customer: "Summit Ventures", value: 24300, stage: "Qualification", closeDate: "2024-11-11", icon: "monitoring", iconBg: "bg-primary-container/20 text-primary" },
        { dealName: "Cloud Storage Upgrade", customer: "Pacific Holdings", value: 13900, stage: "Discovery", closeDate: "2024-11-17", icon: "cloud_upload", iconBg: "bg-error-container/20 text-error" },
        { dealName: "Mobile App Retainer", customer: "Zenith Trading", value: 21000, stage: "Negotiation", closeDate: "2024-10-29", icon: "smartphone", iconBg: "bg-primary-container/20 text-primary" }
    ];

    const STAGE_STYLES = {
        "Qualification": "bg-primary/10 text-primary border-primary/20",
        "Discovery": "bg-primary/10 text-primary border-primary/20",
        "Proposal": "bg-surface-container/50 text-on-surface-variant border-outline-variant",
        "Negotiation": "bg-secondary-container/30 text-on-secondary-fixed-variant border-secondary-container",
        "Closing": "bg-[#10B981]/10 text-[#047857] border-[#10B981]/20"
    };

    const state = {
        search: "",
        stage: "All Stages",
        dateRange: [],
        sortKey: "closeDate",
        sortDir: "asc",
        page: 1,
        pageSize: 4
    };

    const currencyFmt = new Intl.NumberFormat("en-IN");

    function formatDate(iso) {
        const d = new Date(iso + "T00:00:00");
        return d.toLocaleDateString("en-US", { month: "short", day: "2-digit", year: "numeric" });
    }

    function getFilteredSorted() {
        let rows = DEALS.filter(d => {
            const term = state.search.trim().toLowerCase();
            const matchesSearch = !term ||
                d.dealName.toLowerCase().includes(term) ||
                d.customer.toLowerCase().includes(term);
            const matchesStage = state.stage === "All Stages" || d.stage === state.stage;
            let matchesDate = true;
            if (state.dateRange && state.dateRange.length === 2) {
                const rowDate = new Date(d.closeDate + "T00:00:00").getTime();
                matchesDate = rowDate >= state.dateRange[0].getTime() && rowDate <= state.dateRange[1].getTime();
            }
            return matchesSearch && matchesStage && matchesDate;
        });

        rows.sort((a, b) => {
            let av = a[state.sortKey];
            let bv = b[state.sortKey];
            if (state.sortKey === "closeDate") {
                av = new Date(av).getTime();
                bv = new Date(bv).getTime();
            } else if (state.sortKey === "value") {
                // numeric already
            } else {
                av = String(av).toLowerCase();
                bv = String(bv).toLowerCase();
            }
            if (av < bv) return state.sortDir === "asc" ? -1 : 1;
            if (av > bv) return state.sortDir === "asc" ? 1 : -1;
            return 0;
        });

        return rows;
    }

    function render() {
        const filtered = getFilteredSorted();
        const total = filtered.length;
        const pageCount = Math.max(1, Math.ceil(total / state.pageSize));
        state.page = Math.min(state.page, pageCount);

        const startIdx = (state.page - 1) * state.pageSize;
        const pageRows = filtered.slice(startIdx, startIdx + state.pageSize);

        const tbody = document.getElementById("dealsTbody");
        tbody.innerHTML = "";

        if (pageRows.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="6" class="px-6 py-16 text-center text-on-surface-variant">
                        <div class="flex flex-col items-center gap-2">
                            <span class="material-symbols-outlined text-[32px] text-outline">search_off</span>
                            <span class="font-label-md text-label-md">No deals match your filters</span>
                        </div>
                    </td>
                </tr>`;
        }

        pageRows.forEach((d, i) => {
            const stageClass = STAGE_STYLES[d.stage] || "bg-surface-container/50 text-on-surface-variant border-outline-variant";
            const tr = document.createElement("tr");
            tr.className = "hover:bg-surface-container-low/30 transition-colors group";
            tr.innerHTML = `
                <td class="px-6 py-[14px]">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded ${d.iconBg} flex items-center justify-center">
                            <span class="material-symbols-outlined !text-[18px]">${d.icon}</span>
                        </div>
                        <span class="font-label-md text-label-md text-on-surface group-hover:text-primary transition-colors">${d.dealName}</span>
                    </div>
                </td>
                <td class="px-6 py-[14px] font-body-sm text-body-sm">${d.customer}</td>
                <td class="px-6 py-[14px] font-label-md text-label-md font-semibold text-on-surface">₹${currencyFmt.format(d.value)}</td>
                <td class="px-6 py-[14px]">
                    <span class="stage-pill ${stageClass}">${d.stage}</span>
                </td>
                <td class="px-6 py-[14px] font-body-sm text-body-sm text-on-surface-variant">${formatDate(d.closeDate)}</td>
                <td class="px-6 py-[14px] text-right">
                    <div class="flex items-center justify-end gap-2">
                        <button class="px-3 py-1.5 font-label-sm text-label-sm bg-surface-container-high text-on-surface rounded-lg hover:bg-outline-variant transition-colors">View</button>
                        <button class="px-3 py-1.5 font-label-sm text-label-sm border border-outline text-on-surface-variant rounded-lg hover:border-primary hover:text-primary transition-colors">Edit</button>
                    </div>
                </td>`;
            tbody.appendChild(tr);
        });

        // pagination summary
        document.getElementById("pageStart").textContent = total === 0 ? 0 : startIdx + 1;
        document.getElementById("pageEnd").textContent = Math.min(startIdx + state.pageSize, total);
        document.getElementById("pageTotal").textContent = total.toLocaleString();

        // pagination controls
        document.getElementById("prevPage").disabled = state.page <= 1;
        document.getElementById("nextPage").disabled = state.page >= pageCount;

        const pageNumbers = document.getElementById("pageNumbers");
        pageNumbers.innerHTML = "";
        const pagesToShow = getPageList(state.page, pageCount);
        pagesToShow.forEach(p => {
            if (p === "...") {
                const span = document.createElement("span");
                span.className = "px-2 text-on-surface-variant";
                span.textContent = "...";
                pageNumbers.appendChild(span);
            } else {
                const btn = document.createElement("button");
                btn.className = p === state.page
                    ? "w-8 h-8 flex items-center justify-center bg-primary text-on-primary rounded-lg font-label-sm text-label-sm"
                    : "w-8 h-8 flex items-center justify-center hover:bg-surface-container-low rounded-lg font-label-sm text-label-sm";
                btn.textContent = p;
                btn.addEventListener("click", () => { state.page = p; render(); });
                pageNumbers.appendChild(btn);
            }
        });

        // KPI recompute from filtered set (reflects search/filter/date state)
        const totalValue = filtered.reduce((sum, d) => sum + d.value, 0);
        document.getElementById("kpiPipelineValue").textContent = `₹${currencyFmt.format(totalValue)}`;
        document.getElementById("kpiActiveDeals").textContent = filtered.length;

        // sort header indicators
        document.querySelectorAll("th.sortable").forEach(th => {
            th.classList.remove("sort-asc", "sort-desc");
            if (th.dataset.sort === state.sortKey) {
                th.classList.add(state.sortDir === "asc" ? "sort-asc" : "sort-desc");
            }
        });
    }

    function getPageList(current, total) {
        const pages = [];
        const windowSize = 1;
        for (let i = 1; i <= total; i++) {
            if (i === 1 || i === total || (i >= current - windowSize && i <= current + windowSize)) {
                pages.push(i);
            } else if (pages[pages.length - 1] !== "...") {
                pages.push("...");
            }
        }
        return pages;
    }

    /* Search */
    document.getElementById("dealSearch").addEventListener("input", (e) => {
        state.search = e.target.value;
        state.page = 1;
        render();
    });

    /* Page size */
    document.getElementById("pageSizeSelect").addEventListener("change", (e) => {
        state.pageSize = parseInt(e.target.value, 10);
        state.page = 1;
        render();
    });

    /* Prev / next */
    document.getElementById("prevPage").addEventListener("click", () => { state.page = Math.max(1, state.page - 1); render(); });
    document.getElementById("nextPage").addEventListener("click", () => {
        const total = getFilteredSorted().length;
        const pageCount = Math.max(1, Math.ceil(total / state.pageSize));
        state.page = Math.min(pageCount, state.page + 1);
        render();
    });

    /* Column sorting */
    document.querySelectorAll("th.sortable").forEach(th => {
        th.addEventListener("click", () => {
            const key = th.dataset.sort;
            if (state.sortKey === key) {
                state.sortDir = state.sortDir === "asc" ? "desc" : "asc";
            } else {
                state.sortKey = key;
                state.sortDir = "asc";
            }
            render();
        });
    });

    /* dropdown js (stage filter) */
    document.querySelectorAll(".custom-dropdown").forEach(dropdown => {
        const btn = dropdown.querySelector(".dropdown-btn");
        const menu = dropdown.querySelector(".dropdown-menu");
        const text = dropdown.querySelector(".selected-text");
        const icon = btn.querySelector(".material-symbols-outlined");
        const filterKey = dropdown.dataset.filter; // "stage"

        btn.addEventListener("click", function (e) {
            e.stopPropagation();

            document.querySelectorAll(".custom-dropdown").forEach(d => {
                if (d !== dropdown) {
                    d.querySelector(".dropdown-menu").classList.add("opacity-0", "invisible", "scale-95");
                    d.querySelector(".material-symbols-outlined").classList.remove("rotate-180");
                }
            });

            menu.classList.toggle("opacity-0");
            menu.classList.toggle("invisible");
            menu.classList.toggle("scale-95");
            icon.classList.toggle("rotate-180");
        });

        dropdown.querySelectorAll(".dropdown-option").forEach(option => {
            option.addEventListener("click", function () {
                text.textContent = this.dataset.value;
                state[filterKey] = this.dataset.value;
                state.page = 1;
                render();

                menu.classList.add("opacity-0", "invisible", "scale-95");
                icon.classList.remove("rotate-180");
            });
        });
    });

    document.addEventListener("click", function () {
        document.querySelectorAll(".custom-dropdown").forEach(dropdown => {
            dropdown.querySelector(".dropdown-menu").classList.add("opacity-0", "invisible", "scale-95");
            dropdown.querySelector(".material-symbols-outlined").classList.remove("rotate-180");
        });
    });

    /* Micro-interactions (KPI card hover) */
    document.addEventListener('DOMContentLoaded', () => {
        const kpiCards = document.querySelectorAll('.grid-cols-4 > div');
        kpiCards.forEach(card => {
            card.addEventListener('mouseenter', () => card.classList.add('border-primary/30'));
            card.addEventListener('mouseleave', () => card.classList.remove('border-primary/30'));
        });
    });

    /* Initial render */
    render();
    </script>
</body>

</html>