@foreach ($transactions as $transaction)
    {{ $transaction->message }}
    {{ $transaction->uid }}
    {{ $transaction->zid }}
    {{ $transaction->pid }}
@endforeach
