<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('/img/385-logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="d-flex " id="wrapper">
        @include('admin.sidebar')

        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-warning" id="sidebarToggle"><span class="navbar-toggler-icon"></span></button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{route('blotter.settled')}}">Settled Cases</a></li>
                            <li class="nav-item active"><a class="nav-link" href="{{route('blotter.summary')}}">Search Case</a></li>

                            <x-app-layout>
                            </x-app-layout>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Page content-->
            <div class="container-fluid">
                <div class="row d-flex justify-content-center mt-5 px-5">
                    <h5 class="text-primary">Search for an blotter case report</h5>

                    <div class="p-2">
                        <form action="{{route('blotter.summary')}}" method="get">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control shadow-none" name="search" id="caseNo" placeholder="Case No." value="{{request()->query('search')}}" data-bs-toggle="collapse" data-bs-target="#collapseExample">
                                <label for="caseNo" class="p-3">Case No.</label>
                            </div>
                        </form>
                    </div>


                    <div class="card p-3 shadow">
                        @foreach($notice as $not)
                        <div class="card-body bg-light mb-3">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title"><b><u>Case #</u></b></h5>
                                    <p class="card-text"><i>Case Title</i></p>
                                </div>
                                <div class="col">
                                    <p class="card-text text-end"><b>Hearing Type</b></p>
                                    <p class="card-text text-end"><b>Hearing Schedule</b></p>
                                </div>
                            </div>

                            <div class="row mt-3">

                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th>Type of Notice</th>
                                                <th>Resident Name(s)</th>
                                                <th>Status</th>
                                                <th>Date Notified</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th scope="row">Hearing Notice</th>
                                                <td>{{$complainant->salutation}} {{$complainant->first_name}} {{$complainant->middle_name}} {{$complainant->last_name}}</td>
                                                <td><b class="text-danger">TO NOTIFY</b></td>
                                                <td><i>September 22, 2022</i></td>
                                                <td><a href="" class="btn btn-outline-success ">Set to Notified</a></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Summon Notice</th>
                                                <td>{{$complainant->salutation}} {{$complainant->first_name}} {{$complainant->middle_name}} {{$complainant->last_name}}</td>
                                                <td><b class="text-danger">TO NOTIFY</b></td>
                                                <td><i>September 22, 2022</i></td>
                                                <td><a href="" class="btn btn-outline-success ">Set to Notified</a></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Pangkat Constitution Notice</th>
                                                <td>{{$complainant->salutation}} {{$complainant->first_name}} {{$complainant->middle_name}} {{$complainant->last_name}}</td>
                                                <td><b class="text-danger">TO NOTIFY</b></td>
                                                <td><i>September 22, 2022</i></td>
                                                <td><a href="" class="btn btn-outline-success ">Set to Notified</a></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Subpoena Notice</th>
                                                <td>{{$complainant->salutation}} {{$complainant->first_name}} {{$complainant->middle_name}} {{$complainant->last_name}}</td>
                                                <td><b class="text-danger">TO NOTIFY</b></td>
                                                <td><i>September 22, 2022</i></td>
                                                <td><a href="" class="btn btn-outline-success ">Set to Notified</a></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>