<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Proposal Builder — Letterhead Editor</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

<!-- Tailwind Play CDN + typography plugin (works great once this file is served from your own site) -->
<script src="https://cdn.tailwindcss.com?plugins=typography"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        "on-primary-container": "#eeefff",
        "inverse-surface": "#2e3132",
        "primary-fixed": "#dbe1ff",
        "on-secondary-fixed": "#0b1c30",
        "surface-container": "#edeeef",
        "on-tertiary-container": "#bdffdb",
        "surface-tint": "#0053db",
        "on-primary-fixed": "#00174b",
        "on-secondary-fixed-variant": "#38485d",
        "secondary": "#505f76",
        "primary": "#004ac6",
        "surface": "#f8f9fa",
        "surface-container-high": "#e7e8e9",
        "on-tertiary-fixed-variant": "#005236",
        "tertiary-fixed-dim": "#4edea3",
        "tertiary": "#006242",
        "on-secondary-container": "#54647a",
        "surface-container-low": "#f3f4f5",
        "on-secondary": "#ffffff",
        "background": "#f8f9fa",
        "on-background": "#191c1d",
        "tertiary-fixed": "#6ffbbe",
        "secondary-container": "#d0e1fb",
        "on-error": "#ffffff",
        "surface-bright": "#f8f9fa",
        "secondary-fixed-dim": "#b7c8e1",
        "on-surface": "#191c1d",
        "inverse-primary": "#b4c5ff",
        "tertiary-container": "#007d55",
        "on-error-container": "#93000a",
        "on-tertiary": "#ffffff",
        "on-surface-variant": "#434655",
        "inverse-on-surface": "#f0f1f2",
        "primary-fixed-dim": "#b4c5ff",
        "surface-variant": "#e1e3e4",
        "secondary-fixed": "#d3e4fe",
        "outline": "#737686",
        "surface-container-lowest": "#ffffff",
        "on-tertiary-fixed": "#002113",
        "error-container": "#ffdad6",
        "error": "#ba1a1a",
        "on-primary": "#ffffff",
        "primary-container": "#2563eb",
        "surface-dim": "#d9dadb",
        "outline-variant": "#c3c6d7",
        "surface-container-highest": "#e1e3e4",
        "on-primary-fixed-variant": "#003ea8"
      },
      borderRadius: { DEFAULT: "0.25rem", lg: "0.5rem", xl: "0.75rem", full: "9999px" },
      spacing: { md: "16px", "2xl": "48px", gutter: "20px", xs: "4px", base: "4px", sm: "8px", lg: "24px", xl: "32px", margin: "24px" },
      fontFamily: {
        "headline-sm": ["Geist"], "body-lg": ["Inter"], "headline-md": ["Geist"],
        "label-md": ["Inter"], "headline-lg": ["Geist"], "label-sm": ["Inter"],
        "body-md": ["Inter"], "display": ["Geist"], "code-sm": ["JetBrains Mono"], "body-sm": ["Inter"]
      },
      fontSize: {
        "headline-sm": ["20px", { lineHeight: "28px", fontWeight: "600" }],
        "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
        "headline-md": ["24px", { lineHeight: "32px", fontWeight: "600" }],
        "label-md": ["14px", { lineHeight: "20px", fontWeight: "500" }],
        "headline-lg": ["32px", { lineHeight: "40px", letterSpacing: "-0.01em", fontWeight: "600" }],
        "label-sm": ["12px", { lineHeight: "16px", fontWeight: "600" }],
        "body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
        "display": ["48px", { lineHeight: "56px", letterSpacing: "-0.02em", fontWeight: "700" }],
        "code-sm": ["13px", { lineHeight: "18px", fontWeight: "400" }],
        "body-sm": ["14px", { lineHeight: "20px", fontWeight: "400" }]
      }
    }
  }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>

<body class="bg-background text-on-background font-body-md antialiased">

<?php include "include/header.php" ?>

<!-- ============ APP BAR ============ -->
<header class="sticky top-[65px] z-30 flex flex-col md:flex-row items-stretch md:items-center justify-between gap-sm md:gap-0 px-md md:px-margin py-sm md:py-md bg-primary text-on-primary shadow-lg">
  <div class="flex items-center justify-center md:justify-start gap-sm">
    <div class="w-9 h-9 rounded-lg bg-on-primary text-primary flex items-center justify-center font-headline-sm font-bold text-[17px]">P</div>
    <div>
      <div class="font-headline-sm text-headline-sm">Proposal Builder</div>
      <div class="hidden sm:block font-label-sm text-label-sm text-primary-fixed uppercase tracking-widest">Letterhead Editor</div>
    </div>
  </div>
  <div class="flex flex-wrap items-center justify-center gap-sm">
    <!-- <button class="hide-in-preview flex items-center gap-2 border border-white/20 bg-white/10 hover:bg-white/20 active:translate-y-px transition rounded-lg px-3 py-2 font-label-md text-label-md" onclick="saveDraft()">
      <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"/><path d="M17 21v-8H7v8M7 3v5h8"/></svg>
      <span class="hidden sm:inline">Save Draft</span>
    </button> -->
    <button class="hide-in-preview flex items-center gap-2 border border-white/20 bg-white/10 hover:bg-white/20 active:translate-y-px transition rounded-lg px-3 py-2 font-label-md text-label-md" onclick="togglePreview(true)">
      <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
      <span class="hidden sm:inline">Preview</span>
    </button>
    <button class="flex items-center gap-2 border border-white/20 bg-white/10 hover:bg-white/20 active:translate-y-px transition rounded-lg px-3 py-2 font-label-md text-label-md" onclick="downloadPDF()">
      <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><path d="M7 10l5 5 5-5"/><path d="M12 15V3"/></svg>
      <span class="hidden sm:inline">Download PDF</span>
    </button>
    <button class="flex items-center gap-2 border border-white/20 bg-white/10 hover:bg-white/20 active:translate-y-px transition rounded-lg px-3 py-2 font-label-md text-label-md" onclick="window.print()">
      <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9V2h12v7"/><path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
      <span class="hidden sm:inline">Print</span>
    </button>
    <button class="flex items-center gap-2 bg-on-primary text-primary hover:bg-primary-fixed active:translate-y-px transition rounded-lg px-3 py-2 font-label-md text-label-md font-semibold" onclick="sendProposal()">
      <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
      <span class="hidden sm:inline">Send Proposal</span>
    </button>
    <button id="exitPreviewBtn" class="hidden items-center gap-2 bg-on-primary text-primary rounded-lg px-3 py-2 font-label-md text-label-md font-semibold" onclick="togglePreview(false)">Exit Preview</button>
  </div>
