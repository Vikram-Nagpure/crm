<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proposal Builder — Letterhead Editor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <style>
    :root {
        /* ---- color tokens (Material-3 style palette supplied) ---- */
        --on-primary-container: #eeefff;
        --inverse-surface: #2e3132;
        --primary-fixed: #dbe1ff;
        --on-secondary-fixed: #0b1c30;
        --surface-container: #edeeef;
        --on-tertiary-container: #bdffdb;
        --surface-tint: #0053db;
        --on-primary-fixed: #00174b;
        --on-secondary-fixed-variant: #38485d;
        --secondary: #505f76;
        --primary: #004ac6;
        --surface: #f8f9fa;
        --surface-container-high: #e7e8e9;
        --on-tertiary-fixed-variant: #005236;
        --tertiary-fixed-dim: #4edea3;
        --tertiary: #006242;
        --on-secondary-container: #54647a;
        --surface-container-low: #f3f4f5;
        --on-secondary: #ffffff;
        --background: #f8f9fa;
        --on-background: #191c1d;
        --tertiary-fixed: #6ffbbe;
        --secondary-container: #d0e1fb;
        --on-error: #ffffff;
        --surface-bright: #f8f9fa;
        --secondary-fixed-dim: #b7c8e1;
        --on-surface: #191c1d;
        --inverse-primary: #b4c5ff;
        --tertiary-container: #007d55;
        --on-error-container: #93000a;
        --on-tertiary: #ffffff;
        --on-surface-variant: #434655;
        --inverse-on-surface: #f0f1f2;
        --primary-fixed-dim: #b4c5ff;
        --surface-variant: #e1e3e4;
        --secondary-fixed: #d3e4fe;
        --outline: #737686;
        --surface-container-lowest: #ffffff;
        --on-tertiary-fixed: #002113;
        --error-container: #ffdad6;
        --error: #ba1a1a;
        --on-primary: #ffffff;
        --primary-container: #2563eb;
        --surface-dim: #d9dadb;
        --outline-variant: #c3c6d7;
        --surface-container-highest: #e1e3e4;
        --on-primary-fixed-variant: #003ea8;

        /* ---- radius tokens ---- */
        --radius: 0.25rem;
        --radius-lg: 0.5rem;
        --radius-xl: 0.75rem;
        --radius-full: 9999px;

        /* ---- spacing tokens ---- */
        --space-xs: 4px;
        --space-sm: 8px;
        --space-md: 16px;
        --space-lg: 24px;
        --space-xl: 32px;
        --space-2xl: 48px;
        --space-gutter: 20px;
        --space-margin: 24px;

        /* ---- type tokens ---- */
        --font-headline: 'Geist', sans-serif;
        --font-body: 'Inter', -apple-system, Segoe UI, sans-serif;
        --font-code: 'JetBrains Mono', Menlo, monospace;

        --page-w: 210mm;
        --page-h: 297mm;
        --page-margin: 12mm;
        --header-h: 34mm;
        --footer-h: 16mm;

        /* dynamic, set by JS */
        --content-w-pct: 70%;
        --content-h-pct: 80%;
        --justify: center;
        --text-align: left;
        --font-family: 'Inter', sans-serif;
        --font-size: 14px;
        --line-height: 1.65;
        --user-margin: 0mm;
        --user-padding: 8mm;
    }

    * {
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: var(--font-body);
        background: var(--background);
        color: var(--on-background);
        -webkit-font-smoothing: antialiased;
    }

    button {
        font-family: inherit;
        cursor: pointer;
    }

    input,
    select {
        font-family: inherit;
    }

    /* ---------- App bar ---------- */
    .appbar {
        position: sticky;
        top: 65px;
        z-index: 40;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: var(--space-md) var(--space-margin);
        background: var(--primary);
        color: var(--on-primary);
        box-shadow: 0 2px 12px rgba(0, 0, 0, .15);
    }

    .appbar-brand {
        display: flex;
        align-items: center;
        gap: var(--space-sm);
    }

    .appbar-mark {
        width: 34px;
        height: 34px;
        border-radius: var(--radius-lg);
        background: var(--on-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: var(--font-headline);
        font-weight: 700;
        font-size: 17px;
        color: var(--primary);
    }

    .appbar-title {
        font-family: var(--font-headline);
        font-size: 20px;
        line-height: 28px;
        font-weight: 600;
        letter-spacing: .2px;
    }

    .appbar-sub {
        font-size: 12px;
        line-height: 16px;
        font-weight: 600;
        color: var(--primary-fixed);
        letter-spacing: .08em;
        text-transform: uppercase;
    }

    .appbar-actions {
        display: flex;
        gap: var(--space-sm);
        flex-wrap: wrap;
    }

    .btn {
        border: 1px solid rgba(255, 255, 255, .22);
        background: rgba(255, 255, 255, .08);
        color: var(--on-primary);
        padding: 9px 15px;
        border-radius: var(--radius-lg);
        font-size: 14px;
        line-height: 20px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 7px;
        transition: background .15s, transform .1s;
    }

    .btn:hover {
        background: rgba(255, 255, 255, .18);
    }

    .btn:active {
        transform: translateY(1px);
    }

    .btn-accent {
        background: var(--on-primary);
        border-color: var(--on-primary);
        color: var(--primary);
        font-weight: 600;
    }

    .btn-accent:hover {
        background: var(--primary-fixed);
    }

    .btn svg {
        width: 15px;
        height: 15px;
        flex-shrink: 0;
    }

    /* ---------- Settings panel ---------- */
    .panel-wrap {
        background: var(--surface-container-lowest);
        border-bottom: 1px solid var(--outline-variant);
    }

    .panel-toggle-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: var(--space-sm) var(--space-margin);
        max-width: 1400px;
        margin: 0 auto;
    }

    .panel-toggle {
        background: none;
        border: none;
        color: var(--on-surface-variant);
        font-size: 14px;
        line-height: 20px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 6px;
        letter-spacing: .02em;
    }

    .panel-toggle svg {
        width: 14px;
        height: 14px;
        transition: transform .2s;
    }

    .panel-toggle.collapsed svg {
        transform: rotate(-90deg);
    }

    .guides-toggle {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 14px;
        color: var(--on-surface-variant);
    }

    .panel {
        max-width: 1400px;
        margin: 0 auto;
        padding: 4px var(--space-margin) var(--space-lg);
        display: grid;
        grid-template-columns: 1.1fr 1.4fr 1.3fr;
        gap: var(--space-gutter);
        transition: max-height .25s ease, opacity .2s ease, padding .2s ease;
        overflow: hidden;
    }

    .panel.collapsed {
        max-height: 0;
        padding-top: 0;
        padding-bottom: 0;
        opacity: 0;
    }

    .card {
        background: var(--surface-container-low);
        border: 1px solid var(--outline-variant);
        border-radius: var(--radius-xl);
        padding: var(--space-md) var(--space-lg);
    }

    .card h3 {
        margin: 0 0 var(--space-md);
        font-size: 12px;
        line-height: 16px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .07em;
        color: var(--primary);
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .field {
        margin-bottom: 11px;
    }

    .field:last-child {
        margin-bottom: 0;
    }

    .field label {
        display: block;
        font-size: 14px;
        line-height: 20px;
        color: var(--on-surface-variant);
        margin-bottom: 4px;
        font-weight: 500;
    }

    .field input[type=text],
    .field input[type=number],
    .field input[type=date],
    .field select,
    .field textarea {
        width: 100%;
        padding: 8px 10px;
        border: 1px solid var(--outline-variant);
        border-radius: var(--radius);
        font-size: 14px;
        line-height: 20px;
        background: var(--surface-container-lowest);
        color: var(--on-surface);
    }

    .field input:focus,
    .field select:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(0, 74, 198, .15);
    }

    .field-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    .field-row3 {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 10px;
    }

    .field input[type=color] {
        padding: 2px;
        height: 34px;
    }

    .hint {
        font-size: 13px;
        line-height: 18px;
        color: var(--outline);
        margin-top: 8px;
    }

    /* ---------- Toolbar ---------- */
    .toolbar {
        position: sticky;
        top: 60px;
        z-index: 30;
        display: flex;
        align-items: center;
        gap: 2px;
        flex-wrap: wrap;
        background: var(--surface-container-lowest);
        border-bottom: 1px solid var(--outline-variant);
        padding: 8px var(--space-margin);
    }

    .tb-btn {
        border: none;
        background: none;
        width: 32px;
        height: 32px;
        border-radius: var(--radius);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--on-surface-variant);
    }

    .tb-btn:hover {
        background: var(--surface-container);
    }

    .tb-btn svg {
        width: 16px;
        height: 16px;
    }

    .tb-sep {
        width: 1px;
        height: 22px;
        background: var(--outline-variant);
        margin: 0 6px;
    }

    .tb-select {
        border: 1px solid var(--outline-variant);
        border-radius: var(--radius);
        font-size: 13px;
        padding: 6px 8px;
        background: var(--surface-container-lowest);
        color: var(--on-surface-variant);
        margin-right: 4px;
    }

    .tb-color {
        width: 30px;
        height: 30px;
        border: 1px solid var(--outline-variant);
        border-radius: var(--radius);
        padding: 2px;
        background: var(--surface-container-lowest);
    }

    /* ---------- Canvas / pages ---------- */
    .canvas {
        padding: 44px 16px 90px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .pages-container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .a4-page {
        position: relative;
        width: var(--page-w);
        height: var(--page-h);
        background: var(--surface-container-lowest);
        box-shadow: 0 1px 3px rgba(20, 30, 50, .08), 0 18px 45px -12px rgba(20, 30, 50, .28);
        border-radius: var(--radius);
        margin-bottom: 36px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .page-header {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: var(--header-h);
        padding: 9mm var(--page-margin) 0;
        border-bottom: 1px solid var(--outline-variant);
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .ph-brand {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .ph-mark {
        width: 34px;
        height: 34px;
        border-radius: var(--radius-lg);
        flex-shrink: 0;
        background: var(--primary);
        color: var(--on-primary);
        font-family: var(--font-headline);
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
    }

    .ph-company {
        font-family: var(--font-headline);
        font-weight: 600;
        font-size: 15px;
        color: var(--on-surface);
        line-height: 1.2;
    }

    .ph-tag {
        font-size: 8.5px;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--on-surface-variant);
        margin-top: 2px;
    }

    .ph-contact {
        text-align: right;
        font-size: 9.5px;
        color: var(--on-surface-variant);
        line-height: 1.55;
    }

    .ph-contact .site {
        color: var(--primary);
        font-weight: 600;
    }

    .page-footer {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: var(--footer-h);
        padding: 0 var(--page-margin) 6mm;
        border-top: 1px solid var(--outline-variant);
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-family: var(--font-code);
        font-size: 8px;
        color: var(--on-surface-variant);
    }

    .pf-left {
        max-width: 70%;
        line-height: 1.5;
    }

    .pf-right {
        text-align: right;
        font-weight: 600;
        color: var(--primary);
    }

    .content-slot {
        position: absolute;
        top: var(--header-h);
        bottom: var(--footer-h);
        left: 0;
        right: 0;
        display: flex;
        justify-content: var(--justify);
        padding: var(--page-margin);
    }

    .content-block {
        position: relative;
        width: var(--content-w-pct);
        height: var(--content-h-pct);
        margin: var(--user-margin);
        padding: var(--user-padding);
        overflow: hidden;
        background: var(--surface-container-lowest);
        font-family: var(--font-family);
        font-size: var(--font-size);
        line-height: var(--line-height);
        text-align: var(--text-align);
        color: var(--on-surface);
    }

    .content-block:focus-within {
        box-shadow: 0 0 0 2px var(--primary-container) inset;
    }

    .title-block {
        margin-bottom: 14px;
        padding-bottom: 12px;
        border-bottom: 1px solid var(--outline-variant);
    }

    .title-block h2 {
        font-family: var(--font-headline);
        font-size: 1.55em;
        font-weight: 600;
        color: var(--on-surface);
        margin: 0 0 8px;
        line-height: 1.25;
    }

    .title-meta {
        display: flex;
        justify-content: space-between;
        font-size: .72em;
        color: var(--on-surface-variant);
        gap: 12px;
    }

    .title-meta b {
        color: var(--on-surface);
    }

    .subject-line {
        font-size: .78em;
        font-weight: 600;
        color: var(--primary);
        margin-top: 8px;
        letter-spacing: .01em;
    }

    .editable-inner {
        outline: none;
        min-height: 20px;
    }

    .editable-inner p {
        margin: 0 0 .85em;
    }

    .editable-inner ul,
    .editable-inner ol {
        margin: 0 0 .85em;
        padding-left: 1.4em;
    }

    .editable-inner blockquote {
        margin: 0 0 .85em;
        padding-left: 14px;
        border-left: 3px solid var(--primary);
        color: var(--on-surface-variant);
        font-style: italic;
    }

    .editable-inner table {
        border-collapse: collapse;
        width: 100%;
        margin: 0 0 .85em;
        font-size: .92em;
    }

    .editable-inner td,
    .editable-inner th {
        border: 1px solid var(--outline-variant);
        padding: 6px 8px;
    }

    .editable-inner img {
        max-width: 100%;
    }

    .editable-inner hr {
        border: none;
        border-top: 1px solid var(--outline-variant);
        margin: 1em 0;
    }

    .guide-label {
        position: absolute;
        pointer-events: none;
        font-family: var(--font-code);
        font-size: 9.5px;
        color: var(--primary);
        background: var(--surface-container-lowest);
        padding: 1px 6px;
        border-radius: var(--radius);
        border: 1px dashed var(--primary);
        transform: translateY(-130%);
    }

    .show-guides .content-block {
        border: 1px dashed var(--primary);
    }

    .show-guides .content-slot {
        background: repeating-linear-gradient(45deg, rgba(0, 74, 198, .04) 0 10px, transparent 10px 20px);
    }

    .editable-inner hr.manual-break {
        border: none;
        border-top: 2px dashed var(--primary);
        margin: 10px 0;
        position: relative;
        height: 0;
    }

    .editable-inner hr.manual-break::after {
        content: "Page Break";
        position: absolute;
        top: -9px;
        left: 12px;
        background: var(--surface-container-lowest);
        color: var(--primary);
        font-family: var(--font-code);
        font-size: 9px;
        padding: 0 6px;
        letter-spacing: .04em;
        text-transform: uppercase;
    }

    .a4-page.truncated::before {
        content: "Content truncated — raise Maximum Pages or trim text";
        position: absolute;
        left: var(--page-margin);
        right: var(--page-margin);
        bottom: calc(var(--footer-h) + 4px);
        font-family: var(--font-code);
        font-size: 9px;
        color: var(--on-error);
        background: var(--error-container);
        border: 1px solid var(--error);
        padding: 3px 8px;
        border-radius: var(--radius);
        z-index: 5;
        text-align: center;
    }

    .page-badge {
        position: absolute;
        top: -26px;
        right: 0;
        font-size: 11px;
        color: var(--outline);
        font-family: var(--font-code);
    }

    .page-num-wrap {
        position: relative;
    }

    /* measurer, hidden */
    .measurer {
        position: absolute;
        left: -99999px;
        top: 0;
        visibility: hidden;
        height: auto !important;
    }

    /* toast */
    .toast {
        position: fixed;
        bottom: 26px;
        right: 26px;
        z-index: 100;
        background: var(--inverse-surface);
        color: var(--inverse-on-surface);
        padding: 12px 18px;
        border-radius: var(--radius-lg);
        font-size: 14px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .25);
        display: flex;
        align-items: center;
        gap: 10px;
        transform: translateY(20px);
        opacity: 0;
        pointer-events: none;
        transition: transform .25s ease, opacity .25s ease;
    }

    .toast.show {
        transform: translateY(0);
        opacity: 1;
    }

    .toast .dot {
        width: 7px;
        height: 7px;
        border-radius: var(--radius-full);
        background: var(--tertiary-fixed-dim);
    }

    /* preview mode */
    body.preview-mode .appbar-actions .hide-in-preview {
        display: none;
    }

    body.preview-mode .panel-wrap,
    body.preview-mode .toolbar {
        display: none !important;
    }

    body.preview-mode .canvas {
        padding-top: 30px;
    }

    .exit-preview {
        display: none;
    }

    body.preview-mode .exit-preview {
        display: flex;
    }

    @media print {

        .appbar,
        .panel-wrap,
        .toolbar,
        .guide-label {
            display: none !important;
        }

        body {
            background: #fff;
        }

        .canvas {
            padding: 0;
        }

        .a4-page {
            box-shadow: none;
            margin: 0;
            border-radius: 0;
            page-break-after: always;
        }

        .a4-page:last-child {
            page-break-after: auto;
        }
    }

    @media (max-width:1100px) {
        .panel {
            grid-template-columns: 1fr;
        }
    }
    </style>
</head>

<body>


    <?php include "include/header.php"?>
    <!-- ============ APP BAR ============ -->
    <header class="appbar">
        <div class="appbar-brand">
            <div class="appbar-mark">P</div>
            <div>
                <div class="appbar-title">Proposal Builder</div>
                <div class="appbar-sub">Letterhead Editor</div>
            </div>
        </div>
        <div class="appbar-actions">
            <button class="btn hide-in-preview" onclick="saveDraft()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z" />
                    <path d="M17 21v-8H7v8M7 3v5h8" />
                </svg>
                Save Draft
            </button>
            <button class="btn hide-in-preview" onclick="togglePreview(true)">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                    <circle cx="12" cy="12" r="3" />
                </svg>
                Preview
            </button>
            <button class="btn" onclick="downloadPDF()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4" />
                    <path d="M7 10l5 5 5-5" />
                    <path d="M12 15V3" />
                </svg>
                Download PDF
            </button>
            <button class="btn" onclick="window.print()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M6 9V2h12v7" />
                    <path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2" />
                    <rect x="6" y="14" width="12" height="8" />
                </svg>
                Print
            </button>
            <button class="btn btn-accent" onclick="sendProposal()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 2L11 13" />
                    <path d="M22 2l-7 20-4-9-9-4 20-7z" />
                </svg>
                Send Proposal
            </button>
            <button class="btn exit-preview" onclick="togglePreview(false)">Exit Preview</button>
        </div>
    </header>

    <!-- ============ SETTINGS PANEL ============ -->
    <div class="panel-wrap">
        <div class="panel-toggle-row">
            <button class="panel-toggle" id="panelToggleBtn" onclick="togglePanel()">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <path d="M6 9l6 6 6-6" />
                </svg>
                Proposal &amp; Layout Settings
            </button>
            <label class="guides-toggle">
                <input type="checkbox" id="chkGuides" onchange="toggleGuides(this.checked)">
                Show margin guides
            </label>
        </div>

        <div class="panel" id="panel">
            <!-- Proposal Settings -->
            <div class="card">
                <h3>Proposal Settings</h3>
                <div class="field">
                    <label>Proposal Title</label>
                    <input type="text" id="propTitle" value="Service Proposal: Enterprise CRM Implementation"
                        oninput="updateIdentity()">
                </div>
                <div class="field">
                    <label>Subject</label>
                    <input type="text" id="propSubject" value="Digital Transformation &amp; CRM Integration"
                        oninput="updateIdentity()">
                </div>
                <div class="field-row">
                    <div class="field">
                        <label>Prepared For</label>
                        <input type="text" id="propClient" value="Acme Corporation" oninput="updateIdentity()">
                    </div>
                    <div class="field">
                        <label>Date</label>
                        <input type="date" id="propDate" oninput="updateIdentity()">
                    </div>
                </div>
                <p class="hint">Title and subject appear once at the top of the document. The paragraph area below them
                    is fully editable — use the toolbar above the preview to format it.</p>
            </div>

            <!-- Content Area Settings -->
            <div class="card">
                <h3>Content Area Settings</h3>
                <div class="field-row">
                    <div class="field">
                        <label>Content Width</label>
                        <select id="selWidth" onchange="onLayoutChange()">
                            <option>50%</option>
                            <option>60%</option>
                            <option selected>70%</option>
                            <option>80%</option>
                            <option>90%</option>
                            <option>100%</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Content Height</label>
                        <select id="selHeight" onchange="onLayoutChange()">
                            <option>40%</option>
                            <option>50%</option>
                            <option>60%</option>
                            <option>70%</option>
                            <option selected>80%</option>
                            <option>90%</option>
                            <option>100%</option>
                        </select>
                    </div>
                </div>
                <div class="field-row">
                    <div class="field">
                        <label>Page Alignment</label>
                        <select id="selPageAlign" onchange="onLayoutChange()">
                            <option value="flex-start">Left</option>
                            <option value="center" selected>Center</option>
                            <option value="flex-end">Right</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Text Alignment</label>
                        <select id="selTextAlign" onchange="onLayoutChange()">
                            <option value="left" selected>Left</option>
                            <option value="center">Center</option>
                            <option value="right">Right</option>
                            <option value="justify">Justify</option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label>Font Family</label>
                    <select id="selFont" onchange="onLayoutChange()">
                        <option value="'Inter', sans-serif" selected>Inter (Sans)</option>
                        <option value="'Geist', sans-serif">Geist (Headline)</option>
                        <option value="Georgia, serif">Georgia</option>
                        <option value="'Times New Roman', serif">Times New Roman</option>
                        <option value="Arial, sans-serif">Arial</option>
                        <option value="'Courier New', monospace">Courier New</option>
                    </select>
                </div>
                <div class="field-row3">
                    <div class="field">
                        <label>Font Size (px)</label>
                        <input type="number" id="inpFontSize" value="14" min="10" max="24" onchange="onLayoutChange()">
                    </div>
                    <div class="field">
                        <label>Line Height</label>
                        <input type="number" id="inpLineHeight" value="1.65" step="0.05" min="1" max="2.4"
                            onchange="onLayoutChange()">
                    </div>
                    <div class="field">
                        <label>Margins (mm)</label>
                        <input type="number" id="inpMargin" value="0" min="0" max="20" onchange="onLayoutChange()">
                    </div>
                </div>
                <div class="field">
                    <label>Padding (mm)</label>
                    <input type="number" id="inpPadding" value="8" min="0" max="24" onchange="onLayoutChange()">
                </div>
                <div class="field">
                    <label>Maximum Pages</label>
                    <input type="number" id="inpMaxPages" value="2" min="1" max="20" onchange="onLayoutChange()">
                    <p class="hint">Content is capped at this many pages. Anything past the limit stays hidden — raise
                        this number or trim the text to fit. Use the "Add Page" button in the toolbar to force a break
                        at the cursor.</p>
                </div>
            </div>

            <!-- Header & Footer Settings -->
            <div class="card">
                <h3>Header &amp; Footer (fixed on every page)</h3>
                <div class="field-row">
                    <div class="field">
                        <label>Logo Initial</label>
                        <input type="text" id="hLogo" value="B" maxlength="2" oninput="updateHeaderFooter()">
                    </div>
                    <div class="field">
                        <label>Company Name</label>
                        <input type="text" id="hCompany" value="Business OS" oninput="updateHeaderFooter()">
                    </div>
                </div>
                <div class="field">
                    <label>Address</label>
                    <input type="text" id="hAddress" value="123 Innovation Way, Suite 500, San Francisco, CA 94107"
                        oninput="updateHeaderFooter()">
                </div>
                <div class="field-row">
                    <div class="field">
                        <label>Phone</label>
                        <input type="text" id="hPhone" value="+1 (555) 000-0000" oninput="updateHeaderFooter()">
                    </div>
                    <div class="field">
                        <label>Email</label>
                        <input type="text" id="hEmail" value="hello@businessos.com" oninput="updateHeaderFooter()">
                    </div>
                </div>
                <div class="field">
                    <label>Website</label>
                    <input type="text" id="hWebsite" value="www.businessos.com" oninput="updateHeaderFooter()">
                </div>
                <div class="field-row">
                    <div class="field">
                        <label>GST Number</label>
                        <input type="text" id="fGST" value="27ABCDE1234F1Z5" oninput="updateHeaderFooter()">
                    </div>
                    <div class="field">
                        <label>CIN Number</label>
                        <input type="text" id="fCIN" value="U72900CA2015PTC123456" oninput="updateHeaderFooter()">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============ RICH TEXT TOOLBAR ============ -->
    <div class="toolbar" id="toolbar">
        <select class="tb-select" onmousedown="event.preventDefault()"
            onchange="exec('formatBlock', this.value); this.selectedIndex=0;">
            <option value="" selected disabled>Style</option>
            <option value="p">Paragraph</option>
            <option value="h1">Heading 1</option>
            <option value="h2">Heading 2</option>
            <option value="h3">Heading 3</option>
            <option value="h4">Heading 4</option>
            <option value="h5">Heading 5</option>
            <option value="h6">Heading 6</option>
        </select>
        <div class="tb-sep"></div>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="exec('bold')" title="Bold"><svg
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 4h8a4 4 0 010 8H6zM6 12h9a4 4 0 010 8H6z" />
            </svg></button>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="exec('italic')" title="Italic"><svg
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 4h-9M14 20H5M15 4L9 20" />
            </svg></button>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="exec('underline')" title="Underline"><svg
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M6 3v7a6 6 0 0012 0V3M4 21h16" />
            </svg></button>
        <div class="tb-sep"></div>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="exec('insertUnorderedList')"
            title="Bullet List"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="4" cy="6" r="1" />
                <circle cx="4" cy="12" r="1" />
                <circle cx="4" cy="18" r="1" />
                <path d="M9 6h11M9 12h11M9 18h11" />
            </svg></button>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="exec('insertOrderedList')"
            title="Numbered List"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 6h11M9 12h11M9 18h11" />
                <path d="M4 6h1v3M4 14h2M4 14a1 1 0 011-1M4 18h2a1 1 0 010 2H4" />
            </svg></button>
        <div class="tb-sep"></div>
        <input type="color" class="tb-color" title="Text Color" value="#004ac6" onmousedown="event.preventDefault()"
            oninput="exec('foreColor', this.value)">
        <input type="color" class="tb-color" title="Background Color" value="#dbe1ff"
            onmousedown="event.preventDefault()" oninput="exec('hiliteColor', this.value)">
        <div class="tb-sep"></div>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="insertLink()" title="Link"><svg
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M10 13a5 5 0 007 0l3-3a5 5 0 00-7-7l-1.5 1.5" />
                <path d="M14 11a5 5 0 00-7 0l-3 3a5 5 0 007 7l1.5-1.5" />
            </svg></button>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="insertImage()" title="Image"><svg
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="18" height="18" rx="2" />
                <circle cx="8.5" cy="8.5" r="1.5" />
                <path d="M21 15l-5-5L5 21" />
            </svg></button>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="insertTable()" title="Table"><svg
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="18" height="18" rx="1" />
                <path d="M3 9h18M3 15h18M9 3v18" />
            </svg></button>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="exec('insertHorizontalRule')"
            title="Horizontal Line"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 12h16" />
            </svg></button>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="exec('formatBlock', 'blockquote')"
            title="Quote"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M7 7h4v4H8c0 2-1 3-3 3v2c3 0 5-2 5-5V7z" />
                <path d="M15 7h4v4h-3c0 2-1 3-3 3v2c3 0 5-2 5-5V7z" />
            </svg></button>
        <div class="tb-sep"></div>
        <button class="tb-btn" id="addPageBtn" onmousedown="event.preventDefault()" onclick="insertPageBreak()"
            title="Add Page (insert page break at cursor)"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2">
                <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                <path d="M14 2v6h6" />
                <path d="M9 15h6M12 12v6" />
            </svg></button>
        <div class="tb-sep"></div>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="exec('undo')" title="Undo"><svg
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 7v6h6" />
                <path d="M3 13a9 9 0 1015-6.7L3 13" />
            </svg></button>
        <button class="tb-btn" onmousedown="event.preventDefault()" onclick="exec('redo')" title="Redo"><svg
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 7v6h-6" />
                <path d="M21 13a9 9 0 10-15-6.7L21 13" />
            </svg></button>
    </div>

    <!-- ============ LIVE PREVIEW CANVAS ============ -->
    <div class="canvas">
        <div class="pages-container" id="pagesContainer"></div>
    </div>

    <div class="measurer" id="measurer"></div>
    <div class="toast" id="toast"><span class="dot"></span><span id="toastMsg">Saved</span></div>

    <script>
    /* ============================================================
   STATE
============================================================ */
    const settings = {
        width: '70%',
        height: '80%',
        justify: 'center',
        textAlign: 'left',
        fontFamily: "'Inter', sans-serif",
        fontSize: 14,
        lineHeight: 1.65,
        margin: 0,
        padding: 8,
        maxPages: 2
    };
    let panelCollapsed = false;
    let truncationWarned = false;
    let draftStore = null; // in-memory save (session only, no browser storage per platform rules)

    const pagesContainer = document.getElementById('pagesContainer');
    const measurer = document.getElementById('measurer');
    let repagTimer = null;

    const initialBody = `
  <p>Thank you for considering us for your upcoming digital transformation initiative. Based on our preliminary discussions, we have outlined a comprehensive plan to modernize your client relationship management workflows and integrate your siloed data systems into a unified platform.</p>
  <p>Our approach focuses on enhancing team productivity, improving data accuracy, and providing your executive leadership with real-time insight into the sales pipeline and customer engagement metrics.</p>
  <h3>Scope of Work</h3>
  <ul>
    <li><b>Data Migration &amp; Cleanup:</b> Consolidating legacy records from spreadsheets and local databases into the new environment.</li>
    <li><b>Custom Workflow Design:</b> Automating multi-stage approval processes and client onboarding sequences.</li>
    <li><b>Interactive Dashboard Creation:</b> Developing custom reporting views for department heads.</li>
    <li><b>Team Training &amp; Onboarding:</b> Three dedicated workshop sessions for end-users and administrators.</li>
  </ul>
  <h3>Pricing Summary</h3>
  <table>
    <tr><th>Service Item</th><th>Qty</th><th>Unit Price</th><th>Total</th></tr>
    <tr><td>CRM Platform Setup &amp; Config</td><td>1</td><td>$4,500.00</td><td>$4,500.00</td></tr>
    <tr><td>Legacy Data Migration</td><td>40 hrs</td><td>$150.00</td><td>$6,000.00</td></tr>
    <tr><td>Custom API Integration</td><td>1</td><td>$2,800.00</td><td>$2,800.00</td></tr>
  </table>
  <blockquote>Proposal valid for 30 days from date of issue. Scope changes post-agreement are billed at an hourly rate of $175.</blockquote>
`;

    /* ============================================================
       INIT
    ============================================================ */
    document.getElementById('propDate').value = new Date().toISOString().slice(0, 10);

    function applySettingsToCSS() {
        const r = document.documentElement.style;
        r.setProperty('--content-w-pct', settings.width);
        r.setProperty('--content-h-pct', settings.height);
        r.setProperty('--justify', settings.justify);
        r.setProperty('--text-align', settings.textAlign);
        r.setProperty('--font-family', settings.fontFamily);
        r.setProperty('--font-size', settings.fontSize + 'px');
        r.setProperty('--line-height', settings.lineHeight);
        r.setProperty('--user-margin', settings.margin + 'mm');
        r.setProperty('--user-padding', settings.padding + 'mm');
    }
    applySettingsToCSS();

    /* ============================================================
       HEADER / FOOTER RENDER
    ============================================================ */
    function headerHTML() {
        const logo = escapeHtml(val('hLogo')),
            company = escapeHtml(val('hCompany'));
        const addr = escapeHtml(val('hAddress')),
            phone = escapeHtml(val('hPhone'));
        const email = escapeHtml(val('hEmail')),
            site = escapeHtml(val('hWebsite'));
        return `
    <div class="ph-brand">
      <div class="ph-mark">${logo}</div>
      <div><div class="ph-company">${company}</div><div class="ph-tag">Enterprise Solutions</div></div>
    </div>
    <div class="ph-contact">
      <div>${addr}</div>
      <div>${phone} &nbsp;·&nbsp; ${email}</div>
      <div class="site">${site}</div>
    </div>`;
    }

    function footerHTML(pageNum, total) {
        const addr = escapeHtml(val('hAddress')),
            gst = escapeHtml(val('fGST'));
        const cin = escapeHtml(val('fCIN')),
            site = escapeHtml(val('hWebsite'));
        return `
    <div class="pf-left">${addr} &nbsp;|&nbsp; GST ${gst} &nbsp;|&nbsp; CIN ${cin} &nbsp;|&nbsp; ${site}</div>
    <div class="pf-right">Page ${pageNum} of ${total}</div>`;
    }

    function titleBlockHTML() {
        const title = escapeHtml(val('propTitle')),
            subject = escapeHtml(val('propSubject'));
        const client = escapeHtml(val('propClient')),
            date = val('propDate');
        return `
    <div class="title-block">
      <h2>${title}</h2>
      <div class="subject-line">Subject: ${subject}</div>
      <div class="title-meta">
        <span>Prepared for: <b>${client}</b></span>
        <span>Date: <b>${formatDate(date)}</b></span>
      </div>
    </div>`;
    }

    function val(id) {
        return document.getElementById(id).value;
    }

    function escapeHtml(s) {
        const d = document.createElement('div');
        d.textContent = s;
        return d.innerHTML;
    }

    function formatDate(iso) {
        if (!iso) return '';
        const d = new Date(iso + 'T00:00:00');
        return d.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'short',
            day: 'numeric'
        });
    }

    function updateIdentity() {
        repaginate(true);
    }

    function updateHeaderFooter() {
        document.querySelectorAll('.a4-page').forEach((pg, i) => {
            pg.querySelector('.page-header').innerHTML = headerHTML();
            pg.querySelector('.page-footer').innerHTML = footerHTML(i + 1, document.querySelectorAll('.a4-page')
                .length);
        });
    }

    /* ============================================================
       PAGE SKELETON
    ============================================================ */
    function buildPageSkeleton() {
        const page = document.createElement('div');
        page.className = 'a4-page';
        page.innerHTML = `
    <div class="page-header"></div>
    <div class="content-slot">
      <div class="content-block"><div class="editable-inner" contenteditable="true" spellcheck="false"></div></div>
      <span class="guide-label"></span>
    </div>
    <div class="page-footer"></div>`;
        return page;
    }

    /* ============================================================
       PAGINATION ENGINE
    ============================================================ */
    function measureEditableHeight(withTitleBlock) {
        // build a throwaway page off-DOM-visible to measure available editable height
        const probe = buildPageSkeleton();
        probe.style.position = 'absolute';
        probe.style.left = '-99999px';
        probe.style.top = '0';
        if (withTitleBlock) {
            const block = probe.querySelector('.content-block');
            block.insertAdjacentHTML('afterbegin', titleBlockHTML());
        }
        pagesContainer.appendChild(probe);
        const editable = probe.querySelector('.editable-inner');
        const h = editable.clientHeight;
        const w = editable.clientWidth;
        pagesContainer.removeChild(probe);
        return {
            h,
            w
        };
    }

    function repaginate(preserveCaret) {
        // 1. capture caret marker
        let markerId = null;
        if (preserveCaret) {
            markerId = insertCaretMarker();
        }

        // 2. gather full master HTML from all existing editable-inner nodes, in order
        const editables = Array.from(document.querySelectorAll('.editable-inner'));
        let masterHTML = editables.map(e => e.innerHTML).join('');
        if (!masterHTML || masterHTML.trim() === '') {
            masterHTML = initialBody;
        }

        // 3. measure allotted sizes
        const page1Dims = measureEditableHeight(true);
        const otherDims = measureEditableHeight(false);

        // 4. parse master html into top-level block nodes
        const temp = document.createElement('div');
        temp.innerHTML = masterHTML;
        const nodes = Array.from(temp.childNodes).filter(n => !(n.nodeType === 3 && !n.textContent.trim()));
        // wrap stray top-level text nodes
        nodes.forEach((n, i) => {
            if (n.nodeType === 3) {
                const p = document.createElement('p');
                p.textContent = n.textContent;
                nodes[i] = p;
            }
        });

        // 5. set up measurer
        measurer.style.width = otherDims.w + 'px';
        measurer.innerHTML = '';
        measurer.style.fontFamily = settings.fontFamily;
        measurer.style.fontSize = settings.fontSize + 'px';
        measurer.style.lineHeight = settings.lineHeight;
        measurer.style.textAlign = settings.textAlign;

        const pagesData = [];
        let buffer = [];
        let pageIndex = 0;

        function currentBudget() {
            return pageIndex === 0 ? page1Dims.h : otherDims.h;
        }

        function currentWidth() {
            return pageIndex === 0 ? page1Dims.w : otherDims.w;
        }

        measurer.style.width = currentWidth() + 'px';

        for (let i = 0; i < nodes.length; i++) {
            const node = nodes[i];

            // manual page-break marker: force a break here, don't render the marker itself
            if (node.nodeType === 1 && node.tagName === 'HR' && node.classList.contains('manual-break')) {
                pagesData.push(buffer);
                buffer = [];
                pageIndex++;
                measurer.innerHTML = '';
                measurer.style.width = currentWidth() + 'px';
                continue;
            }

            measurer.appendChild(node.cloneNode(true));
            if (measurer.scrollHeight > currentBudget()) {
                // remove the node we just added
                measurer.removeChild(measurer.lastChild);
                if (buffer.length === 0) {
                    // single node taller than a whole page: allow it alone, avoid infinite loop
                    buffer.push(node);
                    pagesData.push(buffer);
                    buffer = [];
                    pageIndex++;
                    measurer.innerHTML = '';
                    measurer.style.width = currentWidth() + 'px';
                } else {
                    pagesData.push(buffer);
                    buffer = [];
                    pageIndex++;
                    measurer.innerHTML = '';
                    measurer.style.width = currentWidth() + 'px';
                    i--; // retry this node on the new page
                }
            } else {
                buffer.push(node);
            }
        }
        if (buffer.length > 0 || pagesData.length === 0) {
            pagesData.push(buffer);
        }

        // 5b. enforce the Maximum Pages cap — anything past it is folded into the last kept page
        const maxPages = Math.max(1, parseInt(settings.maxPages, 10) || 2);
        const isTruncated = pagesData.length > maxPages;
        if (isTruncated) {
            const kept = pagesData.slice(0, maxPages - 1);
            const overflowNodes = pagesData.slice(maxPages - 1).reduce((acc, arr) => acc.concat(arr), []);
            kept.push(overflowNodes);
            pagesData.length = 0;
            pagesData.push(...kept);
        }
        if (isTruncated && !truncationWarned) {
            showToast('Content exceeds ' + maxPages +
                ' page(s) — extra content is hidden. Raise Maximum Pages or trim the text.');
            truncationWarned = true;
        } else if (!isTruncated) {
            truncationWarned = false;
        }
        document.getElementById('addPageBtn').disabled = pagesData.length >= maxPages;
        document.getElementById('addPageBtn').style.opacity = pagesData.length >= maxPages ? .4 : 1;

        // 6. render pages
        pagesContainer.innerHTML = '';
        const total = pagesData.length;
        pagesData.forEach((nodeList, idx) => {
            const page = buildPageSkeleton();
            page.querySelector('.page-header').innerHTML = headerHTML();
            page.querySelector('.page-footer').innerHTML = footerHTML(idx + 1, total);
            const block = page.querySelector('.content-block');
            const editable = block.querySelector('.editable-inner');
            if (idx === 0) {
                block.insertAdjacentHTML('afterbegin', titleBlockHTML());
            }
            const wrap = document.createElement('div');
            nodeList.forEach(n => wrap.appendChild(n.cloneNode(true)));
            editable.innerHTML = wrap.innerHTML;
            const label = page.querySelector('.guide-label');
            label.textContent = settings.width + ' × ' + settings.height;
            if (isTruncated && idx === total - 1) {
                page.classList.add('truncated');
            }
            pagesContainer.appendChild(page);
        });

        // 7. restore guides visibility
        pagesContainer.classList.toggle('show-guides', document.getElementById('chkGuides').checked);

        // 8. restore caret
        if (preserveCaret && markerId) {
            restoreCaretMarker(markerId);
        }
    }

    /* ---------- caret marker helpers ---------- */
    function insertCaretMarker() {
        const sel = window.getSelection();
        if (!sel || sel.rangeCount === 0) return null;
        const range = sel.getRangeAt(0);
        const active = document.activeElement;
        if (!active || !active.classList || !active.classList.contains('editable-inner')) return null;
        const marker = document.createElement('span');
        marker.id = '__caret_marker__';
        marker.style.display = 'inline-block';
        range.insertNode(marker);
        return marker.id;
    }

    function restoreCaretMarker(id) {
        const marker = document.getElementById(id);
        if (!marker) {
            return;
        }
        const editable = marker.closest('.editable-inner');
        const range = document.createRange();
        range.setStartBefore(marker);
        range.collapse(true);
        marker.remove();
        const sel = window.getSelection();
        sel.removeAllRanges();
        sel.addRange(range);
        if (editable) editable.focus();
    }

    /* ============================================================
       EVENT DELEGATION — typing
    ============================================================ */
    pagesContainer.addEventListener('input', () => {
        clearTimeout(repagTimer);
        repagTimer = setTimeout(() => repaginate(true), 450);
    });

    let lastFocusedEditable = null;
    pagesContainer.addEventListener('focusin', (e) => {
        if (e.target.classList && e.target.classList.contains('editable-inner')) lastFocusedEditable = e.target;
    });

    /* ============================================================
       TOOLBAR COMMANDS
    ============================================================ */
    function exec(cmd, value) {
        if (lastFocusedEditable) lastFocusedEditable.focus();
        document.execCommand(cmd, false, value || null);
    }

    function insertLink() {
        const url = prompt('Enter URL:', 'https://');
        if (url) exec('createLink', url);
    }

    function insertImage() {
        const url = prompt('Enter image URL:', 'https://');
        if (url) exec('insertImage', url);
    }

    function insertPageBreak() {
        if (lastFocusedEditable) lastFocusedEditable.focus();
        document.execCommand('insertHTML', false, '<hr class="manual-break" data-break="true">');
        repaginate(true);
    }

    function insertTable() {
        let html = '<table>';
        for (let r = 0; r < 3; r++) {
            html += '<tr>';
            for (let c = 0; c < 3; c++) {
                html += r === 0 ? '<th>Header</th>' : '<td>Cell</td>';
            }
            html += '</tr>';
        }
        html += '</table><p><br></p>';
        exec('insertHTML', html);
    }

    /* ============================================================
       LAYOUT SETTINGS CHANGE
    ============================================================ */
    function onLayoutChange() {
        settings.width = document.getElementById('selWidth').value;
        settings.height = document.getElementById('selHeight').value;
        settings.justify = document.getElementById('selPageAlign').value;
        settings.textAlign = document.getElementById('selTextAlign').value;
        settings.fontFamily = document.getElementById('selFont').value;
        settings.fontSize = parseFloat(document.getElementById('inpFontSize').value) || 14;
        settings.lineHeight = parseFloat(document.getElementById('inpLineHeight').value) || 1.65;
        settings.margin = parseFloat(document.getElementById('inpMargin').value) || 0;
        settings.padding = parseFloat(document.getElementById('inpPadding').value) || 0;
        settings.maxPages = parseInt(document.getElementById('inpMaxPages').value, 10) || 2;
        applySettingsToCSS();
        repaginate(false);
    }

    /* ============================================================
       PANEL / GUIDES TOGGLES
    ============================================================ */
    function togglePanel() {
        panelCollapsed = !panelCollapsed;
        document.getElementById('panel').classList.toggle('collapsed', panelCollapsed);
        document.getElementById('panelToggleBtn').classList.toggle('collapsed', panelCollapsed);
    }

    function toggleGuides(on) {
        pagesContainer.classList.toggle('show-guides', on);
    }

    /* ============================================================
       ACTION BUTTONS
    ============================================================ */
    function showToast(msg) {
        const t = document.getElementById('toast');
        document.getElementById('toastMsg').textContent = msg;
        t.classList.add('show');
        clearTimeout(t._timer);
        t._timer = setTimeout(() => t.classList.remove('show'), 2600);
    }

    function saveDraft() {
        draftStore = {
            settings: {
                ...settings
            },
            header: {
                logo: val('hLogo'),
                company: val('hCompany'),
                address: val('hAddress'),
                phone: val('hPhone'),
                email: val('hEmail'),
                website: val('hWebsite'),
                gst: val('fGST'),
                cin: val('fCIN')
            },
            identity: {
                title: val('propTitle'),
                subject: val('propSubject'),
                client: val('propClient'),
                date: val('propDate')
            },
            pages: document.querySelectorAll('.editable-inner').length,
            savedAt: new Date().toISOString()
        };
        showToast('Draft saved for this session · ' + draftStore.pages + ' page(s)');
    }

    function togglePreview(on) {
        document.body.classList.toggle('preview-mode', on);
        if (on) window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function sendProposal() {
        showToast('Proposal sent to ' + val('propClient'));
    }

    function downloadPDF() {
        showToast('Preparing PDF…');
        const clone = pagesContainer.cloneNode(true);
        clone.classList.remove('show-guides');
        clone.querySelectorAll('.guide-label').forEach(n => n.remove());
        clone.querySelectorAll('[contenteditable]').forEach(n => n.removeAttribute('contenteditable'));
        const wrapper = document.createElement('div');
        wrapper.appendChild(clone);
        const opt = {
            margin: 0,
            filename: (val('propTitle') || 'proposal').replace(/[^a-z0-9]+/gi, '_').toLowerCase() + '.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2,
                useCORS: true
            },
            jsPDF: {
                unit: 'mm',
                format: 'a4',
                orientation: 'portrait'
            },
            pagebreak: {
                mode: ['css', 'legacy']
            }
        };
        html2pdf().set(opt).from(wrapper).save().then(() => showToast('PDF downloaded')).catch(() => showToast(
            'PDF export failed — try Print instead'));
    }

    /* ============================================================
       BOOT
    ============================================================ */
    repaginate(false);
    </script>
</body>

</html>