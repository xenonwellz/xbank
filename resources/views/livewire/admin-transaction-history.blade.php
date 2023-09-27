<div class="pt-6" wire:poll.keep-alive.750ms=''>
    <h2 class="font-semibold">Transaction History</h2>
    <div class="flex flex-col gap-4 mt-4">
        @foreach ($transactions as $t)
            @if ($t->type === 'credit')
                <x-admin-credit :transaction="$t" />
            @else
                <x-admin-debit :transaction="$t" />
            @endif
        @endforeach
    </div>
</div>