</header>

<!-- ============ SETTINGS PANEL ============ -->
<div id="panelWrap" class="bg-surface-container-lowest border-b border-outline-variant mt-20">
  <div class="flex flex-wrap items-center justify-between gap-sm max-w-[1400px] mx-auto px-md md:px-margin py-sm">
    <button class="flex items-center gap-1.5 font-label-md text-label-md text-on-surface-variant" id="panelToggleBtn" onclick="togglePanel()">
      <svg id="panelToggleIcon" class="w-3.5 h-3.5 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
      Proposal &amp; Layout Settings
    </button>
    <label class="flex items-center gap-1.5 font-body-sm text-body-sm text-on-surface-variant">
      <input type="checkbox" id="chkGuides" onchange="toggleGuides(this.checked)">
      Show margin guides
    </label>
  </div>

  <div id="panel" class="max-w-[1400px] mx-auto px-md md:px-margin pb-lg grid grid-cols-1 lg:grid-cols-3 gap-gutter">
    <!-- Proposal Settings -->
    <div class="bg-surface-container-low border border-outline-variant rounded-xl p-md md:p-lg">
      <h3 class="mb-md font-label-sm text-label-sm uppercase tracking-wide text-primary">Proposal Settings</h3>
      <div class="mb-2.5">
        <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Proposal Title</label>
        <input type="text" id="propTitle" value="Service Proposal: Enterprise CRM Implementation" oninput="updateIdentity()"
          class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/15">
      </div>
      <div class="mb-2.5">
        <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Subject</label>
        <input type="text" id="propSubject" value="Digital Transformation &amp; CRM Integration" oninput="updateIdentity()"
          class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/15">
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 mb-2.5">
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Prepared For</label>
          <input type="text" id="propClient" value="Acme Corporation" oninput="updateIdentity()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/15">
        </div>
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Date</label>
          <input type="date" id="propDate" oninput="updateIdentity()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/15">
        </div>
      </div>
      <p class="font-body-sm text-body-sm text-outline">Title and subject appear once at the top of the document. The paragraph area below them is fully editable — use the toolbar above the preview to format it.</p>
    </div>

    <!-- Content Area Settings -->
    <div class="bg-surface-container-low border border-outline-variant rounded-xl p-md md:p-lg">
      <h3 class="mb-md font-label-sm text-label-sm uppercase tracking-wide text-primary">Content Area Settings</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 mb-2.5">
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Content Width</label>
          <select id="selWidth" onchange="onLayoutChange()" class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
            <option>50%</option><option>60%</option><option selected>70%</option>
            <option>80%</option><option>90%</option><option>100%</option>
          </select>
        </div>
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Content Height</label>
          <select id="selHeight" onchange="onLayoutChange()" class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
            <option>40%</option><option>50%</option><option>60%</option><option>70%</option>
            <option selected>80%</option><option>90%</option><option>100%</option>
          </select>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 mb-2.5">
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Page Alignment</label>
          <select id="selPageAlign" onchange="onLayoutChange()" class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
            <option value="flex-start">Left</option>
            <option value="center" selected>Center</option>
            <option value="flex-end">Right</option>
          </select>
        </div>
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Text Alignment</label>
          <select id="selTextAlign" onchange="onLayoutChange()" class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
            <option value="left" selected>Left</option>
            <option value="center">Center</option>
            <option value="right">Right</option>
            <option value="justify">Justify</option>
          </select>
        </div>
      </div>
      <div class="mb-2.5">
        <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Font Family</label>
        <select id="selFont" onchange="onLayoutChange()" class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
          <option value="'Inter', sans-serif" selected>Inter (Sans)</option>
          <option value="'Geist', sans-serif">Geist (Headline)</option>
          <option value="Georgia, serif">Georgia</option>
          <option value="'Times New Roman', serif">Times New Roman</option>
          <option value="Arial, sans-serif">Arial</option>
          <option value="'Courier New', monospace">Courier New</option>
        </select>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5 mb-2.5">
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Font Size (px)</label>
          <input type="number" id="inpFontSize" value="14" min="10" max="24" onchange="onLayoutChange()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
        </div>
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Line Height</label>
          <input type="number" id="inpLineHeight" value="1.65" step="0.05" min="1" max="2.4" onchange="onLayoutChange()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
        </div>
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Margins (mm)</label>
          <input type="number" id="inpMargin" value="0" min="0" max="20" onchange="onLayoutChange()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
        </div>
      </div>
      <div class="mb-2.5">
        <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Padding (mm)</label>
        <input type="number" id="inpPadding" value="8" min="0" max="24" onchange="onLayoutChange()"
          class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
      </div>
      <div>
        <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Maximum Pages (exact count shown)</label>
        <input type="number" id="inpMaxPages" value="2" min="1" max="20" onchange="onLayoutChange()"
          class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
        <p class="mt-2 font-body-sm text-body-sm text-outline">Exactly this many pages are always shown — short content leaves trailing pages blank, longer content is trimmed to fit. Use the "Add Page" button in the toolbar to force a break at the cursor.</p>
      </div>
    </div>

    <!-- Header & Footer Settings -->
    <div class="bg-surface-container-low border border-outline-variant rounded-xl p-md md:p-lg">
      <h3 class="mb-md font-label-sm text-label-sm uppercase tracking-wide text-primary">Header &amp; Footer (fixed on every page)</h3>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 mb-2.5">
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Logo Initial</label>
          <input type="text" id="hLogo" value="TC" maxlength="2" oninput="updateHeaderFooter()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
        </div>
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Company Name</label>
          <input type="text" id="hCompany" value="Three Coding" oninput="updateHeaderFooter()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
        </div>
      </div>
      <div class="mb-2.5">
        <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Address</label>
        <input type="text" id="hAddress" value="123 Innovation Way, Suite 500, San Francisco, CA 94107" oninput="updateHeaderFooter()"
          class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 mb-2.5">
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Phone</label>
          <input type="text" id="hPhone" value="+1 (555) 000-0000" oninput="updateHeaderFooter()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
        </div>
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Email</label>
          <input type="text" id="hEmail" value="hello@businessos.com" oninput="updateHeaderFooter()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
        </div>
      </div>
      <div class="mb-2.5">
        <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">Website</label>
        <input type="text" id="hWebsite" value="www.businessos.com" oninput="updateHeaderFooter()"
          class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">GST Number</label>
          <input type="text" id="fGST" value="27ABCDE1234F1Z5" oninput="updateHeaderFooter()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
        </div>
        <div>
          <label class="block mb-1 font-label-md text-label-md text-on-surface-variant">CIN Number</label>
          <input type="text" id="fCIN" value="U72900CA2015PTC123456" oninput="updateHeaderFooter()"
            class="w-full px-2.5 py-2 border border-outline-variant rounded font-body-sm text-body-sm bg-surface-container-lowest text-on-surface focus:outline-none focus:border-primary">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ============ RICH TEXT TOOLBAR ============ -->
