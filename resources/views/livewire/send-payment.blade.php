<div>

        <div class="mb-4 wow animate__animatedanimated animate__fadeInUp" data-wow-delay=".3s">
            <input disabled class="w-full p-4 text-xs font-semibold leading-none bg-blueGray-50 rounded outline-none" type="email" value="{{number_format($price)}} RWF">
        </div>
        <div class="mb-4 text-sm wow animate__animatedanimated animate__fadeInUp" data-wow-delay=".5s">

        </div>

        <div class="mb-4 wow animate__animatedanimated animate__fadeInUp" data-wow-delay=".3s">
            <input wire:model="payment_phone"  class="w-full p-4 text-xs font-semibold leading-none bg-blueGray-50 rounded outline-none" type="text" placeholder="078......">
        </div>

        <div class="flex justify-between items-center wow animate__animatedanimated animate__fadeInUp" data-wow-delay=".3s">
            <button wire:loading.attr="disabled" wire:click="process_pay" class="py-4 px-8 text-sm text-white font-semibold leading-none bg-blue-500 hover:bg-blue-700 rounded" type="submit">Confirm payment of {{number_format($price)}} RWF</button>
            <div wire:loading wire:target="process_pay"><img src="{{asset('assets/imgs/loader.gif')}}" alt=""></div>
        </div>
    <br>You can pay via <b>57658</b> momo pay (NKOTANYI)
</div>
