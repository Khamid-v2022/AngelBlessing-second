    <div class="birth-number">
       
        <section class="intro">
           <div class="name_part">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-12">
                            <div class="bordlanogelpart">
                                <div class="Guardvare Guardvare_1">
                                    <p>Reveal Your Birthday Month Meaning Today!</p>
                                </div>
                                <div class="reveal_img">
                                    <a href="#card-section" class="d-block action-btn">
                                       Choose Your Birth Month Below
                                    </a>
                                </div>
                            </div>

                        </div>                
                    </div>
                </div>
            </div>
        </section>

        <section class="main">
            <div class="container pb-5" >  
                <div class="google-ads-place">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6130278165783644" crossorigin="anonymous"></script>
                    <!-- birthdaypage top -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-6130278165783644"
                         data-ad-slot="7646708734"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <div class="card-section" id="card-section">
                    <div class="row d-flex align-items-center justify-content-center my-5">
                        <?php 
                        $months = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'];
                        foreach($months as $month){
                        ?>
                        <div class="flip-box col-md-3 col-6">
                            <a href="https://www.askangelblessing.com/<?=$month?>-birthday-month-people/" class="color-btn">
                                <div class="flip-container flip-box-inner">
                                    <div class="flip-box-front">
                                        <img src="<?=base_url()?>assets/img/birth-number/<?=$month?>-birthday-month.png" >
                                    </div>
                                </div>
                            </a>
                        </div>    
                        <?php 
                        }
                        ?>
                    </div>
                </div>

                <div class="google-ads-place">
                   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6130278165783644" crossorigin="anonymous"></script>
                    <!-- birthdaypage bottom -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-6130278165783644"
                         data-ad-slot="5076385717"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </section>
    </div>
</body>