<div class="print:hidden sticky top-[125px] z-30 flex items-center gap-0.5 overflow-x-auto whitespace-nowrap bg-surface-container-lowest border-b border-outline-variant px-md md:px-margin py-2" id="toolbar">
  <select class="mr-1 border border-outline-variant rounded font-body-sm text-body-sm px-2 py-1.5 bg-surface-container-lowest text-on-surface-variant" onmousedown="event.preventDefault()" onchange="exec('formatBlock', this.value); this.selectedIndex=0;">
    <option value="" selected disabled>Style</option>
    <option value="p">Paragraph</option>
    <option value="h1">Heading 1</option>
    <option value="h2">Heading 2</option>
    <option value="h3">Heading 3</option>
    <option value="h4">Heading 4</option>
    <option value="h5">Heading 5</option>
    <option value="h6">Heading 6</option>
  </select>
  <div class="w-px h-5 bg-outline-variant mx-1.5 shrink-0"></div>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="exec('bold')" title="Bold"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 4h8a4 4 0 010 8H6zM6 12h9a4 4 0 010 8H6z"/></svg></button>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="exec('italic')" title="Italic"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 4h-9M14 20H5M15 4L9 20"/></svg></button>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="exec('underline')" title="Underline"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 3v7a6 6 0 0012 0V3M4 21h16"/></svg></button>
  <div class="w-px h-5 bg-outline-variant mx-1.5 shrink-0"></div>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="exec('insertUnorderedList')" title="Bullet List"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="4" cy="6" r="1"/><circle cx="4" cy="12" r="1"/><circle cx="4" cy="18" r="1"/><path d="M9 6h11M9 12h11M9 18h11"/></svg></button>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="exec('insertOrderedList')" title="Numbered List"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 6h11M9 12h11M9 18h11"/><path d="M4 6h1v3M4 14h2M4 14a1 1 0 011-1M4 18h2a1 1 0 010 2H4"/></svg></button>
  <div class="w-px h-5 bg-outline-variant mx-1.5 shrink-0"></div>
  <input type="color" class="w-[30px] h-[30px] shrink-0 border border-outline-variant rounded p-0.5 bg-surface-container-lowest" title="Text Color" value="#004ac6" onmousedown="event.preventDefault()" oninput="exec('foreColor', this.value)">
  <input type="color" class="w-[30px] h-[30px] shrink-0 border border-outline-variant rounded p-0.5 bg-surface-container-lowest ml-1" title="Background Color" value="#dbe1ff" onmousedown="event.preventDefault()" oninput="exec('hiliteColor', this.value)">
  <div class="w-px h-5 bg-outline-variant mx-1.5 shrink-0"></div>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="insertLink()" title="Link"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 007 0l3-3a5 5 0 00-7-7l-1.5 1.5"/><path d="M14 11a5 5 0 00-7 0l-3 3a5 5 0 007 7l1.5-1.5"/></svg></button>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="insertImage()" title="Image"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M21 15l-5-5L5 21"/></svg></button>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="insertTable()" title="Table"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="1"/><path d="M3 9h18M3 15h18M9 3v18"/></svg></button>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="exec('insertHorizontalRule')" title="Horizontal Line"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 12h16"/></svg></button>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="exec('formatBlock', 'blockquote')" title="Quote"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 7h4v4H8c0 2-1 3-3 3v2c3 0 5-2 5-5V7z"/><path d="M15 7h4v4h-3c0 2-1 3-3 3v2c3 0 5-2 5-5V7z"/></svg></button>
  <div class="w-px h-5 bg-outline-variant mx-1.5 shrink-0"></div>
  <button id="addPageBtn" class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container disabled:opacity-40" onmousedown="event.preventDefault()" onclick="insertPageBreak()" title="Add Page (insert page break at cursor)"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M9 15h6M12 12v6"/></svg></button>
  <div class="w-px h-5 bg-outline-variant mx-1.5 shrink-0"></div>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="exec('undo')" title="Undo"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7v6h6"/><path d="M3 13a9 9 0 1015-6.7L3 13"/></svg></button>
  <button class="w-8 h-8 shrink-0 rounded flex items-center justify-center text-on-surface-variant hover:bg-surface-container" onmousedown="event.preventDefault()" onclick="exec('redo')" title="Redo"><svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 7v6h-6"/><path d="M21 13a9 9 0 10-15-6.7L21 13"/></svg></button>
