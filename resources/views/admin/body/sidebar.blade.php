 <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menü</li>

                            <li>
                                <a href="{{ url('/dashboard') }}" class="waves-effect">
                                    <i class="ri-home-fill"></i> 
                                    <span>Anasayfa</span>
                                </a>
                            </li>
 
                
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-hotel-fill"></i>
                <span>Tedarikçi Yönetimi</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('supplier.all') }}">Tüm Tedarikçiler</a></li>
               
            </ul>
        </li>


        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-shield-user-fill"></i>
                <span>Müşteri Yönetimi</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('customer.all') }}">Tüm Müşteriler</a></li>
                 <li><a href="{{ route('credit.customer') }}">Kredili Müşteriler</a></li>

                 <li><a href="{{ route('paid.customer') }}">Faturalı Müşteriler</a></li>
                  <li><a href="{{ route('customer.wise.report') }}">Müşteri Bazlı Rapor</a></li>
               
            </ul>
        </li>


         <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-delete-back-fill"></i>
                <span>Birim Yönetimi</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('unit.all') }}">Tüm Birimler</a></li>
               
            </ul>
        </li>

         <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-apps-2-fill"></i>
                <span>Kategori Yönetimi</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('category.all') }}">Tüm Kategoriler</a></li>
               
            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-reddit-fill"></i>
                <span>Ürün Yönetimi</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('product.all') }}">Tüm Ürünler</a></li>
               
            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-oil-fill"></i>
                <span>Satın Alım Yönetimi</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('purchase.all') }}">Tüm Satın Alımlar</a></li>
                <li><a href="{{ route('purchase.pending') }}">Satın Alım Onayı</a></li>
                <li><a href="{{ route('daily.purchase.report') }}">Günlük Satın Alım Raporu</a></li>
               
            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-compass-2-fill"></i>
                <span>Fatura Yönetimi</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('invoice.all') }}">Tüm Faturalar</a></li>
                <li><a href="{{ route('invoice.pending.list') }}">Fatura Onayı</a></li>
                <li><a href="{{ route('print.invoice.list') }}">Fatura Listesini Yazdır</a></li>
                  <li><a href="{{ route('daily.invoice.report') }}">Günlük Fatura Raporu</a></li>
               
            </ul>
        </li>

                             





                            <li class="menu-title">Stok</li>

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-gift-fill"></i>
            <span>Stok Yönetimi</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('stock.report') }}">Stok Raporu</a></li>
            <li><a href="{{ route('stock.supplier.wise') }}">Tedarikçi / Ürün Raporu </a></li>
            
        </ul>
    </li>

                            

                           

                            
                         

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>