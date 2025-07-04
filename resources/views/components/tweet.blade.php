@props([
    'tweet',
])

<a href="{{ route('tweet.view', $tweet->id) }}">
    <div class="card">
        <div class="card-body">
            <p class="mb-4">{{ $tweet->content }}</p>
            <div class="card-actions flex justify-between">
                <button class="btn btn-text btn-square">
                    <span class="icon-[tabler--message]"></span>
                </button>
                <a class="flex items-end link link-animated">
                    <div class="mx-2">
                        {{ $tweet->user->name }}
                    </div>
                    <div class="avatar">
                        <div class="size-8 rounded-full">
                            <img src="/storage/{{ $tweet->user->avatar }}" alt="avatar" />
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</a>