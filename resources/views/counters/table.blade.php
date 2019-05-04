<table class="table table-responsive" id="counters-table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Count</th>
        </tr>
    </thead>
    <tbody>
    @foreach($counters as $counter)
        <tr>
            <td><a href="{!! route('counters.show', [$counter->id]) !!}">{!! $counter->title !!}</a></td>
            <td>{!! $counter->count !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>