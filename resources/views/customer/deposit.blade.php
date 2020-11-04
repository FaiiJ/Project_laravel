@extends('layouts.master')

@section('title', 'Deposit')
@section('content')

<div class="container" style="text-align: center; color: black; margin-top:3%;">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2>DEPOSIT</h2>
            <hr>
            <h2 style="margin-top:8%;"><b>Current balance: </b></h2>
            <p>Account number: xxx-xxxxxxx</p>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-12" style="margin-bottom: 2%;">
            {{Form::open(['url' => 'foo/bar', 'method' => 'put'])}}
            {{Form::text('deposit','',['style'=>'width:50%','class'=>'justify-content:center;'])}}
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-12">
            {{Form::submit('submit',['class'=>'btn btn-success'])}}
            {{Form::reset('Reset',['class'=>'btn btn-danger'])}}
            {{Form::close()}} 
        </div>
    </div>
</div>

@endsection