{{--Sidebar--}}
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <ul class="c-sidebar-nav">

        <li class="c-sidebar-nav-title">Admin</li>
        {{--        Here begin's components--}}
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="{{ route('admin/pages.index') }}">
                Pages
            </a>

            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="#">
                        SubComponent
                    </a>
                </li>

                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="#">
                        SubComponent2
                    </a>
                </li>
            </ul>
        </li>

        {{--        Logout button--}}
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>

    </ul>

    {{--    SiderBar Hide Button--}}
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized">
    </button>
</div>
{{--Sidebar--}}
