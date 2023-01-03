<!--
   menu in side bar
   this components is for avoiding repeat HTML codes
 -->
{{-- <li class="">
   <a href="#" class="dropdown-toggle">
      <i class="menu-icon fa {{ isset($icon) ? $icon : '' }}"></i>
      <span class="menu-text"> {{ $menu_name }} </span>
      <span class="badge badge-primary">{{ isset($number) ? $menu_count["$number"] : '' }}</span>
      <span class="arrow fa fa-angle-down"></span>
   </a>
   <b class="arrow"></b>
   <ul class="submenu"> --}}
{{--@can("$gate-create")--}}
      {{-- <li class="">
         <a class="click_me" data-pjax href="{{ route($route_create) }}" data-title="{{ $menu_name }}">
            <i class="menu-icon fa fa-caret-right"></i>{{ isset($subMenu) ? ucfirst($subMenu) : "Create" }} </a>
         <b class="arrow"></b>
      </li> --}}
{{--@endcan--}}


      {{-- @if (isset($route_list))
         <li class="">
            <a class="click_me" data-pjax href="{{ route($route_list) }}" data-title="{{ $menu_name }}">
               <i class="menu-icon fa fa-caret-right"></i>
               {{ isset($secondSubMenu) ? ucfirst($secondSubMenu) : "Browse" }}
            </a>
            <b class="arrow"></b>
         </li>
      @endif
   </ul>
</li> --}}


<li class="sidebar-menu-item ">
   <a class="sidebar-menu-button"
      data-toggle="collapse"
      href="#{{ $menu_name }}">
       <span class="sidebar-menu-text">{{ $menu_name }}</span>
       <span class="ml-auto d-flex align-items-center">     
           <span class="sidebar-menu-toggle-icon"></span>
       </span>
   </a>
   <ul class="sidebar-submenu collapse "
       id="{{ $menu_name }}">
       <li class="sidebar-menu-item ">
           <a class="sidebar-menu-button" href="{{ route($route_create) }}" data-title="{{ $menu_name }}">
               <span class="sidebar-menu-text"><i class="menu-icon fa fa-caret-right"></i>{{ isset($subMenu) ? ucfirst($subMenu) : "Create" }}</span>
           </a>
       </li>
       @if (isset($route_list))
       <li class="sidebar-menu-item ">
           <a class="sidebar-menu-button"
              href="{{ route($route_list) }}" data-title="{{ $menu_name }}">
               <span class="sidebar-menu-text">{{ isset($secondSubMenu) ? ucfirst($secondSubMenu) : "Browse" }}</span>
           </a>
       </li>
       @endif
   </ul>
</li>