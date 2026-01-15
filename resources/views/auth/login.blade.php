<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Panel</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/apex favicon.jpeg') }}">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gradient-to-br from-indigo-500 to-purple-600 min-h-screen flex items-center justify-center p-5" x-data="{ showPassword: false }">
    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden max-w-md w-full animate-fade-in-up">
        <!-- Header -->
        <div class="bg-gradient-to-br from-indigo-500 to-purple-600 py-10 px-8 text-center text-white">
            <h1 class="text-3xl font-bold mb-2">Admin Panel</h1>
            <p class="text-sm opacity-90">Sign in to access the dashboard</p>
        </div>

        <!-- Body -->
        <div class="p-10">
            @if(session('success'))
                <div class="bg-emerald-100 border border-emerald-300 text-emerald-800 px-4 py-3 rounded-lg mb-5 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-100 border border-red-300 text-red-800 px-4 py-3 rounded-lg mb-5 text-sm">
                    @foreach($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        class="w-full px-4 py-3 border-2 {{ $errors->has('email') ? 'border-red-500' : 'border-gray-200' }} rounded-lg text-sm transition-all duration-300 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                        required 
                        autofocus
                    >
                    @error('email')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input 
                            :type="showPassword ? 'text' : 'password'"
                            id="password" 
                            name="password" 
                            class="w-full px-4 py-3 border-2 {{ $errors->has('password') ? 'border-red-500' : 'border-gray-200' }} rounded-lg text-sm transition-all duration-300 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-100"
                            required
                        >
                        <button 
                            type="button" 
                            @click="showPassword = !showPassword"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
                        >
                            <svg x-show="!showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                            <svg x-show="showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                            </svg>
                        </button>
                    </div>
                    @error('password')
                        <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center mb-6">
                    <input 
                        type="checkbox" 
                        id="remember" 
                        name="remember"
                        class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:ring-2 cursor-pointer"
                    >
                    <label for="remember" class="ml-2 text-sm text-gray-600 cursor-pointer">Remember me</label>
                </div>

                <button 
                    type="submit" 
                    class="w-full py-3.5 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-lg text-base font-semibold transition-all duration-300 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-indigo-500/50 active:translate-y-0"
                >
                    Sign In
                </button>
            </form>

            {{-- <div class="bg-gray-50 p-4 rounded-lg mt-5 text-xs text-gray-600">
                <h4 class="mb-2 text-gray-700 text-sm font-medium">🔐 Demo Credentials:</h4>
                <p class="my-1"><strong class="text-gray-900">Superadmin:</strong> kaito.kid@gmail.com</p>
                <p class="my-1"><strong class="text-gray-900">Password:</strong> password123</p>
            </div> --}}
        </div>
    </div>

    <style>
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fade-in-up 0.5s ease-out;
        }
    </style>
</body>
</html>
