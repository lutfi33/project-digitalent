<style>
    #label-page {
        border:2px solid #EFFD5F;
        border-radius:30px;
        margin-top:30px;
    }
    #label-page h5{
        margin-top:5px;
        color:#313131;
        margin-left:20px;
    }
    #beranda {
        text-align:center;
    }
    #beranda p {
        font-size:25px;
    }
    #content {
        margin-top :50px;
    }
    img {
        width: 30%;
        margin-bottom:35px;
    }
    @media only screen and (max-width: 500px) {
            img {
            width: 60%;
            margin-bottom:35px;
        }
    }
</style>
<div id="label-page"><h5><i class="bi bi-house-door">&ensp;</i>Beranda</h5></div>
<div id="content">
    <div id="beranda" class="row">
        <div class="col">
            <div id="nama-user"><h4>Hai <?php echo$_SESSION['sesi']; ?>!</h4></div>
            <p>Selamat Datang di Sistem Informasi Perpustakaan Digitalent </p>
            <img src="image/libray.svg" alt="">
        </div>
    </div>
</div>