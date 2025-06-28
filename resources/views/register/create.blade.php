<x-layouts.auth>
    <div class="space-y-2">
        <x-input label="اسم المستخدم" icon="icon-[tabler--user]" />
        <x-input label="البريد الالكتروني" icon="icon-[tabler--mail]" type="email" />
        <x-input label="كلمة المرور" icon="icon-[tabler--lock]" type="password" />
        <x-input label="تأكيد كلمة المرور" icon="icon-[tabler--lock-check]" type="password" />

        <button class="btn btn-primary w-full mt-8">تسجيل حساب</button>
        <span>
            عندك حساب؟
            <a href="/login" class="link link-animated">سجل دخول</a>
        </span>
    </div>
</x-layouts.auth>