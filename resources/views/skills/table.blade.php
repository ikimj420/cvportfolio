<table class="table table-responsive" id="skills-table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Count</th>
        <th>Extra</th>
        </tr>
    </thead>
    <tbody>
    @foreach($skills as $skill)
        <tr>
            <td><a href="{!! route('skills.show', [$skill->id]) !!}">{!! $skill->title !!}</a></td>
            <td>{!! $skill->count !!}</td>
            <td>{!! $skill->extra !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>