<div>
   @if($is_edit_mode_on)
        <x-custom-modal>
            <div class="bg-white max-w-2xl mx-auto rounded-md mt-10">
                <!-- Header -->
                <div class="p-5 flex justify-between border-b">
                    <h1>Edit {{ $attendance->employee->user->name ?? '' }}</h1>
                    <span wire:click.debounce="cancelEditMode" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </div>

                <!-- Body -->
                <div class="p-7 max-w-2xl">
                    <!-- Validation errors -->
                    <x-errors />


                </div>

            </div>
        </x-custom-modal>

        <!-- Loader -->
        <x-loader wire:loading wire:target="cancelEditMode, updateAttendanceHandeler" />
   @endif
</div>
