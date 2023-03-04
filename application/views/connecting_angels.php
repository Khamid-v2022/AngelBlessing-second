    <section class="story-angel">
        <div class="container">  
            <div class="google-ads-place">
               <!-- connecting with angels top -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6130278165783644"
                     data-ad-slot="8676398888"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        
            <section class="popular-article">
                <div class="text-center my-4">
                    <h2>Choose Your Methods To Connecting With Your Angels Today</h2>
                </div>
                <div class="row">
                    <?php 
                    foreach($random_posts as $post) { ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="article-box">
                                <a href="<?=$post['url']?>">
                                   <div class="image text-center">
                                       <img src="<?=$post['image_path']?>" alt="" style="height: 100%; object-fit: fill" loading="lazy">
                                   </div>
                                    <div class="text-center">
                                       <h5 class="article-title"><?=$post['title']?></h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>                    
                </div>
            </section>
        
            <div class="google-ads-place">
                <!-- connecting with angels bottom -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6130278165783644"
                     data-ad-slot="3232500516"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </section>
</body>
