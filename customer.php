<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Customers Management - Business OS</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Geist:wght@400;600;700&amp;family=JetBrains+Mono&amp;display=swap"
        rel="stylesheet" />
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
                    "on-error": "#ffffff",
                    "outline": "#737686",
                    "on-tertiary-fixed": "#002113",
                    "on-primary-fixed": "#00174b",
                    "tertiary-fixed-dim": "#4edea3",
                    "secondary-fixed": "#d3e4fe",
                    "on-surface-variant": "#434655",
                    "outline-variant": "#c3c6d7",
                    "on-tertiary": "#ffffff",
                    "surface-variant": "#e1e3e4",
                    "surface-bright": "#f8f9fa",
                    "secondary-fixed-dim": "#b7c8e1",
                    "primary-fixed": "#dbe1ff",
                    "surface-container": "#edeeef",
                    "on-secondary-fixed": "#0b1c30",
                    "tertiary-container": "#007d55",
                    "inverse-primary": "#b4c5ff",
                    "surface-container-high": "#e7e8e9",
                    "surface-tint": "#0053db",
                    "on-secondary-container": "#54647a",
                    "surface-dim": "#d9dadb",
                    "inverse-surface": "#2e3132",
                    "surface-container-low": "#f3f4f5",
                    "primary-container": "#2563eb",
                    "on-primary-container": "#eeefff",
                    "on-error-container": "#93000a",
                    "surface-container-highest": "#e1e3e4",
                    "on-secondary-fixed-variant": "#38485d",
                    "surface": "#f8f9fa",
                    "on-tertiary-container": "#bdffdb",
                    "error-container": "#ffdad6",
                    "background": "#f8f9fa",
                    "tertiary-fixed": "#6ffbbe",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-tertiary-fixed-variant": "#005236",
                    "tertiary": "#006242",
                    "on-background": "#191c1d",
                    "secondary-container": "#d0e1fb",
                    "on-primary": "#ffffff",
                    "secondary": "#505f76",
                    "primary": "#004ac6",
                    "on-secondary": "#ffffff",
                    "on-surface": "#191c1d",
                    "inverse-on-surface": "#f0f1f2",
                    "error": "#ba1a1a",
                    "on-primary-fixed-variant": "#003ea8"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "md": "16px",
                    "sm": "8px",
                    "margin": "24px",
                    "base": "4px",
                    "gutter": "20px",
                    "2xl": "48px",
                    "xl": "32px",
                    "lg": "24px",
                    "xs": "4px"
                },
                "fontFamily": {
                    "body-sm": ["Inter"],
                    "headline-md": ["Geist"],
                    "label-md": ["Inter"],
                    "headline-sm": ["Geist"],
                    "display": ["Geist"],
                    "body-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "code-sm": ["JetBrains Mono"],
                    "body-lg": ["Inter"],
                    "headline-lg": ["Geist"]
                },
                "fontSize": {
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
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
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
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
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }],
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
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
    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
        vertical-align: middle;
    }

    body {
        background-color: #F9FAFB;
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .custom-table-shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.05);
    }
    </style>
</head>

