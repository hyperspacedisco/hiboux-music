@extends('master')

@section('title', 'Media')

@section('meta-description', 'Hiboux photos and videos.')

@section('content')

<h1>Media</h1>
	<p>Hiboux photos and videos</p>

		<div class="videos">
			<br />
			<h3 style="text-align: center">Videos</h3>
			<p style="text-align: center">Hiboux live performances.</p>
			<br/>
			<iframe  id="youtube-video" class="video" width="854" height="480" src="https://www.youtube.com/embed/7bunxbE2XyA" frameborder="0" allowfullscreen></iframe>
			<iframe class="vimeo-video video" src="https://player.vimeo.com/video/107538137" width="500" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<!-- <p><a href="https://vimeo.com/107538137">Hiboux - Le Voyage Des Hiboux (Live at Valhalla, Wellington, 05.09.14)</a> from <a href="https://vimeo.com/user29886281">Keith Johnson</a> on <a href="https://vimeo.com">Vimeo</a>.</p> -->
			<iframe  class="vimeo-video video" src="https://player.vimeo.com/video/105533583" width="500" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<!-- <p><a href="https://vimeo.com/105533583">Hiboux - Cloudman (Live at Valhalla, Wellington, 05.09.14)</a> from <a href="https://vimeo.com/user29886281">Keith Johnson</a> on <a href="https://vimeo.com">Vimeo</a>.</p> -->		
			</div>		

	
		<h1 style="clear: both;">Photos</h1>
		<p style="text-align: center">Select any image below to get a closer look.</p>

		<div class="gallery-container">
			

			<div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/poster1.jpg" class="image-thumb" itemprop="contentUrl" data-size="800x1024">
		          <img src="img/thumbnails/poster1-thumbnail.jpg" itemprop="thumbnail" alt="Image description" />
		      </a>
		    <figcaption itemprop="caption description">Poster for 14/3/2015 gig</figcaption>
		                                          
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/poster2.jpg" class="image-thumb" itemprop="contentUrl" data-size="800x1024">
		          <img src="img/thumbnails/poster2-thumbnail.jpg" itemprop="thumbnail" alt="Image description" />
		      </a>
		      <figcaption itemprop="caption description">Poster for 27/6/2015 gig</figcaption>
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/poster3.jpg"  class="image-thumb" itemprop="contentUrl" data-size="800x1024">
		          <img src="img/thumbnails/poster3-thumbnail.jpg" itemprop="thumbnail" alt="Image description" />
		      </a>
		      <figcaption itemprop="caption description">Poster for 21/11/2015 gig</figcaption>
		    </figure>

		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/poster4.jpg"  class="image-thumb" itemprop="contentUrl" data-size="800x1024">
		          <img src="img/thumbnails/poster4-thumbnail.jpg" itemprop="thumbnail" alt="Image description" />
		      </a>
		      <figcaption itemprop="caption description">Poster for 16/10/2015 gig</figcaption>
		    </figure>
		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/ValhallaSept2015.jpg" class="image-thumb" itemprop="contentUrl" data-size="1024x910">
		          <img src="img/thumbnails/ValhallaSept2015-thumbnail.jpg" itemprop="thumbnail" alt="Image description" />
		      </a>
		      <figcaption itemprop="caption description">Valhalla, Wellington, September 4th 2015</figcaption>
		    </figure>
		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/HibouxValhallaSeptember4th2015-2.jpg" class="image-thumb" itemprop="contentUrl" data-size="1000x910">
		          <img src="img/thumbnails/HibouxValhallaSeptember4th2015-2-thumbnail.jpg" itemprop="thumbnail" alt="Hiboux" />
		      </a>
		      <figcaption itemprop="caption description">Valhalla, Wellington, September 4th 2015</figcaption>
		    </figure>
		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/band.jpg" class="image-thumb" itemprop="contentUrl" data-size="960x347">
		          <img src="img/thumbnails/bandthumbnail.jpg" itemprop="thumbnail" alt="Hiboux" />
		      </a>
		      <figcaption itemprop="caption description">Hiboux</figcaption>
		    </figure>
		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/band2.jpg" class="image-thumb" itemprop="contentUrl" data-size="960x541">
		          <img src="img/thumbnails/band2-thumbnail.jpg" itemprop="thumbnail" alt="Hiboux" />
		      </a>
		      <figcaption itemprop="caption description">Hiboux</figcaption>
		    </figure>
		      <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/5thSeptemberAuckland.jpg" class="image-thumb" itemprop="contentUrl" data-size="1597x900">
		          <img src="img/thumbnails/5thSeptemberAucklandThumbnail" itemprop="thumbnail" alt="Hiboux" />
		      </a>
		      <figcaption itemprop="caption description">Thirsty Dog, Auckland, September 5th 2015</figcaption>
		    </figure>
		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/5thSeptemberAuckland2.jpg" class="image-thumb" itemprop="contentUrl" data-size="960x541">
		          <img src="img/thumbnails/5thSeptemberAucklandThumbnail2.jpg" itemprop="thumbnail" alt="Hiboux" />
		      </a>
		      <figcaption itemprop="caption description">Thirsty Dog, Auckland, September 5th 2015</figcaption>
		    </figure>
		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/5thSeptemberAuckland3.jpg" class="image-thumb" itemprop="contentUrl" data-size="960x541">
		          <img src="img/thumbnails/5thSeptemberAucklandThumbnail3.jpg" itemprop="thumbnail" alt="Hiboux" />
		      </a>
		      <figcaption itemprop="caption description">Thirsty Dog, Auckland, September 5th 2015</figcaption>
		    </figure>
		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/5thSeptemberAuckland4.jpg" class="image-thumb" itemprop="contentUrl" data-size="960x541">
		          <img src="img/thumbnails/5thSeptemberAucklandThumbnail4.jpg" itemprop="thumbnail" alt="Hiboux" />
		      </a>
		      <figcaption itemprop="caption description">Thirsty Dog, Auckland, September 5th 2015</figcaption>
		    </figure>
		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/5thSeptemberAuckland5.jpg" class="image-thumb" itemprop="contentUrl" data-size="960x541">
		          <img src="img/thumbnails/5thSeptemberAucklandThumbnail5.jpg" itemprop="thumbnail" alt="Hiboux" />
		      </a>
		      <figcaption itemprop="caption description">Thirsty Dog, Auckland, September 5th 2015</figcaption>
		    </figure>
		    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
		      <a href="img/photos/BrianJonestownMassacre01.jpg" class="image-thumb" itemprop="contentUrl" data-size="1000x768">
		          <img src="img/thumbnails/BrianJonestownMassacre1-thumbnail.jpg" itemprop="thumbnail" alt="Hiboux" />
		      </a>
		      <figcaption itemprop="caption description">Opening for the Brian Jonestown Massacre</figcaption>
		    </figure>
		  

		    


	    </div>


			<!-- start of PhotoSwipe JS API -->
			<!-- Root element of PhotoSwipe. Must have class pswp. -->
		
		<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

		    <!-- Background of PhotoSwipe. 
		         It's a separate element, as animating opacity is faster than rgba(). -->
		    <div class="pswp__bg"></div>

		    <!-- Slides wrapper with overflow:hidden. -->
		    <div class="pswp__scroll-wrap">

		        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
		        <div class="pswp__container">
		            <!-- don't modify these 3 pswp__item elements, data is added later on -->
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		            <div class="pswp__item"></div>
		        </div>

		        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		        <div class="pswp__ui pswp__ui--hidden">

		            <div class="pswp__top-bar">

		                <!--  Controls are self-explanatory. Order can be changed. -->

		                <div class="pswp__counter"></div>

		                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

		                <button class="pswp__button pswp__button--share" title="Share"></button>

		                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

		                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

		                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
		                <!-- element will get class pswp__preloader--active when preloader is running -->
		                <div class="pswp__preloader">
		                    <div class="pswp__preloader__icn">
		                      <div class="pswp__preloader__cut">
		                        <div class="pswp__preloader__donut"></div>
		                      </div>
		                    </div>
		                </div>
		            </div>

		            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
		                <div class="pswp__share-tooltip"></div> 
		            </div>

		            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
		            </button>

		            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
		            </button>

		            <div class="pswp__caption">
		                <div class="pswp__caption__center"></div>
		            </div>

		          </div>

		        </div>

			</div>

		</div>





		<div class="boost-footer"></div>

	<script type="text/javascript" src="js/photoswipe.js"></script>
	
	<script type="text/javascript" src="js/hello.js"></script>

@endsection