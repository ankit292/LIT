<?php include_once('header.php') ?>
<style type="text/css">
	.ticker_wrap{display: flex;}
	.ticker__breaking{
	 white-space: nowrap;
	 background: red;
		 color: #fff;
		 overflow: hidden;
		 padding: 10px 6px;
	  display: inline-block; 
	  font-weight: bold;
	}
	.ticker__viewport {
		 background: #0067E5;
		 color: #fff;
		 overflow: hidden;
		 padding: 10px 0;
	  display: inline-block;
	  flex-grow: 1
	}
	.ticker__viewport a {
	  cursor: context-menu;
	  color: #fff;
	  text-decoration: none;
	}
	.ticker__viewport a:hover {
	  color: yellow;
	  font-weight: bold;
	}
	 .ticker__list {
		 list-style-type: none;
		 padding: 0;
		 margin: 0;
		 display: flex;
	}
	 .ticker__item {
		 display: inline-block;
		 white-space: nowrap;
		 padding-right: 40px;
	}
	.ticker__item:before{
	  content: "";
	  font-weight: bold;
	}
</style>
<h1>High Breed Technology News Ticker</h1>
<div class="ticker_wrap">
	  <div class="ticker__viewport">
		    <ul class="ticker__list" data-ticker="list">
		        <li class="ticker__item" data-ticker="item"></li>
		        <li class="ticker__item" data-ticker="item"></li>
		        <li class="ticker__item" data-ticker="item"></li>
		    </ul>
	  </div>
</div>
<?php include_once('footer.php') ?>
<script type="text/javascript">
	$(document).ready(function(){
		var $ticker = $('[data-ticker="list"]'),
    tickerItem = '[data-ticker="item"]'
    itemCount = $(tickerItem).length,
    viewportWidth = 0;

		function setupViewport(){
		    $ticker.find(tickerItem).clone().prependTo('[data-ticker="list"]');
		    
		    for (i = 0; i < itemCount; i ++){
		        var itemWidth = $(tickerItem).eq(i).outerWidth();
		        viewportWidth = viewportWidth + itemWidth;
		    }
		    
		    $ticker.css('width', viewportWidth);
		}

		function animateTicker(){
		    $ticker.animate({	
		        marginLeft: -viewportWidth
		      }, 30000, "linear", function() {
		        $ticker.css('margin-left', '0');
		        animateTicker();
		      });
		}

		function initializeTicker(){
		    setupViewport();
		    animateTicker();
		    
		    $ticker.on('mouseenter', function(){
		        $(this).stop(true);
		    }).on('mouseout', function(){
		        animateTicker();
		    });
		}

		initializeTicker();
	})
</script>