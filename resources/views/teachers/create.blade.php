@extends('\teachers\layout1')

@section('title', 'Add Report')


@section('content')


<form action="{{ route('teachers.store') }}" enctype="multipart/form-data" method="POST"
    class=" container">
    @csrf
    @method('POST')
    <div class="p-4 m-4 bg-transparent card-sm text-center rounded shadow-lg">
        <div class="card-header">
            <h2>Student Report</h2>
        </div>
        <div class="row p-4">
            <div class="mx-auto">
                <div class="form-group col-auto">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text text-small" for="student_names">Student</label>
                        </div>
                        <select name="sid" class="selectpicker" data-container="body" id="student_names"
                            data-style="btn-outline-secondary" data-live-search="true" data-width="auto"
                            title="Select student">
                            @foreach($students ?? '' as $student)
                                <option data-token="{{ $student->name }}" value="{{ $student->id }}">
                                    {{ $student->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-auto text-muted row">
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small font-weight-bolder"
                                id="basic-addon01">Examination</span>
                        </div>
                        <input type="text" name="exam_name" class="form-control" placeholder="" aria-label="Examination"
                            aria-describedby="basic-addon01">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small font-weight-bolder" id="basic-addon02">Max
                                Grade</span>
                        </div>
                        <input type="number" name="max_grade" class="form-control" placeholder="" aria-label="Max"
                            aria-describedby="basic-addon02">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small font-weight-bolder" id="basic-addon03">From</span>
                        </div>
                        <input type="date" name="from" class="form-control" placeholder="" aria-label="From"
                            aria-describedby="basic-addon03">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small font-weight-bolder" id="basic-addon04">To</span>
                        </div>
                        <input type="date" name="to" class="form-control" placeholder="" aria-label="To"
                            aria-describedby="basic-addon04">
                    </div>
                </div>
                <small class="form-text text-muted">
                    <i>
                        <u>Fill in where necessary</u>
                    </i>
                </small>
                <div class="form-group col-auto text-muted row">

                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon1">Math</span>
                        </div>
                        <input type="number" name="mat" max="100" class="form-control" placeholder="" aria-label="Math"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon2">English</span>
                        </div>
                        <input type="number" name="eng" max="100" class="form-control" placeholder=""
                            aria-label="English" aria-describedby="basic-addon2">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon3">Kiswahili</span>
                        </div>
                        <input type="number" name="kis" max="100" class="form-control" placeholder=""
                            aria-label="Kiswahili" aria-describedby="basic-addon3">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon4">Biology</span>
                        </div>
                        <input type="number" name="bio" max="100" class="form-control" placeholder=""
                            aria-label="Biology" aria-describedby="basic-addon4">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon5">Chemistry</span>
                        </div>
                        <input type="number" name="che" max="100" class="form-control" placeholder=""
                            aria-label="Chemistry" aria-describedby="basic-addon5">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon6">Physics</span>
                        </div>
                        <input type="number" name="phy" max="100" class="form-control" placeholder=""
                            aria-label="Physics" aria-describedby="basic-addon6">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon7">Geography</span>
                        </div>
                        <input type="number" name="geo" max="100" class="form-control" placeholder=""
                            aria-label="Geography" aria-describedby="basic-addon7">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon8">History</span>
                        </div>
                        <input type="number" name="his" max="100" class="form-control" placeholder=""
                            aria-label="History" aria-describedby="basic-addon8">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon9">Religious Education</span>
                        </div>
                        <input type="number" name="re" max="100" class="form-control" placeholder=""
                            aria-label="Religious Education" aria-describedby="basic-addon9">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon10">Information Technology</span>
                        </div>
                        <input type="number" name="it" max="100" class="form-control" placeholder=""
                            aria-label="Information Technology" aria-describedby="basic-addon10">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon11">Business</span>
                        </div>
                        <input type="number" name="bus" max="100" class="form-control" placeholder=""
                            aria-label="Business" aria-describedby="basic-addon11">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon12">Literature</span>
                        </div>
                        <input type="number" name="lit" max="100" class="form-control" placeholder=""
                            aria-label="Literature" aria-describedby="basic-addon12">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon13">Home Economics</span>
                        </div>
                        <input type="number" name="he" max="100" class="form-control" placeholder=""
                            aria-label="Home Economics" aria-describedby="basic-addon13">
                    </div>
                    <div class="input-group col-6 my-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-small" id="basic-addon14">Art & Design</span>
                        </div>
                        <input type="number" name="and" max="100" class="form-control" placeholder=""
                            aria-label="Art&Design" aria-describedby="basic-addon14">
                    </div>
                </div>

            </div>


        </div>
        <button type="submit" class="btn btn-primary center mb-3">
            Add Report
            <i class="fas fa-clipboard text-dark"></i>
        </button>
    </div>
</form>


@endsection
