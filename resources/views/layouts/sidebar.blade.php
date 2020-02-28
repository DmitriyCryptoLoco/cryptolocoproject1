<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item {{ request()->is('/dashboard/interest/*') ? 'active' : '' }}" data-item="dashboard">
                <a class="nav-item-hold" href="/dashboard/interest/index">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Interest</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('/dashboard/cryptoloans/*') ? 'active' : '' }}" data-item="uikits">
                <a class="nav-item-hold" href="/dashboard/cryptoloans/index">
                    <i class="nav-icon i-Library"></i>
                    <span class="nav-text">Crypto Loan</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('/dashboard/filesmanager/*') ? 'active' : '' }}"
                data-item="extrakits">
                <a class="nav-item-hold" href="/dashboard/filesmanager/index">
                    <i class="nav-icon i-Suitcase"></i>
                    <span class="nav-text">Files Exchange</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('/dashboard/chat-support/*') ? 'active' : '' }}" data-item="apps">
                <a class="nav-item-hold" href="/dashboard/chatsupport/index">
                    <i class="nav-icon i-Computer-Secure"></i>
                    <span class="nav-text">Chat Support</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item {{ request()->is('/dashboard/settings/*') ? 'active' : '' }}" data-item="forms">
                <a class="nav-item-hold" href="/dashboard/settings/index">
                    <i class="nav-icon i-File-Clipboard-File--Text"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>
    <div class="sidebar-overlay"></div>
</div>
<!--=============== Left side End ================-->
