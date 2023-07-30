
<div class="side-bar">
        <div class="n-parent">
          <img class="n-icon" alt="" src="./public/n.svg" />

          <div class="netmenu">NETMENU</div>
        </div>
        <div class="frame-parent7">
          <button class="vuesaxlinear24-support-parent" autofocus>
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="./public/vuesaxlinear24support.svg"
            />

            <div class="support">Support</div>
          </button>
          <a class="btn" href= "{{ route('admin/logout')}}">
          <button class="vuesaxlinear24-support-parent" >
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="./public/vuesaxlinearlogout.svg"
            />

            <div class="support">Logout</div>
          </button>
          </a>
        </div>
        <a class="side-bar-inner btn btn-danger text-dark" href="{{ url('admin/dashboard')}}" autofocus>
          <div class="vuesaxlinearelement-2-parent">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="./public/vuesaxlinearelement2.svg"
            />

            <div class="dashboard1">Dashboard</div>
          </div>
        </a>
         <a class="btn" href="{{ url('admin/shop/index')}}">
        <button class="side-bar-child">
          <div class="vuesaxlinearelement-2-parent">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="./public/vuesaxlinearshoppingcart.svg"
            />
           
            <div class="support">Store</div>
          </div>
        </button>
      </a>
        <button class="side-bar-inner1">
          <div class="vuesaxlinearframe-parent">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="./public/vuesaxlinearframe.svg"
            />

            <div class="support">Insight</div>
          </div>
        
        </button>
        {{-- @if(Auth::guard('admin')->user()->type=="vendor")
  <button class="side-bar-inner2" autofocus onclick="toggleSettingsDropdown()">
          <div class="vuesaxlinearelement-2-parent">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="./public/vuesaxlinearsetting2.svg"
            />
            <div class="support">Vendor Details</div>
          </div>
          <div id="settingsDropdown" class="dropdown-content">
        <a href="">Store Settings</a>
        <a href="{{ url('admin/update-vendor-details/personal')}}">Personal Details</a>
        <a href="{{ url('admin/update-vendor-details/business')}}">Business Details</a>
        <a href="{{ url('admin/update-vendor-details/bank')}}">BankDetails</a>
      </div>
        </button>
@else --}}

        <a class="btn" href="{{ url('admin/update-admin-details')}}">
        <button class="side-bar-inner2">
          <div class="vuesaxlinearelement-2-parent">
            <img
              class="vuesaxlinearnotification-icon"
              alt=""
              src="./public/vuesaxlinearsetting2.svg"
            />
            <div class="support">Settings</div>
          </div>
        </button>
        </a>
      
    </div>
</div>
        
</div>
<script>
    function toggleSettingsDropdown() {
  var settingsDropdown = document.getElementById("settingsDropdown");
  settingsDropdown.style.display = (settingsDropdown.style.display === "block") ? "none" : "block";
}
</script>
