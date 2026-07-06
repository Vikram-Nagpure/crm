<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Create New Invoice | Business OS</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Geist:wght@400;600;700&amp;family=JetBrains+Mono:wght@400&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
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
        font-family: 'Inter', sans-serif;
    }

    .font-headline {
        font-family: 'Geist', sans-serif;
    }
    </style>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "surface-container-low": "#f3f4f5",
                    "on-tertiary-fixed-variant": "#005236",
                    "on-surface-variant": "#434655",
                    "on-tertiary": "#ffffff",
                    "surface-container-highest": "#e1e3e4",
                    "surface-container-high": "#e7e8e9",
                    "inverse-primary": "#b4c5ff",
                    "on-tertiary-container": "#bdffdb",
                    "surface-container": "#edeeef",
                    "secondary-container": "#d0e1fb",
                    "background": "#f8f9fa",
                    "outline": "#737686",
                    "on-primary-fixed-variant": "#003ea8",
                    "secondary": "#505f76",
                    "on-primary-container": "#eeefff",
                    "on-error": "#ffffff",
                    "on-background": "#191c1d",
                    "surface": "#f8f9fa",
                    "primary": "#004ac6",
                    "on-secondary-container": "#54647a",
                    "on-primary": "#ffffff",
                    "on-error-container": "#93000a",
                    "primary-container": "#2563eb",
                    "secondary-fixed": "#d3e4fe",
                    "surface-dim": "#d9dadb",
                    "surface-variant": "#e1e3e4",
                    "inverse-on-surface": "#f0f1f2",
                    "surface-container-lowest": "#ffffff",
                    "on-secondary-fixed": "#0b1c30",
                    "surface-bright": "#f8f9fa",
                    "tertiary-container": "#007d55",
                    "tertiary": "#006242",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-secondary-fixed-variant": "#38485d",
                    "secondary-fixed-dim": "#b7c8e1",
                    "on-surface": "#191c1d",
                    "surface-tint": "#0053db",
                    "error-container": "#ffdad6",
                    "tertiary-fixed-dim": "#4edea3",
                    "primary-fixed": "#dbe1ff",
                    "on-secondary": "#ffffff",
                    "inverse-surface": "#2e3132",
                    "error": "#ba1a1a",
                    "on-tertiary-fixed": "#002113",
                    "on-primary-fixed": "#00174b",
                    "outline-variant": "#c3c6d7",
                    "tertiary-fixed": "#6ffbbe"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "xl": "32px",
                    "xs": "4px",
                    "sm": "8px",
                    "margin": "24px",
                    "gutter": "20px",
                    "md": "16px",
                    "2xl": "48px",
                    "base": "4px",
                    "lg": "24px"
                },
                "fontFamily": {
                    "headline-lg": ["Geist"],
                    "display": ["Geist"],
                    "headline-sm": ["Geist"],
                    "label-sm": ["Inter"],
                    "headline-md": ["Geist"],
                    "label-md": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-lg-mobile": ["Geist"],
                    "body-sm": ["Inter"],
                    "code-sm": ["JetBrains Mono"],
                    "body-lg": ["Inter"]
                },
                "fontSize": {
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "headline-lg-mobile": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }],
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }]
                }
            }
        }
    }
    </script>
</head>

