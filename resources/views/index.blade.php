@extends('layouts.app')
 @section('content')

 <!-- Hero Section Begin -->
 <section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="hero-text">
                    <h1>Ticket Shop</h1>
                    <p>Pembelian tiket konser dengan mudah dalam satu klik</p>
                </div>
            </div>

            <div class="col-xl-10 col-lg-10  offset-lg-1">
                <div class="booking-form">
                    <h3>Booking Your Ticket</h3>
                    <form action="#">
                        <div class="mb-3">
                            <label for="input-name" class="form-label">Nama Lengkap (sesuai KTP)</label>
                            <input type="name" class="form-control" id="name">
                          </div>
                        <div class="mb-3">
                            <label for="input-ktp" class="form-label">No. KTP/Identitas</label>
                            <input type="ktp" class="form-control" id="ktp">
                        </div>
                        <div class="mb-3">
                            <label for="input-telepon" class="form-label">No. Telepon</label>
                            <input type="telepon" class="form-control" id="telepon">
                        </div>

                        <div class="select-option">
                            <label for="section">Section</label>
                            <div class="card mb-3" style="width: 35rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Section Green</h5>
                                  <p class="card-text">Rp.1.200.000</p>
                                  <a href="#" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                            <div class="card mb-3" style="width: 35rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Section Yellow</h5>
                                  <p class="card-text">Rp1.800.000</p>
                                  <a href="#" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                            <div class="card mb-3" style="width: 35rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Section Blue B</h5>
                                  <p class="card-text">Rp.2.050.000</p>
                                  <a href="#" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                            <div class="card mb-3" style="width: 35rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Section Blue A</h5>
                                  <p class="card-text">Rp.2.450.000</p>
                                  <a href="#" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                            <div class="card mb-3" style="width: 35rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Section Platinum</h5>
                                  <p class="card-text">Rp.2.800.000</p>
                                  <a href="#" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                            <div class="card mb-3" style="width: 35rem;">
                                <div class="card-body">
                                  <h5 class="card-title">Section Sendoff</h5>
                                  <p class="card-text">Rp.3.050.000</p>
                                  <a href="#" class="btn btn-primary">Select</a>
                                </div>
                            </div>
                        </div>

                        <div class="col"> 
                            <button type="submit">Checkout</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="sona/img/hero/hero-1.jpg"></div>
        <div class="hs-item set-bg" data-setbg="sona/img/hero/hero-2.jpg"></div>
        <div class="hs-item set-bg" data-setbg="sona/img/hero/hero-3.jpg"></div>
    </div>
</section>
<!-- Hero Section End -->
@endsection