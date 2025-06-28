<x-layouts.auth>
    <div class="space-y-2">
        <x-input label="البريد الالكتروني" icon="icon-[tabler--mail]" type="email" />
        <x-input label="كلمة المرور" icon="icon-[tabler--lock]" type="password" />

        <button class="btn btn-primary w-full mt-8">تسجيل دخول</button>
        <span>
            ما عندك حساب؟
            <a href="/register" class="link link-animated">سجل حساب</a>
        </span>
    </div>
</x-layouts.auth>