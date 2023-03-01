    <div class="essential-oils">
        <section class="main">
            <div class="container pt-1 pb-5" >  
                <div class="google-ads-place">
                    <!-- essential oils top -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-6130278165783644"
                         data-ad-slot="9835080650"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                
                <div class="my-5">
                    <div class="text-center">
                        <h1>Making Contact with Angels Using Essential Oils</h1>
                    </div>
                    <div class="row justify-content-center my-5">
                        <?php 
                        foreach($posts as $post) { ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 p-4">
                                <div class="article-box">
                                    <a href="<?=$post['url']?>">
                                       <div class="image">
                                           <img src="<?=$post['image_path']?>" alt="" style="width: 100%; object-fit: fill" loading="lazy">
                                       </div>
                                        <div class="article-title-wrapper text-center">
                                           <h6 class="article-title"><?=$post['title']?></h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>                    
                    </div>
                </div>

                <div class="google-ads-place">
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-format="autorelaxed"
                         data-ad-client="ca-pub-6130278165783644"
                         data-ad-slot="5512692266"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </section>
    </div>
</body>
