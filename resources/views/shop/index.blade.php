@extends('layouts.master')

@section('title')
    SandCastle
@endsection

@section('content')
    <div class="main main-raised" style="margin-top:50px;">
        <div class="container-fluid">
            <div class="row">
                <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar ">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Analytics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Export</a>
                        </li>
                    </ul>

                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nav item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nav item again</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">One more nav</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Another nav item</a>
                        </li>
                    </ul>

                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nav item again</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">One more nav</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Another nav item</a>
                        </li>
                    </ul>
                </nav>

                <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                    <h1>Dashboard</h1>

                    <section class="row text-center placeholders">
                        <div class="col-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs="
                                 width="200" height="200" class="img-fluid rounded-circle"
                                 alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <div class="text-muted">Something else</div>
                        </div>
                        <div class="col-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs="
                                 width="200" height="200" class="img-fluid rounded-circle"
                                 alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                        <div class="col-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs="
                                 width="200" height="200" class="img-fluid rounded-circle"
                                 alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                        <div class="col-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs="
                                 width="200" height="200" class="img-fluid rounded-circle"
                                 alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                    </section>

                    <h2>Test Cases</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Location</th>
                                <th>Engineer</th>
                                <th>Speed</th>
                                <th>Errors</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($testCaseData as $testCaseRow)
                                <tr>
                                    <td>{{$testCaseRow->id}}</td>

                                    <td>{{$testCaseRow->location}}</td>
                                    <td>{{$testCaseRow->engineer}}</td>
                                    <td>{{$testCaseRow->speed}}</td>
                                    <td>{{$testCaseRow->errors}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