</div>

<!-- ============ LIVE PREVIEW CANVAS ============ -->
<div id="canvas" class="print:p-0 flex flex-col items-center px-2 sm:px-4 py-6 sm:py-11 pb-16 sm:pb-24 overflow-x-auto">
  <div class="flex flex-col items-center" id="pagesContainer"></div>
</div>

<div id="measurer" class="absolute -left-[99999px] top-0 invisible h-auto"></div>
<div id="toast" class="fixed bottom-6 right-6 z-[100] flex items-center gap-2.5 bg-inverse-surface text-inverse-on-surface px-4 py-3 rounded-lg font-body-sm text-body-sm shadow-2xl translate-y-5 opacity-0 pointer-events-none transition-all duration-300">
  <span class="w-1.5 h-1.5 rounded-full bg-tertiary-fixed-dim"></span><span id="toastMsg">Saved</span>
</div>

<script>
/* ============================================================
   STATE
============================================================ */
const settings = {
  width:'70%', height:'80%', justify:'center', textAlign:'left',
  fontFamily:"'Inter', sans-serif", fontSize:14, lineHeight:1.65,
  margin:0, padding:8, maxPages:2
};
let panelCollapsed = false;
let truncationWarned = false;
let draftStore = null; // in-memory save (session only, no browser storage per platform rules)

const pagesContainer = document.getElementById('pagesContainer');
const canvasEl = document.getElementById('canvas');
const measurer = document.getElementById('measurer');
let repagTimer = null;
let scaleTimer = null;

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

document.getElementById('propDate').value = new Date().toISOString().slice(0,10);

/* ============================================================
   HEADER / FOOTER RENDER
============================================================ */
function headerHTML(){
  const logo = escapeHtml(val('hLogo')), company = escapeHtml(val('hCompany'));
  const addr = escapeHtml(val('hAddress')), phone = escapeHtml(val('hPhone'));
  const email = escapeHtml(val('hEmail')), site = escapeHtml(val('hWebsite'));
  return `
    <div class="flex gap-2.5 items-center">
      <div class="w-[34px] h-[34px] rounded-lg shrink-0 bg-primary text-on-primary font-headline-sm font-bold flex items-center justify-center text-[16px]">${logo}</div>
      <div>
        <div class="font-headline-sm text-on-surface font-semibold text-[15px] leading-tight">${company}</div>
        <div class="text-[8.5px] tracking-widest uppercase text-on-surface-variant mt-0.5">Enterprise Solutions</div>
      </div>
    </div>
    <div class="text-right text-[9.5px] text-on-surface-variant leading-[1.55]">
      <div>${addr}</div>
      <div>${phone} &nbsp;·&nbsp; ${email}</div>
      <div class="text-primary font-semibold">${site}</div>
    </div>`;
}
function footerHTML(pageNum, total){
  const addr = escapeHtml(val('hAddress')), gst = escapeHtml(val('fGST'));
  const cin = escapeHtml(val('fCIN')), site = escapeHtml(val('hWebsite'));
  return `
    <div class="max-w-[70%] leading-[1.5]">${addr} &nbsp;|&nbsp; GST ${gst} &nbsp;|&nbsp; CIN ${cin} &nbsp;|&nbsp; ${site}</div>
    <div class="text-right font-semibold text-primary">Page ${pageNum} of ${total}</div>`;
}
function titleBlockHTML(){
  const title = escapeHtml(val('propTitle')), subject = escapeHtml(val('propSubject'));
  const client = escapeHtml(val('propClient')), date = val('propDate');
  return `
    <div class="mb-3.5 pb-3 border-b border-outline-variant">
      <h2 class="font-headline-md text-headline-md text-on-surface mb-2">${title}</h2>
      <div class="font-label-md text-label-md text-primary">Subject: ${subject}</div>
      <div class="flex justify-between font-label-sm text-label-sm text-on-surface-variant gap-3 mt-2">
        <span>Prepared for: <b class="text-on-surface">${client}</b></span>
        <span>Date: <b class="text-on-surface">${formatDate(date)}</b></span>
      </div>
    </div>`;
}
function val(id){ return document.getElementById(id).value; }
function escapeHtml(s){ const d=document.createElement('div'); d.textContent=s; return d.innerHTML; }
function formatDate(iso){
  if(!iso) return '';
  const d = new Date(iso+'T00:00:00');
  return d.toLocaleDateString('en-US', {year:'numeric', month:'short', day:'numeric'});
}

