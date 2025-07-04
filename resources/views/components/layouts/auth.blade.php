<x-layouts.default>
    <div class="flex flex-col justify-center items-center min-h-screen">
        <div class="mb-12">
            <a class="link text-base-content link-neutral text-3xl font-bold no-underline flex items-end" href="/">
                <span>عصفور</span>
                <span class="icon-[tabler--brand-twitter] size-12"></span>
            </a>
        </div>
        <div>
            {{ $slot }}
        </div>
    </div>
</x-layouts.default>