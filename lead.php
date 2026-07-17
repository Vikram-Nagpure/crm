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

    .status-pill {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 9999px;
        font-size: 12px;
        font-weight: 600;
        line-height: 16px;
        border-width: 1px;
    }

    .label-chip {
        padding: 2px 8px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 600;
        line-height: 16px;
    }
    </style>
</head>

<body class="bg-surface text-on-surface font-body-md text-body-md antialiased">
    <!-- TopNavBar from Shared Components -->
    <?php include "include/header.php" ?>
    <!-- Main Content Canvas -->
    <main class="lg:ml-0 mt-16 p-lg bg-background min-h-[calc(100vh-64px)]">
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
                    <input id="leadSearch"
                        class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:ring-4 focus:ring-primary/10 focus:border-primary outline-none text-body-sm transition-all"
                        placeholder="Search leads by name, email, or ID..." type="text" />
                </div>
                <div class="flex items-center gap-sm">
                    <div class="flex gap-4">

                        <!-- Status Dropdown -->
                        <div class="relative custom-dropdown w-52" data-filter="status">
                            <button type="button"
                                class="dropdown-btn w-full h-11 px-4 bg-white border border-gray-300 rounded-xl flex items-center justify-between text-gray-700 shadow-sm hover:border-blue-500 transition">
                                <span class="selected-text">All Status</span>
                                <span class="material-symbols-outlined transition-transform duration-200">
                                    expand_more
                                </span>
                            </button>

                            <div
                                class="dropdown-menu absolute left-0 right-0 mt-2 bg-white rounded-xl shadow-xl border border-gray-200 overflow-hidden opacity-0 invisible scale-95 transition-all duration-200 z-50">

                                <button class="dropdown-option" data-value="All Status">All Status</button>
                                <button class="dropdown-option" data-value="New Lead">New</button>
                                <button class="dropdown-option" data-value="Qualified">Qualified</button>
                                <button class="dropdown-option" data-value="Nurturing">Nurturing</button>
                                <button class="dropdown-option" data-value="Closed">Closed</button>

                            </div>
                        </div>

                        <!-- Source Dropdown -->
                        <div class="relative custom-dropdown w-52" data-filter="source">
                            <button type="button"
                                class="dropdown-btn w-full h-11 px-4 bg-white border border-gray-300 rounded-xl flex items-center justify-between text-gray-700 shadow-sm hover:border-blue-500 transition">
                                <span class="selected-text">All Sources</span>
                                <span class="material-symbols-outlined transition-transform duration-200">
                                    expand_more
                                </span>
                            </button>

                            <div
                                class="dropdown-menu absolute left-0 right-0 mt-2 bg-white rounded-xl shadow-xl border border-gray-200 overflow-hidden opacity-0 invisible scale-95 transition-all duration-200 z-50">

                                <button class="dropdown-option" data-value="All Sources">All Sources</button>
                                <button class="dropdown-option" data-value="Organic">Organic</button>
                                <button class="dropdown-option" data-value="Paid Ads">Paid Ads</button>
                                <button class="dropdown-option" data-value="Referral">Referral</button>
                                <button class="dropdown-option" data-value="Social Media">Social Media</button>

                            </div>
                        </div>

                    </div>

                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[18px] text-gray-500">
                            calendar_today
                        </span>

                        <input type="text" id="dateRange" placeholder="Select Date Range"
                            class="pl-10 pr-4 py-2 border border-outline-variant rounded-lg text-label-md bg-white w-72 focus:outline-none focus:ring-2 focus:ring-primary cursor-pointer"
                            readonly>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-md">
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
                <table class="w-full min-w-[1150px] border-collapse" id="leadsTable">
                    <thead>
                        <tr class="bg-surface-container border-b border-outline-variant">
                            <th class="px-md py-4 w-12">
                                <input id="selectAll"
                                    class="rounded border-outline text-primary focus:ring-primary/20 w-4 h-4"
                                    type="checkbox" />
                            </th>
                            <th data-sort="id" data-type="text"
                                class="sortable px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                ID <span class="material-symbols-outlined sort-icon">arrow_upward</span>
                            </th>
                            <th data-sort="name" data-type="text"
                                class="sortable px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider min-w-[240px]">
                                Lead Info <span class="material-symbols-outlined sort-icon">arrow_upward</span>
                            </th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Labels</th>
                            <th data-sort="phone" data-type="text"
                                class="sortable px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Phone <span class="material-symbols-outlined sort-icon">arrow_upward</span>
                            </th>
                            <th data-sort="assigned" data-type="text"
                                class="sortable px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Assign by <span class="material-symbols-outlined sort-icon">arrow_upward</span>
                            </th>
                            <th data-sort="status" data-type="text"
                                class="sortable px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">
                                Status <span class="material-symbols-outlined sort-icon">arrow_upward</span>
                            </th>
                            <th
                                class="px-md py-4 font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider text-right sticky right-0 bg-surface-container shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant" id="leadsTbody">
                        <!-- Rows are rendered by JS -->
                    </tbody>
                </table>
            </div>
            <!-- Pagination Section -->
            <div
                class="flex items-center justify-between px-lg py-md border-t border-outline-variant bg-surface-container flex-wrap gap-sm">
                <div class="font-body-sm text-body-sm text-on-surface-variant" id="paginationSummary">
                    Showing <span class="font-semibold text-on-surface" id="pageStart">1</span> to
                    <span class="font-semibold text-on-surface" id="pageEnd">10</span> of
                    <span class="font-semibold text-on-surface" id="pageTotal">0</span> leads
                </div>
                <div class="flex items-center gap-md">
                    <label class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface-variant">
                        Rows per page
                        <select id="pageSizeSelect"
                            class="ml-1 border border-outline-variant rounded-lg py-1.5 pl-2 pr-7 text-label-md bg-white focus:outline-none focus:ring-2 focus:ring-primary">
                            <option value="10" selected>10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                        </select>
                    </label>
                    <div class="flex items-center gap-sm" id="paginationControls">
                        <button id="prevPage"
                            class="p-2 border border-outline-variant rounded-lg hover:bg-surface transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                        </button>
                        <div class="flex items-center gap-1" id="pageNumbers"></div>
                        <button id="nextPage"
                            class="p-2 border border-outline-variant rounded-lg hover:bg-surface transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                        </button>
                    </div>
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
    const LEADS = [
        { id: "LD-8821", name: "Eleanor Vance", email: "e.vance@techflow.io", labels: [{ text: "SaaS", cls: "bg-secondary-container text-on-secondary-container" }, { text: "High-Value", cls: "bg-tertiary-fixed text-on-tertiary-fixed-variant" }], phone: "+1 (555) 012-3456", assigned: "BOD", status: "Qualified", source: "Referral", date: "2023-10-14" },
        { id: "LD-8822", name: "Julian Thorne", email: "j.thorne@apexsolutions.com", labels: [{ text: "Enterprise", cls: "bg-secondary-container text-on-secondary-container" }], phone: "+1 (555) 098-7654", assigned: "Admin", status: "New Lead", source: "Paid Ads", date: "2023-10-13" },
        { id: "LD-8823", name: "Maya Sterling", email: "maya@sterlinglabs.co", labels: [{ text: "Retail", cls: "bg-secondary-container text-on-secondary-container" }, { text: "Follow-up Required", cls: "bg-error-container text-on-error-container" }], phone: "+44 20 7946 0123", assigned: "Manager", status: "Nurturing", source: "Organic", date: "2023-10-12" },
        { id: "LD-8824", name: "Arthur Pendel", email: "pendel.a@grandhorizon.com", labels: [{ text: "Referral", cls: "bg-secondary-container text-on-secondary-container" }], phone: "+1 (555) 246-8102", assigned: "Admin", status: "Closed", source: "Referral", date: "2023-10-11" },
        { id: "LD-8825", name: "Nina Osei", email: "nina.o@brightpath.io", labels: [{ text: "SaaS", cls: "bg-secondary-container text-on-secondary-container" }], phone: "+234 80 1234 5678", assigned: "BOD", status: "New Lead", source: "Social Media", date: "2023-10-10" },
        { id: "LD-8826", name: "Felix Bauer", email: "f.bauer@nordkern.de", labels: [{ text: "Manufacturing", cls: "bg-secondary-container text-on-secondary-container" }, { text: "High-Value", cls: "bg-tertiary-fixed text-on-tertiary-fixed-variant" }], phone: "+49 30 9876 5432", assigned: "Manager", status: "Qualified", source: "Organic", date: "2023-10-09" },
        { id: "LD-8827", name: "Priya Nair", email: "priya@kalastudio.in", labels: [{ text: "Design", cls: "bg-secondary-container text-on-secondary-container" }], phone: "+91 22 1234 5678", assigned: "Admin", status: "Nurturing", source: "Paid Ads", date: "2023-10-08" },
        { id: "LD-8828", name: "Carlos Mendes", email: "c.mendes@riolabs.br", labels: [{ text: "Fintech", cls: "bg-secondary-container text-on-secondary-container" }, { text: "Follow-up Required", cls: "bg-error-container text-on-error-container" }], phone: "+55 21 91234 5678", assigned: "BOD", status: "New Lead", source: "Referral", date: "2023-10-07" },
        { id: "LD-8829", name: "Ingrid Larsen", email: "ingrid@fjordtech.no", labels: [{ text: "SaaS", cls: "bg-secondary-container text-on-secondary-container" }], phone: "+47 22 98 76 54", assigned: "Manager", status: "Closed", source: "Organic", date: "2023-10-06" },
        { id: "LD-8830", name: "Kenji Watanabe", email: "kenji@satotech.jp", labels: [{ text: "Enterprise", cls: "bg-secondary-container text-on-secondary-container" }, { text: "High-Value", cls: "bg-tertiary-fixed text-on-tertiary-fixed-variant" }], phone: "+81 3 1234 5678", assigned: "Admin", status: "Qualified", source: "Social Media", date: "2023-10-05" },
        { id: "LD-8831", name: "Zara Malik", email: "zara@crescentco.pk", labels: [{ text: "Retail", cls: "bg-secondary-container text-on-secondary-container" }], phone: "+92 21 9876 5432", assigned: "BOD", status: "Nurturing", source: "Paid Ads", date: "2023-10-04" },
        { id: "LD-8832", name: "Liam Fitzgerald", email: "liam@emeraldgrp.ie", labels: [{ text: "Consulting", cls: "bg-secondary-container text-on-secondary-container" }], phone: "+353 1 987 6543", assigned: "Manager", status: "New Lead", source: "Referral", date: "2023-10-03" },
        { id: "LD-8833", name: "Sofia Moreau", email: "sofia@atelierparis.fr", labels: [{ text: "Design", cls: "bg-secondary-container text-on-secondary-container" }, { text: "High-Value", cls: "bg-tertiary-fixed text-on-tertiary-fixed-variant" }], phone: "+33 1 55 66 77 88", assigned: "Admin", status: "Qualified", source: "Organic", date: "2023-10-02" },
        { id: "LD-8834", name: "Adrian Kowalski", email: "adrian@polskabuild.pl", labels: [{ text: "Manufacturing", cls: "bg-secondary-container text-on-secondary-container" }], phone: "+48 22 123 45 67", assigned: "BOD", status: "Closed", source: "Paid Ads", date: "2023-10-01" }
    ];

    const STATUS_STYLES = {
        "Qualified": "bg-[#10B9811A] text-[#047857] border-[#10B98133]",
        "New Lead": "bg-primary-fixed text-on-primary-fixed-variant border-primary/10",
        "Nurturing": "bg-[#F59E0B1A] text-[#B45309] border-[#F59E0B33]",
        "Closed": "bg-surface-container-highest text-on-surface-variant border-outline-variant"
    };

    const state = {
        search: "",
        status: "All Status",
        source: "All Sources",
        dateRange: [],
        sortKey: "date",
        sortDir: "desc",
        page: 1,
        pageSize: 10,
        selected: new Set()
    };

    function formatDate(iso) {
        const d = new Date(iso + "T00:00:00");
        return d.toLocaleDateString("en-US", { month: "short", day: "2-digit", year: "numeric" });
    }

    function getFilteredSorted() {
        let rows = LEADS.filter(l => {
            const term = state.search.trim().toLowerCase();
            const matchesSearch = !term ||
                l.name.toLowerCase().includes(term) ||
                l.email.toLowerCase().includes(term) ||
                l.id.toLowerCase().includes(term);
            const matchesStatus = state.status === "All Status" || l.status === state.status;
            const matchesSource = state.source === "All Sources" || l.source === state.source;
            let matchesDate = true;
            if (state.dateRange && state.dateRange.length === 2) {
                const rowDate = new Date(l.date + "T00:00:00").getTime();
                matchesDate = rowDate >= state.dateRange[0].getTime() && rowDate <= state.dateRange[1].getTime();
            }
            return matchesSearch && matchesStatus && matchesSource && matchesDate;
        });

        rows.sort((a, b) => {
            let av = a[state.sortKey];
            let bv = b[state.sortKey];
            if (state.sortKey === "date") {
                av = new Date(av).getTime();
                bv = new Date(bv).getTime();
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

        const tbody = document.getElementById("leadsTbody");
        tbody.innerHTML = "";

        if (pageRows.length === 0) {
            tbody.innerHTML = `
                <tr>
                    <td colspan="8" class="px-md py-2xl text-center text-on-surface-variant">
                        <div class="flex flex-col items-center gap-2">
                            <span class="material-symbols-outlined text-[32px] text-outline">person_search</span>
                            <span class="font-label-md text-label-md">No leads match your filters</span>
                        </div>
                    </td>
                </tr>`;
        }

        pageRows.forEach((l, i) => {
            const zebra = i % 2 === 1 ? "bg-surface-container-lowest" : "";
            const checked = state.selected.has(l.id) ? "checked" : "";
            const statusClass = STATUS_STYLES[l.status] || "bg-surface-container-high text-on-surface-variant border-outline-variant";
            const labelsHtml = l.labels.map(lb => `<span class="label-chip ${lb.cls}">${lb.text}</span>`).join("");
            const tr = document.createElement("tr");
            tr.className = `${zebra} hover:bg-surface-container-low transition-colors group border-b border-outline-variant last:border-b-0`;
            tr.innerHTML = `
                <td class="px-md py-4">
                    <input class="row-checkbox rounded border-outline text-primary focus:ring-primary/20 w-4 h-4" type="checkbox" data-id="${l.id}" ${checked} />
                </td>
                <td class="px-md py-4 font-code-sm text-code-sm text-on-surface-variant">${l.id}</td>
                <td class="px-md py-4">
                    <div class="flex items-center gap-md">
                        <div>
                            <div class="font-label-md text-label-md text-on-surface">${l.name}</div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant">${l.email}</div>
                        </div>
                    </div>
                </td>
                <td class="px-md py-4">
                    <div class="flex flex-wrap gap-xs">${labelsHtml}</div>
                </td>
                <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">${l.phone}</td>
                <td class="px-md py-4 font-body-sm text-body-sm text-on-surface-variant">${l.assigned}</td>
                <td class="px-md py-4">
                    <span class="status-pill ${statusClass}">${l.status}</span>
                </td>
                <td class="px-md py-4 text-right sticky right-0 ${zebra || "bg-surface-container-lowest"} group-hover:bg-surface-container-low transition-colors shadow-[-4px_0_12px_rgba(0,0,0,0.05)]">
                    <div class="flex justify-end gap-1">
                        <a href="leadDetail.php?id=${l.id}" class="p-2 hover:bg-primary/10 text-primary rounded-lg transition-colors" title="View"><span class="material-symbols-outlined text-[18px]">visibility</span></a>
                        <button class="p-2 hover:bg-secondary/10 text-secondary rounded-lg transition-colors" title="Edit"><span class="material-symbols-outlined text-[18px]">edit</span></button>
                        <button class="p-2 hover:bg-error/10 text-error rounded-lg transition-colors" title="Delete" data-delete="${l.id}"><span class="material-symbols-outlined text-[18px]">delete</span></button>
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
                    ? "px-3 py-1.5 bg-primary text-on-primary rounded-lg font-label-md text-label-md"
                    : "px-3 py-1.5 hover:bg-surface rounded-lg font-label-md text-label-md text-on-surface-variant";
                btn.textContent = p;
                btn.addEventListener("click", () => { state.page = p; render(); });
                pageNumbers.appendChild(btn);
            }
        });

        // select-all state
        const selectAll = document.getElementById("selectAll");
        const visibleIds = pageRows.map(r => r.id);
        selectAll.checked = visibleIds.length > 0 && visibleIds.every(id => state.selected.has(id));

        // row checkbox listeners
        document.querySelectorAll(".row-checkbox").forEach(cb => {
            cb.addEventListener("change", (e) => {
                const id = e.target.dataset.id;
                if (e.target.checked) state.selected.add(id); else state.selected.delete(id);
                e.target.closest("tr").classList.toggle("bg-primary/5", e.target.checked);
                selectAll.checked = pageRows.every(r => state.selected.has(r.id));
            });
        });

        // delete buttons
        document.querySelectorAll("[data-delete]").forEach(btn => {
            btn.addEventListener("click", (e) => {
                const id = e.currentTarget.dataset.delete;
                const idx = LEADS.findIndex(l => l.id === id);
                if (idx > -1 && confirm(`Remove lead ${id}?`)) {
                    LEADS.splice(idx, 1);
                    state.selected.delete(id);
                    render();
                }
            });
        });

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
    document.getElementById("leadSearch").addEventListener("input", (e) => {
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

    /* Select all */
    document.getElementById("selectAll").addEventListener("change", (e) => {
        const filtered = getFilteredSorted();
        const startIdx = (state.page - 1) * state.pageSize;
        const visible = filtered.slice(startIdx, startIdx + state.pageSize);
        visible.forEach(r => {
            if (e.target.checked) state.selected.add(r.id); else state.selected.delete(r.id);
        });
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

    /* dropdown js (status / source filters) */
    document.querySelectorAll(".custom-dropdown").forEach(dropdown => {
        const btn = dropdown.querySelector(".dropdown-btn");
        const menu = dropdown.querySelector(".dropdown-menu");
        const text = dropdown.querySelector(".selected-text");
        const icon = btn.querySelector(".material-symbols-outlined");
        const filterKey = dropdown.dataset.filter; // "status" | "source"

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
                text.textContent = this.textContent;
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

    /* Initial render */
    render();
    </script>
</body>

</html>