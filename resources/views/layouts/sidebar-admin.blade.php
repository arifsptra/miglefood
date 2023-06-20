<div id="sidebar" class="fixed overflow-y-scroll no-scrollbar max-h-screen flex-auto min-w-[30%] bg-white p-10 shadow-[4px_0px_20px_rgba(0, 0, 0, 0.05)]">
    <div class="hidden sm:-my-px sm:flex sm:flex-col">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="mt-14">
            <i class="fa-solid fa-dice-four mr-4"></i>
            {{ __('Dashboard') }}
        </x-nav-link>
        <h4 class="text-base text-[#727678] pt-[20px] pb-[10px]">ACCOUNT MANAGEMENT</h4>
        <x-nav-link :href="route('add-account')" :active="request()->routeIs('add-account')">
            <i class="fa-solid fa-user-plus mr-4"></i>
            {{ __('Add Account') }}
        </x-nav-link>
        <x-nav-link :href="route('list-account')" :active="request()->routeIs('list-account')">
            <i class="fa-solid fa-user-group mr-4"></i>
            {{ __('List Account') }}
        </x-nav-link>
        <h4 class="text-base text-[#727678] pt-[20px] pb-[10px]">MENUS MANAGEMENT</h4>
        <x-nav-link :href="route('product.create')" :active="request()->routeIs('product.create')">
            <i class="fa-solid fa-square-plus mr-4"></i>
            {{ __('Add Menu') }}
        </x-nav-link>
        <x-nav-link :href="route('product.index')" :active="request()->routeIs('product.index')">
            <i class="fa-solid fa-recycle mr-4"></i>
            {{ __('List Menu') }}
        </x-nav-link>
        <h4 class="text-base text-[#727678] pt-[20px] pb-[10px]">SALES MANAGEMENT</h4>
        <x-nav-link :href="route('dashboard-order-list')" :active="request()->routeIs('dashboard-order-list')">
            <i class="fa-solid fa-table-list mr-4"></i>
            {{ __('Order List') }}
        </x-nav-link>
        <x-nav-link :href="route('dashboard-transaction-history')" :active="request()->routeIs('dashboard-transaction-history')">
            <i class="fa-solid fa-file-invoice mr-4"></i>
            {{ __('Transaction History') }}
        </x-nav-link>
        <x-nav-link :href="route('dashboard-transaction-report')" :active="request()->routeIs('dashboard-transaction-report')">
            <i class="fa-solid fa-file-invoice-dollar mr-4"></i>
            {{ __('Transaction Report') }}
        </x-nav-link>
        <h4 class="text-base text-[#727678] pt-[20px] pb-[10px]">SETTINGS</h4>
        <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
            <i class="fa-solid fa-user mr-4"></i>
            {{ __('Profile') }}
        </x-nav-link>
        <form method="POST" action="{{ route('logout') }}" class="inline-flex items-center">
            @csrf
            <x-nav-link href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();" class="w-full">
                <i class="fa-solid fa-right-from-bracket mr-4"></i>
                {{ __('Logout') }}
            </x-nav-link>
        </form>
    </div>
</div>
