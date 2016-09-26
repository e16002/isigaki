<?php get_header(); ?>

    <div class="contentsWrap">
        <div class="mainContents">
            <section class="planBlock block">
                <h1 class="type-A">宿泊プラン</h1>
                <div class="plans">
                <?php get_template_part('loop', 'plan'); ?>

                    <section class="plan">
                        <a href="single-plan.html">
                            <div class="text">
                                <h2 class="name">スタンダード・シングルルーム</h2>
                                <p class="price">6,000円/泊</p>
                                <p class="summary">ゆったりとくつろげるシングルルーム。当ホテルのスタンダードプランです。</p>
                            </div>
                            <figure><img src="images/dummy/100x100-1.png" height="100" width="100" alt=""></figure>
                        </a>
                    </section><!-- /.plan -->

                    <section class="plan">
                        <a href="single-plan.html">
                            <div class="text">
                                <h2 class="name">ビジネル・シングルルーム</h2>
                                <p class="price">6,000円/泊</p>
                                <p class="summary">インターネット完備のビジネス向けのシングルルーム。長期出張向けです。</p>
                            </div>
                            <figure><img src="images/dummy/100x100-2.png" height="100" width="100" alt=""></figure>
                        </a>
                    </section><!-- /.plan -->

                    <section class="plan">
                        <a href="single-plan.html">
                            <div class="text">
                                <h2 class="name">スタンダード・ツインルーム</h2>
                                <p class="price">8,000円/泊</p>
                                <p class="summary">旅行の疲れを癒せるツインルーム。カップル、ご友人との滞在に。</p>
                            </div>
                            <figure><img src="images/dummy/100x100-3.png" height="100" width="100" alt=""></figure>
                        </a>
                    </section><!-- /.plan -->

                    <section class="plan">
                        <a href="single-plan.html">
                            <div class="text">
                                <h2 class="name">デラックス・ツインルーム</h2>
                                <p class="price">10,000円/泊</p>
                                <p class="summary">バルコニー付きの快適な広さの室内スペース。ファミリー、ご友人での滞在にオススメです。</p>
                            </div>
                            <figure><img src="images/dummy/100x100-4.png" height="100" width="100" alt=""></figure>
                        </a>
                    </section><!-- /.plan -->

                    <section class="plan">
                        <a href="single-plan.html">
                            <div class="text">
                                <h2 class="name">オーシャンビュー・ツインルーム</h2>
                                <p class="price">12,000円/泊</p>
                                <p class="summary">オーシャンビューのハイグレードな空間です。特別な日に是非どうぞ。</p>
                            </div>
                            <figure><img src="images/dummy/100x100-5.png" height="100" width="100" alt=""></figure>
                        </a>
                    </section><!-- /.plan -->

                </div><!-- /.plans -->
            </section><!-- /.planBlock -->
        </div><!-- /.mainContents -->

        <aside class="subContents">
            <?php get_sidebar(); ?>

        </aside><!-- /.subContents -->
    </div><!-- /.contentsWrap -->

    <?php get_footer(); ?>