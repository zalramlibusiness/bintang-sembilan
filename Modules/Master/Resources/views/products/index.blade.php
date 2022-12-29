@extends('layouts.app')
@section('title', 'Produk')
@section('content')
<div class="row">
<div class="col-12">
  @include('flash::message')
</div>
</div>

    <div class="row">
        <div class="col-12">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('master::products.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

@endsection

