<div>
   @if($is_show_single_day_overtime_list)
        <x-custom-modal>
            <div class="bg-white max-w-4xl mx-auto rounded-md mt-10">
                <!-- Header -->
                <div class="p-5 flex justify-between border-b">
                    <h1>Collable Overtime List</h1>
                    <span wire:click.debounce="cancelModal" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </div>

                <!-- Body -->
                <div class="p-7">
                    <!-- Validation errors -->
                    <x-errors />


                    <!--Overtimes List -->
                    @if(count($overtimes) > 0)
                        <div class="relative overflow-x-auto mt-5">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Date
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Day
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Start
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            End
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Overtime
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($overtimes ?? [] as $overtime)
                                        <tr class="group bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $overtime->created_at->format('d M Y') }}
                                            </th>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $overtime->created_at->format('D') }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $overtime->employee->user->name ?? '' }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $overtime->start_at->format('h:i A') ?? '' }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $overtime->end_at->format('h:i A') ?? '' }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $overtime->overtime ?? 0 }} minutes
                                            </td>
                                            <td class="px-6 py-4">
                                                @if($overtime->status === 'pending')
                                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Pending</span>
                                                @elseif($overtime->status === 'accepted')
                                                    <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Accepted</span>
                                                @elseif($overtime->status === 'canceled')
                                                    <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Canceled</span>
                                                @endif
                                            </td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else 
                        <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                            <span class="font-medium">This day overtime list is empty!</span>
                        </div>
                    @endif
                </div>

            </div>
        </x-custom-modal>

        <!-- Loader -->
        <x-loader wire:loading wire:target="cancelModal" />
   @endif
</div>
