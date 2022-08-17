@extends('./layouts/master')

@section('title')
    Prime Ministers
@endsection

@section('content')

<h3>Query</h3>
<p>
    Name: {{$name}} <br>
    Year: {{$year}} <br>
    State: {{$state}} <br>
    
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>From</th>
                <th>To</th>
                <th>Duration</th>
                <th>Party</th>
                <th>State</th>
            </tr>
        </thead>
        <tbody>
            @forelse($results as $pm)
                <tr>
                    <td>{{$pm['index']}}</td>
                    <td>{{$pm['name']}}</td>
                    <td>{{$pm['from']}}</td>
                    <td>{{$pm['to']}}</td>
                    <td>{{$pm['duration']}}</td>
                    <td>{{$pm['party']}}</td>
                    <td>{{$pm['state']}}</td>
                </tr>
            @empty
                No pms found
            @endforelse
        </tbody>
    </table>
</p>


@endsection