<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Details Booking') }}
            </h2>
        </div>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg gap-y-5">
                
                <div class="flex flex-row items-center justify-between item-card">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{ Storage::url($hotelBooking->hotel->thumbnail) }}" alt="" class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div class="flex flex-col">
                            <h3 class="text-xl font-bold text-indigo-950">
                                {{ $hotelBooking->hotel->name }}
                            </h3>
                        <p class="text-sm text-slate-500">
                            {{ $hotelBooking->hotel->city->name }}, {{ $hotelBooking->hotel->country->name }}
                        </p>
                        </div>
                    </div> 
                    {{--  <div  class="flex-col hidden md:flex">
                        <p class="text-sm text-slate-500">Price</p>
                        <h3 class="text-xl font-bold text-indigo-950">
                            Rp {{ number_format($hotelBooking->room->price, 0, ',', '.') }}/night
                        </h3>
                    </div>   --}}
                    @if (!$hotelBooking->is_paid)
                        <form action="{{ route('admin.hotel_bookings.update', $hotelBooking) }}" method="POST">
                            @csrf
                            @method('PATCH') 
                            <button type="submit" class="px-6 py-4 font-bold text-white bg-indigo-700 rounded-full">
                                Approve
                            </button>
                        </form>
                    @endif 
                </div>

                <div class="flex flex-row items-center justify-between item-card">
                    <div class="flex flex-row items-center gap-x-3">
                        <img src="{{ Storage::url($hotelBooking->room->photo) }}" alt="" class="rounded-2xl object-cover w-[120px] h-[90px]">
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">
                            Your Room
                            </p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                {{ $hotelBooking->room->name }}
                            </h3>
                        </div>
                    </div> 
                    <div  class="flex-col hidden md:flex">
                        <p class="text-sm text-slate-500">Price</p>
                        <h3 class="text-xl font-bold text-indigo-950">
                            Rp {{ number_format($hotelBooking->room->price, 0, ',', '.') }}/night
                        </h3>
                    </div> 
                </div>

                <hr class="my-5">

                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Status</p>

                                @if ($hotelBooking->is_paid)
                                    <span class="px-3 py-2 text-sm font-bold text-white bg-green-500 rounded-full w-fit">
                                        SUCCESS
                                    </span>
                                @else
                                    <span class="px-3 py-2 text-sm font-bold text-white bg-orange-500 rounded-full w-fit">
                                        PENDING
                                    </span> 
                                @endif
                        </div>

                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Name</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                {{ $hotelBooking->customer->name }}
                            </h3>
                        </div>
        
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Email</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                 {{ $hotelBooking->customer->email }}
                            </h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Quantity</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                 {{ $hotelBooking->room->total_people }} people
                            </h3>
                        </div>
        
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Total Nights</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                 {{ $hotelBooking->total_days }}
                            </h3>
                        </div>
        
                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Date</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                {{ $hotelBooking->checkin_at->format('M d, Y') }} - {{ $hotelBooking->checkout_at->format('M d, Y') }}
                            </h3>
                        </div>

                    </div>
                </div>

                <hr class="my-5">

                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-y-4">

                        <div class="flex flex-col">
                            <p class="text-sm text-slate-500">Total Amount</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                Rp {{ number_format($hotelBooking->total_amount, 0, ',', '.') }}
                            </h3>
                        </div>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <h3 class="text-xl font-bold text-indigo-950">
                            Bukti Pembayaran
                        </h3>
        
                        <img src="{{ Storage::url($hotelBooking->proof) }}" alt="" class="rounded-2xl object-cover w-[300px] h-[200px]">
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
