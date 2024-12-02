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
    <link href="https://cdn.jsdelivr.net/npm/nanogallery2/dist/css/nanogallery2.min.css" rel="stylesheet">


    <style>
        body {
            overflow-x: hidden !important;
        }

        #lightgallery a img, #lightgallery a video, #nanoGalleryContainer a  {
            width: 300px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }
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

        .nav-link:focus {
            color: white !important; 
            outline: none; 
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
            flex-direction: column;
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
                                    <a lang="en" class="nav-link" href="#globall-activites">Globall Activities</a>
                                    <a lang="ind" class="nav-link" href="#globall-activites">Kegiatan Globall</a>
                                </li>
                                <li class="nav-item">
                                    <a lang="en" class="nav-link" href="#citarum-community">Citarum Community</a>
                                    <a lang="ind" class="nav-link" href="#citarum-community">Komunitas Citarum</a>
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
        <section id="globall-activites">
            <div class="row m-0">
                <div class="col-12 text-center mt-5">
                    <h2 lang="en" class="headingText">April 2024 - Paris, France</h2>
                    <h2 lang="ind" class="headingText">April 2024 - Paris, Prancis</h2>
                    <p lang="en" class="px-md-5 px-sm-3 px-2 mt-4 text-left">
                    In April, our team traveled to Paris to raise awareness about the alarming pollution of the Citarum River. We organized a public exhibition featuring powerful photographs and distributing bottles filled with "polluted" water from the Citarum, showcasing the river's current state and the communities affected by its pollution. Our efforts in Paris were aimed at engaging the international community and garnering support for stricter environmental policies in Indonesia. The event attracted significant attention  from concerned citizens.
                    </p>
                    <p lang="ind" class="px-md-5 px-sm-3 px-2 mt-4 text-left">
                    Pada bulan April, tim kami melakukan perjalanan ke Paris untuk meningkatkan kesadaran mengenai pencemaran Sungai Citarum yang mengkhawatirkan. Kami menyelenggarakan pameran publik yang menampilkan foto-foto yang kuat dan membagikan botol-botol berisi air yang "tercemar" dari Citarum, yang menampilkan kondisi sungai saat ini dan masyarakat yang terkena dampak polusi tersebut. Upaya kami di Paris bertujuan untuk melibatkan komunitas internasional dan menggalang dukungan bagi kebijakan lingkungan hidup yang lebih ketat di Indonesia. Peristiwa ini menarik perhatian besar dari warga yang peduli.
                    </p>
                </div>
                <div class="col-12 py-5">
                <div id="nanoGalleryContainer" class="nanoGallery">
                        <a href="{{ asset('assets/gallery-images/april-image-1.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/april-image-1.jpg') }}" data-ngDesc="Image 1"></a>
                        <a href="{{ asset('assets/gallery-images/april-image-2.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/april-image-2.jpg') }}" data-ngDesc="Image 2"></a>
                        <a href="{{ asset('assets/gallery-images/april-image-3.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/april-image-3.jpg') }}" data-ngDesc="Image 3"></a>
                        <a href="{{ asset('assets/gallery-images/april-image-4.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/april-image-4.jpg') }}" data-ngDesc="Image 4"></a>
                        <a href="{{ asset('assets/gallery-images/april-image-5.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/april-image-5.jpg') }}" data-ngDesc="Sample Video"></a>
                        <a href="{{ asset('assets/gallery-images/april-image-6.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/april-image-6.jpg') }}" data-ngDesc="Image 5"></a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row m-0">
                <div class="col-12 text-center mt-5">
                    <h2 lang="en" class="headingText">May 2024 - Bali, Indonesia</h2>
                    <h2 lang="ind" class="headingText">Mei 2024 - Bali, Indonesia</h2>
                    <p lang="en" class="px-md-5 px-sm-3 px-2 mt-4 text-left">
                    In 20th of May, we took a bold step at the 10th Water Forum in Bali by distributing bottles of polluted water from the Citarum River to forum attendees. This dramatic demonstration aimed to highlight the Indonesian government's neglect of this environmental crisis. The act sparked widespread discussion and media coverage, emphasizing the urgent need for action to clean up the river and protect the health of the millions who depend on it. Our presence at the forum underscored our commitment to holding authorities accountable and advocating for the well-being of affected communities.
                    </p>
                    <p lang="ind" class="px-md-5 px-sm-3 px-2 mt-4 text-left">
                    Pada tanggal 20 Mei, kami mengambil langkah berani pada Forum Air ke-10 di Bali dengan membagikan botol-botol air tercemar dari Sungai Citarum kepada para peserta forum. Demonstrasi dramatis ini bertujuan untuk menyoroti kelalaian pemerintah Indonesia terhadap krisis lingkungan hidup. Tindakan tersebut memicu diskusi luas dan liputan media, menekankan perlunya tindakan mendesak untuk membersihkan sungai dan melindungi kesehatan jutaan orang yang bergantung padanya. Kehadiran kami di forum tersebut menggarisbawahi komitmen kami untuk menjaga akuntabilitas pihak berwenang dan memberikan advokasi bagi kesejahteraan masyarakat yang terkena dampak.
                    </p>
                </div>
                <div class="col-12 py-5">
                    <div id="nanoGalleryContainerTwo" class="nanoGallery">
                        <a href="{{ asset('assets/gallery-images/img-9.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-1.jpg') }}" data-ngDesc="Image 1"></a>
                        <a href="{{ asset('assets/gallery-images/img-10.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-2.jpg') }}" data-ngDesc="Image 2"></a>
                        <a href="{{ asset('assets/gallery-images/img-3.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-3.jpg') }}" data-ngDesc="Image 3"></a>
                        <a href="{{ asset('assets/gallery-images/img-4.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-4.jpg') }}" data-ngDesc="Image 4"></a>
                        <a href="{{ asset('assets/gallery-images/indo-video.mp4') }}" data-ngThumb="{{ asset('assets/gallery-images/france-video-thumbnail.png') }}" data-ngDesc="Sample Video"></a>
                        <a href="{{ asset('assets/gallery-images/img-5.jpg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-5.jpg') }}" data-ngDesc="Image 5"></a>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="citarum-community">
            <div class="row m-0">   
                <div class="col-12 text-center mt-5">
                    <h2 lang="en" class="headingText">This is citrum communitty</h2>
                    <h2 lang="ind" class="headingText">Ini adalah komunitas jeruk</h2>
                    <p lang="en" class="px-md-5 px-sm-3 px-2 mt-4 text-left">
                    In April, our team traveled to Paris to raise awareness about the alarming pollution of the Citarum River. We organized a public exhibition featuring powerful photographs and distributing bottles filled with "polluted" water from the Citarum, showcasing the river's current state and the communities affected by its pollution. Our efforts in Paris were aimed at engaging the international community and garnering support for stricter environmental policies in Indonesia. The event attracted significant attention  from concerned citizens.
                    </p>
                    <p lang="ind" class="px-md-5 px-sm-3 px-2 mt-4 text-left">
                    Pada bulan April, tim kami melakukan perjalanan ke Paris untuk meningkatkan kesadaran mengenai pencemaran Sungai Citarum yang mengkhawatirkan. Kami menyelenggarakan pameran publik yang menampilkan foto-foto yang kuat dan membagikan botol-botol berisi air yang "tercemar" dari Citarum, yang menampilkan kondisi sungai saat ini dan masyarakat yang terkena dampak polusi tersebut. Upaya kami di Paris bertujuan untuk melibatkan komunitas internasional dan menggalang dukungan bagi kebijakan lingkungan hidup yang lebih ketat di Indonesia. Peristiwa ini menarik perhatian besar dari warga yang peduli.
                    </p>
                </div>
                <div class="col-12 py-5">
                    <div class="col-12 py-5">
                        <div id="nanoGalleryContainerThree" class="nanoGallery">
                            <a href="{{ asset('assets/gallery-images/img-11.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-11.jpeg') }}" data-ngDesc="Image 11"></a>
                            <a href="{{ asset('assets/gallery-images/img-12.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-12.jpeg') }}" data-ngDesc="Image 12"></a>
                            <a href="{{ asset('assets/gallery-images/img-13.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-13.jpeg') }}" data-ngDesc="Image 13"></a>
                            <a href="{{ asset('assets/gallery-images/img-14.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-14.jpeg') }}" data-ngDesc="Image 14"></a>
                            <a href="{{ asset('assets/gallery-images/img-15.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-15.jpeg') }}" data-ngDesc="image 15"></a>
                            <a href="{{ asset('assets/gallery-images/img-16.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-16.jpeg') }}" data-ngDesc="Image 16"></a>
                            <a href="{{ asset('assets/gallery-images/img-17.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-17.jpeg') }}" data-ngDesc="Image 17"></a>
                            <a href="{{ asset('assets/gallery-images/img-18.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-18.jpeg') }}" data-ngDesc="Image 18"></a>
                            <a href="{{ asset('assets/gallery-images/img-19.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-19.jpeg') }}" data-ngDesc="Image 19"></a>
                            <a href="{{ asset('assets/gallery-images/img-20.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-20.jpeg') }}" data-ngDesc="Image 20"></a>
                            <a href="{{ asset('assets/gallery-images/img-21.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-21.jpeg') }}" data-ngDesc="Image 21"></a>
                            <a href="{{ asset('assets/gallery-images/img-22.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-22.jpeg') }}" data-ngDesc="Image 22"></a>
                            <a href="{{ asset('assets/gallery-images/img-23.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-23.jpeg') }}" data-ngDesc="Image 23"></a>
                            <a href="{{ asset('assets/gallery-images/img-24.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-24.jpeg') }}" data-ngDesc="Image 24"></a>
                            <a href="{{ asset('assets/gallery-images/img-25.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-25.jpeg') }}" data-ngDesc="Image 25"></a>
                            <a href="{{ asset('assets/gallery-images/img-26.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-26.jpeg') }}" data-ngDesc="Image 26"></a>
                            <a href="{{ asset('assets/gallery-images/img-27.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-27.jpeg') }}" data-ngDesc="Image 27"></a>
                            <a href="{{ asset('assets/gallery-images/img-28.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-28.jpeg') }}" data-ngDesc="Image 28"></a>
                            <a href="{{ asset('assets/gallery-images/img-29.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-29.jpeg') }}" data-ngDesc="Image 29"></a>
                            <a href="{{ asset('assets/gallery-images/img-30.jpeg') }}" data-ngThumb="{{ asset('assets/gallery-images/img-30.jpeg') }}" data-ngDesc="Image 30"></a>
                        </div>
                    </div>
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
        <div class="d-flex align-items-center mb-2" style="gap:1rem;">
            <a href="https://www.facebook.com/citarumwater/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
            </a>
            <a href="https://instagram.com/citarum_water" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg>
            </a>
        </div>
        <p class="text-white">Citarum Water - © 2023 All Rights Reserved</p>
    </footer>
    <footer lang="ind" class="py-4">
        <div class="d-flex align-items-center mb-2" style="gap:1rem;">
            <a href="https://www.facebook.com/citarumwater/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
            </a>
            <a href="https://instagram.com/citarum_water" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                </svg>
            </a>
        </div>
        <p class="text-white">Air Citarum - © 2023 Hak Cipta Dilindungi Undang-Undang</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Include NanoGallery2 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/nanogallery2/dist/jquery.nanogallery2.min.js"></script>




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
    <script>
    jQuery(document).ready(function () {
        jQuery("#nanoGalleryContainer").nanogallery2({
            thumbnailWidth: 400,
            thumbnailHeight: 400,
            thumbnailBorderHorizontal: 0,
            thumbnailBorderVertical: 0,
            itemsBaseURL: '{{ asset('assets/gallery-images/') }}', // Base URL for assets
            thumbnailLabel: {
                display: true
            },
            galleryDisplayMode: 'pagination',
            gallerySorting: 'random',
            paginationMaxLinesPerPage: 3,
            locationHash: false,
            fnThumbnailInit: myThumbnailInit
        });
    });

    function myThumbnailInit(item) {
        // Customize thumbnail initialization if needed
    }
    </script>
    <script>
    jQuery(document).ready(function () {
        jQuery("#nanoGalleryContainerTwo").nanogallery2({
            thumbnailWidth: 400,
            thumbnailHeight: 400,
            thumbnailBorderHorizontal: 0,
            thumbnailBorderVertical: 0,
            itemsBaseURL: '{{ asset('assets/gallery-images/') }}', // Base URL for assets
            thumbnailLabel: {
                display: true
            },
            galleryDisplayMode: 'pagination',
            gallerySorting: 'random',
            paginationMaxLinesPerPage: 3,
            locationHash: false,
            fnThumbnailInit: myThumbnailInit
        });
    });


    jQuery(document).ready(function () {
        jQuery("#nanoGalleryContainerThree").nanogallery2({
            thumbnailWidth: 400,
            thumbnailHeight: 400,
            thumbnailBorderHorizontal: 0,
            thumbnailBorderVertical: 0,
            itemsBaseURL: '{{ asset('assets/gallery-images/') }}', // Base URL for assets
            thumbnailLabel: {
                display: true
            },
            galleryDisplayMode: 'pagination',
            gallerySorting: 'random',
            paginationMaxLinesPerPage: 3,
            locationHash: false,
            fnThumbnailInit: myThumbnailInit
        });
    });

    function myThumbnailInit(item) {
        // Customize thumbnail initialization if needed
    }


</script>
<script>
    // Smooth Scroll
    document.querySelectorAll('.nav-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetID = this.getAttribute('href');
            const targetSection = document.querySelector(targetID);

            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
</body>

</html>