        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
                <a href="<?= base_url('/'); ?>" class="app-brand-link">
                    <span class="app-brand-logo demo">
                        <svg height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 492.481 492.481" xml:space="preserve">
                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-36.6002" y1="621.3422" x2="-17.2782" y2="547.7642" gradientTransform="matrix(7.8769 0 0 -7.8769 404.0846 4917.9966)">
                                <stop offset="0" style="stop-color:#29D3DA" />
                                <stop offset="0.519" style="stop-color:#0077FF" />
                                <stop offset="0.999" style="stop-color:#064093" />
                                <stop offset="1" style="stop-color:#084698" />
                            </linearGradient>
                            <polygon style="fill:url(#SVGID_1_);" points="25.687,297.141 135.735,0 271.455,0 161.398,297.141 " />
                            <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-27.0735" y1="620.7541" x2="-11.7045" y2="560.3241" gradientTransform="matrix(7.8769 0 0 -7.8769 404.0846 4917.9966)">
                                <stop offset="0.012" style="stop-color:#E0B386" />
                                <stop offset="0.519" style="stop-color:#DA498C" />
                                <stop offset="1" style="stop-color:#961484" />
                            </linearGradient>
                            <polygon style="fill:url(#SVGID_2_);" points="123.337,394.807 233.409,97.674 369.144,97.674 259.072,394.807 " />
                            <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="14.0324" y1="554.688" x2="-10.4176" y2="584.028" gradientTransform="matrix(7.8769 0 0 -7.8769 404.0846 4917.9966)">
                                <stop offset="0" style="stop-color:#29D3DA" />
                                <stop offset="0.519" style="stop-color:#0077FF" />
                                <stop offset="0.999" style="stop-color:#064093" />
                                <stop offset="1" style="stop-color:#084698" />
                            </linearGradient>
                            <polygon style="fill:url(#SVGID_3_);" points="221.026,492.481 331.083,195.348 466.794,195.348 356.746,492.481 " />
                        </svg>
                    </span>
                    <span class="app-brand-text demo menu-text fw-bolder ms-2">stack shop</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="menu-inner py-1">
                <!-- Dashboard -->
                <li class="menu-item">
                    <a href="<?= base_url(''); ?>/" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                    </a>
                </li>

                <!-- Components -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">PENJUALAN</span></li>

                <!-- Kasir -->
                <li class="menu-item">
                    <a href="<?= base_url(''); ?>/Kasir" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-cart"></i>

                        <div data-i18n="Kasir">Kasir</div>
                    </a>
                </li>

                <!-- Gudang -->
                <li class="menu-item">
                    <a href="<?= base_url(''); ?>/Transaksi" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-transfer-alt"></i>

                        <div data-i18n="Transaksi">Transaksi</div>
                    </a>
                </li>

                <!-- Components -->
                <li class="menu-header small text-uppercase"><span class="menu-header-text">INVENTORY</span></li>

                <!-- Gudang -->
                <li class="menu-item">
                    <a href="<?= base_url(''); ?>/Gudang" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-archive"></i>

                        <div data-i18n="Gudang">Gudang</div>
                    </a>
                </li>
            </ul>
        </aside>