@extends('layout.main')

@section('body')

    <h1 class="display-3">Contrato</h1>
    <p>Eu <span class="font-weight-bold">{!! $customer->name!!}</span>, aceito o contrato tipo <span
                class="font-weight-bold">{!! $customer->contract->contract_id !!}</span> sob as condições:</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
        deserunt mollit anim id est laborum.</p>

    <br>
    <p>Estão incluídos no contrato os seguintes items:</p>
    <ul>
        @foreach($customer->contract->items as $item)
            <li><span class="font-weight-bold">{!! $item->description !!}</span></li>
        @endforeach
    </ul>
    <p>Acesso em <span class="font-weight-bold">{!! $current_date !!}</span></p>

@stop