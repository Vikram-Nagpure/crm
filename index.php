<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Business OS - Home</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Geist:wght@600;700;800&family=JetBrains+Mono:wght@400&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Inter:wght@100..900&display=swap"
        rel="stylesheet" />
    <style>
    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }

    body {
        font-family: 'Inter', sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    .module-card:hover .module-icon {
        transform: translateY(-4px);
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
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "secondary-fixed": "#d3e4fe",
                    "surface-container": "#edeeef",
                    "on-secondary-container": "#54647a",
                    "surface-container-high": "#e7e8e9",
                    "outline": "#737686",
                    "tertiary-fixed": "#6ffbbe",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-tertiary-fixed": "#002113",
                    "on-surface": "#191c1d",
                    "on-tertiary": "#ffffff",
                    "on-tertiary-container": "#bdffdb",
                    "primary-container": "#2563eb",
                    "surface-dim": "#d9dadb",
                    "on-background": "#191c1d",
                    "on-surface-variant": "#434655",
                    "error-container": "#ffdad6",
                    "surface-container-low": "#f3f4f5",
                    "surface-container-highest": "#e1e3e4",
                    "secondary-container": "#d0e1fb",
                    "on-error-container": "#93000a",
                    "primary-fixed": "#dbe1ff",
                    "on-error": "#ffffff",
                    "inverse-primary": "#b4c5ff",
                    "surface-variant": "#e1e3e4",
                    "on-primary-container": "#eeefff",
                    "on-tertiary-fixed-variant": "#005236",
                    "on-primary": "#ffffff",
                    "error": "#ba1a1a",
                    "surface": "#f8f9fa",
                    "background": "#f8f9fa",
                    "surface-bright": "#f8f9fa",
                    "on-primary-fixed": "#00174b",
                    "tertiary-container": "#007d55",
                    "primary": "#004ac6",
                    "inverse-on-surface": "#f0f1f2",
                    "outline-variant": "#c3c6d7",
                    "tertiary": "#006242",
                    "primary-fixed-dim": "#b4c5ff",
                    "secondary-fixed-dim": "#b7c8e1",
                    "on-secondary-fixed": "#0b1c30",
                    "secondary": "#505f76",
                    "surface-tint": "#0053db",
                    "inverse-surface": "#2e3132",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary": "#ffffff",
                    "on-secondary-fixed-variant": "#38485d",
                    "tertiary-fixed-dim": "#4edea3"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "margin": "24px",
                    "xl": "32px",
                    "xs": "4px",
                    "2xl": "48px",
                    "base": "4px",
                    "lg": "24px",
                    "sm": "8px",
                    "gutter": "20px",
                    "md": "16px"
                },
                "fontFamily": {
                    "body-sm": ["Inter"],
                    "body-md": ["Inter"],
                    "display": ["Geist"],
                    "headline-lg-mobile": ["Geist"],
                    "code-sm": ["JetBrains Mono"],
                    "label-sm": ["Inter"],
                    "headline-sm": ["Geist"],
                    "headline-lg": ["Geist"],
                    "headline-md": ["Geist"],
                    "body-lg": ["Inter"],
                    "label-md": ["Inter"]
                },
                "fontSize": {
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "headline-lg-mobile": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
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
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }]
                }
            },
        },
    }
    </script>
</head>

