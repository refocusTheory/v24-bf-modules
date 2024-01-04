<div class="menu-item">
	<a class="menu-link {{ request()->route()->getName() == 'dashboard' ? 'active' : '' }}"  data-app="dashboard" href="{{  route('dashboard') }}">
		<span class="menu-icon">
			<i class="fa-sharp fa-solid fa-arrow-left "></i>   
		</span>
		<span class="menu-title">Main Menu</span>
	</a>
</div>

<hr>

