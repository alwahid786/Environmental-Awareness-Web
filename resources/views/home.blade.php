<!DOCTYPE html>
<html id="mainElement" class="d-none">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YWHQE2E0CV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-YWHQE2E0CV');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/favicon.svg')}}">
    <title>Citarum Water</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css" integrity="sha512-eBNnVs5xPOVglLWDGXyZnZZ2K2ixXhR/3aECgCpFnW2dGCd/yiqXZ6fcB3BubeA91kM6NX234b6Wrah8RiYAPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @media screen and (max-width: 992px) {
            .navbar-brand {
                width: 25% !important;
            }

            .nav-link {
                font-weight: 500;
                color: #174C90 !important;
                border-bottom: 4px solid transparent;
            }

            .navbar .transparent-navbar .nav-link:hover {
                color: #174C90 !important;
                border-bottom: 4px solid #174C90;
            }

            .active .nav-link {
                color: #174C90 !important;
                border-bottom: 4px solid #174C90;

            }
        }

        @media screen and (max-width: 576px) {
            .navbar-brand {
                width: 50% !important;
            }
        }



        a:hover {
            color: white !important;
            text-decoration: none !important;
        }

        .navbar-brand {
            width: 18%;
        }

        .navbar ul {
            gap: 25px;
        }

        .navbar.transparent-navbar .nav-link {
            font-weight: 500;
            color: white;
            border-bottom: 4px solid transparent;
        }

        .navbar.transparent-navbar .nav-link:hover {
            color: white !important;
            border-bottom: 4px solid white;
        }

        .navbar.transparent-navbar .active .nav-link {
            color: white;
            border-bottom: 4px solid white;

        }

        .dropdown .active {
            background: #174C90;
            color: white;
        }

        .dropdown a {
            margin-top: 2px;
        }

        .dropdown a:hover {
            background: #174C90;
            color: white;
        }

        .loginBtn {
            background-color: #005FEC;
            color: white;
            font-weight: 500;
            font-size: 18px;
            border-radius: 20px;
        }


        @media screen and (min-width: 1200px) {
            .bg-image {
                background-image: url("{{ asset('assets/images/header-bg.svg') }}");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: bottom left;
                height: 800px;
            }
        }

        @media screen and (max-width: 576px) {
            .header {
                margin-top: 80px !important;
                width: 100% !important;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 0 20px !important;
            }
        }

        @media screen and (max-width: 991px) {
            .bg-image {
                /* background-image: url("{{ asset('assets/images/header-bg.svg') }}"); */
                /* background-size: contain; */
                /* background-repeat: no-repeat; */
                /* background-position: top right; */
                height: 100%;
            }

            .header {
                margin-top: 80px !important;
                width: 100% !important;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 0 50px !important;
            }

            .citarumKillers2 {
                padding: 0 0px !important;
            }


        }

        @media screen and (min-width: 992px) {
            .bg-image {
                background-image: url("{{ asset('assets/images/header-bg.svg') }}");
                background-size: cover;
                background-repeat: no-repeat;
                background-position: bottom left;
                height: 700px;
            }

            .citarumKillers2 {
                padding: 0 80px;
            }
        }

        .nav-item {
            color: white;
        }

        .navbar-toggler {
            color: white;
        }

        .navbar.transparent-navbar {
            background-color: transparent !important;
        }

        .navbar-light .navbar-toggler-icon {
            background-color: #fff;
        }

        .heading {
            color: #5E4134;
            font-weight: 700;
            font-size: 45px;

        }

        .header {
            margin-top: 140px;
            width: 45%;
            padding-left: 20px;
        }

        .heading span {
            color: #174C90;
            font-weight: 700;
        }

        .contactHeaderBtn {
            width: 120px;
            background-color: #174C90;
            color: white;
            display: flex;
            justify-content: center;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }

        .shareHeaderBtn {
            width: 120px;
            background-color: #5E4134;
            color: white;
            display: flex;
            justify-content: center;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }

        .headingText {
            color: #174C90;
            font-weight: 700;
        }

        p {
            color: #646464;
        }

        .citarumKillers {
            gap: 20px;
        }

        .citarumKillers .singleContainer {
            width: 100%;
            border-radius: 10px;
            padding: 20px;
            background-color: #E3EFFF;
            margin-top: 10px;
            /* height: 100%; */
        }

        .imageContainer {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .imageContainer img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .truthTextRight {
            background-color: #F3F3F3;
            border-bottom-left-radius: 200px;
            display: flex;
            align-items: center;
            /*box-shadow: 3px 1px 5px 1px gray;*/
            padding: 30px;
        }

        .truthTextLeft {
            background-color: #F3F3F3;
            border-bottom-right-radius: 200px;
            display: flex;
            align-items: center;
            /*box-shadow: -3px 1px 5px 1px gray;*/
            padding: 20px;
        }

        .form-control {
            border: 1px solid #C8C8C8;
            background-color: #F5F5FF;
            border-radius: 10px;
            height: 40px;
            padding: 5px 10px;
        }

        textarea {
            border: 1px solid #C8C8C8;
            background-color: #F5F5FF;
            border-radius: 10px;
            /* margin-bottom: 10px; */
            padding: 5px 10px;
            width: 100%;
        }

        footer {
            background-color: #174C90;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .circleRight {
            position: absolute;
            right: 0;
            width: 10%;
        }

        .circleLeft {
            position: absolute;
            left: 0;
            top: 35%;
            width: 10%;
        }

        .citarumKillers2 {
            padding: 0 80px;
        }

        .contactHeaderBtn a {
            color: white;
        }

        .contactHeaderBtn a:hover {
            color: white;
        }

        .contactMail a {
            color: #646464;
        }

        .contactMail a:hover {
            color: #646464 !important;
        }

        .font-small {
            font-size: small;
        }

        .heading {
            /* -webkit-text-stroke: 1px red; */
            /* text-stroke: 2px white; */
        }

        .mobile-header img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
        }

        p {
            font-size: 18px;
        }

        .specificFont {
            font-size: 25px;
        }

        @media screen and (max-width: 992px) {
            .specificFont {
                font-size: 22px !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid pb-5 px-0">
        <div class="bg-image">
            <div class="row m-0">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light transparent-navbar">
                        <a class="navbar-brand" href="javascript:void(0)"><img class="img-fluid" src="{{asset('assets/images/logo.png')}}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto mb-lg- mb-3 pr-5">
                                <li class="nav-item active">
                                    <a lang="en" class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                    <a lang="ind" class="nav-link" href="#">rumah <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a lang="en" class="nav-link" href="#facts">Facts</a>
                                    <a lang="ind" class="nav-link" href="#facts">fakta</a>
                                </li>
                                <li class="nav-item">
                                    <a lang="en" class="nav-link" href="#contact">Contact Us</a>
                                    <a lang="ind" class="nav-link" href="#contact">Hubungi kami</a>
                                </li>
                                <li class="nav-item">
                                    <div class="dropdown">
                                        <button class="btn bg-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            English
                                        </button>
                                        <div class="dropdown-menu dropleft" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="javascript:void(0)" onclick="select_language('en')">English</a>
                                            <a class="dropdown-item" href="javascript:void(0)" onclick="select_language('ind')">Indonesian</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="mobile-header d-lg-none">
                <img src="{{asset('assets/images/citarum-main.jpg')}}" alt="Header Image">
            </div>
            <div class="header">
                <div lang="en">
                    <h1 class="heading">"Be a part of the <span style="-webkit-text-stroke: 1px white; font-weight:800;">Solution,</span><br>not the <span style="-webkit-text-stroke: 1px white; font-weight:800;">Pollution</span>"</h1>
                </div>
                <div lang="ind">
                    <h1 class="heading">“Jadilah bagian dari <span style="-webkit-text-stroke: 1px white; font-weight:800;">larutan,</span><br>bukan <span style="-webkit-text-stroke: 1px white; font-weight:800;">polusi</span>"</h1>
                </div>
                <p lang="en">The Citarum River is the longest and largest river in West Java, Indonesia, playing a crucial role in the lives of the local population. However, environmental experts have condemned the river as "the world's most polluted river", urging immediate action to address the crisis and protect the health and livelihoods of those dependent on it.</p>
                <p lang="ind">Sungai Citarum merupakan sungai terpanjang dan terbesar di Jawa Barat, Indonesia, yang mempunyai peranan penting dalam kehidupan penduduk setempat. Namun, para ahli lingkungan hidup mengecam sungai tersebut sebagai “sungai paling tercemar di dunia”, dan mendesak tindakan segera untuk mengatasi krisis ini dan melindungi kesehatan dan mata pencaharian mereka yang bergantung pada sungai tersebut.</p>
                <div class="d-flex align-items-center">
                    <button lang="en" class="contactHeaderBtn"><a href="#contact">Contact</a></button>
                    <button lang="ind" class="contactHeaderBtn"><a href="#contact">Hubungi kami</a></button>
                    <button lang="en" class="shareHeaderBtn ml-2">Share</button>
                    <button lang="ind" class="shareHeaderBtn ml-2">membagikan</button>
                </div>
            </div>
        </div>
        <section>
            <div class="row m-0">
                <div class="col-12 text-center mt-5 px-md-5">
                    <h1 lang="en" class="headingText">Double Standard</h1>
                    <h1 lang="ind" class="headingText">Standar ganda</h1>
                    <p lang="en" class="px-md-5 px-sm-3 px-2 mt-4 text-left">A troubling double standard persists within Indonesian authorities; while publicized efforts suggest a commitment to environmental improvement, the reality on the ground tells a different story. It appears that, in practice, authorities may be adopting a policy of "closing their eyes" to the ongoing pollution of this vital waterway. <br /><br /> &nbsp &nbsp &nbsp The lack of effective enforcement of regulations and a seemingly lenient approach to industries contributing to the contamination raise questions about the genuine commitment of authorities to address this environmental crisis. This double standard not only hinders the progress of anti-pollution measures but also undermines the trust and expectations of the communities relying on the Citarum River for their daily needs.</p>
                    <p lang="ind" class="px-md-5 px-sm-3 px-2 mt-4">Standar ganda yang meresahkan masih terus terjadi di kalangan pemerintah Indonesia; Meskipun upaya yang dipublikasikan menunjukkan adanya komitmen terhadap perbaikan lingkungan, kenyataan di lapangan menunjukkan cerita yang berbeda. Tampaknya, dalam praktiknya, pihak berwenang mungkin mengambil kebijakan “menutup mata” terhadap pencemaran yang terus terjadi di jalur air penting ini. Kurangnya penegakan peraturan yang efektif dan pendekatan yang tampaknya lunak terhadap industri yang berkontribusi terhadap kontaminasi menimbulkan pertanyaan mengenai komitmen tulus pihak berwenang untuk mengatasi krisis lingkungan ini. Standar ganda ini tidak hanya menghambat kemajuan upaya anti-polusi namun juga melemahkan kepercayaan dan harapan masyarakat yang bergantung pada Sungai Citarum untuk kebutuhan sehari-hari.</p>
                </div>
            </div>
        </section>
        <section id="facts">
            <div class="row m-0">
                <div class="col-12 text-center mt-5 px-sm-5 px-2">
                    <h1 lang="en" class="headingText">Citarum's Killer</h1>
                    <h1 lang="ind" class="headingText">Pembunuh Citarum</h1>
                    <div class="mt-5 citarumKillers d-lg-flex">
                        <div class="singleContainer flex-fill">
                            <img class="image-fluid mb-3" src="{{asset('assets/images/cita-1.svg')}}" alt="">
                            <h5 lang="en">Industrial Chemicals</h5>
                            <h5 lang="ind">Bahan Kimia Industri</h5>
                        </div>
                        <div class="singleContainer flex-fill">
                            <img class="image-fluid mb-3" src="{{asset('assets/images/cita-2.svg')}}" alt="">
                            <h5 lang="en">Agricultural Chemical Runoffs</h5>
                            <h5 lang="ind">Limpasan Bahan Kimia Pertanian</h5>
                            <p lang="en">nitrogen and phosphorus</p>
                            <p lang="ind">nitrogen dan fosfor</p>
                        </div>
                        <div class="singleContainer flex-fill">
                            <img class="image-fluid mb-3" src="{{asset('assets/images/cita-3.svg')}}" alt="">
                            <h5 lang="en">Plastic</h5>
                            <h5 lang="ind">Plastik</h5>
                            <p lang="en">all kinds of plastic</p>
                            <p lang="ind">semua jenis plastik</p>
                        </div>
                        <div class="singleContainer flex-fill">
                            <img class="image-fluid mb-3" src="{{asset('assets/images/cita-4.svg')}}" alt="">
                            <h5 lang="en">Sewage & Domestic Waste</h5>
                            <h5 lang="ind">Limbah & Limbah Domestik</h5>
                            <p lang="en">contains pathogens, nutrients and other contaminants</p>
                            <p lang="ind">mengandung patogen, nutrisi dan kontaminan lainnya</p>
                        </div>
                    </div>
                    <div class="citarumKillers2">
                        <div class="mt-3 citarumKillers d-lg-flex">
                            <div class="singleContainer flex-fill">
                                <img class="image-fluid mb-3" src="{{asset('assets/images/cita-5.svg')}}" alt="">
                                <h5 lang="en">Oil and Petrochemicals</h5>
                                <h5 lang="ind">Minyak dan Petrokimia</h5>
                            </div>
                            <div class="singleContainer flex-fill">
                                <img class="image-fluid mb-3" src="{{asset('assets/images/cita-6.svg')}}" alt="">
                                <h5 lang="en">Heavy Metals</h5>
                                <h5 lang="ind">Logam Berat</h5>
                                <p lang="en">arsenic, chromium and zinc</p>
                                <p lang="ind">arsenik, kromium dan seng</p>
                            </div>
                            <div class="singleContainer flex-fill">
                                <img class="image-fluid mb-3" src="{{asset('assets/images/cita-7.svg')}}" alt="">
                                <h5 lang="en">Garbage and Solid Waste</h5>
                                <h5 lang="ind">Sampah dan Limbah Padat</h5>
                                <p lang="en"> household garbage and industrial waste </p>
                                <p lang="ind"> sampah rumah tangga dan limbah industri </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row m-0">
                <div class="col-12 mt-5 px-0">
                    <h1 lang="en" class="headingText text-center my-5">The Ugly Truth</h1>
                    <h1 lang="ind" class="headingText text-center my-5">Kenyataan terburuk</h1>

                    <div class="row m-0 pt-5">
                        <div class="col-lg-6 col-12  pl-0 pr-lg-3 pr-0">
                            <div class="imageContainer">
                                <img src="{{asset('assets/images/truth1.svg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12  pr-0 pl-lg-3 pl-0">
                            <div class="truthTextRight h-100">
                                <p lang="en" class="px-5 specificFont">The Citarum River serves as a lifeline for over 15 million people across 500 villages and towns along its banks and downstream. They rely on the river for drinking water, irrigation, sanitation, and even transportation.</p>
                                <p lang="ind" class="px-5 specificFont">Sungai Citarum berfungsi sebagai jalur kehidupan bagi lebih dari 15 juta orang di 500 desa dan kota di sepanjang tepian dan hilirnya. Mereka bergantung pada sungai untuk air minum, irigasi, sanitasi, dan bahkan transportasi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 pt-5">
                        <div class="col-lg-6 col-12  pl-0 pr-lg-3 pr-0 order-lg-1 order-2">
                            <div class="truthTextLeft h-100">
                                <p lang="en" class="px-5 specificFont">Approximately over 2,000 factories and industries operate within the Citarum River basin, with an estimated 80% directly discharging untreated wastewater into the river. This toxic influx includes heavy metals, chemicals, and sewage.</p>
                                <p lang="ind" class="px-5 specificFont">Sekitar lebih dari 2.000 pabrik dan industri beroperasi di wilayah sungai Citarum, dan diperkirakan 80% langsung membuang air limbah yang tidak diolah ke sungai. Masuknya racun ini mencakup logam berat, bahan kimia, dan limbah.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12  pr-0 pl-lg-3 pl-0 order-lg-2 order-1">
                            <div class="imageContainer">
                                <img src="{{asset('assets/images/truth2.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 pt-5">
                        <div class="col-lg-6 col-12  pl-0 pr-lg-3 pr-0">
                            <div class="imageContainer">
                                <img src="{{asset('assets/images/truth3.svg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12  pr-0 pl-lg-3 pl-0">
                            <div class="truthTextRight h-100">
                                <p lang="en" class="px-5 specificFont">An astounding 20,000 tons of solid waste and 340,000 tons of wastewater are dumped into the Citarum River daily, rendering it unfit for human use and causing widespread environmental damage.</p>
                                <p lang="ind" class="px-5 specificFont">Sebanyak 20.000 ton limbah padat dan 340.000 ton air limbah dibuang ke Sungai Citarum setiap hari, sehingga tidak layak untuk digunakan manusia dan menyebabkan kerusakan lingkungan yang luas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 pt-5">
                        <div class="col-lg-6 col-12  pl-0 pr-lg-3 pr-0 order-lg-1 order-2">
                            <div class="truthTextLeft h-100">
                                <p lang="en" class="px-5 specificFont">The polluted water has triggered a health crisis, with skin diseases, respiratory problems, and digestive issues rampant among the population. The river is also linked to increased cancer risks.</p>
                                <p lang="ind" class="px-5 specificFont">Air yang tercemar telah memicu krisis kesehatan, penyakit kulit, masalah pernapasan, dan masalah pencernaan merajalela di kalangan masyarakat. Sungai juga dikaitkan dengan peningkatan risiko kanker.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12  pr-0 pl-lg-3 pl-0 order-lg-2 order-1">
                            <div class="imageContainer">
                                <img src="{{asset('assets/images/truth4.svg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 pt-5">
                        <div class="col-lg-6 col-12  pl-0 pr-lg-3 pr-0">
                            <div class="imageContainer">
                                <img src="{{asset('assets/images/truth5.svg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12  pr-0 pl-lg-3 pl-0">
                            <div class="truthTextRight h-100">
                                <p lang="en" class="px-5 specificFont">The exact number of deaths directly attributable to the Citarum River's pollution is unknown, but estimates suggest thousands succumb annually due to waterborne diseases and illnesses.</p>
                                <p lang="ind" class="px-5 specificFont">Jumlah pasti kematian yang disebabkan langsung oleh pencemaran Sungai Citarum tidak diketahui, namun perkiraan menunjukkan ribuan orang meninggal setiap tahunnya karena penyakit yang ditularkan melalui air.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row m-0 pt-5 ">
                <div class="col-12 mt-5">
                    <div class="d-md-flex align-items-center justify-content-center" style="gap: 50px;">
                        <div class="text-center">
                            <img class="image-fluid" src="{{asset('assets/images/email.svg')}}" alt="">
                            <h5 lang="en">Email</h5>
                            <h5 lang="ind">surel</h5>
                            <p class="contactMail"><a href="mailto:info@citarumwater.com">info@citarumwater.com</a></p>
                        </div>
                        <!-- <div class="text-center">
                            <img class="image-fluid" src="{{asset('assets/images/phone.svg')}}" alt="">
                            <h5 lang="en">Call Us</h5>
                            <h5 lang="ind">hubungi kami</h5>
                            <p>+241656129841</p>
                        </div> -->
                        <!-- <div class="text-center">
                            <img class="image-fluid" src="{{asset('assets/images/location.svg')}}" alt="">
                            <h5 lang="en">Location</h5>
                            <h5 lang="ind">Lokasi</h5>
                            <p lang="en">Miami, America</p>
                            <p lang="ind">Miami, Amerika</p>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="row m-0 py-5 position-relative" id="contact">
                <div class="col-md-8 col-12 offset-md-2 text-center">
                    <h1 lang="en" class="headingText mb-5">Contact Us</h1>
                    <h1 lang="ind" class="headingText mb-5">Hubungi kami</h1>
                    <form id="contactForm" action="{{route('contact.submit')}}" method="POST">
                        @csrf
                        <div class="d-sm-flex" style="gap: 10px;">
                            <!-- First Name -->
                            <div lang="en" class="form-group w-100">
                                <input lang="en" type="text" class="form-control" placeholder="First Name" id="firstNameEn" name="fname_en">
                                <!-- <p class="error-container" id="firstNameEnError"></p> -->
                            </div>
                            <div lang="ind" class="form-group w-100">
                                <input lang="ind" type="text" class="form-control" placeholder="Nama Depan" id="firstNameInd" name="fname_ind">
                                <!-- <p class="error-container" id="firstNameIndError"></p> -->
                            </div>

                            <!-- Last Name -->
                            <div lang="en" class="form-group w-100">
                                <input lang="en" type="text" class="form-control" placeholder="Last Name" id="lastNameEn" name="lname_en">
                                <!-- <p class="error-container" id="lastNameEnError"></p> -->
                            </div>
                            <div lang="ind" class="form-group w-100">
                                <input lang="ind" type="text" class="form-control" placeholder="Nama Keluarga" id="lastNameInd" name="lname_ind">
                                <!-- <p class="error-container" id="lastNameIndError"></p> -->
                            </div>
                        </div>

                        <div class="d-sm-flex" style="gap: 10px;">
                            <!-- Email -->
                            <div lang="en" class="form-group w-100">
                                <input lang="en" type="text" class="form-control" placeholder="Email" id="emailEn" name="email_en">
                                <!-- <p class="error-container" id="emailEnError"></p> -->
                            </div>
                            <div lang="ind" class="form-group w-100">
                                <input lang="ind" type="text" class="form-control" placeholder="Surel" id="emailInd" name="email_ind">
                                <!-- <p class="error-container" id="emailIndError"></p> -->
                            </div>

                            <!-- Subject -->
                            <div lang="en" class="form-group w-100">
                                <input lang="en" type="text" class="form-control" placeholder="Subject" id="subjectEn" name="subject_en">
                                <!-- <p class="error-container" id="subjectEnError"></p> -->
                            </div>
                            <div lang="ind" class="form-group w-100">
                                <input lang="ind" type="text" class="form-control" placeholder="Subjek" id="subjectInd" name="subject_ind">
                                <!-- <p class="error-container" id="subjectIndError"></p> -->
                            </div>
                        </div>

                        <!-- Textareas -->
                        <div lang="en" class="form-group w-100">
                            <textarea lang="en" placeholder="Comments" id="commentsEn" cols="30" rows="10" name="comment_en"></textarea>
                            <!-- <p class="error-container" id="commentsEnError"></p> -->
                        </div>
                        <div lang="ind" class="form-group w-100">
                            <textarea lang="ind" placeholder="Komentar" id="commentsInd" cols="30" rows="10" name="comment_ind"></textarea>
                            <!-- <p class="error-container" id="commentsIndError"></p> -->
                        </div>

                        <!-- Buttons -->
                        <button type="button" onclick="validateForm()" lang="en" class="contactHeaderBtn mx-auto">Submit</button>
                        <button type="button" onclick="validateForm()" lang="ind" class="contactHeaderBtn mx-auto">Kirim</button>
                    </form>
                </div>

                <img class="circleRight" src="{{asset('assets/images/circles-right.svg')}}" alt="">
                <img class="circleLeft" src="{{asset('assets/images/circles-left.svg')}}" alt="">
            </div>
        </section>
    </div>
    <footer lang="en" class="py-4">
        Citarum Water - © 2023 All Rights Reserved
    </footer>
    <footer lang="ind" class="py-4">
        Air Citarum - © 2023 Hak Cipta Dilindungi Undang-Undang
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session()->has('success'))
    <script>
        $(document).ready(function() {
            Swal.fire({
                title: "Success",
                text: "Contact Form Submitted Successfully!",
                icon: "success"
            });
        })
    </script>
    @endif
    <script>
        var selectedLanguage = 'en';
        $(document).ready(function() {
            select_language('en');
            $(".dropdown-item").click(function() {
                $(".dropdown-item").removeClass('active');
                $(this).addClass('active');
                $("#dropdownMenuButton").text($(this).text());
            })
        })

        function select_language(language) {
            $("[lang]").each(function() {
                if ($(this).attr("lang") == language)
                    $(this).show();
                else
                    $(this).hide();
            });
            selectedLanguage = language;
            $("#mainElement").removeClass('d-none');
        }
    </script>
    <script>
        function validateForm() {
            // Reset previous errors
            resetErrors();

            // Validate each field
            let hasErrors = false;
            if (selectedLanguage == 'en') {
                hasErrors = validateField("firstNameEn", "First Name (English) is required") || hasErrors;
                hasErrors = validateField("lastNameEn", "Last Name (English) is required") || hasErrors;
                hasErrors = validateField("emailEn", "Email (English) is required") || hasErrors;
                hasErrors = validateField("subjectEn", "Subject (English) is required") || hasErrors;
                hasErrors = validateField("commentsEn", "Comments is required") || hasErrors;
            } else {
                hasErrors = validateField("firstNameInd", "Nama Depan is required") || hasErrors;
                hasErrors = validateField("lastNameInd", "Nama Keluarga is required") || hasErrors;
                hasErrors = validateField("emailInd", "Surel is required") || hasErrors;
                hasErrors = validateField("subjectInd", "Subjek is required") || hasErrors;
                hasErrors = validateField("commentsInd", "Komentar is required") || hasErrors;
            }

            // Submit the form if no errors
            if (!hasErrors) {
                document.getElementById("contactForm").submit();
            }
        }

        function validateField(fieldId, errorMessage) {
            const fieldValue = document.getElementById(fieldId).value.trim();
            if (!fieldValue) {
                showError(fieldId, errorMessage);
                return true; // Return true to indicate an error
            }
            return false; // Return false if no error
        }

        function showError(fieldId, message) {
            const errorDiv = document.createElement("p");
            errorDiv.className = "error m-0 text-danger text-left font-small";
            errorDiv.textContent = message;
            const fieldElement = document.getElementById(fieldId);
            // fieldElement.append(errorDiv);
            fieldElement.insertAdjacentHTML("afterend", errorDiv.outerHTML);
        }

        function resetErrors() {
            const errorDivs = document.querySelectorAll(".error");
            errorDivs.forEach((div) => div.remove());
        }
    </script>


</body>

</html>