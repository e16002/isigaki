<section class="recentArchives">
                    <h1 class="type-C">月別アーカイブ</h1>
                    <ul class="archives">

<?php
$args = array(
  'type' => 'monthly', //月別を指定
  'show_post_count' => true, //投稿を表示
  );
wp_get_archives( $args );
 ?>


                        <li><a href="date.html">2015年2月</a>(2)</li>
                        <li><a href="date.html">2015年1月</a>(1)</li>
                    </ul><!-- /.archives -->
                </section><!-- /.recentArchives -->