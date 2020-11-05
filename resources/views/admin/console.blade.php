@extends('layouts.console_master')

@section('title', 'Console')
@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">View all Client's Accounts </h4>
                        </div>
                        <div class="table-responsive border rounded p-1">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="font-weight-bold">Account Number</th>
                                        <th class="font-weight-bold">Customer Name</th>
                                        <th class="font-weight-bold">Balance</th>
                                        <th class="font-weight-bold">Status</th>
                                        <th class="font-weight-bold">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $account)
                                        <tr>
                                            <td> {{ $account->account_number }}</td>
                                            <td>{{ $account->firstname . ' ' . $account->lastname }}</td>
                                            <td>${{ number_format($account->current_balance, 2, '.', ',') }}</td>

                                            <td style="border: none;">
                                                {{-- <button
                                                    class="badge badge-{{ $account->status == 'normal' ? 'success' : 'warning' }} p-2" id="new-btn">
                                                    {{ $account->status }}
                                                </button> --}}
                                                {!! Form::open(['url' => 'admin/' . $account->id . '/edit', 'method' => 'get']) !!}
                                                {{-- {!! Form::submit('Edit', ['class' => 'btn btn-link',]) !!} --}}
                                                {!! Form::submit($account->status, ['class' => $account->status == 'Normal'
                                                ? '"badge badge-success p-2' : '"badge badge-warning p-2']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                            <td>
                                                {{-- <button class='"badge badge-danger p-2'>Delete</button> --}}

                                                {!! Form::open(['url' => 'admin/' . $account->id, 'method' => 'delete'])!!}
                                                {{-- <button type="submit" class="btn btn-link">Delete</button> --}}
                                                <button type="submit" class='"badge badge-danger p-2'>Delete</button>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex mt-4 flex-wrap">
                            <nav class="ml-auto">
                                <ul class="pagination separated pagination-info">
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