<body class="bg-background text-on-surface">
    <!-- TopNavBar -->
   <?php include "include/header.php"?>
    <!-- Main Content Area -->
    <main class="lg:ml-64 mt-16 p-lg bg-background min-h-[calc(100vh-64px)]">
        <!-- Summary Strip -->
        <div class="mb-xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
            <div
                class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant flex items-center gap-md hover:shadow-sm transition-shadow">
                <div
                    class="w-12 h-12 rounded-full bg-primary-container/10 flex items-center justify-center text-primary">
                    <span class="material-symbols-outlined">person_add</span>
                </div>
                <div>
                    <p class="font-label-sm text-label-sm text-outline">Total Leads</p>
                    <p class="font-headline-md text-headline-md font-bold">124</p>
                </div>
            </div>
            <div
                class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant flex items-center gap-md hover:shadow-sm transition-shadow">
                <div class="w-12 h-12 rounded-full bg-error-container/20 flex items-center justify-center text-error">
                    <span class="material-symbols-outlined">notification_important</span>
                </div>
                <div>
                    <p class="font-label-sm text-label-sm text-outline">Follow-ups</p>
                    <p class="font-headline-md text-headline-md font-bold">8</p>
                </div>
            </div>
            <div
                class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant flex items-center gap-md hover:shadow-sm transition-shadow">
                <div
                    class="w-12 h-12 rounded-full bg-tertiary-container/10 flex items-center justify-center text-tertiary">
                    <span class="material-symbols-outlined">chat</span>
                </div>
                <div>
                    <p class="font-label-sm text-label-sm text-outline">WhatsApp</p>
                    <p class="font-headline-md text-headline-md font-bold">3</p>
                </div>
            </div>
            <div
                class="bg-surface-container-lowest p-md rounded-xl border border-outline-variant flex items-center gap-md hover:shadow-sm transition-shadow">
                <div
                    class="w-12 h-12 rounded-full bg-secondary-container/20 flex items-center justify-center text-secondary">
                    <span class="material-symbols-outlined">checklist</span>
                </div>
                <div>
                    <p class="font-label-sm text-label-sm text-outline">Tasks Today</p>
                    <p class="font-headline-md text-headline-md font-bold">5</p>
                </div>
            </div>
        </div>
        <!-- Module Grid Header -->
        <div class="flex items-center justify-between mb-lg">
            <h2 class="font-headline-lg text-headline-lg font-bold">All Modules</h2>
            <div class="flex gap-sm">
                <button
                    class="p-2 border border-outline-variant rounded-lg hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined">grid_view</span>
                </button>
                <button
                    class="p-2 border border-outline-variant rounded-lg hover:bg-surface-container transition-colors text-outline">
                    <span class="material-symbols-outlined">list</span>
                </button>
            </div>
        </div>
        <!-- Bento Grid of Modules -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-gutter pb-xl">
            <!-- CRM -->
            <div
                class="module-card group bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex flex-col items-center text-center hover:border-primary transition-all cursor-pointer">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-primary-container flex items-center justify-center text-on-primary-container mb-md shadow-lg transition-transform">
                    <span class="material-symbols-outlined text-[32px]">leaderboard</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">CRM</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Manage leads, pipeline, and sales
                    workflow.</p>
                <div class="mt-lg flex items-center gap-1 text-primary font-label-md group-hover:gap-2 transition-all">
                    Open <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </div>
            </div>
            <!-- Contacts -->
            <div
                class="module-card group bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex flex-col items-center text-center hover:border-primary transition-all cursor-pointer">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-secondary-container flex items-center justify-center text-on-secondary-container mb-md shadow-lg transition-transform">
                    <span class="material-symbols-outlined text-[32px]">contacts</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">Contacts</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Manage people and communication
                    details.</p>
                <div class="mt-lg flex items-center gap-1 text-primary font-label-md group-hover:gap-2 transition-all">
                    Open <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </div>
            </div>
            <!-- Companies -->
            <div
                class="module-card group bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex flex-col items-center text-center hover:border-primary transition-all cursor-pointer">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-tertiary-fixed-dim flex items-center justify-center text-on-tertiary-fixed-variant mb-md shadow-lg transition-transform">
                    <span class="material-symbols-outlined text-[32px]">corporate_fare</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">Companies</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Manage organizations and
                    account-level data.</p>
                <div class="mt-lg flex items-center gap-1 text-primary font-label-md group-hover:gap-2 transition-all">
                    Open <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </div>
            </div>
            <!-- Tasks -->
            <div
                class="module-card group bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex flex-col items-center text-center hover:border-primary transition-all cursor-pointer">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-surface-container-high flex items-center justify-center text-primary mb-md shadow-lg transition-transform">
                    <span class="material-symbols-outlined text-[32px]">assignment</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">Tasks</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Follow-ups, reminders, and work
                    tracking.</p>
                <div class="mt-lg flex items-center gap-1 text-primary font-label-md group-hover:gap-2 transition-all">
                    Open <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </div>
            </div>
            <!-- WhatsApp -->
            <div
                class="module-card group bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex flex-col items-center text-center hover:border-primary transition-all cursor-pointer">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-[#25D366]/10 flex items-center justify-center text-[#25D366] mb-md shadow-lg transition-transform">
                    <span class="material-symbols-outlined text-[32px]">chat</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">WhatsApp</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Messaging and communication
                    automation.</p>
                <div class="mt-lg flex items-center gap-1 text-primary font-label-md group-hover:gap-2 transition-all">
                    Open <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </div>
            </div>
            <!-- Automations -->
            <div
                class="module-card group bg-surface-container-lowest/50 border border-outline-variant border-dashed p-lg rounded-xl flex flex-col items-center text-center opacity-70 transition-all cursor-not-allowed grayscale">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-outline-variant flex items-center justify-center text-on-surface-variant mb-md transition-transform">
                    <span class="material-symbols-outlined text-[32px]">bolt</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">Automations</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Rule-based workflows and AI actions.
                </p>
                <span class="mt-lg px-2 py-1 bg-surface-container text-label-sm rounded-full">Coming Soon</span>
            </div>
            <!-- Reports -->
            <div
                class="module-card group bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex flex-col items-center text-center hover:border-primary transition-all cursor-pointer">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-primary-fixed flex items-center justify-center text-on-primary-fixed mb-md shadow-lg transition-transform">
                    <span class="material-symbols-outlined text-[32px]">insights</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">Reports</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Performance and business insights.
                </p>
                <div class="mt-lg flex items-center gap-1 text-primary font-label-md group-hover:gap-2 transition-all">
                    Open <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </div>
            </div>
            <!-- Projects -->
            <div
                class="module-card group bg-surface-container-lowest/50 border border-outline-variant border-dashed p-lg rounded-xl flex flex-col items-center text-center opacity-70 transition-all cursor-not-allowed grayscale">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-outline-variant flex items-center justify-center text-on-surface-variant mb-md transition-transform">
                    <span class="material-symbols-outlined text-[32px]">account_tree</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">Projects</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Client/project execution and job
                    tracking.</p>
                <span class="mt-lg px-2 py-1 bg-surface-container text-label-sm rounded-full">Coming Soon</span>
            </div>
            <!-- Integrations -->
            <div
                class="module-card group bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex flex-col items-center text-center hover:border-primary transition-all cursor-pointer">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-surface-container-highest flex items-center justify-center text-on-surface mb-md shadow-lg transition-transform">
                    <span class="material-symbols-outlined text-[32px]">extension</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">Integrations</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Connect external tools and data.</p>
                <div class="mt-lg flex items-center gap-1 text-primary font-label-md group-hover:gap-2 transition-all">
                    Open <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </div>
            </div>
            <!-- Users & Roles -->
            <div
                class="module-card group bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex flex-col items-center text-center hover:border-primary transition-all cursor-pointer">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed mb-md shadow-lg transition-transform">
                    <span class="material-symbols-outlined text-[32px]">manage_accounts</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">Users & Roles</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Team access and permissions.</p>
                <div class="mt-lg flex items-center gap-1 text-primary font-label-md group-hover:gap-2 transition-all">
                    Open <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </div>
            </div>
            <!-- Billing -->
            <div
                class="module-card group bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex flex-col items-center text-center hover:border-primary transition-all cursor-pointer">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-tertiary-container flex items-center justify-center text-on-tertiary mb-md shadow-lg transition-transform">
                    <span class="material-symbols-outlined text-[32px]">receipt_long</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">Billing</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Plans, invoices, and subscription.
                </p>
                <div class="mt-lg flex items-center gap-1 text-primary font-label-md group-hover:gap-2 transition-all">
                    Open <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </div>
            </div>
            <!-- Settings -->
            <div
                class="module-card group bg-surface-container-lowest border border-outline-variant p-lg rounded-xl flex flex-col items-center text-center hover:border-primary transition-all cursor-pointer">
                <div
                    class="module-icon w-16 h-16 rounded-2xl bg-outline flex items-center justify-center text-surface mb-md shadow-lg transition-transform">
                    <span class="material-symbols-outlined text-[32px]">settings</span>
                </div>
                <h3 class="font-headline-sm text-headline-sm font-semibold mb-sm">Settings</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant flex-1">Workspace and system settings.</p>
                <div class="mt-lg flex items-center gap-1 text-primary font-label-md group-hover:gap-2 transition-all">
                    Open <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </div>
            </div>
        </div>
        <!-- Recent Activity Section -->
        <section class="mt-xl">
            <h2 class="font-headline-sm text-headline-sm font-bold mb-md">Recent Activity</h2>
            <div class="bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden">
                <div
                    class="p-md flex items-center gap-md border-b border-outline-variant hover:bg-surface-container-low transition-colors cursor-pointer">
                    <div
                        class="w-10 h-10 rounded-full bg-primary-container/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined">person_add</span>
                    </div>
                    <div class="flex-1">
                        <p class="font-body-md text-body-md text-on-surface">Lead <span class="font-semibold">"Rahul
                                Sharma"</span> created</p>
                        <p class="font-body-sm text-body-sm text-outline">CRM Module • 5m ago</p>
                    </div>
                    <button class="material-symbols-outlined text-outline">more_vert</button>
                </div>
                <div
                    class="p-md flex items-center gap-md border-b border-outline-variant hover:bg-surface-container-low transition-colors cursor-pointer">
                    <div
                        class="w-10 h-10 rounded-full bg-secondary-container/10 flex items-center justify-center text-secondary">
                        <span class="material-symbols-outlined">edit</span>
                    </div>
                    <div class="flex-1">
                        <p class="font-body-md text-body-md text-on-surface">Task <span class="font-semibold">"Client
                                Proposal"</span> updated</p>
                        <p class="font-body-sm text-body-sm text-outline">Tasks Module • 1h ago</p>
                    </div>
                    <button class="material-symbols-outlined text-outline">more_vert</button>
                </div>
                <div
                    class="p-md flex items-center justify-center hover:bg-surface-container-low transition-colors cursor-pointer">
                    <span class="font-label-md text-label-md text-primary">View All Activity</span>
                </div>
            </div>
        </section>
    </main>
    <!-- FAB for quick action -->
    <button
        class="fixed bottom-lg right-lg bg-primary text-on-primary w-14 h-14 rounded-full shadow-2xl flex items-center justify-center hover:scale-105 active:scale-95 transition-all z-50">
        <span class="material-symbols-outlined text-[28px]">add</span>
    </button>
    <script>
    // Simple micro-interaction for module cards
    document.querySelectorAll('.module-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            const icon = card.querySelector('.module-icon');
            icon.style.transform = 'translateY(-6px) scale(1.05)';
        });
        card.addEventListener('mouseleave', () => {
            const icon = card.querySelector('.module-icon');
            icon.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Search bar interaction
    const searchInput = document.querySelector('input[type="text"]');
    searchInput.addEventListener('focus', () => {
        searchInput.parentElement.classList.add('ring-2', 'ring-primary/20');
    });
    searchInput.addEventListener('blur', () => {
        searchInput.parentElement.classList.remove('ring-2', 'ring-primary/20');
    });
    </script>
</body>

</html>