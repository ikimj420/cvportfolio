<table class="table table-responsive" id="pictures-table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Section</th>
        <th>Cover Images</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pictures as $picture)
        <tr>
            <td><a href="{!! route('pictures.show', [$picture->id]) !!}">{!! $picture->title !!}</a></td>
            <td>{!! $picture->section !!}</td>
            <td>{!! $picture->cover_images !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>