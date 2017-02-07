
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
    <div class="mdl-layout__header-row">
      <span class="android-title mdl-layout-title">
        <img class="android-logo-image" src="<?= base_url().'mdl/' ?>images/Asset_11.png">
      </span>
      <!-- Add spacer, to align navigation to the right in desktop -->
      <div class="android-header-spacer mdl-layout-spacer"></div>

      <!-- Navigation -->
      <div class="android-navigation-container">
        <nav class="android-navigation mdl-navigation">
          <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?= base_url('produk') ?>">
            <i class="material-icons">store</i> Produk
          </a>
          <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?= base_url('pemesanan') ?>">
            <i class="material-icons">archive</i> Pemesanan
          </a>
          <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">
            <i class="material-icons">assignment_ind</i> Tentang kami
          </a>
        </nav>
      </div>
      <span class="android-mobile-title mdl-layout-title">
        <img class="android-logo-image" src="<?= base_url().'mdl/' ?>images/Asset_11.png">
      </span>

      <!-- <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect show-modal" id="show-modal-example">
        <i class="material-icons">perm_contact_calendar</i>
      </button> -->

    </div>
  </div>

  <div class="android-drawer mdl-layout__drawer">
    <span class="mdl-layout-title">
      <img class="android-logo-image" src="<?= base_url().'mdl/' ?>images/Asset_11.png">
    </span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">
        <i class="material-icons">store</i> Produk
      </a>
      <a class="mdl-navigation__link" href="">
        <i class="material-icons">archive</i>Order
      </a>
      <a class="mdl-navigation__link" href="">
        <i class="material-icons">assignment_ind</i> Tentang kami
      </a>
      <!-- <a class="mdl-navigation__link" href="">menu 4</a> -->
      <!-- <a class="mdl-navigation__link" href="">Pickup</a> -->

      <!-- <div class="android-drawer-separator"></div>
      <span class="mdl-navigation__link" href="">Versions</span>
      <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
      <a class="mdl-navigation__link" href="">KitKat 4.4</a>
      <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
      <a class="mdl-navigation__link" href="">Android history</a> -->

    </nav>
  </div>