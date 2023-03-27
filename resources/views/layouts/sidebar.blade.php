<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="d-flex justify-content-center">
        <a href="{{url('index')}}" class="logo logo-dark">
            <div>
                <img class="hidden" src="{{ URL::asset('/assets/images/logo-sm.png') }}" id="logoAdjust-s" alt="" height="40">                
                <img class="me-3" src="{{ URL::asset('/assets/images/logo.png') }}" id="logoAdjust-l" alt="" height="48">
            </div>
        </a>

        <a href="{{url('index')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('/assets/images/logo-light.png') }}" alt="" height="20">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll m-0">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">@lang('translation.Menu')</li>

                <li>
                    <a href="{{route('home')}}">
                        <i class="uil-home-alt"></i><span class="badge rounded-pill bg-primary float-end">01</span>
                        <span>@lang('translation.Dashboard')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-window-section"></i>
                        <span>@lang('translation.Layouts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">@lang('translation.Vertical')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-dark-sidebar">@lang('translation.Dark_Sidebar')</a></li>
                                <li><a href="layouts-compact-sidebar">@lang('translation.Compact_Sidebar')</a></li>
                                <li><a href="layouts-icon-sidebar">@lang('translation.Icon_Sidebar')</a></li>
                                <li><a href="layouts-boxed">@lang('translation.Boxed_Width')</a></li>
                                <li><a href="layouts-preloader">@lang('translation.Preloader')</a></li>
                                <li><a href="layouts-colored-sidebar">@lang('translation.Colored_Sidebar')</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">@lang('translation.Horizontal')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal">@lang('translation.Horizontal')</a></li>
                                <li><a href="layouts-hori-topbar-dark">@lang('translation.Dark_Topbar')</a></li>
                                <li><a href="layouts-hori-boxed-width">@lang('translation.Boxed_Width')</a></li>
                                <li><a href="layouts-hori-preloader">@lang('translation.Preloader')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title">@lang('translation.Apps')</li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="uil-calender"></i>
                        <span>@lang('translation.Calendar')</span>
                    </a>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="uil-comments-alt"></i>
                        <span class="badge rounded-pill bg-warning float-end">New</span>
                        <span>@lang('translation.Chat')</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-store"></i>
                        <span>@lang('translation.Ecommerce')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Products')</a></li>
                        <li><a href="#">@lang('translation.Product_Detail')</a></li>
                        <li><a href="#">@lang('translation.Orders')</a></li>
                        <li><a href="#">@lang('translation.Customers')</a></li>
                        <li><a href="#">@lang('translation.Cart')</a></li>
                        <li><a href="#">@lang('translation.Checkout')</a></li>
                        <li><a href="#">@lang('translation.Shops')</a></li>
                        <li><a href="#">@lang('translation.Add_Product')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-envelope"></i>
                        <span>@lang('translation.Email')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Inbox')</a></li>
                        <li><a href="#">@lang('translation.Read_Email')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-invoice"></i>
                        <span>@lang('translation.Invoices')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Invoice_List')</a></li>
                        <li><a href="#">@lang('translation.Invoice_Detail')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-book-alt"></i>
                        <span>@lang('translation.Contacts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.User_Grid')</a></li>
                        <li><a href="#">@lang('translation.User_List')</a></li>
                        <li><a href="#">@lang('translation.Profile')</a></li>
                    </ul>
                </li>

                <li class="menu-title">@lang('translation.Pages')</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-circle"></i>
                        <span>@lang('translation.Authentication')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Login')</a></li>
                        <li><a href="#">@lang('translation.Register')</a></li>
                        <li><a href="#">@lang('translation.Recover_Password')</a></li>
                        <li><a href="#">@lang('translation.Lock_Screen')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-file-alt"></i>
                        <span>@lang('translation.Utility')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Starter_Page')</a></li>
                        <li><a href="#">@lang('translation.Maintenance')</a></li>
                        <li><a href="#">@lang('translation.Coming_Soon')</a></li>
                        <li><a href="#">@lang('translation.Timeline')</a></li>
                        <li><a href="#">@lang('translation.FAQs')</a></li>
                        <li><a href="#">@lang('translation.Pricing')</a></li>
                        <li><a href="#">@lang('translation.Error_404')</a></li>
                        <li><a href="#">@lang('translation.Error_500')</a></li>
                    </ul>
                </li>

                <li class="menu-title">@lang('translation.Components')</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-flask"></i>
                        <span>@lang('translation.UI_Elements')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Alerts')</a></li>
                        <li><a href="#">@lang('translation.Buttons')</a></li>
                        <li><a href="#">@lang('translation.Cards')</a></li>
                        <li><a href="#">@lang('translation.Carousel')</a></li>
                        <li><a href="#">@lang('translation.Dropdowns')</a></li>
                        <li><a href="#">@lang('translation.Grid')</a></li>
                        <li><a href="#">@lang('translation.Images')</a></li>
                        <li><a href="#">@lang('translation.Lightbox')</a></li>
                        <li><a href="#">@lang('translation.Modals')</a></li>
                        <li><a href="#">@lang('translation.Range_Slider')</a></li>
                        <li><a href="#">@lang('translation.Session_Timeout')</a></li>
                        <li><a href="#">@lang('translation.Progress_Bars')</a></li>
                        <li><a href="#">@lang('translation.Sweet_Alert')</a></li>
                        <li><a href="#">@lang('translation.Tabs_Accordions')</a></li>
                        <li><a href="#">@lang('translation.Typography')</a></li>
                        <li><a href="#">@lang('translation.Video')</a></li>
                        <li><a href="#">@lang('translation.General')</a></li>
                        <li><a href="#">@lang('translation.Colors')</a></li>
                        <li><a href="#">@lang('translation.Rating')</a></li>
                        <li><a href="#">@lang('translation.Notifications')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="uil-shutter-alt"></i>
                        <span class="badge rounded-pill bg-info float-end">6</span>
                        <span>@lang('translation.Forms')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Basic_Elements')</a></li>
                        <li><a href="#">@lang('translation.Validation')</a></li>
                        <li><a href="#">@lang('translation.Advanced_Plugins')</a></li>
                        <li><a href="#">@lang('translation.Editors')</a></li>
                        <li><a href="#">@lang('translation.File_Upload')</a></li>
                        <li><a href="#">@lang('translation.Xeditable')</a></li>
                        <li><a href="#">@lang('translation.Repeater')</a></li>
                        <li><a href="#">@lang('translation.Wizard')</a></li>
                        <li><a href="#">@lang('translation.Mask')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-list-ul"></i>
                        <span>@lang('translation.Tables')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Bootstrap_Basic')</a></li>
                        <li><a href="#">@lang('translation.Datatables')</a></li>
                        <li><a href="#">@lang('translation.Responsive')</a></li>
                        <li><a href="#">@lang('translation.Editable')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-chart"></i>
                        <span>@lang('translation.Charts')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Apex')</a></li>
                        <li><a href="#">@lang('translation.Chartjs')</a></li>
                        <li><a href="#">@lang('translation.Flot')</a></li>
                        <li><a href="#">@lang('translation.Jquery_Knob')</a></li>
                        <li><a href="#">@lang('translation.Sparkline')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-streering"></i>
                        <span>@lang('translation.Icons')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Unicons')</a></li>
                        <li><a href="#">@lang('translation.Boxicons')</a></li>
                        <li><a href="#">@lang('translation.Material_Design')</a></li>
                        <li><a href="#">@lang('translation.Dripicons')</a></li>
                        <li><a href="#">@lang('translation.Font_Awesome')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-location-point"></i>
                        <span>@lang('translation.Maps')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">@lang('translation.Google')</a></li>
                        <li><a href="#">@lang('translation.Vector')</a></li>
                        <li><a href="#">@lang('translation.Leaflet')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-share-alt"></i>
                        <span>@lang('translation.Multi_Level')</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">@lang('translation.Level_1.1')</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">@lang('translation.Level_1.2')</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">@lang('translation.Level_2.1')</a></li>
                                <li><a href="javascript: void(0);">@lang('translation.Level_2.2')</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->