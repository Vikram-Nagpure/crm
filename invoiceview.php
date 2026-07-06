<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Invoice Details | Business OS</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;family=JetBrains+Mono:wght@100..800&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Theme Configuration -->
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "primary-fixed-dim": "#b4c5ff",
                    "on-secondary-fixed-variant": "#38485d",
                    "on-secondary-fixed": "#0b1c30",
                    "surface-dim": "#d9dadb",
                    "surface-container-lowest": "#ffffff",
                    "surface-container-low": "#f3f4f5",
                    "on-tertiary": "#ffffff",
                    "inverse-on-surface": "#f0f1f2",
                    "outline": "#737686",
                    "on-tertiary-fixed-variant": "#005236",
                    "on-surface-variant": "#434655",
                    "tertiary-fixed": "#6ffbbe",
                    "surface": "#f8f9fa",
                    "surface-tint": "#0053db",
                    "error": "#ba1a1a",
                    "primary-container": "#2563eb",
                    "on-error-container": "#93000a",
                    "inverse-primary": "#b4c5ff",
                    "on-tertiary-container": "#bdffdb",
                    "on-primary-container": "#eeefff",
                    "secondary-fixed-dim": "#b7c8e1",
                    "on-surface": "#191c1d",
                    "primary-fixed": "#dbe1ff",
                    "on-secondary-container": "#54647a",
                    "on-primary-fixed": "#00174b",
                    "secondary-container": "#d0e1fb",
                    "on-error": "#ffffff",
                    "tertiary": "#006242",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-primary": "#ffffff",
                    "surface-container": "#edeeef",
                    "background": "#f8f9fa",
                    "error-container": "#ffdad6",
                    "secondary": "#505f76",
                    "on-tertiary-fixed": "#002113",
                    "tertiary-fixed-dim": "#4edea3",
                    "outline-variant": "#c3c6d7",
                    "on-secondary": "#ffffff",
                    "secondary-fixed": "#d3e4fe",
                    "primary": "#004ac6",
                    "on-background": "#191c1d",
                    "inverse-surface": "#2e3132",
                    "tertiary-container": "#007d55",
                    "surface-container-highest": "#e1e3e4",
                    "surface-bright": "#f8f9fa",
                    "surface-variant": "#e1e3e4",
                    "surface-container-high": "#e7e8e9"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "md": "16px",
                    "base": "4px",
                    "lg": "24px",
                    "gutter": "20px",
                    "xl": "32px",
                    "sm": "8px",
                    "margin": "24px",
                    "2xl": "48px",
                    "xs": "4px"
                },
                "fontFamily": {
                    "label-sm": ["Inter"],
                    "display": ["Geist"],
                    "body-sm": ["Inter"],
                    "headline-sm": ["Geist"],
                    "headline-lg-mobile": ["Geist"],
                    "label-md": ["Inter"],
                    "code-sm": ["JetBrains Mono"],
                    "body-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-lg": ["Geist"],
                    "headline-md": ["Geist"]
                },
                "fontSize": {
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }],
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "headline-lg-mobile": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
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
    }

    body {
        -webkit-font-smoothing: antialiased;
        background-color: #f8f9fa;
    }

    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    </style>
</head>

