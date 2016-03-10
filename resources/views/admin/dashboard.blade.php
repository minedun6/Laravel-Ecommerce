@extends('layouts.admin.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>
    <div class="row">
        @include('admin.partials.widget', [
            'panelColor' => 'primary', 'icon' => 'shopping-cart', 'value' => count($products), 'headline' => 'Products'
        ])

        @include('admin.partials.widget', [
            'panelColor' => 'green', 'icon' => 'bar-chart', 'value' => '12.5M $', 'headline' => 'Profit'
        ])

        @include('admin.partials.widget', [
            'panelColor' => 'yellow', 'icon' => 'archive', 'value' => 22, 'headline' => 'Orders'
        ])

        @include('admin.partials.widget', [
            'panelColor' => 'red', 'icon' => 'warning', 'value' => count($products->where('qty','=','0')), 'headline' => 'Alerts'
        ])

    </div>

@endsection
