<x-layouts.auth>
    <div class="space-y-2">
        <div class="input-floating w-96">
            <input type="email" placeholder="example@xyz.com" class="input" id="floatingInput" />
            <label class="input-floating-label" for="floatingInput">البريد الالكتروني</label>
        </div>
        <div class="input-floating w-96">
            <input type="password" placeholder="********" class="input" id="floatingInput" />
            <label class="input-floating-label" for="floatingInput">كلمة المرور</label>
        </div>

        <button class="btn btn-primary w-full mt-8">تسجيل دخول</button>
        <span>
            ما عندك حساب؟
            <a href="/register" class="link link-animated">سجل حساب</a>
        </span>
    </div>
</x-layouts.auth>