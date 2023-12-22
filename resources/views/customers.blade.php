@extends('base')
@section('content')
    <div class="text-xl">Clients</div>
    <form action="{{ route('addCustomer') }}"
          method="POST">
        @csrf
        <div class="flex gap-2">
            <div class="flex flex-col gap-1">
                <label>Nom</label>
                <input type="text" name="name" class="w-32 border border-neutral-600">
            </div>
            <div class="flex flex-col gap-1">
                <label>Reference</label>
                <input type="text" name="reference" class="w-32 border border-neutral-600">
            </div>
            <div class="flex flex-col gap-1">
                <label>Ville</label>
                <input type="text" name="city" class="w-32 border border-neutral-600">
            </div>
            <div class="flex flex-col gap-1">
                <label>Code postal</label>
                <input type="text" name="postal_code" class="w-32 border border-neutral-600">
            </div>
            <div class="flex flex-col gap-1">
                <label>Adresse</label>
                <input type="text" name="adress" class="w-32 border border-neutral-600">
            </div>
            <div class="flex flex-col gap-1">
                <label>Telephone</label>
                <input type="text" name="phone" class="w-32 border border-neutral-600">
            </div>
            <div class="flex flex-col gap-1">
                <label>Mail</label>
                <input type="text" name="mail" class="w-32 border border-neutral-600">
            </div>
            <div class="flex flex-col gap-1">
                <label>Siret</label>
                <input type="text" name="siret" class="w-32 border border-neutral-600">
            </div>

        </div>
        <div class="flex ml-1 mt-1">
            <button class="border border-neutral-600" type="submit">Valider</button>
        </div>
    </form>
    <div class="flex flex-col gap-2">
        @foreach($customers as $customer)
            <div class="flex gap-4">
                <div>{{ $customer->name }}</div>
                <div>{{ $customer->reference }}</div>
                <div>{{ $customer->city }}</div>
                <div>{{ $customer->postal_code }}</div>
                <div>{{ $customer->adress }}</div>
                <div>{{ $customer->phone }}</div>
                <div>{{ $customer->mail }}</div>
                <div>{{ $customer->siret }}</div>
            </div>
        @endforeach
    </div>
@stop