<body class="bg-background text-on-background selection:bg-primary-container selection:text-on-primary-container">
    <!-- SideNavBar -->
    <?php include "include/header.php"?>
    <!-- TopAppBar -->
    
    <!-- Main Content -->
    <main class="lg:ml-0 mt-16 p-lg bg-background min-h-[calc(100vh-64px)]">
        <!-- Action Header -->
        <div class="flex justify-between items-end mb-xl">
            <div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Create New Invoice</h1>
                <p class="font-body-md text-body-md text-on-surface-variant">Draft an official payment request for your
                    services.</p>
            </div>
            <div class="flex gap-md">
                <button
                    class="px-lg py-sm rounded border border-outline-variant text-on-surface font-label-md text-label-md hover:bg-surface-container-low transition-all">Cancel</button>
                <button
                    class="px-lg py-sm rounded border border-outline-variant text-on-surface font-label-md text-label-md hover:bg-surface-container-low transition-all">Save
                    Draft</button>
                <button
                    class="px-lg py-sm rounded bg-primary-container text-on-primary-container font-label-md text-label-md hover:opacity-90 active:scale-95 transition-all shadow-sm">Send
                    Invoice</button>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-lg">
            <!-- Invoice Basics & Client Info -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
                <!-- Basics -->
                <section class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant">
                    <h2 class="font-headline-sm text-headline-sm mb-lg flex items-center gap-sm">
                        <span class="material-symbols-outlined text-primary" data-icon="info">info</span>
                        Invoice Basics
                    </h2>
                    <div class="grid grid-cols-2 gap-md">
                        <div class="col-span-2">
                            <label class="block font-label-md text-label-md text-on-surface-variant mb-xs">Invoice
                                Number</label>
                            <input
                                class="w-full bg-surface-container-low border-outline-variant rounded font-code-sm text-code-sm px-md py-sm cursor-not-allowed"
                                readonly="" type="text" value="INV-2023-0892" />
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface-variant mb-xs">Issue
                                Date</label>
                            <input
                                class="w-full border-outline-variant rounded font-body-md text-body-md px-md py-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                type="date" value="2023-10-27" />
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface-variant mb-xs">Due
                                Date</label>
                            <input
                                class="w-full border-outline-variant rounded font-body-md text-body-md px-md py-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                type="date" value="2023-11-27" />
                        </div>
                        <div class="col-span-2">
                            <label class="block font-label-md text-label-md text-on-surface-variant mb-xs">Reference /
                                PO Number</label>
                            <input
                                class="w-full border-outline-variant rounded font-body-md text-body-md px-md py-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
                                placeholder="e.g. PO-7721" type="text" />
                        </div>
                    </div>
                </section>
                <!-- Client Info -->
                <section class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant">
                    <h2 class="font-headline-sm text-headline-sm mb-lg flex items-center gap-sm">
                        <span class="material-symbols-outlined text-primary" data-icon="person">person</span>
                        Client Information
                    </h2>
                    <div class="space-y-md">
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface-variant mb-xs">Select
                                Customer</label>
                            <select
                                class="w-full border-outline-variant rounded font-body-md text-body-md px-md py-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all bg-white">
                                <option>Acme Dynamics Inc.</option>
                                <option>Global Tech Solutions Ltd.</option>
                                <option>Nebula Systems</option>
                                <option>Horizon Logistics</option>
                            </select>
                        </div>
                        <div class="p-md bg-surface-container border border-dashed border-outline-variant rounded">
                            <span
                                class="block font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider mb-sm">Bill
                                To Preview</span>
                            <div class="font-body-sm text-body-sm text-on-surface space-y-xs">
                                <p class="font-bold">Acme Dynamics Inc.</p>
                                <p>123 Innovation Way, Suite 400</p>
                                <p>San Francisco, CA 94103</p>
                                <p>United States</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Line Items Table -->
            <section class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant overflow-hidden">
                <div class="flex justify-between items-center mb-lg">
                    <h2 class="font-headline-sm text-headline-sm flex items-center gap-sm">
                        <span class="material-symbols-outlined text-primary" data-icon="list_alt">list_alt</span>
                        Line Items
                    </h2>
                    <button
                        class="flex items-center gap-xs font-label-md text-label-md text-primary hover:bg-primary/5 px-md py-sm rounded transition-all"
                        id="add-row">
                        <span class="material-symbols-outlined text-md" data-icon="add">add</span>
                        Add Line Item
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-surface border-b border-outline-variant">
                                <th
                                    class="text-left px-md py-sm font-label-sm text-label-sm text-on-surface-variant uppercase">
                                    Description</th>
                                <th
                                    class="text-right px-md py-sm font-label-sm text-label-sm text-on-surface-variant uppercase w-24">
                                    Qty</th>
                                <th
                                    class="text-right px-md py-sm font-label-sm text-label-sm text-on-surface-variant uppercase w-40">
                                    Unit Price</th>
                                <th
                                    class="text-right px-md py-sm font-label-sm text-label-sm text-on-surface-variant uppercase w-40">
                                    Total</th>
                                <th class="w-12"></th>
                            </tr>
                        </thead>
                        <tbody id="line-items-body">
                            <tr
                                class="border-b border-outline-variant hover:bg-surface-container-low transition-all group">
                                <td class="px-md py-md">
                                    <input
                                        class="w-full bg-transparent border-none focus:ring-0 font-body-md text-body-md p-0"
                                        type="text" value="Enterprise Software Subscription - Annual" />
                                </td>
                                <td class="px-md py-md text-right">
                                    <input
                                        class="w-full bg-transparent border-none text-right focus:ring-0 font-body-md text-body-md p-0 qty-input"
                                        type="number" value="1" />
                                </td>
                                <td class="px-md py-md text-right">
                                    <div class="flex items-center justify-end">
                                        <span class="text-on-surface-variant mr-xs">$</span>
                                        <input
                                            class="w-24 bg-transparent border-none text-right focus:ring-0 font-body-md text-body-md p-0 price-input"
                                            type="number" value="12000.00" />
                                    </div>
                                </td>
                                <td class="px-md py-md text-right font-bold text-on-surface">
                                    $12,000.00
                                </td>
                                <td
                                    class="px-md py-md text-center opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button class="material-symbols-outlined text-error hover:bg-error/10 p-xs rounded"
                                        data-icon="delete">delete</button>
                                </td>
                            </tr>
                            <tr
                                class="border-b border-outline-variant hover:bg-surface-container-low transition-all group">
                                <td class="px-md py-md">
                                    <input
                                        class="w-full bg-transparent border-none focus:ring-0 font-body-md text-body-md p-0"
                                        type="text" value="Implementation &amp; Onboarding Support" />
                                </td>
                                <td class="px-md py-md text-right">
                                    <input
                                        class="w-full bg-transparent border-none text-right focus:ring-0 font-body-md text-body-md p-0 qty-input"
                                        type="number" value="15" />
                                </td>
                                <td class="px-md py-md text-right">
                                    <div class="flex items-center justify-end">
                                        <span class="text-on-surface-variant mr-xs">$</span>
                                        <input
                                            class="w-24 bg-transparent border-none text-right focus:ring-0 font-body-md text-body-md p-0 price-input"
                                            type="number" value="250.00" />
                                    </div>
                                </td>
                                <td class="px-md py-md text-right font-bold text-on-surface">
                                    $3,750.00
                                </td>
                                <td
                                    class="px-md py-md text-center opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button class="material-symbols-outlined text-error hover:bg-error/10 p-xs rounded"
                                        data-icon="delete">delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <!-- Bottom Section: Summary & Notes -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
                <!-- Notes & Terms -->
                <div class="md:col-span-2 space-y-lg">
                    <div class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant">
                        <label class="block font-headline-sm text-headline-sm mb-lg">Notes to Customer</label>
                        <textarea
                            class="w-full border-outline-variant rounded font-body-md text-body-md px-md py-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"
                            placeholder="Thank you for your business. We look forward to a continued partnership..."
                            rows="3"></textarea>
                    </div>
                    <div class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant">
                        <label class="block font-headline-sm text-headline-sm mb-lg">Terms &amp; Conditions</label>
                        <textarea
                            class="w-full border-outline-variant rounded font-body-md text-body-md px-md py-sm focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all resize-none"
                            placeholder="Net 30. Please remit payment via bank transfer to the details provided below..."
                            rows="3"></textarea>
                    </div>
                </div>
                <!-- Financial Summary -->
                <section class="bg-surface-container-lowest p-lg rounded-xl border border-outline-variant h-fit">
                    <h2 class="font-headline-sm text-headline-sm mb-lg">Summary</h2>
                    <div class="space-y-md">
                        <div class="flex justify-between font-body-md text-body-md">
                            <span class="text-on-surface-variant">Subtotal</span>
                            <span class="text-on-surface font-semibold">$15,750.00</span>
                        </div>
                        <div class="flex justify-between items-center font-body-md text-body-md">
                            <span class="text-on-surface-variant">Discount (%)</span>
                            <input
                                class="w-20 text-right border-outline-variant rounded px-sm py-xs focus:ring-primary/20"
                                type="number" value="0" />
                        </div>
                        <div class="flex justify-between items-center font-body-md text-body-md">
                            <span class="text-on-surface-variant">Tax (8.5%)</span>
                            <span class="text-on-surface">$1,338.75</span>
                        </div>
                        <div class="pt-md border-t border-outline-variant mt-md">
                            <div class="flex justify-between items-center">
                                <span class="font-headline-sm text-headline-sm text-on-surface">Total Amount</span>
                                <span class="font-headline-md text-headline-md text-primary">$17,088.75</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Sticky Bottom Footer (Optional but helpful for long forms) -->
        <div
            class="mt-2xl flex justify-end gap-md p-lg border-t border-outline-variant bg-surface-container-lowest rounded-xl">
            <button
                class="px-lg py-sm rounded border border-outline-variant text-on-surface font-label-md text-label-md hover:bg-surface-container-low transition-all">Discard
                Changes</button>
            <button
                class="px-lg py-sm rounded bg-primary-container text-on-primary-container font-label-md text-label-md hover:opacity-90 active:scale-95 transition-all shadow-md">Finalize
                &amp; Send</button>
        </div>
    </main>
    <script>
    // Interactive row addition logic
    document.getElementById('add-row').addEventListener('click', function() {
        const tbody = document.getElementById('line-items-body');
        const newRow = document.createElement('tr');
        newRow.className =
        "border-b border-outline-variant hover:bg-surface-container-low transition-all group";
        newRow.innerHTML = `
                <td class="px-md py-md">
                    <input type="text" placeholder="New Service or Product..." class="w-full bg-transparent border-none focus:ring-0 font-body-md text-body-md p-0">
                </td>
                <td class="px-md py-md text-right">
                    <input type="number" value="1" class="w-full bg-transparent border-none text-right focus:ring-0 font-body-md text-body-md p-0 qty-input">
                </td>
                <td class="px-md py-md text-right">
                    <div class="flex items-center justify-end">
                        <span class="text-on-surface-variant mr-xs">$</span>
                        <input type="number" value="0.00" class="w-24 bg-transparent border-none text-right focus:ring-0 font-body-md text-body-md p-0 price-input">
                    </div>
                </td>
                <td class="px-md py-md text-right font-bold text-on-surface">
                    $0.00
                </td>
                <td class="px-md py-md text-center opacity-0 group-hover:opacity-100 transition-opacity">
                    <button class="material-symbols-outlined text-error hover:bg-error/10 p-xs rounded" onclick="this.closest('tr').remove()" data-icon="delete">delete</button>
                </td>
            `;
        tbody.appendChild(newRow);
    });

    // Basic calculation simulation
    document.addEventListener('input', function(e) {
        if (e.target.classList.contains('qty-input') || e.target.classList.contains('price-input')) {
            const row = e.target.closest('tr');
            const qty = row.querySelector('.qty-input').value;
            const price = row.querySelector('.price-input').value;
            const totalCell = row.querySelectorAll('td')[3];
            const total = (qty * price).toLocaleString('en-US', {
                style: 'currency',
                currency: 'USD'
            });
            totalCell.textContent = total;
        }
    });
    </script>
</body>

</html>