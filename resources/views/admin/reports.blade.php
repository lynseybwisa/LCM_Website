@extends('\admin\layout1')

@section('title', 'Students List')

@section('content')

<div class="table-responsive text-center">
    <table class="table table-hover table-striped">
        <thead>
            <th class=" table-success" colspan="4">
                {{ $students->name }}'s Progress Report
            </th>
        </thead>
        <thead>
            <tr>
                <th scope="col">Examination</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Total</th>
                <th scope="col">Average</th>
                <th scope="col">Math</th>
                <th scope="col">English</th>
                <th scope="col">Kiswahili</th>
                <th scope="col">Biology</th>
                <th scope="col">Chemistry</th>
                <th scope="col">Physics</th>
                <th scope="col">History</th>
                <th scope="col">Geography</th>
                <th scope="col">Religious Education</th>
                <th scope="col">Business</th>
                <th scope="col">Information Technology</th>
                <th scope="col">Art & Design</th>
                <th scope="col">Home Economics</th>
                <th scope="col">Literature</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reports as $report)
                <tr>
                    <td>
                        {{ $report -> exam_name }}
                    </td>
                    <td>
                        {{ $report -> from }}
                    </td>
                    <td>
                        {{ $report -> to }}
                    </td>
                     <td>
                        {{ $report -> mat+
                        $report -> mat+
                        $report -> eng+
                        $report -> kis+
                        $report -> bio+
                        $report -> phy+
                        $report -> che+
                        $report -> his+
                        $report -> geo+
                        $report -> re+
                        $report -> bus+
                        $report -> it+
                        $report -> lit+
                        $report -> and+
                        $report -> lit }}
                    </td>
                    <td>
                        {{ round((($report -> mat+
                        $report -> mat+
                        $report -> eng+
                        $report -> kis+
                        $report -> bio+
                        $report -> phy+
                        $report -> che+
                        $report -> his+
                        $report -> geo+
                        $report -> re+
                        $report -> bus+
                        $report -> it+
                        $report -> lit+
                        $report -> and+
                        $report -> lit)/$report -> max_grade)*100) }}%
                    </td>
                    <td>
                        @if($report -> mat > 0)
                            {{ $report -> mat }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> eng > 0)
                            {{ $report -> eng }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> kis > 0)
                            {{ $report -> kis }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> bio > 0)
                            {{ $report -> bio }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> che > 0)
                            {{ $report -> che }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> phy > 0)
                            {{ $report -> phy }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> his > 0)
                            {{ $report -> his }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> geo > 0)
                            {{ $report -> geo }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> re > 0)
                            {{ $report -> re }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> bus > 0)
                            {{ $report -> bus }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> it > 0)
                            {{ $report -> it }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> and > 0)
                            {{ $report -> and }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> he > 0)
                            {{ $report -> he }}
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($report -> lit > 0)
                            {{ $report -> lit }}
                        @else
                            N/A
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
