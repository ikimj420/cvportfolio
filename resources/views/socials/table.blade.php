<table class="table table-responsive" id="socials-table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Link</th>
        </tr>
    </thead>
    <tbody>
    @foreach($socials as $social)
        <tr>
            <td><a href="{!! route('socials.show', [$social->id]) !!}">{!! $social->title !!}</a></td>
            <td>{!! $social->link !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>