<table class="table table-responsive" id="experiences-table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Company</th>
        <th>Start</th>
        <th>End</th>
        <th>Link</th>
        </tr>
    </thead>
    <tbody>
    @foreach($experiences as $experience)
        <tr>
            <td><a href="{!! route('experiences.show', [$experience->id]) !!}">{!! $experience->title !!}</a></td>
            <td>{!! $experience->company !!}</td>
            <td>{!! $experience->start->format('M, d Y') !!}</td>
            <td>{!! $experience->end->format('M, d Y') !!}</td>
            <td>{!! $experience->link !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>