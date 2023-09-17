<div>
    @if($is_mobile_device)
        <div class="bg-black px-4 py-3 text-white mb-5">
            <p class="text-center text-sm font-medium">
                <a href="#" class="inline-block underline">You are browsing using mobile device from {{ $browser }}</a>
            </p>
        </div>
    @endif
</div>