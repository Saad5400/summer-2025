<x-layouts.default>
    <div class="flex flex-col justify-center items-center min-h-[100vh]">
        <div class="mb-12">
            <a href="/" class="font-bold text-4xl link link-animated">
                عصفور
            </a>
        </div>
        <div>
            {{ $slot }}
        </div>
    </div>
</x-layouts.default>