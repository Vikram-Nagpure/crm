<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login | Business OS</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono&amp;family=Geist:wght@400;600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "inverse-primary": "#b4c5ff",
                    "tertiary-fixed": "#6ffbbe",
                    "on-secondary-fixed-variant": "#38485d",
                    "inverse-surface": "#2e3132",
                    "on-tertiary-fixed": "#002113",
                    "on-secondary-container": "#54647a",
                    "surface-bright": "#f8f9fa",
                    "error-container": "#ffdad6",
                    "outline-variant": "#c3c6d7",
                    "surface-container-high": "#e7e8e9",
                    "surface-variant": "#e1e3e4",
                    "background": "#f8f9fa",
                    "on-primary": "#ffffff",
                    "surface": "#f8f9fa",
                    "secondary": "#505f76",
                    "primary-fixed": "#dbe1ff",
                    "on-error": "#ffffff",
                    "secondary-fixed-dim": "#b7c8e1",
                    "on-primary-fixed": "#00174b",
                    "surface-container": "#edeeef",
                    "tertiary-fixed-dim": "#4edea3",
                    "inverse-on-surface": "#f0f1f2",
                    "on-error-container": "#93000a",
                    "on-background": "#191c1d",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-tertiary-fixed-variant": "#005236",
                    "tertiary-container": "#007d55",
                    "surface-tint": "#0053db",
                    "secondary-container": "#d0e1fb",
                    "primary-container": "#2563eb",
                    "on-tertiary": "#ffffff",
                    "outline": "#737686",
                    "on-surface": "#191c1d",
                    "surface-dim": "#d9dadb",
                    "secondary-fixed": "#d3e4fe",
                    "on-secondary-fixed": "#0b1c30",
                    "primary": "#004ac6",
                    "tertiary": "#006242",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-primary-container": "#eeefff",
                    "surface-container-highest": "#e1e3e4",
                    "error": "#ba1a1a",
                    "surface-container-low": "#f3f4f5",
                    "on-tertiary-container": "#bdffdb",
                    "surface-container-lowest": "#ffffff",
                    "on-surface-variant": "#434655",
                    "on-secondary": "#ffffff"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "2xl": "48px",
                    "xs": "4px",
                    "sm": "8px",
                    "margin": "24px",
                    "lg": "24px",
                    "base": "4px",
                    "xl": "32px",
                    "md": "16px",
                    "gutter": "20px"
                },
                "fontFamily": {
                    "body-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "body-sm": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-sm": ["Geist"],
                    "headline-md": ["Geist"],
                    "headline-lg": ["Geist"],
                    "code-sm": ["JetBrains Mono"],
                    "label-sm": ["Inter"],
                    "display": ["Geist"]
                },
                "fontSize": {
                    "body-lg": ["18px", {
                        "lineHeight": "28px",
                        "fontWeight": "400"
                    }],
                    "label-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "500"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
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
                    "code-sm": ["13px", {
                        "lineHeight": "18px",
                        "fontWeight": "400"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
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
    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
        display: inline-block;
        vertical-align: middle;
    }

    .login-card {
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .input-focus-ring:focus {
        outline: none;
        border-color: #2563EB;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
    }

    .auth-divider::before,
    .auth-divider::after {
        content: "";
        flex: 1;
        height: 1px;
        background-color: #E5E7EB;
    }
    </style>
</head>

<body class="bg-surface-container-low min-h-screen flex items-center justify-center p-md font-body-md text-on-surface">
    <!-- Subtle Background Pattern/Atmosphere -->
    <div class="fixed inset-0 pointer-events-none opacity-40 overflow-hidden">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] rounded-full bg-primary-fixed blur-[120px]"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] rounded-full bg-secondary-fixed blur-[120px]">
        </div>
    </div>
    <main class="relative z-10 w-full max-w-[440px]">
        <!-- Login Card -->
        <div
            class="login-card bg-surface-container-lowest border border-outline-variant rounded-xl p-xl flex flex-col gap-xl">
            <!-- Brand & Header -->
            <div class="flex flex-col items-center text-center gap-md">
                <div class="w-12 h-12 bg-primary-container rounded-lg flex items-center justify-center shadow-sm">
                    <span class="material-symbols-outlined text-on-primary-container text-[32px]"
                        style="font-variation-settings: 'FILL' 1;">
                        business_center
                    </span>
                </div>
                <div class="flex flex-col gap-xs">
                    <h1 class="font-headline-md text-headline-md text-on-surface tracking-tight">Business OS</h1>
                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Welcome back</h2>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-[280px]">Enter your credentials to
                        access your workspace.</p>
                </div>
            </div>
            <!-- Login Form -->
            <form class="flex flex-col gap-lg" onsubmit="return false;">
                <!-- Email Field -->
                <div class="flex flex-col gap-sm">
                    <label class="font-label-md text-label-md text-on-surface-variant" for="email">Email Address</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">
                            mail
                        </span>
                        <input
                            class="w-full pl-xl pr-md py-md bg-surface border border-outline-variant rounded-lg font-body-md text-body-md input-focus-ring transition-all placeholder:text-outline"
                            id="email" placeholder="name@company.com" type="email" />
                    </div>
                </div>
                <!-- Password Field -->
                <div class="flex flex-col gap-sm">
                    <div class="flex justify-between items-center">
                        <label class="font-label-md text-label-md text-on-surface-variant"
                            for="password">Password</label>
                        <a class="font-label-sm text-label-sm text-primary hover:underline transition-all"
                            href="#">Forgot password?</a>
                    </div>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">
                            lock
                        </span>

                        <input
                            id="password"
                            type="password"
                            placeholder="••••••••"
                            class="w-full pl-xl pr-xl py-md bg-surface border border-outline-variant rounded-lg font-body-md text-body-md">

                        <button
                            id="togglePassword"
                            type="button"
                            class="absolute right-md top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-on-surface">
                            <span id="eyeIcon" class="material-symbols-outlined text-[20px]">
                                visibility
                            </span>
                        </button>
                    </div>
                </div>
                <!-- Remember Me (Extra UX detail) -->
                <div class="flex items-center gap-sm">
                    <input
                        class="w-4 h-4 rounded border-outline-variant text-primary-container focus:ring-primary-container"
                        id="remember" type="checkbox" />
                    <label class="font-body-sm text-body-sm text-on-surface-variant cursor-pointer"
                        for="remember">Remember me for 30 days</label>
                </div>
                <!-- Submit Button -->
                <a href="otpverify.php"
                    class="w-full bg-primary-container text-on-primary-container font-label-md text-label-md py-md rounded-lg hover:opacity-90 active:scale-[0.98] transition-all shadow-sm flex items-center justify-center gap-sm">
                    Sign In
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </form>
          
            <!-- Social Login -->
            
            <!-- Footer -->
            <p class="text-center font-body-sm text-body-sm text-on-surface-variant">
                Don't have an account? <a class="text-primary font-semibold hover:underline" href="singup.php">Contact your
                    administrator.</a>
            </p>
        </div>
        <!-- Security Footer -->
        <div class="mt-xl flex items-center justify-center gap-xl text-outline font-label-sm text-label-sm">
            <div class="flex items-center gap-xs">
                <span class="material-symbols-outlined text-[16px]">verified_user</span>
                Encrypted Connection
            </div>
            <div class="flex items-center gap-xs">
                <span class="material-symbols-outlined text-[16px]">public</span>
                v2.4.0-Enterprise
            </div>
        </div>
    </main>
   <script>
document.addEventListener("DOMContentLoaded", function () {

    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");
    const eyeIcon = document.getElementById("eyeIcon");

    togglePassword.addEventListener("click", function () {

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.textContent = "visibility_off";
        } else {
            passwordInput.type = "password";
            eyeIcon.textContent = "visibility";
        }

    });

});
</script>
</body>

</html>