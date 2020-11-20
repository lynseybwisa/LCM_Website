<center style="cursor: none;">
    <img class="m-auto img img-responsive" height="100em" width="100em"
                    src="{{ asset('msongari/logobadge.png') }}" alt="LCM">
    <h4>Welcome 
		@guest 
			Guest 
		@else 
			<strong class="text-primary"> 
				{{ Auth::user()->name }}
			</strong>
		@endguest
	</h4>
</center>
<ul class="navbar-nav">
	<li>
		<a href="\"><small class="fas fa-home"></small> Home</a>
	</li>
	<li>
		<a href=""><small class="fas fa-users"></small> Reports</a>
	</li>
</ul>





