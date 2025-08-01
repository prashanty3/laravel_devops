<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
	    <div class="user-profile px-30 py-15">
			<div class="d-flex align-items-center">			
				<div class="image">
				  <img src="{{asset('assets/images/avatar/1.jpg')}}" class="avatar avatar-lg" alt="User Image">
				</div>
				<div class="info ml-10">
					<p class="mb-0">Welcome</p>
					<h5 class="mb-0">{{Auth::user()->name}}</h5>
				</div>
			</div>
        </div>	
		
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
		<li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}"><img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/collapse.svg" class="svg-icon" alt=""><span>Overview</span></a></li>
    <li class="{{ request()->is('admin/content/edit') ? 'active' : '' }}"><a href="{{ route('content.edit') }}"><img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/collapse.svg" class="svg-icon" alt=""><span>Edit Home Content</span></a></li>
		<li class="{{ request()->is('admin/bookings') ? 'active' : '' }}">
          <a href="{{ route('admin.bookings') }}">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/ecommerce.svg" class="svg-icon" alt="">
			<span>All Bookings</span>
          </a>
        </li>
		<li>
          <a href="members.html">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/user.svg" class="svg-icon" alt="">
			<span>Members</span>
          </a>
        </li>
		<li>
          <a href="analysis.html">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/chart.svg" class="svg-icon" alt="">
			<span>Analysis</span>
          </a>
        </li>
		<li class="header">PRODUCTS SECTION</li>
		<li>
          <a href="ecommerce_products.html">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/image.svg" class="svg-icon" alt="">
			<span>Products</span>
          </a>
        </li>
		<li>
          <a href="ecommerce_cart.html">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/ecommerce.svg" class="svg-icon" alt="">
			<span>Products Cart</span>
          </a>
        </li>
		<li>
          <a href="ecommerce_details.html">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/settings.svg" class="svg-icon" alt="">
			<span>Product Details</span>
          </a>
        </li>
		<li>
          <a href="ecommerce_orders.html">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/star.svg" class="svg-icon" alt="">
			<span>Product Orders</span>
          </a>
        </li>
		<li>
          <a href="ecommerce_checkout.html">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/tables.svg" class="svg-icon" alt="">
			<span>Products Checkout</span>
          </a>
        </li>
		<li>
          <a href="ecommerce_products_edit.html">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/pencil.svg" class="svg-icon" alt="">
			<span>Products Edit</span>
          </a>
        </li>
		<li class="header">ADDITIONALS</li>		
		<li class="treeview">
          <a href="#">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/authentication.svg" class="svg-icon" alt="">
			<span>Authentication</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="auth_login.html"><i class="ti-more"></i>Login</a></li>
			<li><a href="auth_register.html"><i class="ti-more"></i>Register</a></li>
			<li><a href="auth_lockscreen.html"><i class="ti-more"></i>Lockscreen</a></li>
			<li><a href="auth_user_pass.html"><i class="ti-more"></i>Recover password</a></li>	
          </ul>
        </li>	  
		  
		<li class="treeview">
          <a href="#">
            <img src="https://master-admin-template.multipurposethemes.com/bs4/ltr/images/svg-icon/miscellaneous.svg" class="svg-icon" alt="">
			<span>Miscellaneous</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="error_404.html"><i class="ti-more"></i>Error 404</a></li>
			<li><a href="error_500.html"><i class="ti-more"></i>Error 500</a></li>
			<li><a href="error_maintenance.html"><i class="ti-more"></i>Maintenance</a></li>	
          </ul>
        </li>        
      </ul>
    </section>
    <div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
	</div>
  </aside>