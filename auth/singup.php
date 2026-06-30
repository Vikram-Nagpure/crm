<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sign Up | Business OS</title>
    <!-- Tailwind CSS with plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Google Fonts: Geist & Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
    @font-face {
        font-family: 'Geist';
        src: url('https://cdn.jsdelivr.net/npm/geist-font@1.1.0/fonts/geist-sans/Geist-Medium.woff2') format('woff2');
        font-weight: 500;
    }

    @font-face {
        font-family: 'Geist';
        src: url('https://cdn.jsdelivr.net/npm/geist-font@1.1.0/fonts/geist-sans/Geist-SemiBold.woff2') format('woff2');
        font-weight: 600;
    }

    @font-face {
        font-family: 'Geist';
        src: url('https://cdn.jsdelivr.net/npm/geist-font@1.1.0/fonts/geist-sans/Geist-Bold.woff2') format('woff2');
        font-weight: 700;
    }

    .material-symbols-outlined {
        font-variation-settings: 'FILL'0, 'wght'400, 'GRAD'0, 'opsz'24;
        vertical-align: middle;
    }
    </style>
    <script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "secondary": "#505f76",
                    "on-secondary-fixed": "#0b1c30",
                    "surface-container-low": "#f3f4f5",
                    "on-tertiary-fixed-variant": "#005236",
                    "on-surface": "#191c1d",
                    "on-secondary": "#ffffff",
                    "secondary-fixed-dim": "#b7c8e1",
                    "surface-bright": "#f8f9fa",
                    "inverse-surface": "#2e3132",
                    "on-secondary-container": "#54647a",
                    "on-tertiary": "#ffffff",
                    "surface-container-high": "#e7e8e9",
                    "error-container": "#ffdad6",
                    "surface-variant": "#e1e3e4",
                    "outline-variant": "#c3c6d7",
                    "on-primary-container": "#eeefff",
                    "secondary-container": "#d0e1fb",
                    "surface-container-lowest": "#ffffff",
                    "surface": "#f8f9fa",
                    "error": "#ba1a1a",
                    "secondary-fixed": "#d3e4fe",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-error": "#ffffff",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-tertiary-container": "#bdffdb",
                    "inverse-primary": "#b4c5ff",
                    "primary-container": "#2563eb",
                    "on-primary-fixed": "#00174b",
                    "tertiary-fixed": "#6ffbbe",
                    "surface-container-highest": "#e1e3e4",
                    "primary-fixed": "#dbe1ff",
                    "on-primary": "#ffffff",
                    "on-surface-variant": "#434655",
                    "tertiary-container": "#007d55",
                    "tertiary": "#006242",
                    "tertiary-fixed-dim": "#4edea3",
                    "on-tertiary-fixed": "#002113",
                    "on-background": "#191c1d",
                    "surface-dim": "#d9dadb",
                    "on-error-container": "#93000a",
                    "surface-container": "#edeeef",
                    "outline": "#737686",
                    "inverse-on-surface": "#f0f1f2",
                    "on-secondary-fixed-variant": "#38485d",
                    "surface-tint": "#0053db",
                    "primary": "#004ac6",
                    "background": "#f8f9fa"
                },
                "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
                "spacing": {
                    "xs": "4px",
                    "xl": "32px",
                    "margin": "24px",
                    "2xl": "48px",
                    "lg": "24px",
                    "gutter": "20px",
                    "base": "4px",
                    "md": "16px",
                    "sm": "8px"
                },
                "fontFamily": {
                    "display": ["Geist", "sans-serif"],
                    "body-sm": ["Inter", "sans-serif"],
                    "label-md": ["Inter", "sans-serif"],
                    "headline-lg": ["Geist", "sans-serif"],
                    "headline-md": ["Geist", "sans-serif"],
                    "body-md": ["Inter", "sans-serif"],
                    "headline-sm": ["Geist", "sans-serif"],
                    "label-sm": ["Inter", "sans-serif"]
                },
                "fontSize": {
                    "display": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "body-sm": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
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
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "body-md": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "headline-sm": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "600"
                    }],
                    "label-sm": ["12px", {
                        "lineHeight": "16px",
                        "fontWeight": "600"
                    }]
                }
            },
        },
    }
    </script>
</head>