<body class="font-body-md text-on-surface bg-surface min-h-screen">
    <!-- Sidebar Navigation -->
    <?php include "include/header.php"?>
    <!-- Main Content Area -->
    <main class="lg:ml-0 mt-16 p-lg bg-background min-h-[calc(100vh-64px)]">
        <!-- Top Navigation Bar -->
       
        <!-- Invoice Action Bar -->
        <section
            class="px-gutter py-md bg-white border-b border-outline-variant flex flex-wrap items-center justify-between gap-md">
            <div class="flex items-center gap-sm">
                <span
                    class="px-md py-1 bg-green-100 text-green-800 text-label-sm font-label-sm rounded-full flex items-center gap-1">
                    <span class="material-symbols-outlined text-[14px]">check_circle</span> PAID
                </span>
                <span class="text-on-surface-variant text-body-sm">|</span>
                <div class="flex flex-col">
                    <span class="text-label-sm font-label-sm text-on-surface-variant uppercase">Due Date</span>
                    <span class="text-body-sm font-semibold">Dec 15, 2024</span>
                </div>
            </div>
            <div class="flex items-center gap-sm">
                <button
                    class="flex items-center gap-xs px-md py-sm bg-white border border-outline-variant text-primary rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">edit</span> Edit
                </button>
                <button
                    class="flex items-center gap-xs px-md py-sm bg-white border border-outline-variant text-on-surface rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">print</span> Print
                </button>
                <button
                    class="flex items-center gap-xs px-md py-sm bg-white border border-outline-variant text-on-surface rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">download</span> PDF
                </button>
                <button
                    class="flex items-center gap-xs px-md py-sm bg-primary text-white rounded-lg font-label-md text-label-md hover:opacity-90 transition-opacity">
                    <span class="material-symbols-outlined text-[18px]">send</span> Send Invoice
                </button>
            </div>
        </section>
        <!-- Main Invoice Content -->
        <div class="max-w-[1000px] mx-auto p-gutter sm:p-xl space-y-gutter">
            <!-- Invoice Paper Container -->
            <div class="bg-white border border-outline-variant rounded-xl overflow-hidden shadow-sm">
                <!-- Branding & Invoice Info -->
                <div class="p-xl border-b border-outline-variant flex flex-col md:flex-row justify-between gap-xl">
                    <div class="space-y-sm">
                        <div class="flex items-center gap-sm">
                            <div
                                class="w-10 h-10 rounded bg-primary-container flex items-center justify-center text-on-primary-container">
                                <span class="material-symbols-outlined text-[24px]">token</span>
                            </div>
                            <span class="font-headline-md text-headline-md font-bold text-on-surface">Acme Dynamics
                                Inc.</span>
                        </div>
                        <p class="text-body-sm text-on-surface-variant max-w-xs">
                            123 Innovation Way, Suite 500<br />
                            San Francisco, CA 94103<br />
                            United States<br />
                            contact@acmedynamics.io
                        </p>
                    </div>
                    <div class="text-right flex flex-col justify-end space-y-1">
                        <h2 class="text-display text-[40px] font-bold text-primary leading-none">INVOICE</h2>
                        <p class="font-code-sm text-code-sm text-on-surface-variant">#INV-2024-001</p>
                        <div class="pt-md grid grid-cols-2 gap-x-xl gap-y-1 text-left md:text-right">
                            <span class="text-label-sm text-on-surface-variant">Date Issued</span>
                            <span class="text-body-sm font-semibold">Nov 15, 2024</span>
                            <span class="text-label-sm text-on-surface-variant">Due Date</span>
                            <span class="text-body-sm font-semibold">Dec 15, 2024</span>
                        </div>
                    </div>
                </div>
                <!-- Billing Information -->
                <div class="p-xl grid grid-cols-1 md:grid-cols-2 gap-xl bg-surface-container-lowest">
                    <div class="space-y-sm">
                        <h3 class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">Billed
                            To</h3>
                        <div class="space-y-1">
                            <p class="text-body-lg font-bold text-on-surface">Global Tech Solutions Ltd.</p>
                            <p class="text-body-sm text-on-surface-variant">
                                Attn: Sarah Jenkins<br />
                                88 Commercial Blvd, Tower B<br />
                                Austin, TX 78701<br />
                                sarah.jenkins@globaltech.com
                            </p>
                        </div>
                    </div>
                    <div class="space-y-sm">
                        <h3 class="text-label-sm font-label-sm text-on-surface-variant uppercase tracking-wider">Payment
                            Details</h3>
                        <div class="space-y-1">
                            <div class="flex justify-between md:justify-end gap-xl">
                                <span class="text-label-sm text-on-surface-variant">Payment Method:</span>
                                <span class="text-body-sm font-medium">Bank Transfer</span>
                            </div>
                            <div class="flex justify-between md:justify-end gap-xl">
                                <span class="text-label-sm text-on-surface-variant">Account:</span>
                                <span class="text-body-sm font-medium">**** 8920</span>
                            </div>
                            <div class="flex justify-between md:justify-end gap-xl">
                                <span class="text-label-sm text-on-surface-variant">Reference:</span>
                                <span class="text-body-sm font-medium">INV-24-001-GT</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Line Items Table -->
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low border-y border-outline-variant">
                                <th class="px-xl py-md text-label-sm font-label-sm text-on-surface-variant uppercase">
                                    Description</th>
                                <th
                                    class="px-md py-md text-label-sm font-label-sm text-on-surface-variant uppercase text-center w-24">
                                    Qty</th>
                                <th
                                    class="px-md py-md text-label-sm font-label-sm text-on-surface-variant uppercase text-right w-32">
                                    Unit Price</th>
                                <th
                                    class="px-xl py-md text-label-sm font-label-sm text-on-surface-variant uppercase text-right w-32">
                                    Total</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-outline-variant">
                            <tr class="hover:bg-surface-container-lowest transition-colors group">
                                <td class="px-xl py-xl">
                                    <p class="text-body-md font-bold text-on-surface">Annual Enterprise SaaS License</p>
                                    <p class="text-body-sm text-on-surface-variant mt-1">Full access to Business OS
                                        modules including CRM, Analytics, and Financials for up to 50 users.</p>
                                </td>
                                <td class="px-md py-xl text-center text-body-md">1</td>
                                <td class="px-md py-xl text-right text-body-md">$12,000.00</td>
                                <td class="px-xl py-xl text-right text-body-md font-semibold">$12,000.00</td>
                            </tr>
                            <tr class="hover:bg-surface-container-lowest transition-colors group">
                                <td class="px-xl py-xl">
                                    <p class="text-body-md font-bold text-on-surface">White-glove Onboarding &amp;
                                        Training</p>
                                    <p class="text-body-sm text-on-surface-variant mt-1">Custom implementation strategy,
                                        data migration, and 3-day on-site staff workshop.</p>
                                </td>
                                <td class="px-md py-xl text-center text-body-md">1</td>
                                <td class="px-md py-xl text-right text-body-md">$2,500.00</td>
                                <td class="px-xl py-xl text-right text-body-md font-semibold">$2,500.00</td>
                            </tr>
                            <tr class="hover:bg-surface-container-lowest transition-colors group">
                                <td class="px-xl py-xl">
                                    <p class="text-body-md font-bold text-on-surface">Premium Support Add-on (Monthly)
                                    </p>
                                    <p class="text-body-sm text-on-surface-variant mt-1">24/7 dedicated account manager
                                        and prioritized technical response times.</p>
                                </td>
                                <td class="px-md py-xl text-center text-body-md">12</td>
                                <td class="px-md py-xl text-right text-body-md">$150.00</td>
                                <td class="px-xl py-xl text-right text-body-md font-semibold">$1,800.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Summary Section -->
                <div class="p-xl flex flex-col md:flex-row justify-between gap-xl">
                    <div class="flex-1 space-y-md">
                        <div class="p-md bg-surface rounded-lg border border-outline-variant border-dashed">
                            <h4 class="text-label-sm font-bold text-on-surface mb-xs">Notes &amp; Terms</h4>
                            <p class="text-body-sm text-on-surface-variant italic">
                                Thank you for your business. Please include the invoice number in your wire transfer.
                                Late payments are subject to a 1.5% monthly interest fee.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-80 space-y-sm">
                        <div class="flex justify-between text-body-md">
                            <span class="text-on-surface-variant">Subtotal</span>
                            <span class="font-medium">$16,300.00</span>
                        </div>
                        <div class="flex justify-between text-body-md">
                            <span class="text-on-surface-variant">Tax (VAT 20%)</span>
                            <span class="font-medium">$3,260.00</span>
                        </div>
                        <div class="flex justify-between text-body-md">
                            <span class="text-on-surface-variant">Discount (Enterprise)</span>
                            <span class="text-green-600 font-medium">-$1,000.00</span>
                        </div>
                        <div class="pt-sm border-t border-outline-variant flex justify-between items-center">
                            <span class="text-headline-sm font-bold text-on-surface">Total Amount</span>
                            <span class="text-headline-md font-bold text-primary">$18,560.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Activity Log / Payment History -->
            <div class="bg-white border border-outline-variant rounded-xl overflow-hidden">
                <div class="px-xl py-md border-b border-outline-variant flex items-center justify-between">
                    <h3 class="font-headline-sm text-headline-sm text-on-surface">Invoice Timeline</h3>
                    <span class="text-label-sm text-on-surface-variant flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[16px]">history</span> History
                    </span>
                </div>
                <div class="p-xl space-y-md">
                    <div class="flex gap-md">
                        <div class="flex flex-col items-center">
                            <div class="w-2 h-2 rounded-full bg-green-500 mt-1.5"></div>
                            <div class="w-px flex-1 bg-outline-variant mt-1 mb-1"></div>
                        </div>
                        <div>
                            <p class="text-body-sm font-bold">Payment Received</p>
                            <p class="text-body-sm text-on-surface-variant">Received $18,560.00 via Bank Transfer (Ref:
                                #GT-X920)</p>
                            <span class="text-xs text-outline font-code-sm">Nov 28, 2024 · 03:45 PM</span>
                        </div>
                    </div>
                    <div class="flex gap-md">
                        <div class="flex flex-col items-center">
                            <div class="w-2 h-2 rounded-full bg-primary mt-1.5"></div>
                            <div class="w-px flex-1 bg-outline-variant mt-1 mb-1"></div>
                        </div>
                        <div>
                            <p class="text-body-sm font-bold">Invoice Viewed</p>
                            <p class="text-body-sm text-on-surface-variant">Viewed by sarah.jenkins@globaltech.com from
                                IP 192.168.1.45</p>
                            <span class="text-xs text-outline font-code-sm">Nov 16, 2024 · 09:12 AM</span>
                        </div>
                    </div>
                    <div class="flex gap-md">
                        <div class="flex flex-col items-center">
                            <div class="w-2 h-2 rounded-full bg-outline mt-1.5"></div>
                        </div>
                        <div>
                            <p class="text-body-sm font-bold">Invoice Created</p>
                            <p class="text-body-sm text-on-surface-variant">System generated invoice and sent to billing
                                contact.</p>
                            <span class="text-xs text-outline font-code-sm">Nov 15, 2024 · 10:00 AM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer
            class="p-xl text-center text-on-surface-variant border-t border-outline-variant bg-surface-container-low mt-2xl">
            <p class="text-label-sm font-label-sm">© 2024 Acme Dynamics Inc. All rights reserved.</p>
            <p class="text-body-sm mt-1">Generated by Business OS v4.2.1</p>
        </footer>
    </main>
    <!-- Success Notification (Toast) - Hidden by default -->
    <div class="fixed bottom-lg right-lg bg-inverse-surface text-inverse-on-surface px-xl py-md rounded-lg shadow-xl flex items-center gap-md transform translate-y-24 transition-transform duration-300 z-50"
        id="toast">
        <span class="material-symbols-outlined text-green-400">check_circle</span>
        <span class="text-body-sm font-medium">Invoice successfully sent to client.</span>
        <button class="p-xs hover:bg-white/10 rounded" onclick="hideToast()">
            <span class="material-symbols-outlined text-[18px]">close</span>
        </button>
    </div>
    <script>
    // Simple Interaction Logic
    function showToast() {
        const toast = document.getElementById('toast');
        toast.classList.remove('translate-y-24');
        setTimeout(hideToast, 5000);
    }

    function hideToast() {
        const toast = document.getElementById('toast');
        toast.classList.add('translate-y-24');
    }

    // Attach toast to the Send button for demonstration
    document.querySelector('button.bg-primary').addEventListener('click', function() {
        this.innerHTML =
            '<span class="material-symbols-outlined text-[18px] animate-spin">refresh</span> Sending...';
        setTimeout(() => {
            this.innerHTML =
                '<span class="material-symbols-outlined text-[18px]">send</span> Send Invoice';
            showToast();
        }, 1500);
    });

    // Hover row effect enhancement
    const tableRows = document.querySelectorAll('tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('click', () => {
            // Potential row interaction: expand or highlight
            tableRows.forEach(r => r.classList.remove('bg-primary/5'));
            row.classList.add('bg-primary/5');
        });
    });
    </script>
</body>

</html>