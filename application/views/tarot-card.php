    <title>Pick A Card And Get Your Romantic Advice</title>
</head>
<body class="love-quiz tarot-page">
    <section class="menu-section">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-light">
                <a class="navbar-brand" href="https://www.askangelblessing.com">
                    <img width="125" height="125" src="<?=base_url()?>assets/img/logo.png" alt="">
                </a>
               
                <div class="menu-item-wrapper">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="https://www.askangelblessing.com/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.askangelblessing.com/privacy-policy/">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.askangelblessing.com/about-us/">About Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

    <section class="main">
        <div class="container pt-1 pb-5" > 
            <div class="text-center text-white pt-5">
                <h1>Pick (1) Tarot Card</h1>
                <h2><?=$topic_title?></h2>
                <input type="hidden" value="<?=$topic_category?>" id="topic_category">
            </div> 
            <div class="google-ads-place">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6130278165783644" crossorigin="anonymous"></script>
                <!-- love quiz tarot top -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6130278165783644"
                     data-ad-slot="3347870066"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

            <div class="select-card-container">               
                <div class="select-card-wrapper">
                    <a style="" href="#reveal_card" class="select-card card-1 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a  style="" href="#reveal_card" class="select-card card-2 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a style="" href="#reveal_card" class="select-card card-3 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a style="" href="#reveal_card" class="select-card card-4 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a style="" href="#reveal_card" class="select-card card-5 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a style="" href="#reveal_card" class="select-card card-6 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a style="" href="#reveal_card" class="select-card card-7 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a style="" href="#reveal_card" class="select-card card-8 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a style="" href="#reveal_card" class="select-card card-9 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a style="" href="#reveal_card" class="select-card card-10 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a style="" href="#reveal_card" class="select-card card-11 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                    <a style="" href="#reveal_card" class="select-card card-12 w-inline-block">
                        <img src="<?=base_url()?>assets/img/card_face-down.png" loading="lazy" alt="">
                    </a>
                </div>
            </div>
            <div class="reveal-card-wrapper" id="reveal_card">
                <div class="reveal-card">
                    <img src="<?=base_url()?>assets/img/card_face-down.png" id="reveal_card_img">
                </div>
                <div class="reveal-text-wrapper">
                    <h2 class="header_h4" id="cardHeader">
                    </h2>
                    <p class="p-text color-white" id="cardDescription">
                        The Ace of Pentacles depicts a hand emerging from the clouds, not dissimilar to the Aces in other suits. A large coin sits comfortable in the palm of this hand. It is up for grabs for the first person who wants to take it. This symbols a brand new opportunity surrounding wealth, career or finances is about to take hold.
                    </p>
                    <a href="" class="cta-button w-button" id="cardLink">READ MORE</a>
                </div>
            </div>
            <div class="reveal-card-wrapper text-center" id="reveal_card_no" style="display:none">
                <div class="reveal-text-wrapper">
                    <h2 class="header_h4">
                        No posts
                    </h2>
                    <a href="https://www.askangelblessing.com/angel/LoveQuiz/" class="cta-button w-button" style="width: 300px">Go to Pick A Question</a>
                </div>
            </div>

            <div class="google-ads-place">
               <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6130278165783644" crossorigin="anonymous"></script>
                <!-- love quiz tarot bottom -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6130278165783644"
                     data-ad-slot="9254802869"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </section>
</body>
