<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Create New Lead | Business OS</title>
    <!-- Google Fonts: Geist & Inter -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "primary-fixed-dim": "#b4c5ff",
                    "inverse-primary": "#b4c5ff",
                    "surface": "#f8f9fa",
                    "secondary-fixed": "#d3e4fe",
                    "on-secondary-fixed-variant": "#38485d",
                    "surface-bright": "#f8f9fa",
                    "surface-dim": "#d9dadb",
                    "secondary-container": "#d0e1fb",
                    "outline": "#737686",
                    "on-secondary-fixed": "#0b1c30",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-high": "#e7e8e9",
                    "tertiary": "#006242",
                    "surface-variant": "#e1e3e4",
                    "on-tertiary-container": "#bdffdb",
                    "on-error": "#ffffff",
                    "error": "#ba1a1a",
                    "on-primary-container": "#eeefff",
                    "on-primary": "#ffffff",
                    "surface-container-low": "#f3f4f5",
                    "surface-container": "#edeeef",
                    "primary-fixed": "#dbe1ff",
                    "on-error-container": "#93000a",
                    "on-surface": "#191c1d",
                    "on-primary-fixed": "#00174b",
                    "on-surface-variant": "#434655",
                    "on-secondary-container": "#54647a",
                    "error-container": "#ffdad6",
                    "surface-tint": "#0053db",
                    "background": "#f8f9fa",
                    "on-secondary": "#ffffff",
                    "inverse-on-surface": "#f0f1f2",
                    "on-tertiary-fixed-variant": "#005236",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-background": "#191c1d",
                    "outline-variant": "#c3c6d7",
                    "tertiary-fixed-dim": "#4edea3",
                    "surface-container-highest": "#e1e3e4",
                    "on-tertiary": "#ffffff",
                    "secondary-fixed-dim": "#b7c8e1",
                    "primary-container": "#2563eb",
                    "primary": "#004ac6",
                    "inverse-surface": "#2e3132",
                    "tertiary-fixed": "#6ffbbe",
                    "tertiary-container": "#007d55",
                    "on-tertiary-fixed": "#002113",
                    "secondary": "#505f76"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "xl": "32px",
                    "gutter": "20px",
                    "md": "16px",
                    "xs": "4px",
                    "sm": "8px",
                    "base": "4px",
                    "2xl": "48px",
                    "lg": "24px",
                    "margin": "24px"
                },
                "fontFamily": {
                    "label-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-sm": ["Geist"],
                    "body-md": ["Inter"],
                    "display": ["Geist"],
                    "body-lg": ["Inter"],
                    "headline-md": ["Geist"],
                    "headline-lg": ["Geist"],
                    "headline-lg-mobile": ["Geist"],
                    "code-sm": ["JetBrains Mono"],
                    "body-sm": ["Inter"]
                },
                "fontSize": {
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
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
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "headline-lg-mobile": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
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
        display: inline-block;
        line-height: 1;
        text-transform: none;
        letter-spacing: normal;
        word-wrap: normal;
        white-space: nowrap;
        direction: ltr;
    }

    body {
        background-color: #F9FAFB;
        color: #191c1d;
    }

    .form-input-focus {
        transition: all 0.2s ease;
    }

    .form-input-focus:focus {
        border-color: #2563EB;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        outline: none;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #E5E7EB;
        border-radius: 10px;
    }
    </style>
</head>

