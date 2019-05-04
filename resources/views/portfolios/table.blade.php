<table class="table table-responsive" id="portfolios-table">
    <thead>
        <tr>
        <th>Title</th>
        <th>Dev</th>
        <th>Link</th>
        <th>Desc</th>
        </tr>
    </thead>
    <tbody>
    @foreach($portfolios as $portfolio)
        <tr>
            <td><a href="{!! route('portfolios.show', [$portfolio->id]) !!}">{!! $portfolio->title !!}</a></td>
            <td>{!! $portfolio->dev !!}</td>
            <td>{!! $portfolio->link !!}</td>
            <td>{!! $portfolio->desc !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>