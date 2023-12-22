@extends('base')
@section('content')
    <div class="text-xl">Factures</div>
    <form action="{{ route('addInvoice') }}" method="POST">
        @csrf
        <div class="flex gap-2">
            <div class="flex flex-col gap-1">
                <label>Numero de facture</label>
                <input type="text" name="number" class="w-32 border border-neutral-600">
            </div>
            <select name="customer_id">
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
            <div class="flex flex-col gap-1">
                <label>Date d'émission</label>
                <input type="date" name="release" class="w-32 border border-neutral-600">
            </div>
            <div class="flex flex-col gap-1">
                <label>Date d'expliration</label>
                <input type="date" name="deadline" class="w-32 border border-neutral-600">
            </div>
            <div class="flex flex-col gap-1">
                <label>Description</label>
                <input type="text" name="description" class="w-32 border border-neutral-600">
            </div>
        </div>
        <div class="flex ml-1 mt-1">
            <button class="border border-neutral-600" type="submit">Valider</button>
        </div>
    </form>
    <div class="flex flex-col gap-2">
        @foreach($invoices as $invoice)
            <div class="flex gap-4">
                <div>{{ $invoice->number }}</div>
                <div>{{ $invoice->id }}</div>
                <div>{{ $invoice->release }}</div>
                <div>{{ $invoice->deadline }}</div>
                <div>{{ $invoice->description }}</div>
            </div>
        @endforeach
    </div>

@stop
