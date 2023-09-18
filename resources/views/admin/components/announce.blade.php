<div>
    @if($is_mobile_device)
        <div class="bg-black px-4 py-3 text-white mb-5">
            <p class="text-center text-sm font-medium">
                <a href="#" class="inline-block underline">You are browsing by {{ $device }} device using {{ $browser }} browser on {{ $platform }} </a>
            </p>
        </div>
    @endif
</div>