@extends('partials.defaultHeader')
@section('title', 'Login')

@section('content')

    <!-- Login Page -->
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded shadow">
            <h2 class="text-2xl font-bold mb-6 text-center">تسجيل الدخول</h2>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 mb-2">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email" required
                        class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="example@mail.com">
                </div>

                @if ($errors->has('email'))
                    <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                @endif

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 mb-2">كلمة المرور</label>
                    <input type="password" id="password" name="password" required
                        class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="********">
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="mr-2">
                    <label for="remember" class="text-gray-700">تذكرني</label>
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded font-semibold">
                    تسجيل الدخول
                </button>
            </form>
            <p class="text-center text-gray-600 mt-4">
                ليس لديك حساب؟ <a href="/register" class="text-blue-500 hover:underline">إنشاء حساب</a>
            </p>
        </div>
    </div>
@endsection
