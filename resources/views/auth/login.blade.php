<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoonFunds | Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Space Grotesk', sans-serif;
            background-color: #0f0f1e;
            color: #ffffff;
            overflow-x: hidden;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #1a103c 0%, #2b1e5a 100%);
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            border-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .glow-text {
            color: #ffffff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        .btn-primary {
            background: linear-gradient(90deg, #8A2BE2 0%, #4B0082 100%);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #9B30FF 0%, #5B0099 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(138, 43, 226, 0.4);
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        .shine-effect {
            position: relative;
            overflow: hidden;
        }

        .shine-effect::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0) 40%,
                rgba(255, 255, 255, 0.4) 50%,
                rgba(255, 255, 255, 0) 60%,
                rgba(255, 255, 255, 0) 100%
            );
            pointer-events: none;
            transform: rotate(30deg);
            animation: shine 6s infinite linear;
        }

        @keyframes shine {
            0% {
                left: -100%;
                top: -100%;
            }
            100% {
                left: 100%;
                top: 100%;
            }
        }

        .planet-bg {
            position: fixed;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle at 30% 30%, #8A2BE2, #1a103c);
            filter: blur(60px);
            opacity: 0.15;
            z-index: -1;
            top: -250px;
            right: -250px;
        }

        .planet-bg-2 {
            position: fixed;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle at 70% 70%, #4B0082, #1a103c);
            filter: blur(50px);
            opacity: 0.1;
            z-index: -1;
            bottom: -200px;
            left: -200px;
        }

        .star {
            position: absolute;
            width: 2px;
            height: 2px;
            background-color: white;
            border-radius: 50%;
            opacity: 0.8;
            animation: twinkle 5s infinite;
        }

        @keyframes twinkle {
            0% { opacity: 0.2; }
            50% { opacity: 0.8; }
            100% { opacity: 0.2; }
        }

        .form-input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 12px 16px;
            color: white;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(138, 43, 226, 0.5);
            box-shadow: 0 0 0 2px rgba(138, 43, 226, 0.2);
            outline: none;
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        .invalid-feedback {
            color: #ff6b6b;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
            padding-left: 30px;
            cursor: pointer;
            display: inline-block;
        }

        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }

        .custom-checkbox:hover input ~ .checkmark {
            background: rgba(255, 255, 255, 0.1);
        }

        .custom-checkbox input:checked ~ .checkmark {
            background: #8A2BE2;
            border-color: #8A2BE2;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .custom-checkbox input:checked ~ .checkmark:after {
            display: block;
        }

        .custom-checkbox .checkmark:after {
            left: 7px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .nav-link {
            position: relative;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background: linear-gradient(90deg, #8A2BE2 0%, #4B0082 100%);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover:after,
        .nav-link.active:after {
            width: 70%;
        }

        .nav-link.active {
            color: white;
            font-weight: 500;
        }
    </style>
</head>
<body>
<!-- Stars Background -->
<div id="stars-container"></div>
<div class="planet-bg"></div>
<div class="planet-bg-2"></div>

<div class="container mx-auto px-4">
    <div class="flex flex-col items-center">
        <!-- Logo and Navigation -->
        <div class="w-full max-w-md mb-8 animate__animated animate__fadeIn">
            <div class="flex items-center justify-center mb-8">
                <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mr-3 floating">
                    <span class="text-white text-xl font-bold">M</span>
                </div>
                <span class="text-3xl font-bold glow-text">MoonFunds</span>
            </div>

            <div class="flex justify-center space-x-6">
                <a href="#" class="nav-link active text-white">Sign In</a>
            </div>
        </div>

        <!-- Login Form Card -->
        <div class="card w-full max-w-md p-8 shine-effect animate__animated animate__fadeInUp">
            <h1 class="text-2xl font-bold mb-2 text-center">Welcome Back!</h1>
            <p class="text-gray-400 text-center mb-8">Please enter your credentials to access your account</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
{{--                            <i class="fas fa-envelope text-gray-500"></i>--}}
                        </div>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            class="form-input w-full pl-10"
                            placeholder="Enter your email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus
                        />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <!-- Error message placeholder -->
                    <div class="hidden invalid-feedback">Please enter a valid email address</div>
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
{{--                            <i class="fas fa-lock text-gray-500"></i>--}}
                        </div>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-input w-full pl-10"
                            placeholder="Enter your password"
                            required autocomplete="current-password"
                        />
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <i class="fas fa-eye text-gray-500 cursor-pointer" id="toggle-password"></i>
                        </div>
                    </div>
                    <!-- Error message placeholder -->
                    <div class="hidden invalid-feedback">Password must be at least 8 characters</div>
                </div>

                <div class="flex items-center justify-between mb-6">
                    <label class="custom-checkbox text-sm">
                        Remember me
                        <input type="checkbox" name="remember">
                        <span class="checkmark"></span>
                    </label>
                    <a href="#" class="text-purple-400 text-sm hover:text-purple-300 transition">Forgot Password?</a>
                </div>

                <button type="submit" class="btn-primary w-full py-3 rounded-lg font-medium">
                    Sign In <i class="fas fa-arrow-right ml-2"></i>
                </button>
            </form>

        </div>

        <!-- Footer -->
        <div class="mt-8 text-gray-500 text-sm text-center animate__animated animate__fadeIn animate__delay-1s">
            <p>© 2025 MoonFunds. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-2">
                <a href="#" class="hover:text-gray-300 transition">Privacy Policy</a>
                <a href="#" class="hover:text-gray-300 transition">Terms of Service</a>
                <a href="#" class="hover:text-gray-300 transition">Help Center</a>
            </div>
        </div>
    </div>
</div>

<script>
    // Generate stars in the background
    function generateStars() {
        const container = document.getElementById('stars-container');
        for (let i = 0; i < 100; i++) {
            const star = document.createElement('div');
            star.classList.add('star');
            star.style.left = `${Math.random() * 100}%`;
            star.style.top = `${Math.random() * 100}%`;
            star.style.animationDelay = `${Math.random() * 5}s`;
            container.appendChild(star);
        }
    }
    generateStars();

    // Toggle password visibility
    document.getElementById('toggle-password').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Toggle icon
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

    // Simple form validation example
    document.querySelector('form').addEventListener('submit', function(e) {

        // Simulate successful login with animation
        const button = this.querySelector('button[type="submit"]');
        button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Signing In...';
        button.disabled = true;

    });
</script>
</body>
</html>