<body class="bg-background font-body-md text-on-surface min-h-screen flex flex-col">
    <!-- Subtle Background Decoration -->
    <div class="fixed inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-[10%] -left-[10%] w-[40%] h-[40%] bg-primary/5 rounded-full blur-[120px]"></div>
        <div class="absolute -bottom-[10%] -right-[10%] w-[40%] h-[40%] bg-secondary/5 rounded-full blur-[120px]"></div>
    </div>
    <!-- Main Content Shell -->
    <main class="relative z-10 flex-grow flex items-center justify-center p-margin">
        <!-- Auth Card -->
        <div
            class="w-full max-w-[480px] bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm transition-all duration-300">
            <!-- Card Header -->
            <div class="pt-2xl px-xl pb-lg text-center">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-primary rounded-lg mb-md">
                    <span class="material-symbols-outlined text-on-primary text-[28px]"
                        style="font-variation-settings: 'FILL' 1;">deployed_code</span>
                </div>
                <h1 class="font-headline-md text-headline-md text-on-surface mb-xs">Create your workspace</h1>
                <p class="font-body-sm text-body-sm text-on-surface-variant">Start your 14-day free trial. No credit
                    card required.</p>
            </div>
            <!-- Card Body / Form -->
            <div class="px-xl pb-xl">
                <form class="space-y-lg" id="signup-form">
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="full_name">Company
                            Name</label><span class="text-red-500">*</span>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">person</span>
                            <input
                                class="w-full pl-10 pr-md py-[10px] bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all outline-none text-body-md"
                                id="full_name" name="full_name" placeholder="Three Coding" required="" type="text" />
                        </div>
                    </div>
                    <!-- Full Name -->
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="full_name">Full
                            Name</label><span class="text-red-500">*</span>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">person</span>
                            <input
                                class="w-full pl-10 pr-md py-[10px] bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all outline-none text-body-md"
                                id="full_name" name="full_name" placeholder="John Doe" required="" type="text" />
                        </div>
                    </div>
                    <!-- Mobile Number -->
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="mobile">
                            Mobile Number
                        </label><span class="text-red-500">*</span>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">
                                call
                            </span>

                            <input
                                class="w-full pl-10 pr-md py-[10px] bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all outline-none text-body-md"
                                id="mobile"
                                name="mobile"
                                type="tel"
                                maxlength="10"
                                pattern="[0-9]{10}"
                                placeholder="9876543210"
                                required>
                        </div>
                    </div>
                    <!-- Work Email -->
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="work_email">Work
                            Email</label><span class="text-red-500">*</span>
                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">mail</span>
                            <input
                                class="w-full pl-10 pr-md py-[10px] bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-4 focus:ring-primary/10 focus:border-primary transition-all outline-none text-body-md"
                                id="work_email" name="work_email" placeholder="name@company.com" required=""
                                type="email" />
                        </div>
                    </div>
                    <!-- Password -->
                    <!-- Password -->
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface-variant" for="password">
                            Password
                        </label><span class="text-red-500">*</span>

                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">
                                lock
                            </span>

                            <input
                                id="password"
                                name="password"
                                type="password"
                                placeholder="••••••••"
                                minlength="8"
                                required
                                pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&^#()_+\-=\[\]{};':&quot;\\|,.<>\/?])[A-Za-z\d@$!%*?&^#()_+\-=\[\]{};':&quot;\\|,.<>\/?]{8,}$"
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
                        <p id="passwordError" class="text-red-500 text-sm mt-2 hidden"></p>
                    
                    </div>
                    
                    <!-- Action Button -->
                    <a href="otpverify.php" id="createAccountBtn"
                        class="block w-full bg-primary-container text-on-primary-container py-md px-lg rounded-lg text-center">
                            Create Account
                    </a>
                   
                </form>
                <!-- Footer Link -->
                <div class="mt-xl text-center">
                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                        Already have an account?
                        <a class="text-primary font-semibold hover:underline decoration-primary/30 transition-all"
                            href="login.php">login</a>
                    </p>
                </div>
            </div>
            <!-- Terms -->
            <div class="bg-surface-container-low px-xl py-md border-t border-outline-variant">
                <p class="text-[11px] text-center text-outline leading-relaxed">
                    By creating an account, you agree to our
                    <a class="underline hover:text-on-surface-variant" href="#">Terms of Service</a> and
                    <a class="underline hover:text-on-surface-variant" href="#">Privacy Policy</a>.
                </p>
            </div>
        </div>


        
    </main>
    <!-- Footer Space -->
    <footer class="relative z-10 py-lg text-center">
        <p class="font-label-sm text-label-sm text-outline">© 2024 Business OS. All rights reserved.</p>
    </footer>

    <!-- Toast -->
<div id="toast"
    class="fixed top-5 right-5 z-50 hidden min-w-[300px] bg-green-500 text-white px-5 py-3 rounded-lg shadow-lg transition-all duration-300">
    <div class="flex items-center gap-2">
        <span class="material-symbols-outlined">check_circle</span>
        <span id="toastMessage">Success Message</span>
    </div>
