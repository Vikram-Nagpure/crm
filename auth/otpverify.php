<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Verify Your Email | Business OS</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;family=JetBrains+Mono:wght@100..800&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "error": "#ba1a1a",
                    "secondary-fixed": "#d3e4fe",
                    "tertiary": "#006242",
                    "secondary": "#505f76",
                    "primary-fixed-dim": "#b4c5ff",
                    "surface-dim": "#d9dadb",
                    "secondary-fixed-dim": "#b7c8e1",
                    "on-tertiary-container": "#bdffdb",
                    "background": "#f8f9fa",
                    "surface-container-highest": "#e1e3e4",
                    "on-tertiary": "#ffffff",
                    "on-secondary-container": "#54647a",
                    "surface-container-low": "#f3f4f5",
                    "tertiary-fixed": "#6ffbbe",
                    "on-primary-container": "#eeefff",
                    "on-secondary-fixed-variant": "#38485d",
                    "secondary-container": "#d0e1fb",
                    "surface-container-lowest": "#ffffff",
                    "on-primary-fixed": "#00174b",
                    "surface-variant": "#e1e3e4",
                    "on-secondary-fixed": "#0b1c30",
                    "inverse-on-surface": "#f0f1f2",
                    "surface-bright": "#f8f9fa",
                    "primary-container": "#2563eb",
                    "on-tertiary-fixed": "#002113",
                    "on-tertiary-fixed-variant": "#005236",
                    "outline-variant": "#c3c6d7",
                    "on-secondary": "#ffffff",
                    "inverse-primary": "#b4c5ff",
                    "tertiary-fixed-dim": "#4edea3",
                    "on-surface": "#191c1d",
                    "on-background": "#191c1d",
                    "primary-fixed": "#dbe1ff",
                    "on-surface-variant": "#434655",
                    "outline": "#737686",
                    "tertiary-container": "#007d55",
                    "surface": "#f8f9fa",
                    "surface-container": "#edeeef",
                    "inverse-surface": "#2e3132",
                    "on-primary": "#ffffff",
                    "surface-container-high": "#e7e8e9",
                    "error-container": "#ffdad6",
                    "surface-tint": "#0053db",
                    "on-error": "#ffffff",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-error-container": "#93000a",
                    "primary": "#004ac6"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "md": "16px",
                    "gutter": "20px",
                    "lg": "24px",
                    "xs": "4px",
                    "margin": "24px",
                    "base": "4px",
                    "sm": "8px",
                    "2xl": "48px",
                    "xl": "32px"
                },
                "fontFamily": {
                    "body-sm": ["Inter"],
                    "display": ["Geist"],
                    "label-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-lg": ["Geist"],
                    "headline-sm": ["Geist"],
                    "headline-lg-mobile": ["Geist"],
                    "code-sm": ["JetBrains Mono"],
                    "headline-md": ["Geist"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"]
                },
                "fontSize": {
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }],
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
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
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }]
                }
            },
        },
    }
    </script>
    <style>
    body {
        background-color: #F9FAFB;
        font-family: 'Inter', sans-serif;
    }

    .otp-input:focus {
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        border-color: #2563EB;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
    }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-md relative overflow-hidden">
    <!-- Atmospheric Background Element -->
    <div class="absolute inset-0 z-0 opacity-40 pointer-events-none">

    </div>
    <main class="w-full max-w-[480px] z-10">
        <!-- Verification Card -->
        <div class="glass-card border border-outline-variant rounded-xl p-xl shadow-sm transition-all duration-300">
            <!-- Branding -->
            <div class="flex flex-col items-center mb-xl">
                <div class="bg-primary-container p-sm rounded-lg mb-md">
                    <span class="material-symbols-outlined text-on-primary-container text-[32px]">shield_person</span>
                </div>
                <h1 class="font-headline-md text-headline-md text-on-surface tracking-tight">Business OS</h1>
            </div>
            <!-- Header Content -->
            <div class="text-center mb-xl">
                <h2 class="font-headline-sm text-headline-sm text-on-surface mb-sm">Verify your email</h2>
                <p class="font-body-md text-body-md text-secondary">
                    We've sent a 6-digit verification code to 
                    <!-- <span
                        class="font-semibold text-on-surface">name@company.com</span> -->
                </p>
            </div>
            <!-- OTP Input Section -->
            <form class="space-y-xl" id="otp-form">
                <div class="flex justify-between gap-sm md:gap-md" id="otp-container">
                    <input aria-label="Digit 1"
                        class="otp-input w-full aspect-square text-center font-headline-md text-headline-md rounded-lg border border-outline-variant bg-white focus:outline-none transition-all"
                        maxlength="1" pattern="\d*" type="text" />
                    <input aria-label="Digit 2"
                        class="otp-input w-full aspect-square text-center font-headline-md text-headline-md rounded-lg border border-outline-variant bg-white focus:outline-none transition-all"
                        maxlength="1" pattern="\d*" type="text" />
                    <input aria-label="Digit 3"
                        class="otp-input w-full aspect-square text-center font-headline-md text-headline-md rounded-lg border border-outline-variant bg-white focus:outline-none transition-all"
                        maxlength="1" pattern="\d*" type="text" />
                    <input aria-label="Digit 4"
                        class="otp-input w-full aspect-square text-center font-headline-md text-headline-md rounded-lg border border-outline-variant bg-white focus:outline-none transition-all"
                        maxlength="1" pattern="\d*" type="text" />
                    <input aria-label="Digit 5"
                        class="otp-input w-full aspect-square text-center font-headline-md text-headline-md rounded-lg border border-outline-variant bg-white focus:outline-none transition-all"
                        maxlength="1" pattern="\d*" type="text" />
                    <input aria-label="Digit 6"
                        class="otp-input w-full aspect-square text-center font-headline-md text-headline-md rounded-lg border border-outline-variant bg-white focus:outline-none transition-all"
                        maxlength="1" pattern="\d*" type="text" />
                </div>
                <!-- Resend Timer -->
                <div class="text-center">
                    <p class="font-label-md text-label-md text-secondary" id="timer-text">
                        Didn't receive the code? Resend in <span class="font-code-sm text-code-sm text-primary"
                            id="countdown">0:59</span>
                    </p>
                    <button class="hidden font-label-md text-label-md text-primary hover:underline transition-all"
                        id="resend-btn" type="button">
                        Resend verification code
                    </button>
                </div>
                <!-- Primary Action -->
                <a href="../index.php"
                    class="block w-full bg-primary-container text-on-primary-container font-label-md text-label-md py-md rounded-lg hover:brightness-110 active:scale-[0.98] transition-all shadow-md text-center">
                    Verify Account
                </a>
            </form>
            <!-- Back to Login -->
            <div class="mt-xl pt-lg border-t border-outline-variant text-center">
                <a class="inline-flex items-center gap-xs font-label-md text-label-md text-secondary hover:text-primary transition-colors"
                    href="login.php">
                    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    Back to Login
                </a>
            </div>
        </div>
        <!-- Security Footer -->
        <p class="text-center mt-xl font-label-sm text-label-sm text-secondary">
            © 2024 SaaS Enterprise. Secure encrypted verification.
        </p>
    </main>
    <script>
    // OTP Input Logic
    const inputs = document.querySelectorAll('.otp-input');
    const form = document.getElementById('otp-form');

    inputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (e.target.value.length > 1) {
                e.target.value = e.target.value.slice(0, 1);
            }
            if (e.target.value && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && !e.target.value && index > 0) {
                inputs[index - 1].focus();
            }
        });

        // Handle Paste
        input.addEventListener('paste', (e) => {
            e.preventDefault();
            const pasteData = e.clipboardData.getData('text').slice(0, 6).split('');
            pasteData.forEach((char, i) => {
                if (inputs[i]) inputs[i].value = char;
            });
            if (inputs[pasteData.length]) {
                inputs[pasteData.length].focus();
            } else {
                inputs[5].focus();
            }
        });
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const code = Array.from(inputs).map(i => i.value).join('');
        if (code.length === 6) {
            // Success Interaction
            const btn = form.querySelector('button[type="submit"]');
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span> Verifying...';
            btn.disabled = true;
            setTimeout(() => {
                btn.classList.replace('bg-primary-container', 'bg-tertiary-container');
                btn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> Verified';
            }, 1500);
        }
    });

    // Countdown Timer Logic
    let timeLeft = 59;
    const countdownEl = document.getElementById('countdown');
    const timerText = document.getElementById('timer-text');
    const resendBtn = document.getElementById('resend-btn');

    const timer = setInterval(() => {
        if (timeLeft <= 0) {
            clearInterval(timer);
            timerText.classList.add('hidden');
            resendBtn.classList.remove('hidden');
        } else {
            timeLeft--;
            const seconds = timeLeft < 10 ? '0' + timeLeft : timeLeft;
            countdownEl.textContent = `0:${seconds}`;
        }
    }, 1000);

    resendBtn.addEventListener('click', () => {
        // Reset logic mockup
        resendBtn.classList.add('hidden');
        timerText.classList.remove('hidden');
        timeLeft = 59;
        countdownEl.textContent = '0:59';
        // Re-run interval logic would go here
    });
    </script>
</body>

</html>