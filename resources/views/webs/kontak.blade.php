@extends('layouts.web')

@section('content')
<!-- about -->
<div class="what py-5">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-w3 mb-sm-4 mb-3 text-bl text-center font-weight-bold">Tanya Kami</h3>
        <p class="mx-auto wstyles text-center mb-sm-5 mb-4">Adakah hal-hal yang ingin Anda tanyakan perihal layanan
            website kami? Atau barang kali topik seputar bagaimana wisata dan fitur pemesanan yang telah kami muat
            didalam website ini?. Silahkan kontak kami melalui form dibawah ini tau via chat / telepon / SMS.</p>

        <div class="row mail-w3l-agile pt-xl-12">
            <div class="col-md-12 contact-left-w3ls">
                <h3>Contact Info</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row visit">
                            <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                                <span class="fa fa-home" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-10 col-sm-10 col-10 contact-text-agileinf0">
                                <h4>Visit us</h4>
                                <p>Parma Via Modena,BO, Italy</p>
                                <p>Lorem ipsum dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row mail-w3 my-4">
                            <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-10 col-sm-10 col-10 contact-text-agileinf0">
                                <h4>Mail us</h4>
                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row call">
                            <div class="col-md-2 col-sm-2 col-2 contact-icon-wthree">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                            </div>
                            <div class="col-md-10 col-sm-10 col-10 contact-text-agileinf0">
                                <h4>Call us</h4>
                                <p>+18044261149</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mail-w3l-agile pt-xl-4">
            <div class="col-md-12 agileinfo_mail_grid_right mt-md-0 mt-5">
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" name="Name" class="form-control" placeholder="Name" required="">
                    </div>
                    <div class="form-group">
                        <input type="email" name="Email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                        <textarea name="Message" placeholder="Message......." required=""></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<!-- //contact -->
@endsection