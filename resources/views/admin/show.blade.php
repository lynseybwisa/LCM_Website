@extends('\admin\layout1')

@section('title', 'Details for ' .$student->name)


@section('content')

<div class="card m-auto border border-info bg-transstrongarent">
    <div class="card-header  text-info">
        <h3>Student Profile Details</h3>
    </div>
    <div class="card-body">
        <div class="row m-2">
            <div class="col-6">
                <div class="card-sm text-sm rounded shadow-lg bg-dark">
                    <div class="card-header text-muted">
                        <h4>Full Name</h4>
                    </div>
                    <div class="card-body text-center">
                        <strong class="card-text">{{ $student->name }} (<i
                                class="text-info">{{$student->school}}</i>)</strong>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card-sm text-sm rounded shadow-lg bg-dark">
                    <div class="card-header text-muted">
                        <h4>Email Address</h4>
                    </div>
                    <div class="card-body text-center  ">
                        <strong class="card-text">{{ $student->email }}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-6">
                <div class="card-sm text-sm rounded shadow-lg bg-dark">
                    <div class="card-header text-muted">
                        <h4>Date of Birth</h4>
                    </div>
                    <div class="card-body text-center  ">
                        <strong class="card-text">{{$student->dob->format('d/m/Y')}}
                            ({{$student->dob->diffInYears(\Carbon\Carbon::now())}} years)</strong>
                    </div>
                    
                </div>
            </div>
            <div class="col-6">
                <div class="card-sm text-sm rounded shadow-lg bg-dark">
                    <div class="card-header text-muted">
                        <h4>Date of Admission</h4>
                    </div>
                    <div class="card-body text-center  ">
                        <strong class="card-text">{{$student->created_at->format('d/m/Y')}}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-center">
        <small class="text-muted"><i>Last edited on {{ $student->updated_at }}</i></small>
    </div>
</div>


@endsection
