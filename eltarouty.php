<?php
/*
Template Name: Ahmed Eltarouty

Add a new page and choose template ya tarouty then take the lenk of the page after saving it and see the result ya man
*/

get_header(); ?>

<div class="container">
    <div class="row">
        <h2 class="text-center mt-5"><?php wp_title(''); ?></h2>
        <div class="col-md-6 p-5">
            <img src="<?php echo get_template_directory_uri().'/assets/img/Podcast-Emad-neu.webp' ?>" alt="Podcast-Emad">
        </div>
        <div class="col-md-6 p-5 mt-5">
            <p>في هذا البودكاست نكشف عن جميع استراتيجيات الشركة وفرص التطوير بالإضافة إلى أفضل النصائح التسويقية حتى تتمكن من الاستفادة منها <br>
            <p>اكتشف كيف يمكن للطرق البسيطة والمفهومة أن تساعدك على بناء المزيد من المرونة وتنظيم وقتك وعملك للقيام بما تريد<br>
            <p>هل تبحث عن أفكار ودوافع وإلهام جديدة في وقت الرياضة أو في طريقك إلى العمل أو في وقت فراغك؟<br>
            <p>إذاً فإن برودكاست فرصة مع عماد الشيخ مناسب لك تمامًا! في كل حلقة ، يخصص عماد لموضوع محدد مثل إدارة الوقت والتسويق والإنتاجية والمبيعات وتنمية الشخصية والموظفين والتوازن بين العمل والحياة والقيادة والرقمنة وبناء الثقة<br>
            <p>سيقدم لك بطريقة مفهومة المعرفة والأساليب التي استخدمها بشكل مباشر والتي اختبرها بالفعل <br>
            <p>بشكل عام ، سيساعدك هذا في الحصول على فهم أفضل لكيفية إدارة عملك بفعالية حتى تكون رائد أعمال ناجحًا </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6  col-lg-3 text-center">
            <div>
                <a href="https://podcasts.google.com/subscribe-by-rss-feed?feed=aHR0cHM6Ly9jaGFuY2UtYWwtc2hlaWtoLnBvZGlnZWUuaW8vZmVlZC9tcDM%3D">
                    <i aria-hidden="true" class="fab fa-google-play fa-4x text-primary"></i>
                </a>
            </div>
            <div class="mt-3">
                <h3>
                    <a href="https://podcasts.google.com/subscribe-by-rss-feed?feed=aHR0cHM6Ly9jaGFuY2UtYWwtc2hlaWtoLnBvZGlnZWUuaW8vZmVlZC9tcDM%3D" class="text-primary">Google Podcast</a>
                </h3>
            </div>
        </div>

        <div class="col-sm-6  col-lg-3 text-center">
            <div>
                <a class="text-primary" href="https://www.deezer.com/show/2904502">
                    <i aria-hidden="true" class="fab fa-deezer fa-4x"></i>				</a>
            </div>
            <div class="mt-3">
                <h3>
                        <a href="https://www.deezer.com/show/2904502" class="text-primary">
                            Deezer					</a>
                </h3>
            </div>
        </div>

        <div class="col-sm-6  col-lg-3 text-center">
            <div>
                <a class="text-primary" href="https://podcasts.apple.com/de/podcast/%D9%81%D8%B1%D8%B5%D8%A9-%D9%85%D8%B9-%D8%B9%D9%85%D8%A7%D8%AF-%D8%A7%D9%84%D8%B4%D9%8A%D8%AE/id1581747288">
                    <i aria-hidden="true" class="fab fa-itunes fa-4x"></i>				</a>
            </div>
            <div class="mt-3">
                <h3>
                        <a href="https://podcasts.apple.com/de/podcast/%D9%81%D8%B1%D8%B5%D8%A9-%D9%85%D8%B9-%D8%B9%D9%85%D8%A7%D8%AF-%D8%A7%D9%84%D8%B4%D9%8A%D8%AE/id1581747288" class="text-primary">
                            Itunes					</a>
                </h3>
            </div>
        </div>

        <div class="col-sm-6  col-lg-3 text-center">
            <div>
                <a class="text-primary" href="https://open.spotify.com/show/4hSrs78XyNVtxbUoQgAK9D?si=N6dBJCpvR8ydvRy7P7Ximg&dl_branch=1">
                    <i aria-hidden="true" class="fab fa-spotify fa-4x"></i>				</a>
            </div>
            <div class="mt-3">
                <h3>
                        <a href="https://open.spotify.com/show/4hSrs78XyNVtxbUoQgAK9D?si=N6dBJCpvR8ydvRy7P7Ximg&dl_branch=1" class="text-primary">
                        Spotify					</a>
                </h3>
            </div>
        </div>
    </div>
    <section id="mail" class="mail">
			<div class="container">
				<div class="row">
					<div class="text-center">
						<i aria-hidden="true" class="far fa-envelope fa-3x text-primary"></i>
						<h3>القائمة البريدية</h3>
						<p>للحصول على آخر الأخبار عن التأمينات والتمويل املأ النموذج التالي</p>
					</div>
					<div class="col-6 mx-auto">
						<form>
							<div class="my-3">
								<input type="email" class="form-control d-inline w-75 p-1 mx-2" id="exampleInputEmail1" aria-describedby="emailHelp">
								<button type="submit" class="btn btn-primary d-inline p-1">اشترك الآن</button>
							</div>
						</form>
						</div>
				</div>
			</div>

		</section><!-- End mail Section -->
</div>


<?php
get_footer( );
// return ob_get_clean();