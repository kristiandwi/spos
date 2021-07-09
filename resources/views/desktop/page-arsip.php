<?php
/*
Template Name: Arsip
*/
get_header(); ?>	
	<!-- breadcrumb -->
	<div class="breadcrumb-section">
		<div class="container ">
			<div class="row">
				<div class="col-12">
					<ol class="breadcrumb">
						<li>
							<a href="https://www.solopos.com/"><i class="fa fa-home"></i></a>
						</li>
						<li><i class="fa fa-angle-right"></i><?php the_title(); ?></li>
					</ol>		
				</div>
			</div><!-- row end -->
		</div><!-- container end -->
	</div>
	<!-- breadcrumb end -->

	<section class="main-content pt-0">
		<div class="container pl-0 pr-0">
			<div class="row ts-gutter-30">
				<div class="col-lg-8">
					<div class="post-header-area">
						<h1 class="post-title title-lg">Halaman Arsip Berita Solopos.com</h1>
					</div><!-- post-header-area end -->
					<div class="gap-30 d-none d-md-block"></div>
					<div class="container">
		            <?php
		            if(isset($_POST['submit'])):
		                $tgl = $_POST['tgl'];
		                $bln = $_POST['bln'];
		                $thn = $_POST['thn'];
		            ?>
		            <div align="center">
		                <form action="" method="post" name="sortindeks">
		                	<div class="row">
		                		<div class="col-md-3">
			                    <select name="tgl" class="form-control">
				                    <?php
				                    for($d=1; $d <= 31; $d++) {
				                        if($d==$tgl) { 
				                            echo"<option value=\"$d\" selected=\"selected\">$d</option>";
				                        } else {
				                            echo"<option value=\"$d\">$d</option>";
				                        }
				                    }
				                    ?>
			                    </select>
		                		</div>
								<div class="col-md-4">
			                    <select name="bln" class="form-control">
			                        <option value="1"<?php if($bln==1): ?> selected="selected"<?php endif; ?>>Januari</option>
			                        <option value="2"<?php if($bln==2): ?> selected="selected"<?php endif; ?>>Februari</option>
			                        <option value="3"<?php if($bln==3): ?> selected="selected"<?php endif; ?>>Maret</option>
			                        <option value="4"<?php if($bln==4): ?> selected="selected"<?php endif; ?>>April</option>
			                        <option value="5"<?php if($bln==5): ?> selected="selected"<?php endif; ?>>Mei</option>
			                        <option value="6"<?php if($bln==6): ?> selected="selected"<?php endif; ?>>Juni</option>
			                        <option value="7"<?php if($bln==7): ?> selected="selected"<?php endif; ?>>Juli</option>
			                        <option value="8"<?php if($bln==8): ?> selected="selected"<?php endif; ?>>Agustus</option>
			                        <option value="9"<?php if($bln==9): ?> selected="selected"<?php endif; ?>>September</option>
			                        <option value="10"<?php if($bln==10): ?> selected="selected"<?php endif; ?>>Oktober</option>
			                        <option value="11"<?php if($bln==11): ?> selected="selected"<?php endif; ?>>November</option>
			                        <option value="12"<?php if($bln==12): ?> selected="selected"<?php endif; ?>>Desember</option>
			                    </select>
			                    </div>
		                    	<div class="col-md-3">                        
			                    <select name="thn" class="form-control">
				                    <?php
				                    for($y=2009; $y <= date('Y'); $y++) {
				                        if($y==$thn) { 
				                            echo"<option value=\"$y\" selected=\"selected\">$y</option>";
				                        } else {
				                            echo"<option value=\"$y\">$y</option>";
				                        }
				                    }
				                    ?>
			                    </select>
		                		</div>
		            			<div class="col-md-2">
		                    	<input name="submit" type="submit" id="submit" value="Go" class="btn btn-primary btn-sm" />
		                    	</div>
		                    </div>
		                </form>
		            </div>

		            <?php else:
		                $tgl = date('d');
		                $bln = date('n');
		                $thn = date('Y');
		            ?>
		            <div align="center">
		                <form action="" method="post" name="sortindeks">
		                	<div class="row">
		                		<div class="col-md-3">
			                    <select name="tgl" class="form-control">
				                    <?php
				                    for($d=1; $d <= 31; $d++) {
				                        if($d==date('d')) { 
				                            echo"<option value=\"$d\" selected=\"selected\">$d</option>";
				                        } else {
				                            echo"<option value=\"$d\">$d</option>";
				                        }
				                    }
				                    ?>
			                    </select>
			                	</div>
			                	<div class="col-md-4">
			                    <select name="bln" class="form-control">
			                        <option value="1"<?php if(date('n')==1): ?> selected="selected"<?php endif; ?>>Januari</option>
			                        <option value="2"<?php if(date('n')==2): ?> selected="selected"<?php endif; ?>>Februari</option>
			                        <option value="3"<?php if(date('n')==3): ?> selected="selected"<?php endif; ?>>Maret</option>
			                        <option value="4"<?php if(date('n')==4): ?> selected="selected"<?php endif; ?>>April</option>
			                        <option value="5"<?php if(date('n')==5): ?> selected="selected"<?php endif; ?>>Mei</option>
			                        <option value="6"<?php if(date('n')==6): ?> selected="selected"<?php endif; ?>>Juni</option>
			                        <option value="7"<?php if(date('n')==7): ?> selected="selected"<?php endif; ?>>Juli</option>
			                        <option value="8"<?php if(date('n')==8): ?> selected="selected"<?php endif; ?>>Agustus</option>
			                        <option value="9"<?php if(date('n')==9): ?> selected="selected"<?php endif; ?>>September</option>
			                        <option value="10"<?php if(date('n')==10): ?> selected="selected"<?php endif; ?>>Oktober</option>
			                        <option value="11"<?php if(date('n')==11): ?> selected="selected"<?php endif; ?>>November</option>
			                        <option value="12"<?php if(date('n')==12): ?> selected="selected"<?php endif; ?>>Desember</option>
			                    </select>
			                    </div>
			                    <div class="col-md-3">                     
			                    <select name="thn" class="form-control">
				                    <?php
				                    for($y=2009; $y <= date('Y'); $y++) {
				                        if($y==date('Y')) { 
				                            echo"<option value=\"$y\" selected=\"selected\">$y</option>";
				                        } else {
				                            echo"<option value=\"$y\">$y</option>";
				                        }
				                    }
				                    ?>
			                    </select>
			                    </div>		                		
		                		<div class="col-md-2">
		                    	<input name="submit" type="submit" id="submit" value="Go" class="btn btn-primary btn-sm" />
		                    	</div>
		                    </div>
		                </form>
		            </div>
		            <?php endif; ?>
		            </div>	

		            <div class="gap-50 d-none d-md-block"></div>				

		            <?php $no = 1 ?>
		            <?php
		            $arg=array(
		              //'cat' => $listcat->term_id,
		              'post_type' => 'post',
		              'post_status' => 'publish',
		              'posts_per_page' => -1,
		              'year' => $thn,
		              'monthnum' => $bln,
		              'day' => $tgl,
		              'paged' => get_query_var('paged')
		            );
		            
		            $my_query = new WP_Query($arg);
		            if( $my_query->have_posts() ) :
		            while ($my_query->have_posts()) : $my_query->the_post(); ?> 
		            <?php $no++ ?>                         
					<div class="mb-10">
						<div class="post-block-style">
							<div class="row">
								<div class="col-md-5">
									<div class="post-thumb post-list_feed">
										<img src="<?php echo post_image('thumbnail', 280, 190); ?>" alt="<?php the_title(); ?>">
										<a class="post-cat-box <?php echo parent_category_slug(); ?>" href="https://www.solopos.com/<?php echo parent_category_slug(); ?>"><?php echo parent_category_slug(); ?></a>
									</div>
								</div>
								<div class="col-md-7 pl-0">
									<div class="post-content">
										<h2 class="post-title title-md">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
										<div class="post-meta mb-7">
											<span class="post-author"><a href="#"><i class="fa fa-user"></i> <?php echo author_name(); ?></a></span>
											<span class="post-date"><i class="fa fa-clock-o"></i> <?php the_time('j F Y H:i'); ?> WIB</span>
										</div>
										<p><?php $post_summary = get_post_meta( $post->ID, 'post_summary', true ); if($post_summary !== '') { echo $post_summary; } ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>                                      
		            <?php endwhile; else: ?>
		            <p>Maaf, Hari ini belum ada berita.</p>
		            <?php endif; ?>

		            <?php //endforeach; ?>  
		            <?php wp_reset_query(); ?>                       
		            <!--Pagination-->
		            <div class="wp_pagenavi">
		                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi( ); } ?>
		            </div>
		            <!--End pagination--> 

				</div><!-- col-lg-8 -->

				<!-- sidebar start -->
				<?php get_sidebar(); ?>
				<!-- sidebar end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</section><!-- category-layout end -->

<?php get_footer(); ?>