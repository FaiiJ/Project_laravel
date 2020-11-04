@extends('layouts.master')

@section('title', 'Statement')
@section('content')

<div class="container" style="text-align: center; color: black; margin-top:3%;">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2><b>Current balance: </b></h2>
            <p>Account number: xxx-xxxxxxx</p>
            <p>Status: </p>
        </div>
    </div>

    <br>

    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Transaction date</th>
                <th scope="col">Type</th>
                <th scope="col">Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">dd-mm-yyyy</th>
                <td scope="row">Withdraw/Deposit</td>
                <td scope="row">+- xxx Bath</td>
            </tr>
            <tr>
                <th scope="row">dd-mm-yyyy</th>
                <td scope="row">Withdraw/Deposit</td>
                <td scope="row">+- xxx Bath</td>
            </tr>
            <tr>
                <th scope="row">dd-mm-yyyy</th>
                <td scope="row">Withdraw/Deposit</td>
                <td scope="row">+- xxx Bath</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection