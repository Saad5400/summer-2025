@props([
    'tweet',
])

<div class="card">
        <div class="card-body py-4 px-7">
            <p>{{ $tweet->content }}</p>
        </div>
   <div class="card-actions p-4 pt-0 flex justify-between items-center">
        <a 
            @if ($tweet->id == request()->tweet?->id)
                disabled
            @endif
            href="{{ route('tweet.view', $tweet->id) }}" 
            class="btn btn-text btn-square"
        >
            <span class="icon-[tabler--message]"></span>
        </a>
        <a class="flex btn btn-text">
            <div>
                {{ $tweet->user->name }}
            </div>
            <div class="avatar">
                <div class="size-6 rounded-box">
                    <img src="/storage/{{ $tweet->user->avatar }}" alt="avatar" />
                </div>
            </div>
        </a>
    </div>
</div>
