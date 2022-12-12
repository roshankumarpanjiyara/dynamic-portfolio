<!--begin::Body-->
<body id="kt_body" style="background-image: url({{asset('template/dist/assets/media/patterns/header-bg-dark.png')}})" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header align-items-stretch" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex align-items-center">
                        <!--begin::Heaeder menu toggle-->
                        <div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Heaeder menu toggle-->
                        <!--begin::Header Logo-->
                        <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
                            <a href="{{route('dashboard')}}">
                                <img alt="Logo" src="{{asset('logos/roshan_logo_bg_3.png')}}" class="logo-default h-35px w-150px" />
                                <img alt="Logo" src="{{asset('logos/roshan_logo_sm_3.png')}}" class="logo-sticky h-60px" />
                            </a>
                        </div>
                        <!--end::Header Logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <!--begin::Menu wrapper-->
                                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                        <div class="menu-item menu-lg-down-accordion me-lg-1">
                                            <a class="menu-link py-3 {{Route::is('dashboard') ? 'active' : ''}}" href="{{route('dashboard')}}">
                                                <span class="menu-title">Dashboard</span>
                                            </a>
                                        </div>
                                        <div class="menu-item menu-lg-down-accordion me-lg-1">
                                            <a class="menu-link py-3 {{Route::is('banner.index') ? 'active' : ''}}" href="{{route('banner.index')}}">
                                                <span class="menu-title">Banner</span>
                                            </a>
                                        </div>
                                        <div class="menu-item menu-lg-down-accordion me-lg-1">
                                            <a class="menu-link py-3 {{Route::is('about.index') ? 'active' : ''}}" href="{{route('about.index')}}">
                                                <span class="menu-title">About</span>
                                            </a>
                                        </div>
                                        <div class="menu-item menu-lg-down-accordion me-lg-1">
                                            <a class="menu-link py-3 {{Route::is('skills.index') ? 'active' : ''}}" href="{{route('skills.index')}}">
                                                <span class="menu-title">Skill</span>
                                            </a>
                                        </div>
                                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1 {{ Route::is('summary.index') || Route::is('educations.index') || Route::is('experiences.index') || Route::is('certifications.index') ? 'here show' : '' }}">
                                            <span class="menu-link py-3">
                                                <span class="menu-title">Resume</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                                <div class="menu-item">
                                                    <a class="menu-link py-3 {{Route::is('summary.index') ? 'active' : ''}}" href="{{Route('summary.index')}}" title="About Myself" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                        <span class="menu-icon">
                                                            <!--begin::Svg Icon | path: /icons/duotune/general/gen002.svg-->
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z" fill="black" />
                                                                    <path d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <span class="menu-title">Summary</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3 {{Route::is('educations.index') ? 'active' : ''}}" href="{{Route('educations.index')}}" title="Education Details" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                        <span class="menu-icon">
                                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <span class="menu-title">Education</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3 {{Route::is('experiences.index') ? 'active' : ''}}" href="{{Route('experiences.index')}}" title="Experience Details" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                        <span class="menu-icon">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <span class="menu-title">Experience</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link py-3 {{Route::is('certifications.index') ? 'active' : ''}}" href="{{Route('certifications.index')}}" title="Certification Details" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                                        <span class="menu-icon">
                                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                            <span class="svg-icon svg-icon-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <span class="menu-title">Certification</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="menu-item menu-lg-down-accordion me-lg-1">
                                            <a class="menu-link py-3 {{Route::is('contacts.index') ? 'active' : ''}}" href="{{route('contacts.index')}}">
                                                <span class="menu-title">Contact</span>
                                            </a>
                                        </div>
                                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                            <span class="menu-link py-3">
                                                <span class="menu-title">Mega Menu</span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-600px p-5 p-lg-5">
                                                <!--begin:Row-->
                                                <div class="row" data-kt-menu-dismiss="true">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 border-left-lg-1">
                                                        <div class="menu-inline menu-column menu-active-bg">
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 border-left-lg-1">
                                                        <div class="menu-inline menu-column menu-active-bg">
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 border-left-lg-1">
                                                        <div class="menu-inline menu-column menu-active-bg">
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
                                                                    <span class="menu-bullet">
                                                                        <span class="bullet bullet-dot"></span>
                                                                    </span>
                                                                    <span class="menu-title">Example link</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Topbar-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Toolbar wrapper-->
                                <div class="topbar d-flex align-items-stretch flex-shrink-0">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center me-n3 ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                        <!--begin::Menu wrapper-->
                                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                            @if (auth()->user()->profile_photo_path)
                                                <img class="h-30px w-30px rounded" src="{{asset('storage/profile-photos')}}/{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
                                            @else
                                                <img class="h-30px w-30px rounded" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                            @endif
                                        </div>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        @if (auth()->user()->profile_photo_path)
                                                            <img src="{{asset('storage/profile-photos')}}/{{ Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
                                                        @else
                                                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                        @endif
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-7">{{Auth::user()->name}}</div>
                                                        <p class="fw-bold text-muted text-hover-primary fs-9">{{Auth::user()->email}}</p>
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="{{route('profile.show')}}" class="menu-link px-5">My Profile</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="{{ route('logout') }}" class="menu-link px-5" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">Sign Out</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <div class="menu-content px-5">
                                                    <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo2/dist/index.html" />
                                                        <span class="pulse-ring ms-n1"></span>
                                                        <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User -->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
