<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a><a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a></div>
        <div class="nk-sidebar-brand"><a href="{{ route('admin.dashboard') }}" class="logo-link nk-sidebar-logo"><img class="logo-light logo-img" src="{{ asset('backend/assets/images/logo.png') }}" srcset="{{ asset('backend/assets/images/logo2x.png 2x') }}" alt="logo"><img class="logo-dark logo-img" src="{{ asset('backend/assets/images/logo-dark.png') }}" srcset="{{ asset('backend/assets/images/logo-dark2x.png 2x') }}" alt="logo-dark"></a></div>
    </div>
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item"><a href="{{ route('admin.dashboard') }}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span><span class="nk-menu-text">Dashboard</span></a></li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Use-Case Preview</h6>
                    </li>
                    <li class="nk-menu-item"><a href="/demo1/crm/index.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span><span class="nk-menu-text">CRM Panel</span><span class="nk-menu-badge">HOT</span></a></li>
                    <li class="nk-menu-item"><a href="/demo1/hotel/index.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-building"></em></span><span class="nk-menu-text">Hotel Management</span><span class="nk-menu-badge">HOT</span></a></li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li>
                    <li class="nk-menu-item"><a href="/demo1/index.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span><span class="nk-menu-text">Default Dashboard</span></a></li>
                    <li class="nk-menu-item"><a href="/demo1/index-crypto.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span><span class="nk-menu-text">Crypto Dashboard</span></a></li>
                    <li class="nk-menu-item"><a href="/demo1/index-analytics.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span><span class="nk-menu-text">Analytics Dashboard</span></a></li>
                    <li class="nk-menu-item"><a href="/demo1/index-invest.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span><span class="nk-menu-text">Invest Dashboard</span></a></li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Pre-Built Pages</h6>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span><span class="nk-menu-text">Projects</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/project-card.html" class="nk-menu-link"><span class="nk-menu-text">Project Cards</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/project-list.html" class="nk-menu-link"><span class="nk-menu-text">Project List</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-users"></em></span><span class="nk-menu-text">User Manage</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/user-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">User List - Regular</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/user-list-compact.html" class="nk-menu-link"><span class="nk-menu-text">User List - Compact</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/user-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Details - Regular</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/user-profile-regular.html" class="nk-menu-link"><span class="nk-menu-text">User Profile - Regular</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/user-card.html" class="nk-menu-link"><span class="nk-menu-text">User Contact - Card</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span><span class="nk-menu-text">Customers</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/customer-list.html" class="nk-menu-link"><span class="nk-menu-text">Customer List</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/customer-details.html" class="nk-menu-link"><span class="nk-menu-text">Customer Details</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span class="nk-menu-text">AML / KYCs</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/kyc-list-regular.html" class="nk-menu-link"><span class="nk-menu-text">KYC List - Regular</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/kyc-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">KYC Details - Regular</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span><span class="nk-menu-text">Transactions</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/transaction-basic.html" class="nk-menu-link"><span class="nk-menu-text">Tranx List - Basic</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/transaction-crypto.html" class="nk-menu-link"><span class="nk-menu-text">Tranx List - Crypto</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span><span class="nk-menu-text">Applications</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/apps-messages.html" class="nk-menu-link"><span class="nk-menu-text">Messages</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/apps-inbox.html" class="nk-menu-link"><span class="nk-menu-text">Inbox / Mail</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/apps-file-manager.html" class="nk-menu-link"><span class="nk-menu-text">File Manager</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/apps-chats.html" class="nk-menu-link"><span class="nk-menu-text">Chats / Messenger</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/apps-calendar.html" class="nk-menu-link"><span class="nk-menu-text">Calendar</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/apps-kanban.html" class="nk-menu-link"><span class="nk-menu-text">Kanban Board</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span><span class="nk-menu-text">Invoice</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/invoice-list.html" class="nk-menu-link"><span class="nk-menu-text">Invoice List</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/invoice-details.html" class="nk-menu-link"><span class="nk-menu-text">Invoice Details</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span><span class="nk-menu-text">Products</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/product-list.html" class="nk-menu-link"><span class="nk-menu-text">Product List</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/product-card.html" class="nk-menu-link"><span class="nk-menu-text">Product Card</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/product-details.html" class="nk-menu-link"><span class="nk-menu-text">Product Details</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item"><a href="/demo1/pricing-table.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-view-col"></em></span><span class="nk-menu-text">Pricing Table</span></a></li>
                    <li class="nk-menu-item"><a href="/demo1/gallery.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-img"></em></span><span class="nk-menu-text">Image Gallery</span></a></li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Misc Pages</h6>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-signin"></em></span><span class="nk-menu-text">Auth Pages</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-login.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-register.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-reset.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-success.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Classic Version - v2</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-login-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-register-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-reset-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-success-v2.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">No Slider Version - v3</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-login-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Login / Signin</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-register-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Register / Signup</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-reset-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Forgot Password</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/pages/auths/auth-success-v3.html" class="nk-menu-link" target="_blank"><span class="nk-menu-text">Success / Confirm</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-files"></em></span><span class="nk-menu-text">Error Pages</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/pages/errors/404-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Classic</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/pages/errors/504-classic.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Classic</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/pages/errors/404-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">404 Modern</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/pages/errors/504-s1.html" target="_blank" class="nk-menu-link"><span class="nk-menu-text">504 Modern</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-files"></em></span><span class="nk-menu-text">Other Pages</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/_blank.html" class="nk-menu-link"><span class="nk-menu-text">Blank / Startup</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/pages/faqs.html" class="nk-menu-link"><span class="nk-menu-text">Faqs / Help</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/pages/terms-policy.html" class="nk-menu-link"><span class="nk-menu-text">Terms / Policy</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/pages/regular-v1.html" class="nk-menu-link"><span class="nk-menu-text">Regular Page - v1</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/pages/regular-v2.html" class="nk-menu-link"><span class="nk-menu-text">Regular Page - v2</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Components</h6>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span><span class="nk-menu-text">Ui Elements</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/components/elements/alerts.html" class="nk-menu-link"><span class="nk-menu-text">Alerts</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/accordions.html" class="nk-menu-link"><span class="nk-menu-text">Accordions</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/avatar.html" class="nk-menu-link"><span class="nk-menu-text">Avatar</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/badges.html" class="nk-menu-link"><span class="nk-menu-text">Badges</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/buttons.html" class="nk-menu-link"><span class="nk-menu-text">Buttons</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/buttons-group.html" class="nk-menu-link"><span class="nk-menu-text">Button Group</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/breadcrumb.html" class="nk-menu-link"><span class="nk-menu-text">Breadcrumb</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/cards.html" class="nk-menu-link"><span class="nk-menu-text">Cards</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/carousel.html" class="nk-menu-link"><span class="nk-menu-text">Carousel</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/list-dropdown.html" class="nk-menu-link"><span class="nk-menu-text">List Dropdown</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/modals.html" class="nk-menu-link"><span class="nk-menu-text">Modals</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/pagination.html" class="nk-menu-link"><span class="nk-menu-text">Pagination</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/popover.html" class="nk-menu-link"><span class="nk-menu-text">Popovers</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/progress.html" class="nk-menu-link"><span class="nk-menu-text">Progress</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/preloader.html" class="nk-menu-link"><span class="nk-menu-text">Preloader</span> <span class="nk-menu-badge">New</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/placeholders.html" class="nk-menu-link"><span class="nk-menu-text">Placeholders</span> <span class="nk-menu-badge">New</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/spinner.html" class="nk-menu-link"><span class="nk-menu-text">Spinner</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/tabs.html" class="nk-menu-link"><span class="nk-menu-text">Tabs</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/toast.html" class="nk-menu-link"><span class="nk-menu-text">Toasts</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/tooltip.html" class="nk-menu-link"><span class="nk-menu-text">Tooltip</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/elements/typography.html" class="nk-menu-link"><span class="nk-menu-text">Typography</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Utilities</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo1/components/elements/util-border.html" class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/elements/util-colors.html" class="nk-menu-link"><span class="nk-menu-text">Colors</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/elements/util-display.html" class="nk-menu-link"><span class="nk-menu-text">Display</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/elements/util-embeded.html" class="nk-menu-link"><span class="nk-menu-text">Embeded</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/elements/util-flex.html" class="nk-menu-link"><span class="nk-menu-text">Flex</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/elements/util-text.html" class="nk-menu-link"><span class="nk-menu-text">Text</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/elements/util-sizing.html" class="nk-menu-link"><span class="nk-menu-text">Sizing</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/elements/util-spacing.html" class="nk-menu-link"><span class="nk-menu-text">Spacing</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/elements/util-others.html" class="nk-menu-link"><span class="nk-menu-text">Others</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-dot-box"></em></span><span class="nk-menu-text">Crafted Icons</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/components/misc/svg-icons.html" class="nk-menu-link"><span class="nk-menu-text">SVG Icon - Exclusive</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/misc/nioicon.html" class="nk-menu-link"><span class="nk-menu-text">Nioicon - HandCrafted</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item"><a href="/demo1/components/misc/icons.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span><span class="nk-menu-text">Icon Libraries</span></a></li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-table-view"></em></span><span class="nk-menu-text">Tables</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/components/tables/table-basic.html" class="nk-menu-link"><span class="nk-menu-text">Basic Tables</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/tables/table-special.html" class="nk-menu-link"><span class="nk-menu-text">Special Tables</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/tables/table-datatable.html" class="nk-menu-link"><span class="nk-menu-text">DataTables</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-card-view"></em></span><span class="nk-menu-text">Forms</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/components/forms/form-elements.html" class="nk-menu-link"><span class="nk-menu-text">Form Elements</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/forms/checkbox-radio.html" class="nk-menu-link"><span class="nk-menu-text">Checkbox Radio</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/forms/advanced-controls.html" class="nk-menu-link"><span class="nk-menu-text">Advanced Controls</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/forms/input-group.html" class="nk-menu-link"><span class="nk-menu-text">Input Group</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/forms/form-upload.html" class="nk-menu-link"><span class="nk-menu-text">Form Upload</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/forms/datetime-picker.html" class="nk-menu-link"><span class="nk-menu-text">Date &amp; Time Picker</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/forms/number-spinner.html" class="nk-menu-link"><span class="nk-menu-text">Number Spinner</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/forms/nouislider.html" class="nk-menu-link"><span class="nk-menu-text">noUiSlider</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/forms/form-layouts.html" class="nk-menu-link"><span class="nk-menu-text">Form Layouts</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/forms/form-validation.html" class="nk-menu-link"><span class="nk-menu-text">Form Validation</span></a></li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Wizard</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo1/components/forms/form-wizard.html" class="nk-menu-link"><span class="nk-menu-text">Basic Demo</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/forms/wizard/create-project.html" class="nk-menu-link"><span class="nk-menu-text">Create Project</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/forms/wizard/create-profile.html" class="nk-menu-link"><span class="nk-menu-text">Create Profile</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/forms/wizard/two-factor-auth.html" class="nk-menu-link"><span class="nk-menu-text">Two Factor Auth</span></a></li>
                                    <li class="nk-menu-item"><a target="_blank" href="/demo1/components/forms/wizard/survey-v1.html" class="nk-menu-link"><span class="nk-menu-text">Survey</span></a></li>
                                    <li class="nk-menu-item"><a target="_blank" href="/demo1/components/forms/wizard/survey-v2.html" class="nk-menu-link"><span class="nk-menu-text">Survey v2</span></a></li>
                                </ul>
                            </li>
                            <li class="nk-menu-item"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Rich Editor</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="/demo1/components/forms/form-summernote.html" class="nk-menu-link"><span class="nk-menu-text">Summernote</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/forms/form-quill.html" class="nk-menu-link"><span class="nk-menu-text">Quill</span></a></li>
                                    <li class="nk-menu-item"><a href="/demo1/components/forms/form-tinymce.html" class="nk-menu-link"><span class="nk-menu-text">Tinymce</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-pie"></em></span><span class="nk-menu-text">Charts</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/components/charts/chartjs.html" class="nk-menu-link"><span class="nk-menu-text">Chart JS</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/charts/knob.html" class="nk-menu-link"><span class="nk-menu-text">Knob JS</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-puzzle"></em></span><span class="nk-menu-text">Widgets</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/components/widgets/cards.html" class="nk-menu-link"><span class="nk-menu-text">Card Widgets</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/widgets/charts.html" class="nk-menu-link"><span class="nk-menu-text">Chart Widgets</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/widgets/ratings.html" class="nk-menu-link"><span class="nk-menu-text">Ratings Widgets</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon"><em class="icon ni ni-block-over"></em></span><span class="nk-menu-text">Miscellaneous</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="/demo1/components/misc/slick-sliders.html" class="nk-menu-link"><span class="nk-menu-text">Slick Slider</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/misc/toastr.html" class="nk-menu-link"><span class="nk-menu-text">Toastr</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/misc/sweet-alert.html" class="nk-menu-link"><span class="nk-menu-text">Sweet Alert</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/misc/js-tree.html" class="nk-menu-link"><span class="nk-menu-text">jsTree</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/misc/dual-listbox.html" class="nk-menu-link"><span class="nk-menu-text">Dual Listbox</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/misc/dragula.html" class="nk-menu-link"><span class="nk-menu-text">Dragula</span></a></li>
                            <li class="nk-menu-item"><a href="/demo1/components/misc/map.html" class="nk-menu-link"><span class="nk-menu-text">Google Map</span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item"><a href="/demo1/email-templates.html" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span><span class="nk-menu-text">Email Template</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
