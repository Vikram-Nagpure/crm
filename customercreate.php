<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Create Customer | Business OS</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@400;600;700&amp;family=JetBrains+Mono&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "primary-container": "#2563eb",
                    "secondary-fixed-dim": "#b7c8e1",
                    "tertiary-fixed": "#6ffbbe",
                    "inverse-on-surface": "#f0f1f2",
                    "surface-container": "#edeeef",
                    "on-surface": "#191c1d",
                    "on-secondary-fixed-variant": "#38485d",
                    "on-error-container": "#93000a",
                    "tertiary-container": "#007d55",
                    "on-tertiary-fixed-variant": "#005236",
                    "on-primary": "#ffffff",
                    "inverse-primary": "#b4c5ff",
                    "surface-container-high": "#e7e8e9",
                    "tertiary": "#006242",
                    "secondary-fixed": "#d3e4fe",
                    "surface-variant": "#e1e3e4",
                    "on-secondary-fixed": "#0b1c30",
                    "on-primary-container": "#eeefff",
                    "surface-container-low": "#f3f4f5",
                    "on-tertiary": "#ffffff",
                    "secondary-container": "#d0e1fb",
                    "surface-dim": "#d9dadb",
                    "surface-container-highest": "#e1e3e4",
                    "surface": "#f8f9fa",
                    "on-secondary-container": "#54647a",
                    "primary": "#004ac6",
                    "on-tertiary-container": "#bdffdb",
                    "on-primary-fixed": "#00174b",
                    "error-container": "#ffdad6",
                    "error": "#ba1a1a",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-surface-variant": "#434655",
                    "surface-container-lowest": "#ffffff",
                    "surface-bright": "#f8f9fa",
                    "on-tertiary-fixed": "#002113",
                    "tertiary-fixed-dim": "#4edea3",
                    "on-background": "#191c1d",
                    "background": "#f8f9fa",
                    "on-secondary": "#ffffff",
                    "on-error": "#ffffff",
                    "outline-variant": "#c3c6d7",
                    "inverse-surface": "#2e3132",
                    "primary-fixed": "#dbe1ff",
                    "surface-tint": "#0053db",
                    "primary-fixed-dim": "#b4c5ff",
                    "outline": "#737686",
                    "secondary": "#505f76"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "xs": "4px",
                    "md": "16px",
                    "sm": "8px",
                    "2xl": "48px",
                    "lg": "24px",
                    "gutter": "20px",
                    "base": "4px",
                    "xl": "32px",
                    "margin": "24px"
                },
                "fontFamily": {
                    "label-sm": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-md": ["Geist"],
                    "body-lg": ["Inter"],
                    "headline-sm": ["Geist"],
                    "body-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "code-sm": ["JetBrains Mono"],
                    "headline-lg-mobile": ["Geist"],
                    "headline-lg": ["Geist"],
                    "display": ["Geist"]
                },
                "fontSize": {
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
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
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
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

    .font-headline {
        font-family: 'Geist', sans-serif;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }

    .sidebar-active {
        background-color: #d0e1fb;
        color: #00174b;
        font-weight: 600;
        border-radius: 0.5rem;
    }

    input:focus,
    select:focus,
    textarea:focus {
        outline: none;
        border-color: #2563eb !important;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- SideNavBar -->
    <?php include "include/header.php"?>
    <!-- TopNavBar -->
   
    <!-- Main Content -->
    <main class="ml-64 p-gutter pt-32 max-w-7xl mx-auto pb-2xl">
        <!-- Header -->
        <div class="flex justify-between items-end mb-xl gap-xl">
            <div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Create New Customer</h1>
                <p class="font-body-md text-body-md text-on-surface-variant">Set up a new individual or business profile
                    in the CRM.</p>
            </div>
            <div class="flex gap-md w-50">
                <button
                    class="px-lg py-sm border border-outline-variant text-secondary font-label-md text-label-md rounded-lg hover:bg-surface-variant transition-all">
                    Cancel
                </button>
                <button
                    class="px-lg py-sm bg-primary text-on-primary font-label-md text-label-md rounded-lg hover:shadow-md transition-all active:scale-[0.98] flex-1">
                    Save Customer
                </button>
            </div>
        </div>
        <div class="space-y-lg">
            <!-- Section 1: Customer Classification -->
            <section class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg">
                <div class="flex items-center gap-sm mb-lg">
                    <span class="material-symbols-outlined text-primary">category</span>
                    <h2 class="font-headline-sm text-headline-sm">Customer Classification</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-xl">
                    <div class="space-y-sm">
                        <label class="block font-label-md text-label-md text-on-surface-variant">Customer Type</label>
                        <div class="flex p-xs bg-surface-container rounded-lg gap-xs">
                            <button
                                class="flex-1 py-sm px-md bg-surface-container-lowest shadow-sm rounded-md font-label-md text-label-md text-primary transition-all">Individual</button>
                            <button
                                class="flex-1 py-sm px-md text-on-surface-variant hover:bg-surface-variant rounded-md font-label-md text-label-md transition-all">Business</button>
                        </div>
                    </div>
                    <div class="space-y-sm">
                        <label class="block font-label-md text-label-md text-on-surface-variant">Status</label>
                        <select
                            class="w-full p-md bg-surface border border-outline-variant rounded-lg text-body-sm font-body-sm focus:ring-2 focus:ring-primary/20 transition-all">
                            <option>Lead</option>
                            <option>Active</option>
                            <option>Inactive</option>
                            <option>On Hold</option>
                        </select>
                    </div>
                </div>
            </section>
            <!-- Section 2: Customer Details -->
            <section class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg">
                <div class="flex items-center gap-sm mb-lg">
                    <span class="material-symbols-outlined text-primary">badge</span>
                    <h2 class="font-headline-sm text-headline-sm">Customer Details</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-xl">
                    <div class="space-y-sm">
                        <label class="block font-label-md text-label-md text-on-surface-variant">Full Name</label>
                        <input
                            class="w-full p-md bg-surface border border-outline-variant rounded-lg text-body-sm font-body-sm"
                            placeholder="e.g. Johnathan Smith" type="text">
                    </div>
                    <div class="space-y-sm">
                        <label class="block font-label-md text-label-md text-on-surface-variant">Company Name</label>
                        <input
                            class="w-full p-md bg-surface border border-outline-variant rounded-lg text-body-sm font-body-sm"
                            placeholder="e.g. Acme Corp Industries" type="text">
                    </div>
                    <div class="space-y-sm">
                        <label class="block font-label-md text-label-md text-on-surface-variant">Industry</label>
                        <select
                            class="w-full p-md bg-surface border border-outline-variant rounded-lg text-body-sm font-body-sm">
                            <option>Technology</option>
                            <option>Healthcare</option>
                            <option>Finance</option>
                            <option>Manufacturing</option>
                            <option>Real Estate</option>
                        </select>
                    </div>
                    <div class="space-y-sm">
                        <label class="block font-label-md text-label-md text-on-surface-variant">Assigned To</label>
                        <select
                            class="w-full p-md bg-surface border border-outline-variant rounded-lg text-body-sm font-body-sm">
                            <option>Sarah Johnson (Sales Lead)</option>
                            <option>Michael Chen (Account Manager)</option>
                            <option>David Miller (Consultant)</option>
                        </select>
                    </div>
                </div>
            </section>
            <!-- Section 3: Contact Information -->
            <section class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg">
                <div class="flex items-center gap-sm mb-lg">
                    <span class="material-symbols-outlined text-primary">contact_mail</span>
                    <h2 class="font-headline-sm text-headline-sm">Contact Information</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-xl">
                    <div class="space-y-sm">
                        <label class="block font-label-md text-label-md text-on-surface-variant">Phone Number</label>
                        <input
                            class="w-full p-md bg-surface border border-outline-variant rounded-lg text-body-sm font-body-sm"
                            placeholder="+1 (555) 000-0000" type="tel">
                    </div>
                    <div class="space-y-sm">
                        <label class="block font-label-md text-label-md text-on-surface-variant">Email Address</label>
                        <input
                            class="w-full p-md bg-surface border border-outline-variant rounded-lg text-body-sm font-body-sm"
                            placeholder="john@example.com" type="email">
                    </div>
                    <div class="space-y-sm md:col-span-2">
                        <label class="block font-label-md text-label-md text-on-surface-variant">Website</label>
                        <div class="relative">
                            <span
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-sm">https://</span>
                            <input
                                class="w-full p-md pl-16 bg-surface border border-outline-variant rounded-lg text-body-sm font-body-sm"
                                placeholder="www.company.com" type="text">
                        </div>
                    </div>
                    <div class="space-y-sm md:col-span-2">
                        <label class="block font-label-md text-label-md text-on-surface-variant">Address</label>
                        <textarea
                            class="w-full p-md bg-surface border border-outline-variant rounded-lg text-body-sm font-body-sm resize-none"
                            placeholder="Street, City, State, Zip Code" rows="3"></textarea>
                    </div>
                </div>
            </section>
            <!-- Section 4: Additional Info -->
            <section class="bg-surface-container-lowest border border-outline-variant rounded-xl p-lg">
                <div class="flex items-center gap-sm mb-lg">
                    <span class="material-symbols-outlined text-primary">description</span>
                    <h2 class="font-headline-sm text-headline-sm">Additional Info</h2>
                </div>
                <div class="space-y-sm">
                    <label class="block font-label-md text-label-md text-on-surface-variant">Description / Internal
                        Notes</label>
                    <textarea
                        class="w-full p-md bg-surface border border-outline-variant rounded-lg text-body-sm font-body-sm resize-none"
                        placeholder="Add any private notes, historical context, or specific requirements for this customer..."
                        rows="6"></textarea>
                </div>
            </section>
            <!-- Footer Action -->
            <div class="flex flex-col gap-md pt-lg">
                <button
                    class="w-full py-md bg-primary text-on-primary font-headline-sm text-headline-sm rounded-xl shadow-lg shadow-primary/10 hover:shadow-primary/20 hover:scale-[1.01] active:scale-[0.99] transition-all">
                    Confirm &amp; Create Customer
                </button>
                <p class="font-body-sm text-body-sm text-on-surface-variant text-center">
                    By creating this customer, they will be automatically synced with your current sales workspace and
                    billing modules.
                </p>
            </div>
        </div>
    </main>
    <script>
    // Micro-interaction for the segmented control
    const segments = document.querySelectorAll('.bg-surface-container button');
    segments.forEach(btn => {
        btn.addEventListener('click', () => {
            segments.forEach(b => {
                b.classList.remove('bg-surface-container-lowest', 'shadow-sm', 'text-primary');
                b.classList.add('text-on-surface-variant', 'hover:bg-surface-variant');
            });
            btn.classList.add('bg-surface-container-lowest', 'shadow-sm', 'text-primary');
            btn.classList.remove('text-on-surface-variant', 'hover:bg-surface-variant');
        });
    });

    // Simple form validation visual feedback
    const inputs = document.querySelectorAll('input, select, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', () => {
            if (input.value.length > 0) {
                input.classList.add('border-outline');
            }
        });
    });
    </script>


</body>

</html>