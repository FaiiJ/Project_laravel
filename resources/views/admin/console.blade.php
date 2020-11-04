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
                                    <th class="font-weight-bold">Client ID</th>
                                    <th class="font-weight-bold">Client Name</th>
                                    <th class="font-weight-bold">Balance</th>
                                    <th class="font-weight-bold">Status</th>
                                    <th class="font-weight-bold">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>11111</td>
                                    <td>Katie Holmes </td>
                                    <td>$3621</td>
                                    <td style="border: none;">
                                        <button class="badge badge-success p-2" id="new-btn">Open</button>
                                    </td>
                                    <td>
                                        <button class="badge badge-danger p-2">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>22222</td>
                                    <td>Minnie Copeland </td>
                                    <td>$6245</td>
                                    <td>
                                        <button class="badge badge-warning p-2">Suspen</button>

                                    </td>
                                    <td>
                                        <button class="badge badge-danger p-2">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>33333</td>
                                    <td>Rodney Sims </td>
                                    <td>$9265</td>
                                    <td>
                                        <button class="badge badge-warning p-2">Suspen</button>
                                    </td>
                                    <td>
                                        <button class="badge badge-danger p-2">Delete </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>44444</td>
                                    <td> Carolyn Barker </td>
                                    <td>$2263</td>
                                    <td>
                                        <button class="badge badge-success p-2">Open</button>
                                    </td>
                                    <td>
                                        <button class="badge badge-danger p-2"> Delete </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex mt-4 flex-wrap">
                        <nav class="ml-auto">
                            <ul class="pagination separated pagination-info">
                                <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection