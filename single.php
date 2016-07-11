<?php get_header(); ?>
			<div id="main">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-md-push-3">
							<div class="row">
								<div class="col-md-8">
									<?php
										//アイキャッチ画像のIDを取得
										$thumbnail_id = get_post_thumbnail_id(); 
										
										//mediumサイズの画像内容を取得（引数にlargeをセット）
										$eye_img = wp_get_attachment_image_src( $thumbnail_id, 'large');
										
										//print_rで配列の内容の確認
										/*echo"<pre>";
										print_r($eye_img);
										echo"</pre>";*/
										
										/*print_rの結果
										[0] => http://hoge.hoge.com/wp-content/xxx/xxx.jpg
										[1] => 300
										[2] => 300
										[3] => 
										*/
									?>
									<?php if(have_posts()):while(have_posts()):the_post(); ?>
										<div>
											<?php /*the_post_thumbnail();*/ ?>
											<img src="<?php echo($eye_img[0]); ?>" class="img-responsive">
										</div>
										<h1><?php the_title(); ?></h1>
										<div>
											<?php the_content(); ?>
										</div>
									<?php endwhile; ?>
									<?php endif; ?>
								</div>
								<div class="col-md-4">
									シングル右カラム
								</div>
							</div>
						</div>
						<div class="col-md-3 col-md-pull-9">
							左カラム1
						</div>
					</div>
				</div>
			</div>
<?php get_footer(); ?>