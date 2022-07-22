@extends('layouts.app')

@section('content')
        <!-- Home -->
    <section class="home py-5 d-flex align-items-center" style="background-image: url({{ asset('images/home.jpg') }});" id="header">
        <div class="container text-light py-5"  data-aos="fade-right"> 
            <h1 class="headline"><span class="home_text">Sistem Informasi</span><br>Jadwal Kelas Ikip Siliwangi</h1>
            <p class="para para-light py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus tempore accusamus quis magnam doloremque itaque ad modi, pariatur iste labore similique officiis impedit aspernatur aperiam facere architecto. Eligendi, repellendus inventore!</p>
            <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-home fa-lg"></i></p>
                <p>Booking Kelas</p>
            </div>
            <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-laptop-house fa-lg"></i></p>
                <p>Booking Fasilitas</p>  
            </div>
            <div class="my-3">
                <a class="btn me-3" href="#plans">Booking Kelas</a>
                <a class="btn" href="#plans">Booking Fasilitas</a>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of home -->

        <!-- Work -->
    <section class="work d-flex align-items-center py-5" >
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                    <img class="img-fluid" src="{{ asset('images/ikip.jpg') }}" alt="ikip">        
                </div>
                <div class="col-lg-5 d-flex align-items-center px-4 py-3" data-aos="100">
                    <div class="row">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <h2 class="py-2">Tentang Kami</h2>
                            <p class="para-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.</p>
                        </div>
                        <div class="container" data-aos="fade-up">
                            <div class="row g-5">
                                <div class="col-6 text-start" >
                                    <i class="fas fa-briefcase fa-2x text-start"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1258" data-purecounter-duration="3">1</h2>
                                    <p>PROJECTS COMPLETED</p>
                                </div>
                                <div class="col-6" >
                                    <i class="fas fa-award fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="3">1</h2>
                                    <p>AWARDS</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-users fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1255" data-purecounter-duration="3">1</h2>
                                    <p>CUSTOMER ACTIVE</p>
                                </div>
                                <div class="col-6">
                                    <i class="fas fa-clock fa-2x"></i>
                                    <h2 class="purecounter" data-purecounter-start="0" data-purecounter-end="1157" data-purecounter-duration="3">1</h2>
                                    <p>GOOD REVIEWS</p>
                                </div>
                            </div>
                        </div> <!-- end of container -->
                    </div> <!-- end of row -->
                </div> <!-- end of col-lg-5 -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of work -->
@endsection