@extends('base')
@section('content')
    <div class="flex justify-center">
        <div class="bg-neutral-800 rounded-b-xl px-2 border-t-2 border-neutral-900">Clients</div>
    </div>
        <div class="grid grid-cols-3">
            <form action="{{ route('addCustomer') }}" class="grid col-start-2 grid-cols-4 ml-2"
                  method="POST">
                @csrf
                <div class="flex flex-col gap-1">
                    <label>Nom</label>
                    <input type="text" name="name" class="bg-neutral-700 rounded w-32 border border-neutral-600">
                </div>
                <div class="flex flex-col gap-1">
                    <label>Reference</label>
                    <input type="text" name="reference" class="bg-neutral-700 rounded w-32 border border-neutral-600">
                </div>
                <div class="flex flex-col gap-1">
                    <label>Ville</label>
                    <input type="text" name="city" class="bg-neutral-700 rounded w-32 border border-neutral-600">
                </div>
                <div class="flex flex-col gap-1">
                    <label>Code postal</label>
                    <input type="text" name="postal_code" class="bg-neutral-700 rounded w-32 border border-neutral-600">
                </div>
                <div class="flex flex-col gap-1">
                    <label>Adresse</label>
                    <input type="text" name="adress" class="bg-neutral-700 rounded w-32 border border-neutral-600">
                </div>
                <div class="flex flex-col gap-1">
                    <label>Telephone</label>
                    <input type="text" name="phone" class="bg-neutral-700 rounded w-32 border border-neutral-600">
                </div>
                <div class="flex flex-col gap-1">
                    <label>Mail</label>
                    <input type="text" name="mail" class="bg-neutral-700 rounded w-32 border border-neutral-600">
                </div>
                <div class="flex flex-col gap-1">
                    <label>Siret</label>
                    <input type="text" name="siret" class="bg-neutral-700 rounded w-32 border border-neutral-600">
                </div>
                <div class="flex justify-center ml-1 mt-1 col-span-4">
                    <button class="border border-neutral-600 mt-2 rounded px-2 py-1 bg-neutral-700" type="submit">
                        Valider
                    </button>
                </div>
            </form>
        </div>
    <div class="grid grid-cols-4 gap-4 mx-4 mt-4">
        @foreach($customers as $customer)
            <div class="grid grid-cols-3 gap-4 bg-neutral-700 p-4 rounded shadow-xl">
                <div>
                    <div>Nom :</div>
                    <div>{{ $customer->name }}</div>
                </div>
                <div>
                    <div>Reference :</div>
                    <div>{{ $customer->reference }}</div>
                </div>
                <div>
                    <div>Siret :</div>
                    <div>{{ $customer->siret }}</div>
                </div>
                <div class="col-span-3">
                    <div>Adresse :</div>
                    <div class="flex gap-4">
                        <div>{{ $customer->city }}</div>
                        <div>{{ $customer->postal_code }}</div>
                        <div>{{ $customer->adress }}</div>
                    </div>
                </div>
                <div>
                    <div>Telephone :</div>
                    <div>
                        {{ $customer->phone }}</div>
                </div>
                <div>
                    <div>Mail :</div>
                    <div>{{ $customer->mail }}</div>
                </div>
            </div>
        @endforeach
    </div>
@stop
