<div class="sidebar-menu">
	<ul id="accordion-menu">
		<li>
			<a href="{{route('dashboard')}}" class="dropdown-toggle no-arrow">
				<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
			</a>
		</li>
		<li>
			<a href="{{route('companies.index')}}" class="dropdown-toggle no-arrow">
				<span class="micon fas fa-building"></span><span class="mtext">Companies</span>
			</a>
		</li>
		<li>
			<a href="{{route('employees.index')}}" class="dropdown-toggle no-arrow">
				<span class="micon fas fa-users"></span><span class="mtext">Employees</span>
			</a>
		</li>
		<li>
			<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-toggle no-arrow">
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form>
				<span class="micon fas fa-sign-out-alt"></span><span class="mtext">Logout</span>
			</a>
		</li>

	</ul>
</div>