function updateIdentity(){ repaginate(true); }
function updateHeaderFooter(){
  const pages = document.querySelectorAll('.a4-page');
  pages.forEach((pg, i)=>{
    pg.querySelector('.page-header').innerHTML = headerHTML();
    pg.querySelector('.page-footer').innerHTML = footerHTML(i+1, pages.length);
  });
}

/* ============================================================
   PAGE SKELETON  (Tailwind utility classes only — no custom CSS)
============================================================ */
function buildPageSkeleton(){
  const frame = document.createElement('div');
  frame.className = 'page-frame relative mx-auto mb-lg shrink-0';
  frame.innerHTML = `
    <div class="a4-page absolute top-0 left-0 origin-top-left w-[210mm] h-[297mm] bg-surface-container-lowest shadow-[0_1px_3px_rgba(20,30,50,.08),0_18px_45px_-12px_rgba(20,30,50,.28)] rounded overflow-hidden [page-break-after:always] last:[page-break-after:auto] print:shadow-none print:rounded-none">
      <div class="page-header absolute top-0 inset-x-0 h-[34mm] px-[12mm] pt-[9mm] border-b border-outline-variant flex justify-between items-start"></div>
      <div class="content-slot absolute top-[34mm] bottom-[16mm] inset-x-0 flex p-[12mm]">
        <div class="content-block relative overflow-hidden bg-surface-container-lowest text-on-surface focus-within:ring-2 focus-within:ring-primary-container focus-within:ring-inset">
          <div class="editable-inner h-full outline-none prose prose-sm max-w-none prose-headings:font-headline-sm prose-headings:text-on-surface prose-p:text-on-surface prose-strong:text-on-surface prose-a:text-primary prose-blockquote:border-primary prose-blockquote:text-on-surface-variant prose-th:border prose-th:border-outline-variant prose-td:border prose-td:border-outline-variant prose-li:text-on-surface" contenteditable="true" spellcheck="false"></div>
        </div>
        <span class="guide-label hidden absolute -translate-y-[130%] pointer-events-none font-code-sm text-[9.5px] text-primary bg-surface-container-lowest px-1.5 py-0.5 rounded border border-dashed border-primary"></span>
      </div>
      <div class="page-footer absolute bottom-0 inset-x-0 h-[16mm] px-[12mm] pb-[6mm] border-t border-outline-variant flex items-center justify-between font-code-sm text-[8px] text-on-surface-variant"></div>
    </div>`;
  return frame;
}
function positionGuideLabel(frame){
  const slot = frame.querySelector('.content-slot');
  const block = frame.querySelector('.content-block');
  const label = frame.querySelector('.guide-label');
  const slotRect = slot.getBoundingClientRect();
  const blockRect = block.getBoundingClientRect();
  label.style.left = Math.max(0, blockRect.left - slotRect.left) + 'px';
  label.style.top = '0px';
}

/* ============================================================
   RESPONSIVE PAGE SCALING (keeps true A4 px for pagination math,
   visually shrinks with a CSS transform so it fits small screens)
============================================================ */
function updatePageScale(){
  const pages = document.querySelectorAll('.a4-page');
  if(pages.length === 0) return;
  const naturalW = pages[0].offsetWidth;
  const naturalH = pages[0].offsetHeight;
  if(!naturalW || !naturalH) return; // not laid out yet — try again next tick
  const available = canvasEl.clientWidth - 24;
  let scale = available > 0 ? available / naturalW : 1;
  scale = Math.min(1, Math.max(scale, 0.18)); // never fully collapse; fall back to horizontal scroll instead
  document.querySelectorAll('.page-frame').forEach(frame=>{
    frame.style.width = Math.round(naturalW*scale) + 'px';
    frame.style.height = Math.round(naturalH*scale) + 'px';
  });
  pages.forEach(pg=>{ pg.style.transform = 'scale(' + scale + ')'; });
}
window.addEventListener('resize', ()=>{
  clearTimeout(scaleTimer);
  scaleTimer = setTimeout(updatePageScale, 150);
});
// also watch the canvas element itself — catches container/sidebar-driven width
// changes (e.g. embedded inside a CRM layout) that don't fire a window resize
if(typeof ResizeObserver !== 'undefined'){
  new ResizeObserver(()=>{
    clearTimeout(scaleTimer);
    scaleTimer = setTimeout(updatePageScale, 120);
  }).observe(canvasEl);
}
// safety net: re-run once fonts/styles have fully settled after first paint
if(document.fonts && document.fonts.ready){ document.fonts.ready.then(()=>setTimeout(updatePageScale, 50)); }
setTimeout(updatePageScale, 300);

