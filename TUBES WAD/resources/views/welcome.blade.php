@extends('layout.layout')

@section('content')
    <div class="container mt-4">
        <center>
            <h1 class="text-bold">About Us</h1>
        </center>
        <div class="d-flex justify-content-center align-items-center mt-2">
            <div>
                <img src="{{ asset('images/sewamotor.png') }}" width="500" alt="">
            </div>
            <div>
                <p>
                Inrent telah berpengalaman selama lebih dari 5 tahun dalam <br>bidang transportasi, sehingga kami memiliki team yang profesional<br>
                dan solid guna untuk dapat terus memberikan yang terbaik kepada  <br> pelanggan kami
                <br>
                </p>
            </div>
        </nav>
        </div><br><br>
        <nav>
            <section>
                <div class="text-center">
                    <h5 > Find Us Here </h5> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1367.990287269227!2d107.63604136638679!3d-6.973389224255035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9b22a5808b1%3A0x3dc205e055d385fc!2sJl.%20Raya%20Bojongsoang%2C%20Lengkong%2C%20Kec.%20Bojongsoang%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat%2040287!5e0!3m2!1sid!2sid!4v1641426674570!5m2!1sid!2sid" width="500" 
                        height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
        </nav>
    </div>
@endsection