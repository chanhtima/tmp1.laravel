<div class="co-menu-01-basic  drawer-end ">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="co-menu-01-basic-dcontents">
      <!-- Page content here -->
      <label for="my-drawer-4" > 
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
        class="inline-block w-8 h-8  stroke-current">
        <path stroke-linecap="round" stroke-linejoin="round" 
        stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>
    </div> 
    <div class="co-menu-01-basic-sides">
      <label for="my-drawer-4" class="drawer-overlay" ></label>
      <ul > 
            <li> <label for="my-drawer-4" class="drawer-overlay co-menu-01-basic-sides-textX" >X</label></li>
            <li><a href="{{url('/')}}" class="co-menu-01-basic-sides-active">Home</a></li>
            <li><a href="{{url('/dissertation')}}">Dissertation</a></li>
            <li><a href="{{url('/disser-aticle')}}">Disser Aticle</a></li>
            <li><a href="{{url('/disser-video')}}">Disser Video</a></li>
            <li><a href="{{url('/contacts')}}">Contacts</a></li>
            <li>
              <x-frontend::button.Button01Language/>
            </li>
            
          </ul>
          
          
        </div>
