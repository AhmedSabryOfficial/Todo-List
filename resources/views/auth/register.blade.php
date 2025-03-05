@extends('partials.defaultHeader')
@section('title', 'Register')

@section('content')

    <!-- Register Page -->
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md bg-white p-8 rounded shadow">
            <h2 class="text-2xl font-bold mb-6 text-center">إنشاء حساب</h2>
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 mb-2">الاسم الكامل</label>
                    <input type="text" id="name" name="name"
                        class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="الاسم الكامل">
                    @if ($errors->has('name'))
                        <span class="text-red-500 text-sm">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 mb-2">البريد الإلكتروني</label>
                    <input type="email" id="email" name="email"
                        class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="example@mail.com">
                    @if ($errors->has('email'))
                        <span class="text-red-500 text-sm">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 mb-2">كلمة المرور</label>
                    <input type="password" id="password" name="password"
                        class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="********">
                    @if ($errors->has('password'))
                        <span class="text-red-500 text-sm">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 mb-2">تأكيد كلمة المرور</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="********">
                    @if ($errors->has('password_confirmation'))
                        <span class="text-red-500 text-sm">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>
                <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white py-2 rounded font-semibold">
                    إنشاء الحساب
                </button>
            </form>
            <p class="text-center text-gray-600 mt-4">
                لديك حساب؟ <a href="/login" class="text-blue-500 hover:underline">تسجيل الدخول</a>
            </p>
        </div>
    </div>
@endsection
