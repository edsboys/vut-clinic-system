<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <body class="min-h-screen bg-cover bg-center text-white" style="background-image: url('/images/img11.jpg');">

        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-black/70 p-8 rounded-xl shadow-2xl w-full max-w-md">
                <h1 class="text-3xl font-bold mb-6 text-center">Login to VUT Clinic</h1>

                @if(session('error'))
                    <div class="bg-red-500 p-3 rounded mb-4 text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <label for="email">Student Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                            class="block w-full p-2 rounded" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                            class="block w-full p-2 rounded" />
                    </div>

                    <!-- Login Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="w-full py-2 px-4 bg-yellow-400 text-black font-semibold rounded hover:bg-yellow-500 transition">Login</button>
                    </div>

                    <!-- Validate Errors-->
                    @if ($errors->any())
                        <ul class="px-4 py-2 mt-4 bg-red-100">
                            @foreach ($errors->all() as $error)
                                <li class="my-2 text-red-500">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                </form>
            </div>
        </div>
</x-guest-layout>