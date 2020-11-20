@extends('\admin\layout1')

@section('title', 'Students List')

@section('content')
<div class="text-center">
    <table class="table table-borderless table-secondary">
        <thead>
            <tr class="shadow text-lg">
                {{-- Page Title --}}
                <th scope="col">
                    <u>Enrolled Students</u>
                </th>
            </tr>
            <tr>
                {{-- Search Form --}}
                <th scope="col" class="bg-secondary">
                    <form action="/searchStudents" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group ">
                            <input type="text" class="form-control m-1" name="q" placeholder="Search students by name">
                            <span class="input-group-btn m-1">
                                <button type="submit" class="btn btn-info">
                                    <span class="fas fa-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                </th>
            </tr>
        </thead>
    </table>
</div>
<div class="container">
    {{-- If user has searched --}}
    @if(isset($details))
        {{-- Search Results --}}
        <div class="card m-1">
            <div class="card-header">
                <small><i><b>{{ count($details) }}</b> records found with keyword <b>{{ $query }} </b>; </i></small>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool text-danger">
                        <a href="/students"><i class="fas fa-times"></i></a>
                    </button>
                </div>
            </div>
            <div class="row card-body d-flex align-items-stretch">
                @foreach($details as $student)
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                        <div class="card shadow bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead font-weight-bold">{{ $student -> name }}</h2>
                                        <p class="text-muted"><u><b>Enrolled on: </b></u>
                                            {{ $student->created_at->format('d/m/Y') }}
                                        </p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-building "></i></span>
                                                <b>{{ $student -> school }}</b></li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-calendar-alt"></i></span>
                                                {{ $student -> dob->format('d/m/Y') }}({{ $student->dob->diffInYears(\Carbon\Carbon::now()) }}
                                                yr)</li>
                                            <li class="small"><span class="fa-li"><i
                                                        class="fas fa-lg fa-envelope text-info"></i></span>
                                                {{ $student -> email }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp"
                                            alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="/admin/studentReport/{{ $student -> id }}"
                                            class="btn btn-sm btn-secondary">
                                            <i class="fas fa-clipboard"></i> Reports
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="/students/{{ $student -> id }}/edit"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit"></i> Edit Profile
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</div>
{{-- If user has not yet searched --}}
@else
{{-- Pagination Links --}}
<div>
    <small>
        <i class="text-muted">
            (Showing
            {{ count($students ?? '') }} of
            {{ count($studentes ?? '') }} total students)
        </i>
    </small>
</div>
{{-- Students shown as a card-grid --}}
<div class="row d-flex align-items-stretch mb-5">
    @foreach($students as $student)
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
            <div class="card shadow bg-light">
                <div class="card-header text-muted border-bottom-0">
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="lead font-weight-bold">{{ $student -> name }}</h2>
                            <p class="text-muted"><u><b>Enrolled on: </b></u>
                                {{ $student->created_at->format('d/m/Y') }}
                            </p>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building "></i></span>
                                    <b>{{ $student -> school }}</b></li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-calendar-alt"></i></span>
                                    {{ $student -> dob->format('d/m/Y') }}({{ $student->dob->diffInYears(\Carbon\Carbon::now()) }}
                                    yr)</li>
                                <li class="small"><span class="fa-li"><i
                                            class="fas fa-lg fa-envelope text-info"></i></span>
                                    {{ $student -> email }}</li>
                            </ul>
                        </div>
                        <div class="col-5 text-center">
                            <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp"
                                alt="user-avatar" class="img-circle img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-6">
                            <a href="/admin/studentReport/{{ $student -> id }}" class="btn btn-sm btn-secondary">
                                <i class="fas fa-clipboard"></i> Reports
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="/students/{{ $student -> id }}/edit" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-edit"></i> Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{ $students->links() }}
</div>
@endif
</div>

</div>


@endsection