/* ============================================================
   MEASUREMENT (uses h-full editable so it reflects real available space)
============================================================ */
function measureEditableHeight(withTitleBlock){
  const probeFrame = buildPageSkeleton();
  probeFrame.style.position = 'absolute';
  probeFrame.style.left = '-99999px';
  probeFrame.style.top = '0';
  if(withTitleBlock){
    const block = probeFrame.querySelector('.content-block');
    block.insertAdjacentHTML('afterbegin', titleBlockHTML());
  }
  const block = probeFrame.querySelector('.content-block');
  block.style.width = settings.width;
  block.style.height = settings.height;
  block.style.margin = settings.margin + 'mm';
  block.style.padding = settings.padding + 'mm';
  pagesContainer.appendChild(probeFrame);
  const editable = probeFrame.querySelector('.editable-inner');
  const h = editable.clientHeight;
  const w = editable.clientWidth;
  pagesContainer.removeChild(probeFrame);
  return {h, w};
}

/* ============================================================
   PAGINATION ENGINE
============================================================ */
function repaginate(preserveCaret){
  let markerId = null;
  if(preserveCaret){ markerId = insertCaretMarker(); }

  const editables = Array.from(document.querySelectorAll('.editable-inner'));
  let masterHTML = editables.map(e=>e.innerHTML).join('');
  if(!masterHTML || masterHTML.trim()===''){ masterHTML = initialBody; }

  const page1Dims = measureEditableHeight(true);
  const otherDims = measureEditableHeight(false);

  const temp = document.createElement('div');
  temp.innerHTML = masterHTML;
  const nodes = Array.from(temp.childNodes).filter(n => !(n.nodeType===3 && !n.textContent.trim()));
  nodes.forEach((n,i)=>{
    if(n.nodeType===3){
      const p = document.createElement('p'); p.textContent = n.textContent;
      nodes[i] = p;
    }
  });

  measurer.style.fontFamily = settings.fontFamily;
  measurer.style.fontSize = settings.fontSize + 'px';
  measurer.style.lineHeight = settings.lineHeight;
  measurer.style.textAlign = settings.textAlign;

  const pagesData = [];
  let buffer = [];
  let pageIndex = 0;

  function currentBudget(){ return pageIndex === 0 ? page1Dims.h : otherDims.h; }
  function currentWidth(){ return pageIndex === 0 ? page1Dims.w : otherDims.w; }

  measurer.innerHTML = '';
  measurer.style.width = currentWidth() + 'px';

  for(let i=0; i<nodes.length; i++){
    const node = nodes[i];

    if(node.nodeType===1 && node.classList && node.classList.contains('manual-break')){
      pagesData.push(buffer);
      buffer = [];
      pageIndex++;
      measurer.innerHTML = '';
      measurer.style.width = currentWidth() + 'px';
      continue;
    }

    measurer.appendChild(node.cloneNode(true));
    if(measurer.scrollHeight > currentBudget()){
      measurer.removeChild(measurer.lastChild);
      if(buffer.length === 0){
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
        i--;
      }
    } else {
      buffer.push(node);
    }
  }
  if(buffer.length > 0 || pagesData.length === 0){ pagesData.push(buffer); }

  const maxPages = Math.max(1, parseInt(settings.maxPages, 10) || 2);
  const isTruncated = pagesData.length > maxPages;
  if(isTruncated){
    const kept = pagesData.slice(0, maxPages - 1);
    const overflowNodes = pagesData.slice(maxPages - 1).reduce((acc, arr)=>acc.concat(arr), []);
    kept.push(overflowNodes);
    pagesData.length = 0;
    pagesData.push(...kept);
  }
  // always show exactly "Maximum Pages" pages — pad with blank pages if content is shorter
  while(pagesData.length < maxPages){ pagesData.push([]); }
  if(isTruncated && !truncationWarned){
    showToast('Content exceeds ' + maxPages + ' page(s) — extra content is hidden. Raise Maximum Pages or trim the text.');
    truncationWarned = true;
  } else if(!isTruncated){
    truncationWarned = false;
  }
  const addBtn = document.getElementById('addPageBtn');
  addBtn.disabled = pagesData.length >= maxPages;

  pagesContainer.innerHTML = '';
  const total = pagesData.length;
  const guidesOn = document.getElementById('chkGuides').checked;

  pagesData.forEach((nodeList, idx)=>{
    const frame = buildPageSkeleton();
    const page = frame.querySelector('.a4-page');
    page.querySelector('.page-header').innerHTML = headerHTML();
    page.querySelector('.page-footer').innerHTML = footerHTML(idx+1, total);

    const slot = frame.querySelector('.content-slot');
    const block = frame.querySelector('.content-block');
    const editable = frame.querySelector('.editable-inner');
    slot.style.justifyContent = settings.justify;
    block.style.width = settings.width;
    block.style.height = settings.height;
    block.style.margin = settings.margin + 'mm';
    block.style.padding = settings.padding + 'mm';
    editable.style.fontFamily = settings.fontFamily;
    editable.style.fontSize = settings.fontSize + 'px';
    editable.style.lineHeight = settings.lineHeight;
    editable.style.textAlign = settings.textAlign;

    if(idx === 0){ block.insertAdjacentHTML('afterbegin', titleBlockHTML()); }
    const wrap = document.createElement('div');
    nodeList.forEach(n=>wrap.appendChild(n.cloneNode(true)));
    editable.innerHTML = wrap.innerHTML;

    const label = frame.querySelector('.guide-label');
    label.textContent = settings.width + ' × ' + settings.height;

    if(isTruncated && idx === total - 1){
      const warn = document.createElement('div');
      warn.className = 'absolute inset-x-[12mm] bottom-[calc(16mm+4px)] z-10 text-center font-code-sm text-[9px] text-on-error bg-error-container border border-error rounded px-2 py-0.5';
      warn.textContent = 'Content truncated — raise Maximum Pages or trim text';
      page.appendChild(warn);
    }

    pagesContainer.appendChild(frame);
    positionGuideLabel(frame);
    if(guidesOn){
      block.classList.add('border','border-dashed','border-primary');
      label.classList.remove('hidden');
    }
  });

  updatePageScale();

  if(preserveCaret && markerId){ restoreCaretMarker(markerId); }
}

