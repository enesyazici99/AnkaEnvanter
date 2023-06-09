@extends('admin.admin_master')
@section('admin')


<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0">Dashboard</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">AnkaEnvanter</a></li>
            <li class="breadcrumb-item active">Anasayfa</li>
        </ol>
    </div>

</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Toplam Satışlar</p>
                <h4 class="mb-2">350</h4>
                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>4.16%</span>Bir Önceki Dönemden</p>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-primary rounded-3">
                    <i class="ri-shopping-cart-2-line font-size-24"></i>  
                </span>
            </div>
        </div>                                            
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Yeni Siparişler</p>
                <h4 class="mb-2">119</h4>
                <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.13%</span>Bir Önceki Dönemden</p>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-success rounded-3">
                    <i class="mdi mdi-currency-usd font-size-24"></i>  
                </span>
            </div>
        </div>                                              
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Kullanıcılar</p>
                <h4 class="mb-2">8</h4>
                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i></span></p>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-primary rounded-3">
                    <i class="ri-user-3-line font-size-24"></i>  
                </span>
            </div>
        </div>                                              
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Ziyaretçiler</p>
                <h4 class="mb-2">520</h4>
                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.5%</span>Bir Önceki Dönemden</p>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-success rounded-3">
                    <i class="mdi mdi-currency-btc font-size-24"></i>  
                </span>
            </div>
        </div>                                              
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
</div><!-- end row -->

<div class="row">
 

<div class="row">
<div class="col-xl-12">
<div class="card">
    <div class="card-body">
        <div class="dropdown float-end">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                
            </a>
         
        </div>

        <h4 class="card-title mb-4">Çalışanlar</h4>

        <div class="table-responsive">
            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>İsim</th>
                        <th>Pozisyon</th>
                        <th>Durum</th>
                        <th>Yaş</th>
                        <th>Başlangıç Tarihi</th>
                        <th style="width: 120px;">Maaş</th>
                    </tr>
                </thead><!-- end thead -->
                <tbody>
                    <tr>
                        <td><h6 class="mb-0">Enes Yazıcı</h6></td>
                        <td>Makine Mühendisi</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Aktif</div>
                        </td>
                        <td>
                            23
                        </td>
                        <td>
                            10 Ekim 2022
                        </td>
                        <td>₺19800</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Aylin Dönmez</h6></td>
                        <td>Üretim Planlama Mühendisi</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Pasif</div>
                        </td>
                        <td>
                            25
                        </td>
                        <td>
                            03 Aralık 2022
                        </td>
                        <td>₺8500</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Mustafa Yücel</h6></td>
                        <td>Yalın Üretim Mühendisi</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Aktif</div>
                        </td>
                        <td>
                            23
                        </td>
                        <td>
                            12 Eylül 2022
                        </td>
                        <td>₺15400</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Gizem Güven</h6></td>
                        <td>Endüstri Mühendisi</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Aktif</div>
                        </td>
                        <td>
                            29
                        </td>
                        <td>
                           21 Nisan 2023
                        </td>
                        <td>₺15000</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Adem Şahin</h6></td>
                        <td>Proje Yönetim Mühendisi</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Aktif</div>
                        </td>
                        <td>
                            31
                        </td>
                        <td>
                           02 Şubat 2023
                        </td>
                        <td>₺23500</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Deniz Duran</h6></td>
                        <td> İmalat Mühendisi</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Pasif</div>
                        </td>
                        <td>
                            30
                        </td>
                        <td>
                            30 Mart 2023
                        </td>
                        <td>₺12600</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">İlayda Toprak</h6></td>
                        <td>Kalite Kontrol Mühendisi</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Aktif</div>
                        </td>
                        <td>
                            28
                        </td>
                        <td>
                            12 Mayıs 2023
                        </td>
                        <td>₺15300</td>
                    </tr>
                     <!-- end -->
                     <tr>
                        <td><h6 class="mb-0">Yeliz Aytunç</h6></td>
                        <td>Stajyer Mühendis</td>
                        <td>
                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Aktif</div>
                        </td>
                        <td>
                            21
                        </td>
                        <td>
                           19 Mayıs 2023
                        </td>
                        <td>₺8500</td>
                    </tr>
                </tbody><!-- end tbody -->
            </table> <!-- end table -->
        </div>
    </div><!-- end card -->
</div><!-- end card -->
</div>
<!-- end col -->
 


</div>
<!-- end row -->
</div>

</div>

@endsection