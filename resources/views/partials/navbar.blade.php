	<a href=" {{ route('home') }} "
	class = " {{ request()->routeIs('home')? 'active' : '' }} " > Home 
	</a>
	<a href=" {{ route('about') }} " 
	class="{{ request()->routeIs('about') ? 'active' : '' }}"> About 
	</a>
	<a href=" {{ route('features') }} "
	class="{{ request()->routeIs('features') ? 'active' : '' }}"> Features 
	</a>
	<a href=" {{ route('pricing') }} "
	class="{{ request()->routeIs('pricing') ? 'active' : '' }}"> Pricing 
	</a>
	<a href=" {{ route('contact') }} "
	class="{{ request()->routeIs('contact') ? 'active' : '' }}"> Contact </a>