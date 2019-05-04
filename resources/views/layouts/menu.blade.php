<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('counters*') ? 'active' : '' }}">
    <a href="{!! route('counters.index') !!}"><i class="fa fa-edit"></i><span>Counters</span></a>
</li>

<li class="{{ Request::is('experiences*') ? 'active' : '' }}">
    <a href="{!! route('experiences.index') !!}"><i class="fa fa-edit"></i><span>Experiences</span></a>
</li>

<li class="{{ Request::is('education*') ? 'active' : '' }}">
    <a href="{!! route('education.index') !!}"><i class="fa fa-edit"></i><span>Education</span></a>
</li>

<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{!! route('skills.index') !!}"><i class="fa fa-edit"></i><span>Skills</span></a>
</li>

<li class="{{ Request::is('pictures*') ? 'active' : '' }}">
    <a href="{!! route('pictures.index') !!}"><i class="fa fa-edit"></i><span>Pictures</span></a>
</li>

<li class="{{ Request::is('socials*') ? 'active' : '' }}">
    <a href="{!! route('socials.index') !!}"><i class="fa fa-edit"></i><span>Socials</span></a>
</li>

<li class="{{ Request::is('portfolios*') ? 'active' : '' }}">
    <a href="{!! route('portfolios.index') !!}"><i class="fa fa-edit"></i><span>Portfolios</span></a>
</li>