<body class="font-body-md text-on-surface">
    <!-- TopNavBar -->
    <?php include "include/header.php"?>
    
    <!-- Main Content -->
    <main class="pl-64 pt-16 min-h-screen">
        <div class="max-w-[1440px] mx-auto p-lg">
            <!-- Breadcrumbs & Title -->
            <div class="mb-lg flex items-center justify-between">
                <div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface">Customers</h1>
                    <div class="flex items-center gap-sm text-on-surface-variant mt-1">
                        <span class="font-body-sm text-body-sm">Sales Hub</span>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <span class="font-body-sm text-body-sm text-primary font-medium">Directory</span>
                    </div>
                </div>
                <div class="flex gap-md">
                    <button
                        class="bg-surface border border-outline-variant text-on-surface px-lg py-2 rounded-lg font-label-md flex items-center gap-sm hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined text-[20px]">download</span>
                        Export
                    </button>
                    <a href="customercreate.php"
                        class="bg-primary text-on-primary px-lg py-2 rounded-lg font-label-md flex items-center gap-sm hover:bg-primary-container transition-colors">
                        <span class="material-symbols-outlined text-[20px]">add</span>
                        Add Customer
                    </a>
                </div>
            </div>
            <!-- Stats Bar -->
            <!-- Filter Bar -->
            <!-- High-Density Table -->
            <div class="bg-white border-x border-b border-outline-variant overflow-hidden border-t rounded-xl">
                <div class="w-full overflow-x-auto rounded-xl border border-outline-variant bg-surface custom-scrollbar">
                    <table class="min-w-[1200px] w-full border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low border-b border-outline-variant">
                                <th
                                    class="px-lg text-left font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider py-2 text-[13px]">
                                    ID</th>
                                <th
                                    class="px-lg text-left font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider py-2 text-[13px]">
                                    Customer Name</th>
                                <th
                                    class="px-lg text-left font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider py-2 text-[13px]">
                                    Company Name</th>
                                <th
                                    class="px-lg text-left font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider py-2 text-[13px]">
                                    Phone</th>
                                <th
                                    class="px-lg text-left font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider py-2 text-[13px]">
                                    Email</th>
                                <th
                                    class="px-lg text-left font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider py-2 text-[13px]">
                                    Assigned By</th>
                                <th
                                    class="px-lg text-left font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider py-2 text-[13px]">
                                    Date</th>
                                <th
                                    class="px-lg text-right font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider py-2 text-[13px]">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <!-- Row 1 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-lg font-code-sm text-code-sm text-on-surface-variant py-2 text-[13px]">#C-8210
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-md">
                                        <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">
                                            <img class="w-full h-full object-cover"
                                                data-alt="A portrait of a young woman with a sharp, professional appearance. She is wearing minimal geometric jewelry and a crisp white blouse. The lighting is cold and bright, mimicking a modern corporate studio environment with high-end digital clarity. The background is a flat, very light gray color, maintaining a minimal and clean UI aesthetic."
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBU-R5Xe5-BMYi42sJW3xnQUdt07_stfMNScQLJSChY8OmyiIGz036wHkRhd5g8mGRiAoa8psawRIqXNViPIRvC-YdpjlvuOhSb6KzPxRYEZ6cDB6N7x5baN8YFihXhTnBe7eBcgUlpRge7ZNb7Sq3HATdmwI7EBOogg1RhTPgCTbcLO-oPv_le2f39FCUiQHYxrefg_IgF_JRa9W1TeGL7d1UN3SFyJ7NAjcbyQCr25Pnv-brjvsox6WjIqaaszeFBYah5hn7cMv4" />
                                        </div>
                                        <span class="font-body-md font-medium">Elena Richardson</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface py-2 text-[13px]">Velox Dynamics</td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">+1 (555) 012-3456
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">elena.r@velox.com
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-sm">
                                        <div
                                            class="w-7 h-7 rounded-full bg-secondary-fixed text-on-secondary-fixed text-[10px] flex items-center justify-center font-bold">
                                            MK</div>
                                        <span class="font-body-sm">Marcus K.</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">Oct 12, 2023</td>
                                <td class="px-lg text-right py-2 text-[13px]">
                                    <div class="flex items-center justify-end gap-sm">
                                        <a href="customerview.php" class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">visibility</span></a>
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">edit</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-lg font-code-sm text-code-sm text-on-surface-variant py-2 text-[13px]">#C-8211
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-md">
                                        <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">
                                            <img class="w-full h-full object-cover"
                                                data-alt="A profile of a middle-aged businessman with a distinguished look, featuring salt-and-pepper hair and a tailored charcoal gray suit. He is standing in a brightly lit glass-walled office corridor. The mood is sophisticated, reliable, and high-quality, aligning with a premium CRM interface design. The image has a clean, airy feel with a palette of soft whites and deep grays."
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4Uk57vCu1oqST4wNz4lKCkrZHfMM0hKar9JNd39WQO92A581gJIhGASLfgVjSVdE_PN5yRrxn-cyCQrqsFM15jTB4E_Sman1MbQSUGbIDKTJsVJn7cn8a89IGnJ8A7qanPT094byZ_WvB359ERxlG3kbJoxNqTTgN6JLXAiWE2lQsdVXjnuaLedjq1uZFtrKaxd75XcsaYvmOBnf-l9eYO0RIaHXnn-KLeDZqnjMSmfOSPOzdKh0hO_aPFlSCxqOIwuHMMk9Y4uk" />
                                        </div>
                                        <span class="font-body-md font-medium">Jonathan Sterling</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface py-2 text-[13px]">Nexus Capital</td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">+44 20 7123 4567
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">j.sterling@nexus.io
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-sm">
                                        <div
                                            class="w-7 h-7 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-[10px] flex items-center justify-center font-bold">
                                            SL</div>
                                        <span class="font-body-sm">Sarah L.</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">Oct 11, 2023</td>
                                <td class="px-lg text-right py-2 text-[13px]">
                                    <div class="flex items-center justify-end gap-sm">
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">visibility</span></button>
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">edit</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-lg font-code-sm text-code-sm text-on-surface-variant py-2 text-[13px]">#C-8212
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-md">
                                        <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">
                                            <img class="w-full h-full object-cover"
                                                data-alt="A portrait of a creative director in her early 30s with a modern, artistic style. She wears bold-framed black glasses and a minimalist black knit sweater. The lighting is soft and directional, creating a gentle contrast against a clean, light beige studio background. The aesthetic is professional, modern-minimalist, and high-density, fitting perfectly into an enterprise-lite dashboard design."
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHSAkqOIqDYnLGeO9qUJY2Sbh6V4x6sTwgdaj1ANDLO4Mlv_yxm-5oqp8zeeWQvM9mcFchA5n614GVwieREoPYtRq9UmsteIBd6gqFyZ_A9o5uwdlocRA7Cw0S6K1jGZZPBEPSW3g7ck0dCpSe_ADff3Hl3VnrU-WlRGZ3mmXoEKubmjuJz2u_cZy41yWc4mOnG3eqDQ_zOydNw2Y_uFSViKTrYxk2q5kh-PvpDuDcWkvaTtMqzo9EpD1uxmD9HbT2WdIicvSSaZg" />
                                        </div>
                                        <span class="font-body-md font-medium">Amara Okafor</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface py-2 text-[13px]">Creative Core</td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">+234 80 9876 5432
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">amara@creative.co
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-sm">
                                        <div
                                            class="w-7 h-7 rounded-full bg-primary-fixed text-on-primary-fixed text-[10px] flex items-center justify-center font-bold">
                                            MK</div>
                                        <span class="font-body-sm">Marcus K.</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">Oct 11, 2023</td>
                                <td class="px-lg text-right py-2 text-[13px]">
                                    <div class="flex items-center justify-end gap-sm">
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">visibility</span></button>
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">edit</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-lg font-code-sm text-code-sm text-on-surface-variant py-2 text-[13px]">#C-8213
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-md">
                                        <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">
                                            <img class="w-full h-full object-cover"
                                                data-alt="A portrait of a tech entrepreneur in a modern office, wearing a casual but expensive light blue button-down shirt. The background shows a hint of a high-tech lab with blurred architectural elements. The image uses a cool color temperature with a focus on blues and whites, echoing a professional and agile design system. The lighting is natural and bright, conveying a sense of transparency and innovation."
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBp2LwfJAb2kHnxhvUAMYBCHixcddtUkat2QIsBmrsmwozoWo-iAnAsp5toL7tnjSbQyVDY3nowGMluAAYL21yqyVXuU5JEbVjFpJC3ZOvtBtABEBe1S649tOCUfYAvQWcZVvFspatoLuVbMy5EYfQG0WwRwniaj2ATaA4hxVA6BoAu8JynnJKRAJuQaPnN9YkoNwNhIZxOyycKaR0B1yQkWG0_rX1Hj5AgQhNwqswDGAaVGrkvpd4k4U7Fc6HMyJSBcmFdJjcIx_E" />
                                        </div>
                                        <span class="font-body-md font-medium">David Chen</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface py-2 text-[13px]">Lumina Tech</td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">+65 6789 0123</td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">d.chen@lumina.sg
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-sm">
                                        <div
                                            class="w-7 h-7 rounded-full bg-secondary-fixed-dim text-on-secondary-fixed text-[10px] flex items-center justify-center font-bold">
                                            DR</div>
                                        <span class="font-body-sm">Daniel R.</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">Oct 10, 2023</td>
                                <td class="px-lg text-right py-2 text-[13px]">
                                    <div class="flex items-center justify-end gap-sm">
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">visibility</span></button>
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">edit</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 5 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-lg font-code-sm text-code-sm text-on-surface-variant py-2 text-[13px]">#C-8214
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-md">
                                        <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">
                                            <img class="w-full h-full object-cover"
                                                data-alt="Close-up headshot of a senior executive woman with grey hair, styled in a modern bob. She wears a minimal silver necklace and a dark grey blazer. The lighting is clean, sharp, and corporate, emphasizing authority and experience. The background is a soft-focus architectural detail in shades of white and off-white. The overall aesthetic is calm, controlled, and professional."
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVfgM90dWx_8MiE5_lWrR-KAahEVSTFGZY6y7N7o6D-8nghHfRpCWkQFBGr3S5oYtDlogs7Pwy-vmUkYHn0t2kOe1LRxtJfuOeI4fN6sr6XlsYor0T4DxaWWyOFLhEBf6anNlZNBc4MJOMxUnfVYxRBFRaE5gqRsBCh4Ciafd6VNRBn8K5677KbbPtMqRW2B6mI4cFkFNyUfSkiS7CathMX4fhcTsi4Pv54KYMBzR56UsLijR_X3LAInVxVBHXwngYN4tB-_1JQjA" />
                                        </div>
                                        <span class="font-body-md font-medium">Sophie Dubois</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface py-2 text-[13px]">Etoile Luxe</td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">+33 1 42 68 55 00
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">s.dubois@etoile.fr
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-sm">
                                        <div
                                            class="w-7 h-7 rounded-full bg-outline-variant text-on-surface-variant text-[10px] flex items-center justify-center font-bold">
                                            SL</div>
                                        <span class="font-body-sm">Sarah L.</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">Oct 09, 2023</td>
                                <td class="px-lg text-right py-2 text-[13px]">
                                    <div class="flex items-center justify-end gap-sm">
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">visibility</span></button>
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">edit</span></button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 6 -->
                            <tr class="hover:bg-surface-container-low transition-colors group">
                                <td class="px-lg font-code-sm text-code-sm text-on-surface-variant py-2 text-[13px]">#C-8215
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-md">
                                        <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">
                                            <img class="w-full h-full object-cover"
                                                data-alt="A portrait of a male engineer in his late 20s with a modern, focused look. He is wearing a dark navy polo shirt. The background is a minimalist, white-walled room with high-key lighting that creates a clean, professional aesthetic. The image is crisp and relies on a high-end corporate color palette of navy, white, and gray, perfectly matching a professional productivity tool UI."
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_6sgh2PCRB_5ry2ItFKrvi6xY59kcN2JodpW_RDxR5RMyw7TxAC-CuPe_bRBvo7XmkimxmmJEsLCLYuGHcLUNZvZCfcOr478uKEWthSFZbVldbZFs7ptmG2L73cV_FcDhRhlh4JGo-MkySqjvRA3L9Vbpin-PJcf0RywYSho_EI7_SelKlf_lXPbP87hOnLgNCgS_zMmjoqzNtQu54jbUgNEip97appKV1nnM7lB_nTcPFliGCWNQA3VD8UPPbCfgNI4h60aYx_g" />
                                        </div>
                                        <span class="font-body-md font-medium">Marco Rossi</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface py-2 text-[13px]">Veloce SpA</td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">+39 02 1234 5678
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">m.rossi@veloce.it
                                </td>
                                <td class="px-lg py-2 text-[13px]">
                                    <div class="flex items-center gap-sm">
                                        <div
                                            class="w-7 h-7 rounded-full bg-primary-fixed-dim text-on-primary-fixed text-[10px] flex items-center justify-center font-bold">
                                            MK</div>
                                        <span class="font-body-sm">Marcus K.</span>
                                    </div>
                                </td>
                                <td class="px-lg font-body-sm text-on-surface-variant py-2 text-[13px]">Oct 08, 2023</td>
                                <td class="px-lg text-right py-2 text-[13px]">
                                    <div class="flex items-center justify-end gap-sm">
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">visibility</span></button>
                                        <button class="text-on-surface-variant hover:text-primary transition-colors"><span
                                                class="material-symbols-outlined text-[18px]">edit</span></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>   
                <!-- Pagination Footer -->
                <div
                    class="px-lg py-md bg-surface-container-lowest border-t border-outline-variant flex items-center justify-between">
                    <div class="flex items-center gap-md">
                        <select
                            class="bg-surface-container-low border border-outline-variant rounded px-2 py-1 font-body-sm text-on-surface-variant focus:outline-none">
                            <option>10 rows</option>
                            <option selected="">20 rows</option>
                            <option>50 rows</option>
                        </select>
                        <span class="font-body-sm text-on-surface-variant">Showing 1 to 20 of 1,240 results</span>
                    </div>
                    <div class="flex items-center gap-xs">
                        <button
                            class="px-3 py-1.5 border border-outline-variant rounded font-label-md text-on-surface-variant hover:bg-surface-container transition-colors disabled:opacity-50">Previous</button>
                        <button class="px-3 py-1.5 bg-primary text-on-primary rounded font-label-md">1</button>
                        <button
                            class="px-3 py-1.5 border border-outline-variant rounded font-label-md text-on-surface-variant hover:bg-surface-container transition-colors">2</button>
                        <button
                            class="px-3 py-1.5 border border-outline-variant rounded font-label-md text-on-surface-variant hover:bg-surface-container transition-colors">3</button>
                        <span class="px-2 text-on-surface-variant">...</span>
                        <button
                            class="px-3 py-1.5 border border-outline-variant rounded font-label-md text-on-surface-variant hover:bg-surface-container transition-colors">62</button>
                        <button
                            class="px-3 py-1.5 border border-outline-variant rounded font-label-md text-on-surface-variant hover:bg-surface-container transition-colors">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
    // Simple interactive handling
    document.querySelectorAll('tr').forEach(row => {
        row.addEventListener('click', (e) => {
            // Ignore clicks on buttons
            if (e.target.closest('button')) return;

            // Toggle a selection style or perform navigation
            console.log('Row clicked:', row.querySelector('td:nth-child(2)').innerText.trim());
        });
    });

    // Search highlight mock
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