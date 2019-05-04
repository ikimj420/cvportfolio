<table class="table table-responsive" id="education-table">
    <thead>
        <tr>
        <th>Title</th>
        <th>End</th>
        <th>Link</th>
        </tr>
    </thead>
    <tbody>
    @foreach($education as $education)
        <tr>
            <td><a href="{!! route('education.show', [$education->id]) !!}">{!! $education->title !!}</a></td>
            <td>{!! $education->end->format('M, d Y') !!}</td>
            <td>{!! $education->link !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>