<body class="font-body-md text-body-md overflow-hidden bg-background">
    <!-- Sidebar Navigation Shell -->
    <?php include "include/header.php"?>
    <!-- Main Content Wrapper -->
    <main class="lg:ml-0 mt-16 p-lg bg-background min-h-[calc(100vh-64px)]">
        <!-- Top Navigation Bar -->
       
        <!-- Page Content: Full Width -->
        <div class="flex-1 overflow-y-auto custom-scrollbar">
            <form class="flex flex-col min-h-full">
                <!-- Sticky Secondary Header -->
                <div
                    class="sticky top-0 bg-background/80 backdrop-blur-md z-10 border-b border-surface-container-high px-lg py-md">
                    <div class="flex items-center justify-between">
                        <div>
                            <nav class="flex gap-xs text-on-surface-variant font-label-sm text-label-sm mb-xs">
                                <a class="hover:text-primary" href="#">Sales Hub</a>
                                <span>/</span>
                                <a class="hover:text-primary" href="#">Leads</a>
                            </nav>
                            <h2 class="font-headline-lg text-headline-lg text-on-surface">Create New Lead</h2>
                        </div>
                        <!-- <div class="flex items-center gap-md">
                            <button
                                class="px-lg py-md bg-white border border-outline-variant text-on-surface-variant rounded-lg font-label-md text-label-md hover:bg-surface-container-low transition-all active:scale-95"
                                onclick="window.history.back()" type="button">
                                Cancel
                            </button>
                            <button
                                class="px-xl py-md bg-primary-container text-white rounded-lg font-label-md text-label-md hover:opacity-90 transition-all active:scale-95 shadow-sm"
                                type="submit">
                                Save Lead
                            </button>
                        </div> -->
                    </div>
                </div>
                <!-- Form Content Sections -->
                <div class="p-lg space-y-lg flex-1">
                    <!-- Section: Lead Classification -->
                    <div class="bg-white rounded-xl border border-outline-variant overflow-hidden">
                        <div
                            class="px-lg py-md border-b border-surface-container-high bg-surface-container-lowest flex items-center gap-sm">
                            <span class="material-symbols-outlined text-primary">category</span>
                            <h3 class="font-headline-sm text-headline-sm">Lead Classification</h3>
                        </div>
                        <div class="p-lg">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-xl">
                                <!-- Lead Type Radio Toggle -->
                                <div class="space-y-sm">
                                    <label class="font-label-md text-label-md text-on-surface-variant">Lead Type</label>
                                    <div class="flex p-1 bg-surface-container rounded-lg h-12">
                                        <label
                                            class="flex-1 flex items-center justify-center rounded-md cursor-pointer transition-all has-[:checked]:bg-white has-[:checked]:shadow-sm has-[:checked]:text-primary font-label-md text-label-md text-on-surface-variant">
                                            <input checked="" class="sr-only" name="lead_type" type="radio"
                                                value="individual" />
                                            Individual
                                        </label>
                                        <label
                                            class="flex-1 flex items-center justify-center rounded-md cursor-pointer transition-all has-[:checked]:bg-white has-[:checked]:shadow-sm has-[:checked]:text-primary font-label-md text-label-md text-on-surface-variant">
                                            <input class="sr-only" name="lead_type" type="radio" value="business" />
                                            Business
                                        </label>
                                    </div>
                                </div>
                                <!-- Lead Stage -->
                                <div class="space-y-sm">
                                    <label class="font-label-md text-label-md text-on-surface-variant"
                                        for="lead_stage">Lead Stage</label>
                                    <div class="relative">
                                        <select
                                            class="w-full appearance-none bg-white border border-outline-variant rounded-lg px-md py-2 h-12 font-body-md text-body-md text-on-surface form-input-focus"
                                            id="lead_stage">
                                            <option>New Lead</option>
                                            <option>Contacted</option>
                                            <option>Interested</option>
                                            <option>Follow Up</option>
                                            <option>Demo Scheduled</option>
                                            <option>Demo Done</option>
                                            <option>Proposal</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <!-- Source -->
                                <div class="space-y-sm">
                                    <label class="font-label-md text-label-md text-on-surface-variant"
                                        for="source">Source</label>
                                    <div class="relative">
                                        <select
                                            class="w-full appearance-none bg-white border border-outline-variant rounded-lg px-md py-2 h-12 font-body-md text-body-md text-on-surface form-input-focus"
                                            id="source">
                                            <option>Facebook Ads</option>
                                            <option>Google Ads</option>
                                            <option>WhatsApp</option>
                                            <option>Instagram Ads</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section: Lead Details -->
                    <div class="bg-white rounded-xl border border-outline-variant overflow-hidden">
                        <div
                            class="px-lg py-md border-b border-surface-container-high bg-surface-container-lowest flex items-center gap-sm">
                            <span class="material-symbols-outlined text-primary">person</span>
                            <h3 class="font-headline-sm text-headline-sm">Lead Details</h3>
                        </div>
                        <div class="p-lg">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg">
                                <div class="space-y-sm lg:col-span-2">
                                    <label class="font-label-md text-label-md text-on-surface-variant">Full Name</label>
                                    <input
                                        class="w-full border border-outline-variant rounded-lg px-md py-md h-12 font-body-md text-body-md text-on-surface form-input-focus"
                                        placeholder="Johnathan Doe" type="text" />
                                </div>
                                <div class="space-y-sm lg:col-span-2">
                                    <label class="font-label-md text-label-md text-on-surface-variant">Company
                                        Name</label>
                                    <input
                                        class="w-full border border-outline-variant rounded-lg px-md py-md h-12 font-body-md text-body-md text-on-surface form-input-focus"
                                        placeholder="Global Tech Solutions Inc." type="text" />
                                </div>
                                <div class="space-y-sm lg:col-span-2">
                                    <label class="font-label-md text-label-md text-on-surface-variant">Phone</label>
                                    <div class="flex">
                                        <span
                                            class="inline-flex items-center px-md rounded-l-lg border border-r-0 border-outline-variant bg-surface-container-low text-on-surface-variant font-body-md text-body-md h-12">
                                            +91
                                        </span>
                                        <input
                                            class="flex-1 border border-outline-variant rounded-r-lg px-md py-2 h-12 font-body-md text-body-md text-on-surface form-input-focus"
                                            placeholder="9879862365" type="tel" />
                                    </div>
                                </div>
                                <div class="space-y-sm lg:col-span-2">
                                    <label class="font-label-md text-label-md text-on-surface-variant">Email</label>
                                    <input
                                        class="w-full border border-outline-variant rounded-lg px-md py-2 h-12 font-body-md text-body-md text-on-surface form-input-focus"
                                        placeholder="j.doe@company.com" type="email" />
                                </div>
                                <div class="space-y-sm lg:col-span-4">
                                    <label class="font-label-md text-label-md text-on-surface-variant"
                                        for="assigned_to">Assigned To</label>
                                    <div class="relative">
                                        <select
                                            class="w-full appearance-none bg-white border border-outline-variant rounded-lg px-md py-2 h-12 font-body-md text-body-md text-on-surface form-input-focus"
                                            id="assigned_to">
                                            <option>Sarah Jenkins (Account Manager)</option>
                                            <option>Marcus Aurelius (Sales Lead)</option>
                                            <option>Jessica Chen (Junior Executive)</option>
                                            <option>Unassigned</option>
                                        </select>
                                        
                                    </div>
                                </div>
                                <div class="space-y-sm lg:col-span-4">
                                    <label class="font-label-md text-label-md text-on-surface-variant">Address</label>
                                    <textarea
                                        class="w-full border border-outline-variant rounded-lg px-md py-2 font-body-md text-body-md text-on-surface form-input-focus resize-none"
                                        placeholder="Street, City, State, ZIP Code" rows="2"></textarea>
                                </div>
                                <div class="space-y-sm lg:col-span-4">
                                    <label class="font-label-md text-label-md text-on-surface-variant">Description /
                                        Internal Notes</label>
                                    <textarea
                                        class="w-full border border-outline-variant rounded-lg px-md py-2 font-body-md text-body-md text-on-surface form-input-focus"
                                        placeholder="Enter key background information, project requirements, or context from initial discovery..."
                                        rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Additional Context (Simplified) -->
                    <div
                        class="bg-surface-container-low rounded-xl p-lg border border-dashed border-outline-variant flex items-center justify-between">
                        <div class="flex items-center gap-md">
                            <div
                                class="w-12 h-12 bg-white rounded-full flex items-center justify-center border border-outline-variant">
                                <span class="material-symbols-outlined text-on-surface-variant">attach_file</span>
                            </div>
                            <div>
                                <p class="font-label-md text-label-md text-on-surface font-bold">Attachments</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Upload RFP, business cards,
                                    or lead decks (Max 10MB)</p>
                            </div>
                        </div>
                        <button
                            class="px-md py-sm bg-white border border-outline-variant rounded-lg font-label-sm text-label-sm hover:bg-surface-container transition-colors"
                            type="button">
                            Upload File
                        </button>
                    </div>
                </div>
                <!-- Form Footer Actions (Fixed at bottom) -->
                <div
                    class="mt-auto border-t border-surface-container-high bg-white p-lg flex items-center justify-between">
                    <p class="font-body-sm text-body-sm text-on-surface-variant italic">
                        Enterprise security protocols applied to this data entry.
                    </p>
                    <div class="flex items-center gap-md">
                        <button
                            class="px-xl py-md bg-white border border-outline-variant text-on-surface-variant rounded-lg font-label-md text-label-md hover:bg-surface-container-low transition-all"
                            onclick="window.history.back()" type="button">
                            Discard Changes
                        </button>
                        <button
                            class="px-2xl py-md bg-primary text-white rounded-lg font-label-md text-label-md hover:opacity-90 transition-all shadow-lg shadow-primary/20"
                            type="submit">
                            Save Lead
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script>
    // Form submission animation handling
    document.querySelector('form').addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = e.target.querySelector('button[type="submit"]');
        const originalText = btn.innerHTML;
        btn.innerHTML =
            '<span class="flex items-center gap-sm">Saving... <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg></span>';
        btn.disabled = true;

        setTimeout(() => {
            btn.innerHTML = 'Lead Created!';
            btn.classList.replace('bg-primary', 'bg-tertiary-container');
            btn.classList.replace('text-white', 'text-on-tertiary-container');
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.classList.replace('bg-tertiary-container', 'bg-primary');
                btn.classList.replace('text-on-tertiary-container', 'text-white');
                btn.disabled = false;
            }, 2000);
        }, 1500);
    });
    </script>
</body>

</html>