/* ---------- caret marker helpers ---------- */
function insertCaretMarker(){
  const sel = window.getSelection();
  if(!sel || sel.rangeCount===0) return null;
  const range = sel.getRangeAt(0);
  const active = document.activeElement;
  if(!active || !active.classList || !active.classList.contains('editable-inner')) return null;
  const marker = document.createElement('span');
  marker.id = '__caret_marker__';
  marker.style.display='inline-block';
  range.insertNode(marker);
  return marker.id;
}
function restoreCaretMarker(id){
  const marker = document.getElementById(id);
  if(!marker){ return; }
  const editable = marker.closest('.editable-inner');
  const range = document.createRange();
  range.setStartBefore(marker);
  range.collapse(true);
  marker.remove();
  const sel = window.getSelection();
  sel.removeAllRanges();
  sel.addRange(range);
  if(editable) editable.focus();
}

/* ============================================================
   EVENT DELEGATION — typing
============================================================ */
pagesContainer.addEventListener('input', ()=>{
  clearTimeout(repagTimer);
  repagTimer = setTimeout(()=>repaginate(true), 450);
});

let lastFocusedEditable = null;
pagesContainer.addEventListener('focusin', (e)=>{
  if(e.target.classList && e.target.classList.contains('editable-inner')) lastFocusedEditable = e.target;
});

/* ============================================================
   TOOLBAR COMMANDS
============================================================ */
function exec(cmd, value){
  if(lastFocusedEditable) lastFocusedEditable.focus();
  document.execCommand(cmd, false, value || null);
}
function insertLink(){
  const url = prompt('Enter URL:', 'https://');
  if(url) exec('createLink', url);
}
function insertImage(){
  const url = prompt('Enter image URL:', 'https://');
  if(url) exec('insertImage', url);
}
function insertPageBreak(){
  if(lastFocusedEditable) lastFocusedEditable.focus();
  const html = '<div class="manual-break my-2.5 border-t-2 border-dashed border-primary relative text-center" contenteditable="false"><span class="absolute -top-[9px] left-3 bg-surface-container-lowest text-primary font-code-sm text-[9px] uppercase tracking-wide px-1.5">Page Break</span></div><p><br></p>';
  document.execCommand('insertHTML', false, html);
  repaginate(true);
}
function insertTable(){
  let html = '<table>';
  for(let r=0;r<3;r++){
    html += '<tr>';
    for(let c=0;c<3;c++){ html += r===0 ? '<th>Header</th>' : '<td>Cell</td>'; }
    html += '</tr>';
  }
  html += '</table><p><br></p>';
  exec('insertHTML', html);
}

/* ============================================================
   LAYOUT SETTINGS CHANGE
============================================================ */
function onLayoutChange(){
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
  repaginate(false);
}

/* ============================================================
   PANEL / GUIDES TOGGLES
============================================================ */
function togglePanel(){
  panelCollapsed = !panelCollapsed;
  document.getElementById('panel').classList.toggle('hidden', panelCollapsed);
  document.getElementById('panelToggleIcon').style.transform = panelCollapsed ? 'rotate(-90deg)' : '';
}
function toggleGuides(on){
  document.querySelectorAll('.content-block').forEach(b=>{
    b.classList.toggle('border', on);
    b.classList.toggle('border-dashed', on);
    b.classList.toggle('border-primary', on);
  });
  document.querySelectorAll('.guide-label').forEach(l=> l.classList.toggle('hidden', !on));
}