</div>
    <script>
    // Toggle Workspace Name Field
    const workspaceCheckbox = document.getElementById('custom_workspace');
    const workspaceField = document.getElementById('workspace_field');

    workspaceCheckbox.addEventListener('change', (e) => {
        if (e.target.checked) {
            workspaceField.classList.remove('hidden');
            workspaceField.classList.add('block');
        } else {
            workspaceField.classList.add('hidden');
            workspaceField.classList.remove('block');
        }
    });

    // Form Submission Interaction
    const form = document.getElementById('signup-form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = e.target.querySelector('button[type="submit"]');
        const originalText = btn.innerHTML;

        btn.disabled = true;
        btn.innerHTML =
            `<span class="material-symbols-outlined animate-spin">progress_activity</span> Setting up workspace...`;

        setTimeout(() => {
            btn.innerHTML =
                `<span class="material-symbols-outlined">check_circle</span> Welcome to Business OS!`;
            btn.classList.replace('bg-primary-container', 'bg-tertiary');
            btn.classList.replace('text-on-primary-container', 'text-on-tertiary');

            // Mock redirect after success
            setTimeout(() => {
                alert('Signup Success! Welcome to your new Business OS workspace.');
                btn.disabled = false;
                btn.innerHTML = originalText;
                btn.classList.replace('bg-tertiary', 'bg-primary-container');
                btn.classList.replace('text-on-tertiary', 'text-on-primary-container');
            }, 1000);
        }, 2000);
    });

    </script>

   <script>
document.addEventListener("DOMContentLoaded", function () {

    // Password Show / Hide
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");
    const eyeIcon = document.getElementById("eyeIcon");
    const passwordError = document.getElementById("passwordError");

    togglePassword.addEventListener("click", function () {

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.textContent = "visibility_off";
        } else {
            passwordInput.type = "password";
            eyeIcon.textContent = "visibility";
        }

    });

    // Strong Password Validation
    passwordInput.addEventListener("input", function () {

        const password = this.value;

        const strongPassword =
            /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).{8,}$/;

        if (password === "") {
            passwordError.classList.add("hidden");
            return;
        }

        if (!strongPassword.test(password)) {

            passwordError.classList.remove("hidden");
            passwordError.innerHTML =
                "Password must contain at least 8 characters, 1 uppercase letter, 1 lowercase letter, 1 number and 1 special character.";

            passwordInput.classList.add("border-red-500");
        } else {

            passwordError.classList.add("hidden");
            passwordInput.classList.remove("border-red-500");
            passwordInput.classList.add("border-green-500");
        }

    });

});
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // Elements
    const passwordInput = document.getElementById("password");
    const togglePassword = document.getElementById("togglePassword");
    const eyeIcon = document.getElementById("eyeIcon");
    const passwordError = document.getElementById("passwordError");
    const createBtn = document.getElementById("createAccountBtn");

    // Toast Function
    function showToast(message, type = "success") {

        const toast = document.getElementById("toast");
        const toastMessage = document.getElementById("toastMessage");
        const toastIcon = document.getElementById("toastIcon");

        toastMessage.textContent = message;

        toast.classList.remove(
            "hidden",
            "bg-green-500",
            "bg-red-500",
            "bg-yellow-500"
        );

        if (type === "success") {
            toast.classList.add("bg-green-500");
            toastIcon.textContent = "check_circle";
        } else if (type === "error") {
            toast.classList.add("bg-red-500");
            toastIcon.textContent = "error";
        } else {
            toast.classList.add("bg-yellow-500");
            toastIcon.textContent = "warning";
        }

        setTimeout(() => {
            toast.classList.add("hidden");
        }, 3000);
    }

    // Password Show / Hide
    togglePassword.addEventListener("click", function () {

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.textContent = "visibility_off";
        } else {
            passwordInput.type = "password";
            eyeIcon.textContent = "visibility";
        }

    });

    // Strong Password Validation
    passwordInput.addEventListener("input", function () {

        const password = this.value;

        const strongPassword =
            /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).{8,}$/;

        if (password === "") {
            passwordError.classList.add("hidden");
            passwordInput.classList.remove(
                "border-red-500",
                "border-green-500"
            );
            return;
        }

        if (!strongPassword.test(password)) {

            passwordError.classList.remove("hidden");
            passwordError.innerHTML =
                "Password must contain 8+ characters, uppercase, lowercase, number and special character.";

            passwordInput.classList.add("border-red-500");
            passwordInput.classList.remove("border-green-500");

        } else {

            passwordError.classList.add("hidden");

            passwordInput.classList.remove("border-red-500");
            passwordInput.classList.add("border-green-500");
        }
    });

    // Create Account Click
    createBtn.addEventListener("click", function (e) {

        e.preventDefault();

        const password = passwordInput.value;

        const strongPassword =
            /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\w\s]).{8,}$/;

        if (!strongPassword.test(password)) {

            passwordError.classList.remove("hidden");

            passwordError.innerHTML =
                "Password must contain 8+ characters, uppercase, lowercase, number and special character.";

            showToast("Invalid Password", "error");

            return;
        }

        showToast("Account validation successful", "success");

        setTimeout(() => {
            window.location.href = "otpverify.php";
        }, 1500);

    });

});
</script>
</body>

</html>