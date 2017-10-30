<?php
/**
 * The template for displaying all single posts and attachments
 * Template Post Type: post
 * @package WordPress
 */
?>
<?php get_header(); ?>

<div class="main-container col1-layout">
<div class="main">
<div class="container">
<div class="row">
<div class="col-main">
<div class="product-view  col-lg-12 ">
<div class="product-essential">
<div class="product-img-box col-lg-7 col-sm-7 col-xs-12">
<div class="images product-image">
<div class="product-full">
	<?php 
	if (have_posts()){
		while (have_posts()){
			the_post(); ?>
	<div class="sale-label sale-top-left"> <?php the_title(); ?> </div>
</div>
<div class="more-views">
<div class="slider-items-products">
<div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
<div class="slider-items slider-width-col4 block-content">
	
<?php 
$images = get_field('gallery');
if(is_array($images) && !empty($images)){ ?>
    <div class="more-views-items">	
        <?php foreach( $images as $image ): ?>
		<a id="product-zoom" href="<?php echo $image['url']; ?>" class="cloud-zoom-gallery1 first" 
		   data-image="<?php echo $image['url']; ?>">
			<img width="104" height="125" src="<?php echo $image['sizes']['thumbnail']; ?>" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="<?php echo $image['alt']; ?>"/>
		</a>
        <?php endforeach; ?>
    </div>
<?php } ?>

</div>
</div>
</div>
</div>
</div>
</div>
   <div class="product-shop col-lg-5 col-sm-5 col-xs-12 layoutall">
	   <div class="product-name text-right">
		   <h1 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h1>
	   </div>
	   <div itemprop="description" class="short-description rtl text-right">
			  <?php the_content(); ?>
                    </div>
                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-799">
                        <div class="yith-wcwl-add-button show" style="display:block">
                            <a onclick="window.print()" href="#" rel="nofollow" class="add_to_wishlist">
                                طباعة المشروع</a>
                        </div>
                        <div style="clear:both"></div>
                        <div class="yith-wcwl-wishlistaddresponse"></div>
                    </div>
                    <div class="clear"></div><p class="compare pull-right" data-product_id="799" rel="nofollow" style="direction: rtl; font-family: 'Droid Arabic Kufi',tahoma"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-collateral col-lg-12 col-sm-12 col-xs-12">
    <div class="add_info">
       <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 pull-right locaa">
           <h3 class=" tit text-right">الموقع</h3>
           <img src="../uploads/At9gsuzf5LaFuqcyBcfhZrqsvJD8ARzj6Ytpc4BEYktCz9KzxLCgmKxC.jpg" style="width: 100%" alt="موقع ادارى" class="img-responsive"/>
       </div>
        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6 pull-left locaa">
           <h3 class=" tit text-right">فيديو المشروع</h3>
            <iframe width="100%" height="320" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe>
       </div>
    </div>
</div>
<div class="product-collateral col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
    <div class="add_info">
        <h3 class="floor-plans-label text-right">مكان المشروع</h3>
        <div class="mapss"  style="height: 350px"></div>
        </div>
    <div id="asdasd"></div>
    </div>
<div class="product-collateral col-lg-12 col-mf-12 col-sm-12 col-xs-12 pull-right">
    <div class="add_info">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
        <div class="mapss">
            <h3 class="floor-plans-label text-right">ارسل لنا رسالة</h3>

            <form action="#asdasd" method="post">
                <input type="text" name="name" class="form-control single-contact" placeholder="الاسم"/>
                <input type="email" name="email" class="form-control single-contact" placeholder="الايميل"/>
                <input type="text" name="mobile" class="form-control single-contact" placeholder="الموبايل"/>
                <textarea class="form-control single-contact" name="message" placeholder="الرسالة "></textarea>
                <button name="submit" class="form-control send" >ارسل الان </button>
                

            </form>
        </div>
        </div>

            <div class="mapss">
                <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 pull-right">
                    <h3 class="floor-plans-label text-right">قسم المبيعات معمار المرشدي</h3>

                    <img src="../img/agent.jpg" alt="agent" class="img-responsive agnt pull-right "/>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 pull-left text-right ageents">
                    <ul class="contacts-list">
                        <li class="office">

                            موبايل : 01094956397<i class="fa fa-mobile"></i>	</li>

                        <li class="mobile">

                            موبايل : 01150265959<i class="fa fa-mobile"></i></li>
                    </ul>
                    <p>&nbsp;

                        للحجز والاستعلام يمكنك مراسلاتنا او الاتصال بنا وسوف تجدنا دئماً فى خدمتك
                        <button class="form-control send2 "  ><a href="../contact-us.html">التفاصيل</a></button>

            </div>
                </div>

        </div>
    </div>
</div>
</div>
</div>
<?php
							}
							}
						  	?> 

<?php get_footer(); ?>