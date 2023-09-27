<div class="w-1/3 p-4 mx-auto mt-16 bg-white rounded-lg" x-on:click.away="openModal=false">
    <div class="flex justify-between">
        <h2 class="text-xl font-semibold">Send Money</h2>
        <button class="flex items-center justify-center w-6 h-6 text-white bg-red-700 rounded-lg"
            x-on:click="openModal=false ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>

        </button>
    </div>
    @if (session()->has('message'))
        <div class="mt-4 font-semibold text-green-600">
            {{ session('message') }}
        </div>
    @endif

    <div class="mt-4">
        <x-input-label for="ac_no" :value="__('Account Number')" />
        @if (isset($error['account_number']))
            <div class="text-xs font-semibold text-red-600">{{ $error['account_number'] }}</div>
        @endif
        <x-text-input id="ac_no" wire:model='account_number' class="block w-full mt-1" type="number" />
    </div>

    <div class="mt-4">
        <x-input-label for="bank" :value="__('Select Bank')" />
        <select name="bank" id="bank"
            class="block w-full border-gray-300 rounded-md shadow-sm focus:border-sky-500 focus:ring-sky-500">
            <option value="1" selected>xBank</option>
        </select>
    </div>

    <div class="mt-4">
        <x-input-label for="name" :value="__('Account Name')" />
        <x-text-input id="name" class="block w-full mt-1" type="text" wire:model='account_name' readonly />
    </div>

    @if ($verified)
        <div class="mt-4">
            <x-input-label for="ac_amount" :value="__('Amount')" />
            @if (isset($error['amount']))
                <div class="text-xs font-semibold text-red-600">{{ $error['amount'] }}</div>
            @endif
            <x-text-input id="ac_amount" wire:model='amount' class="block w-full mt-1" type="number" />
        </div>
    @endif
    <div class="flex justify-between py-4">
        <button class="px-10 py-3 text-sm font-semibold text-white bg-red-700 rounded-lg"
            wire:click="clear">Clear</button>
        @if ($verified)
            <button class="px-10 py-3 text-sm font-semibold text-white rounded-lg bg-sky-700" wire:click='submit'>Pay
                {{ explode(' ', $account_name)[0] }}</button>
        @else
            <button class="px-10 py-3 text-sm font-semibold text-white rounded-lg bg-sky-700"
                wire:click='verify_account'>Verify
                Account</button>
        @endif
    </div>

</div>
