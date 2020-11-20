@extends('\teachers\layout1')

@section('title', 'Details for ' .$teacher->name)


@section('content')
<div class="card m-auto border border-info bg-transstrongarent">
    <div class="card-header text-info">
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>  
          </div>
        <h3>Profile Details</h3>
    </div>
    <div class="card-body">
        <div class="row m-2">
            <div class="col-6">
                <div class="card-sm text-sm rounded shadow-lg bg-dark">
                    <div class="card-header text-muted">
                        <h4>Full Name</h4>
                    </div>
                    <div class="card-body text-center text-info">
                        <strong class="card-text">{{ $teacher->name }}</strong>
                        
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card-sm text-sm rounded shadow-lg bg-dark">
                    <div class="card-header text-muted">
                        <h4>Email Address</h4>
                    </div>
                    <div class="card-body text-center text-info">
                        <strong class="card-text">{{ $teacher->email }}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-6">
                <div class="card-sm text-sm rounded shadow-lg bg-dark">
                    <div class="card-header text-muted">
                        <h4>Role</h4>
                    </div>
                    <div class="card-body text-center text-info">
                        <strong class="card-text"> </strong>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card-sm text-sm rounded shadow-lg bg-dark">
                    <div class="card-header text-muted">
                        <h4>Contact Details</h4>
                    </div>
                    <div class="card-body text-center text-info">
                        <strong class="card-text"> </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer abnftext-center">
        <small class="text-muted"><i>Last updated on {{ $teacher->updated_at }}</i></small>
    </div>
    
</div>


@endsection
