<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="{{ asset('admin/dist/images/ociba.jpg')}}" alt="user-img" class="img-circle" style="border-radius:50%; height:40px; width:40px;"><span class="hide-menu"><span style="color:blue;">{{auth()->user()->getLoggedinUserType()}}</span></span></a>
                            
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/dashboard"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        @if(auth()->user()->user_type =='1' && auth()->user()->id)
                        <li> <a class="waves-effect waves-dark" href="/marketiers/marketiers"><i class="ti-user"></i><span class="hide-menu">Marketiers</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/odds/odds"><i class="ti-layout-grid2"></i><span class="hide-menu">Add Ads Odds</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/odds/deposit"><i class="ti-layout-grid2"></i><span class="hide-menu">Deposits</span></a>
                        </li>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/odds/transaction"><i class="ti-layout-grid2"></i><span class="hide-menu">Transactions</span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Settings</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/dashboard">Permissions</a></li>
                                <li><a href="/setup/users">Users</a></li>
                            </ul>
                        </li>
                        @elseif(auth()->user()->user_type =='2' && auth()->user()->id)
                        <li> <a class="waves-effect waves-dark" href="/marketiers/my-clients"><i class="ti-user"></i><span class="hide-menu">Clients</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/commission/my-commission"><i class="ti-shopping-cart-full"></i><span class="hide-menu">Commission</span></a>
                        </li>

                        @else
                        
                        <li> <a class="waves-effect waves-dark" href="/clients/my-deposit"><i class="ti-user"></i><span class="hide-menu">Deposit</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="/clients/transaction"><i class="ti-shopping-cart-full"></i><span class="hide-menu">Transaction</span></a>
                        </li>
                        
                        @endif
                <li> <a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i class="ti-help text-info"></i><span class="hide-menu">FAQs</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>