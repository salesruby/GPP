<aside class="col-md-3 col-sm-4 col-xs-12 account-sidebar sidebar">
    <h3 class="acc-title lg">Account</h3>
    <ul>
        <li class="{{(request()->is('home') ? 'active':'')}}">
            <a href="{{route('home')}}" title="Dashboard">Dashboard</a>
        </li>
        <li class="{{(request()->is('client/transaction') ? 'active':'')}}">
            <a href="{{route('client.transaction')}}" title="Transaction">Transaction</a>
        </li>
        <li class="{{(request()->is('client/cart') ? 'active':'')}}">
            <a href="{{route('client.cart')}}" title="Place Order">Place Order</a>
        </li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</aside>
