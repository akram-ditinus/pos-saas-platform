@extends('../../themes/base')

@section('head')
    @yield('subhead')
@endsection

@section('content')
    <div @class([
        'echo group bg-gradient-to-b from-slate-200/70 to-slate-50 background relative min-h-screen',
        "before:content-[''] before:h-[370px] before:w-screen before:bg-gradient-to-t before:from-theme-1/80 before:to-theme-2 [&.background--hidden]:before:opacity-0 before:transition-[opacity,height] before:ease-in-out before:duration-300 before:top-0 before:fixed",
        "after:content-[''] after:h-[370px] after:w-screen [&.background--hidden]:after:opacity-0 after:transition-[opacity,height] after:ease-in-out after:duration-300 after:top-0 after:fixed after:bg-texture-white after:bg-contain after:bg-fixed after:bg-[center_-13rem] after:bg-no-repeat",
    ])>
        <div @class([
            'side-menu xl:ml-0 shadow-xl transition-[margin,padding] duration-300 xl:shadow-none fixed top-0 left-0 z-50 side-menu group inset-y-0 xl:py-3.5 xl:pl-3.5',
            "after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:xl:hidden",
            'side-menu--collapsed',
            '[&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:after:block',
            '-ml-[275px] after:hidden',
        ])>
            <div @class([
                'close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden z-50',
                '[&.close-mobile-menu--mobile-menu-open]:flex',
                'hidden',
            ])>
                <a
                    class="mt-5 ml-5"
                    href=""
                >
                    <x-base.lucide
                        class="w-8 h-8 text-white"
                        icon="X"
                    />
                </a>
            </div>
            <div @class([
                'side-menu__content',
                'h-full box bg-white/[0.95] rounded-none xl:rounded-xl z-20 relative w-[275px] duration-300 transition-[width] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] overflow-hidden flex flex-col',
            ])>
                <div @class([
                    'flex-none hidden xl:flex items-center z-10 px-5 h-[65px] w-[275px] overflow-hidden relative duration-300 group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px]',
                ])>
                    <a
                        class="flex items-center transition-[margin] duration-300 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-2"
                        href="{{route('restaurant.owner.dashboard')}}"
                    >
                        <div
                            class="flex h-[34px] w-[34px] items-center justify-center rounded-lg bg-gradient-to-b from-theme-1 to-theme-2/80 transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-180">
                            <div class="relative h-[16px] w-[16px] -rotate-45 [&_div]:bg-white">
                                <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                </div>
                                <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                                <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                </div>
                            </div>
                        </div>
                        <div
                            class="ml-3.5 font-medium transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                            Dashboard
                        </div>
                    </a>
                    <a
                        class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-slate-600/40 transition-[opacity,transform] hover:bg-slate-600/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex"
                        href=""
                    >
                        <x-base.lucide
                            class="h-3.5 w-3.5 stroke-[1.3]"
                            icon="ArrowLeft"
                        />
                    </a>
                </div>
                <div @class([
                    'scrollable-ref w-full h-full z-20 px-5 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent',
                    '[&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30',
                ])>
                    <ul class="scrollable">
                        <!-- BEGIN: First Child -->
                        @foreach ($sideMenu as $menuKey => $menu)
                            @if (is_string($menu))
                                <li class="side-menu__divider">
                                    {{ $menu }}
                                </li>
                            @else
                                <li>
                                    <a
                                        href="{{ isset($menu['route_name']) && Route::has($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}"
                                        @class([
                                            'side-menu__link',
                                            $firstLevelActiveIndex == $menuKey ? 'side-menu__link--active' : '',
                                            $firstLevelActiveIndex == $menuKey && isset($menu['sub_menu'])
                                                ? 'side-menu__link--active-dropdown'
                                                : '',
                                        ])
                                    >
                                        <x-base.lucide
                                            class="side-menu__link__icon"
                                            :icon="$menu['icon']"
                                        />
                                        <div class="side-menu__link__title">{{ $menu['title'] }}</div>
                                        @if (isset($menu['badge']))
                                            <div class="side-menu__link__badge">
                                                {{ $menu['badge'] }}
                                            </div>
                                        @endif
                                        @if (isset($menu['sub_menu']))
                                            <x-base.lucide
                                                class="side-menu__link__chevron"
                                                icon="ChevronDown"
                                            />
                                        @endif
                                    </a>
                                    <!-- BEGIN: Second Child -->
                                    @if (isset($menu['sub_menu']))
                                        <ul class="{{ $firstLevelActiveIndex == $menuKey ? 'block' : 'hidden' }}">
                                            @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                                <li>
                                                    <a
                                                        href="{{ isset($subMenu['route_name']) && Route::has($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}"
                                                        @class([
                                                            'side-menu__link',
                                                            $firstLevelActiveIndex == $menuKey && $secondLevelActiveIndex == $subMenuKey
                                                                ? 'side-menu__link--active'
                                                                : '',
                                                            $secondLevelActiveIndex == $subMenuKey && isset($subMenu['sub_menu'])
                                                                ? 'side-menu__link--active-dropdown'
                                                                : '',
                                                        ])
                                                    >
                                                        <x-base.lucide
                                                            class="side-menu__link__icon"
                                                            :icon="$subMenu['icon']"
                                                        />
                                                        <div class="side-menu__link__title">
                                                            {{ $subMenu['title'] }}
                                                        </div>
                                                        @if (isset($subMenu['badge']))
                                                            <div class="side-menu__link__badge">
                                                                {{ $subMenu['badge'] }}
                                                            </div>
                                                        @endif
                                                        @if (isset($subMenu['sub_menu']))
                                                            <x-base.lucide
                                                                class="side-menu__link__chevron"
                                                                icon="ChevronDown"
                                                            />
                                                        @endif
                                                    </a>
                                                    <!-- BEGIN: Third Child -->
                                                    @if (isset($subMenu['sub_menu']))
                                                        <ul
                                                            class="{{ $secondLevelActiveIndex == $subMenuKey ? 'block' : 'hidden' }}">
                                                            >
                                                            @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                                <li>
                                                                    <a
                                                                        href="{{ isset($lastSubMenu['route_name']) && Route::has($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}"
                                                                        @class([
                                                                            'side-menu__link',
                                                                            $firstLevelActiveIndex == $menuKey &&
                                                                            $secondLevelActiveIndex == $subMenuKey &&
                                                                            $thirdLevelActiveIndex == $lastSubMenuKey
                                                                                ? 'side-menu__link--active'
                                                                                : '',
                                                                            $thirdLevelActiveIndex == $lastSubMenuKey && isset($lastSubMenu['sub_menu'])
                                                                                ? 'side-menu__link--active-dropdown'
                                                                                : '',
                                                                        ])
                                                                    >
                                                                        <x-base.lucide
                                                                            class="side-menu__link__icon"
                                                                            :icon="$lastSubMenu['icon']"
                                                                        />
                                                                        <div class="side-menu__link__title">
                                                                            {{ $lastSubMenu['title'] }}
                                                                        </div>
                                                                        @if (isset($lastSubMenu['badge']))
                                                                            <div class="side-menu__link__badge">
                                                                                {{ $lastSubMenu['title'] }}
                                                                            </div>
                                                                        @endif
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    <!-- END: Third Child -->
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                    <!-- END: Second Child -->
                                </li>
                            @endif
                        @endforeach
                        <!-- END: First Child -->
                    </ul>
                </div>
            </div>
            <div
                class="fixed inset-x-0 top-0 mt-3.5 h-[65px] transition-[margin] duration-100 xl:ml-[275px] group-[.side-menu--collapsed]:xl:ml-[90px]">
                <div @class([
                    'top-bar absolute left-0 xl:left-3.5 right-0 h-full mx-5 group',
                    "before:content-[''] before:absolute before:top-0 before:inset-x-0 before:-mt-[15px] before:h-[20px] before:backdrop-blur",
                ])>
                    <div
                        class="box group-[.top-bar--active]:box container flex h-full w-full items-center border-transparent bg-transparent shadow-none transition-[padding,background-color,border-color] duration-300 ease-in-out group-[.top-bar--active]:border-transparent group-[.top-bar--active]:bg-transparent group-[.top-bar--active]:bg-gradient-to-r group-[.top-bar--active]:from-theme-1 group-[.top-bar--active]:to-theme-2 group-[.top-bar--active]:px-5">
                        <div class="flex items-center gap-1 xl:hidden">
                            <a
                                class="p-2 text-white rounded-full open-mobile-menu hover:bg-white/5"
                                href=""
                            >
                                <x-base.lucide
                                    class="h-[18px] w-[18px]"
                                    icon="AlignJustify"
                                />
                            </a>
                            <a
                                class="p-2 text-white rounded-full hover:bg-white/5"
                                data-tw-toggle="modal"
                                data-tw-target="#quick-search"
                                href="javascript:;"
                            >
                                <x-base.lucide
                                    class="h-[18px] w-[18px]"
                                    icon="Search"
                                />
                            </a>
                        </div>
                        <!-- BEGIN: Breadcrumb -->
                        <x-base.breadcrumb
                            class="flex-1 hidden xl:block"
                            light
                        >
                            <x-base.breadcrumb.link
                                :index="0"
                                to="/"
                            >App</x-base.breadcrumb.link>
                            <x-base.breadcrumb.link
                                :index="1"
                                to="/"
                            >Dashboards</x-base.breadcrumb.link>
                            <x-base.breadcrumb.link
                                :index="2"
                                to="/"
                                :active="true"
                            >
                                Analytics
                            </x-base.breadcrumb.link>
                        </x-base.breadcrumb>
                        <!-- END: Breadcrumb -->
                        <!-- BEGIN: Search -->
                        <div
                            class="relative justify-center flex-1 hidden xl:flex"
                            data-tw-toggle="modal"
                            data-tw-target="#quick-search"
                        >
                            <div
                                class="flex w-[350px] cursor-pointer items-center rounded-[0.5rem] border border-transparent bg-white/[0.12] px-3.5 py-2 text-white/60 transition-colors duration-300 hover:bg-white/[0.15] hover:duration-100">
                                <x-base.lucide
                                    class="h-[18px] w-[18px]"
                                    icon="Search"
                                />
                                <div class="ml-2.5 mr-auto">Quick search...</div>
                                <div>⌘K</div>
                            </div>
                        </div>
                        <x-quick-search />
                        <!-- END: Search -->
                        <!-- BEGIN: Notification & User Menu -->
                        <div class="flex items-center flex-1">
                            <div class="flex items-center gap-1 ml-auto">
                                <a
                                    class="p-2 text-white rounded-full hover:bg-white/5"
                                    data-tw-toggle="modal"
                                    data-tw-target="#activities-panel"
                                    href="javascript:;"
                                >
                                    <x-base.lucide
                                        class="h-[18px] w-[18px]"
                                        icon="LayoutGrid"
                                    />
                                </a>
                                {{-- <a
              href=""
              class="p-2 text-white rounded-full hover:bg-white/5"
            >
              <x-base.lucide icon="Moon" class="w-[18px] h-[18px]" />
            </a> --}}
                                <a
                                    class="p-2 text-white rounded-full request-full-screen hover:bg-white/5"
                                    href=""
                                >
                                    <x-base.lucide
                                        class="h-[18px] w-[18px]"
                                        icon="Expand"
                                    />
                                </a>
                                <a
                                    class="p-2 text-white rounded-full hover:bg-white/5"
                                    data-tw-toggle="modal"
                                    data-tw-target="#notifications-panel"
                                    href="javascript:;"
                                >
                                    <x-base.lucide
                                        class="h-[18px] w-[18px]"
                                        icon="Bell"
                                    />
                                </a>
                            </div>
                            <x-base.menu class="ml-5">
                                <x-base.menu.button
                                    class="image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-white/[0.15]"
                                >
                                    <img
                                        src="{{ Vite::asset($users[0]['photo']) }}"
                                        alt="POS System"
                                    />
                                </x-base.menu.button>
                                <x-base.menu.items class="w-56 mt-1">
                                    <x-base.menu.item data-tw-toggle="modal" data-tw-target="#switch-account">
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="ToggleLeft"
                                        />
                                        Switch Account
                                    </x-base.menu.item>
                                    <x-base.menu.divider />
                                    <x-base.menu.item href="{{ route('settings', ['page' => 'connected-services']) }}">
                                        <x-base.lucide class="w-4 h-4 mr-2" icon="Settings"/>
                                        Connected Services
                                    </x-base.menu.item>
                                    <x-base.menu.item href="{{ route('settings', ['page' => 'email-settings']) }}">
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Inbox"
                                        />
                                        Email Settings
                                    </x-base.menu.item>
                                    <x-base.menu.item href="{{ route('settings', ['page' => 'security']) }}">
                                        <x-base.lucide class="w-4 h-4 mr-2" icon="Lock"/>
                                        Reset Password
                                    </x-base.menu.item>
                                    <x-base.menu.divider />
                                    <x-base.menu.item href="{{ route('super.admin.profile') }}">
                                        <x-base.lucide
                                            class="w-4 h-4 mr-2"
                                            icon="Users"
                                        />
                                        Profile Info
                                    </x-base.menu.item>
                                    <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-base.menu.item :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                <x-base.lucide
                                                class="w-4 h-4 mr-2"
                                                icon="Power"
                                            />
                                {{ __('Log Out') }}
                            </x-base.menu.item>
                        </form>
                                   
                                </x-base.menu.items>
                            </x-base.menu>
                        </div>
                        <x-activities-panel />
                        <x-notifications-panel />
                        <x-switch-account />
                        <!-- END: Notification & User Menu -->
                    </div>
                </div>
            </div>
        </div>
        <div @class([
            'content transition-[margin,width] duration-100 xl:pl-3.5 pt-[54px] pb-16 relative z-10 group mode',
            'content--compact',
            'xl:ml-[275px]',
            'mode--light',
            '[&.content--compact]:xl:ml-[91px]',
        ])>
            <div class="px-5 mt-16">
                <div class="container">
                    @yield('subcontent')
                </div>
            </div>
        </div>
    </div>
@endsection

@pushOnce('styles')
    @vite('resources/css/vendors/simplebar.css')
    @vite('resources/css/themes/echo.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/simplebar.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/themes/echo.js')
@endPushOnce
