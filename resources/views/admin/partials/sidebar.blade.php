<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="{{ route('admin') }}">
            <img src="/admin_site/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Événements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('admin.events') }}">Tous</a>
                        </li>
                        <li>
                            <a href="index2.html">Galleries</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('notifs') }}">
                        <i class="fas fa-bullhorn"></i>Notifications</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-handshake"></i>Participations</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('participation.confirmed') }}">Confirmé</a>
                        </li>
                        <li>
                            <a href="{{ route('participation.postponed') }}">En attente</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->