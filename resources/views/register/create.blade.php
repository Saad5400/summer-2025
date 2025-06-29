<x-layouts.auth>
    <form class="space-y-2">
        <x-input id="name" minLength="3" label="اسم المستخدم" icon="icon-[tabler--user]" />
        <x-input id="email" label="البريد الالكتروني" icon="icon-[tabler--mail]" type="email" />
        <x-input id="password" minLength="8" label="كلمة المرور" icon="icon-[tabler--lock]" type="password" />
        <x-input id="password_confirmation" minLength="8" label="تأكيد كلمة المرور" icon="icon-[tabler--lock-check]"
            type="password" />

        <button type="submit" class="btn btn-primary w-full mt-8">تسجيل حساب</button>
        <span>
            عندك حساب؟
            <a href="/login" class="link link-animated">سجل دخول</a>
        </span>
    </form>
</x-layouts.auth>