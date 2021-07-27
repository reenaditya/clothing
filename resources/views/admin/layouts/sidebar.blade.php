<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
            <path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
              C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z"/>
            <path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z"/>
            <path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z"/>
          </svg>
    
          <span class="align-middle me-3">Clothing</span>
        </a>

				<ul class="sidebar-nav">
					
				
					<li class="sidebar-item {{Request::routeIs('admin.dashboard.*')?'active':''}}">
						<a data-bs-target="#dashboard" class="sidebar-link {{Request::routeIs('admin.dashboardd.*')?'':'collapsed'}}" href="{{ route('admin.dashboard.index') }}">
              			<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
              	
            			</a>
					</li>
					<li class="sidebar-item {{Request::routeIs('admin.user.*')?'active':''}}">
						<a data-bs-target="#user" class="sidebar-link {{Request::routeIs('admin.user.*')?'':'collapsed'}}" href="{{ route('admin.user.index') }}">
              			<i class="align-middle" data-feather="user"></i> <span class="align-middle">User Management</span>
              	
            			</a>
					</li>
					<li class="sidebar-item {{Request::routeIs('admin.height.*')?'active':''}}">
						<a data-bs-target="#height" class="sidebar-link {{Request::routeIs('admin.height.*')?'':'collapsed'}}" href="{{ route('admin.height.index') }}">
              			<i class="align-middle" data-feather="arrow-up"></i> <span class="align-middle">Height Management</span>
              	
            			</a>
					</li>
					<li class="sidebar-item {{Request::routeIs('admin.weight.*')?'active':''}}">
						<a data-bs-target="#weight" class="sidebar-link {{Request::routeIs('admin.weight.*')?'':'collapsed'}}" href="{{ route('admin.weight.index') }}">
              			<i class="align-middle" data-feather="arrow-right"></i> <span class="align-middle">Weight Management</span>
              	
            			</a>
					</li>
					<li class="sidebar-item {{Request::routeIs('admin.age.*')?'active':''}}">
						<a data-bs-target="#age" class="sidebar-link {{Request::routeIs('admin.age.*')?'':'collapsed'}}" href="{{ route('admin.age.index') }}">
              			<i class="align-middle" data-feather="lock"></i> <span class="align-middle">Age Management</span>
              	
            			</a>
					</li>
					

					
				</ul>

			
		</nav>