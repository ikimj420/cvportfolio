<table class="table table-responsive" id="users-table">
    <thead>
        <tr>
        <th>Full Name</th>
        <th>Area Field</th>
        <th>Country</th>
        <th>Birth Date</th>
        <th>Address</th>
        <th>Phones</th>
        <th>Email</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td><a href="{!! route('users.show', [$user->id]) !!}">{!! $user->fullName !!}</a></td>
            <td>{!! $user->areaField !!}</td>
            <td>{!! $user->country !!}</td>
            <td>@if(!empty($user->birthDate)){!! $user->birthDate->format('M, d Y') !!}@endif</td>
            <td>{!! $user->address !!}</td>
            <td>{!! $user->phones !!}</td>
            <td>{!! $user->email !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>