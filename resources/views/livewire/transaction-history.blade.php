<div class="pt-12" wire:poll.keep-alive.750ms=''>
    <h2 class="font-semibold">Transaction History</h2>
    <div class="flex flex-col gap-4 mt-4">
        @foreach ($transactions as $t)
            @if ($t->type === 'credit')
                <x-credit :transaction="$t" />
            @else
                <x-debit :transaction="$t" />
            @endif
        @endforeach
    </div>
</div>