/* ============================================================
   ACTION BUTTONS
============================================================ */
function showToast(msg){
  const t = document.getElementById('toast');
  document.getElementById('toastMsg').textContent = msg;
  t.classList.remove('opacity-0','translate-y-5','pointer-events-none');
  clearTimeout(t._timer);
  t._timer = setTimeout(()=>t.classList.add('opacity-0','translate-y-5','pointer-events-none'), 2600);
}
function saveDraft(){
  draftStore = {
    settings: {...settings},
    header: { logo:val('hLogo'), company:val('hCompany'), address:val('hAddress'), phone:val('hPhone'), email:val('hEmail'), website:val('hWebsite'), gst:val('fGST'), cin:val('fCIN') },
    identity: { title:val('propTitle'), subject:val('propSubject'), client:val('propClient'), date:val('propDate') },
    pages: document.querySelectorAll('.editable-inner').length,
    savedAt: new Date().toISOString()
  };
  showToast('Draft saved for this session · ' + draftStore.pages + ' page(s)');
}
function togglePreview(on){
  document.getElementById('panelWrap').classList.toggle('hidden', on);
  document.getElementById('toolbar').classList.toggle('hidden', on);
  document.querySelectorAll('.hide-in-preview').forEach(el=>el.classList.toggle('hidden', on));
  const exitBtn = document.getElementById('exitPreviewBtn');
  exitBtn.classList.toggle('hidden', !on);
  exitBtn.classList.toggle('flex', on);
  if(on) window.scrollTo({top:0, behavior:'smooth'});
  setTimeout(updatePageScale, 50);
}
function sendProposal(){
  showToast('Proposal sent to ' + val('propClient'));
}
async function downloadPDF(){
  showToast('Preparing PDF…');
  const btn = document.querySelector('[onclick="downloadPDF()"]');
  if(btn) btn.disabled = true;

  // Capture each physical page as its own image and place it on its own PDF
  // page directly — rather than handing one tall composite canvas to a
  // "pagebreak" auto-slicer (which is what was cropping/misaligning content).
  const frames = Array.from(pagesContainer.querySelectorAll('.page-frame'));
  const pages = Array.from(pagesContainer.querySelectorAll('.a4-page'));
  const editables = Array.from(pagesContainer.querySelectorAll('.editable-inner'));
  const blocks = Array.from(pagesContainer.querySelectorAll('.content-block'));
  const guideLabels = Array.from(pagesContainer.querySelectorAll('.guide-label'));
  const wasGuidesOn = document.getElementById('chkGuides').checked;

  const prevFrame = frames.map(f => ({ w: f.style.width, h: f.style.height, mb: f.style.marginBottom }));
  const prevTransform = pages.map(p => p.style.transform);
  const prevEditable = editables.map(e => e.getAttribute('contenteditable'));
  const prevGuideDisplay = guideLabels.map(l => l.style.display);

  guideLabels.forEach(l => l.style.display = 'none');
  blocks.forEach(b => b.classList.remove('border','border-dashed','border-primary'));
  editables.forEach(e => e.setAttribute('contenteditable','false'));
  // undo the responsive on-screen scaling — export at true, full A4 size
  frames.forEach(f => { f.style.width = '210mm'; f.style.height = '297mm'; f.style.marginBottom = '0'; });
  pages.forEach(p => { p.style.transform = 'none'; });

  const restore = ()=>{
    frames.forEach((f,i)=>{ f.style.width = prevFrame[i].w; f.style.height = prevFrame[i].h; f.style.marginBottom = prevFrame[i].mb; });
    pages.forEach((p,i)=>{ p.style.transform = prevTransform[i]; });
    editables.forEach((e,i)=>{ prevEditable[i]===null ? e.removeAttribute('contenteditable') : e.setAttribute('contenteditable', prevEditable[i]); });
    guideLabels.forEach((l,i)=>{ l.style.display = prevGuideDisplay[i]; });
    if(wasGuidesOn){ toggleGuides(true); }
    updatePageScale();
    if(btn) btn.disabled = false;
  };

  try{
    const fontsReady = (document.fonts && document.fonts.ready) ? document.fonts.ready : Promise.resolve();
    await fontsReady;
    // give the browser two paint frames to actually apply the un-scaled sizing above
    await new Promise(r => requestAnimationFrame(()=> requestAnimationFrame(r)));

    const { jsPDF } = window.jspdf;
    const pdf = new jsPDF({ unit:'mm', format:'a4', orientation:'portrait' });

    for(let i=0; i<pages.length; i++){
      const pageEl = pages[i];
      const canvas = await html2canvas(pageEl, {
        scale: 2,
        useCORS: true,
        backgroundColor: '#ffffff',
        width: pageEl.offsetWidth,
        height: pageEl.offsetHeight,
        windowWidth: pageEl.offsetWidth,
        windowHeight: pageEl.offsetHeight
      });
      const imgData = canvas.toDataURL('image/jpeg', 0.98);
      if(i > 0) pdf.addPage();
      pdf.addImage(imgData, 'JPEG', 0, 0, 210, 297);
    }

    pdf.save((val('propTitle')||'proposal').replace(/[^a-z0-9]+/gi,'_').toLowerCase() + '.pdf');
    showToast('PDF downloaded');
  } catch(err){
    console.error('PDF export failed:', err);
    showToast('PDF export failed — try Print instead');
  } finally {
    restore();
  }
}

/* ============================================================
   BOOT
============================================================ */
repaginate(false);
</script>
</body>
</html>