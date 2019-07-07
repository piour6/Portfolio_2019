/*  ==========================================================================
    Global
    ==========================================================================  */

var domain = $("body").data("domain");
var baseroot = $("body").data("baseroot");
var ismobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var max_slider = $(".slider--home .slider__item").length;
var scroll_amount = 0;

$(document).ready(function() {

/*  ==========================================================================
    Intro anim
    ==========================================================================  */

    var original = $(".logo__subtitle").html();

    var intro_loading = 5000;

    function removeAnimIntro(){
	    setTimeout(function(){
	    	$("body").removeClass("has_intro");
	    	clearInterval(interval);
			$(".logo__subtitle").html(original);
	    },intro_loading);
    }

	function getRandomNumber(min, max){
	  min = Math.ceil(min);
	  max = Math.floor(max);
	  return Math.floor(Math.random() * (max - min +1)) + min;
	}

	function changeBaseline(i){
		switch(i){
			case 0:
				var text = "J'adore les sushis";
				break;
			case 1:
				var text = "J'ai un humour débile";
				break;
			case 2:
				var text = "Je fais des sites web";
				break;
			case 3:
				var text = "Explorateur des internets";
				break;
			case 4:
				var text = "Basketteur du dimanche";
				break;
			case 5:
				var text = "Développeur de l'extrême";
				break;
			case 6:
				var text = "Je suis à court d'inspi";
				break;
			case 7:
				var text = "Encore un peu de patience";
				break;
			case 8:
				var text = "Chargement ultra random";
				break;
			case 9:
				var text = "Je chante sous la douche";
				break;
			case 10:
				var text = "Ceci n'est pas un portfolio";
				break;
		}
		$(".logo__subtitle").text(text);
	}

	if($("body").hasClass("has_intro")){

		removeAnimIntro();

		var interval = setInterval(function(){
			changeBaseline(getRandomNumber(0,10));
		},100);

		$.ajax({
		  type    :"POST",
		  url     :baseroot+"/data/create_session.php",
		});

	}

/*  ==========================================================================
    Is mobile
    ==========================================================================  */

	if(ismobile){
		$("body").addClass("is_mobile");
		$("body").removeClass("has_cursor");
	} else {
		$("body").removeClass("is_mobile");
		$("body").addClass("has_cursor");
	}

/* ==========================================================================
   Navigation hide / show
   ========================================================================== */

	var previousPosition = 0;
	var nav_state = 1;
	var currentPosition = 0;
	var seuilScroll = 150;

	$(window).scroll(function(){
		currentPosition = $(window).scrollTop();
			if (currentPosition<previousPosition) {
				var new_state=1;
			}else {
				var new_state=2;
			};
			changeState(new_state);
			previousPosition = currentPosition;
	});

	function changeState(new_state) {
		if(currentPosition>seuilScroll){
			$("body").addClass("header-state3");
		} else {
			$("body").removeClass("header-state3");
		}
	   	if (nav_state != new_state) {
	   		expandNav(new_state);
			nav_state=new_state;
	   	}
	}

	function expandNav(new_state) {
		$("body").removeClass("header-state1 header-state2");
		$("body").addClass("header-state"+new_state);
	}

/*  ==========================================================================
    Cursor
    credits : https://codepen.io/yamada-evoworx/pen/YgwwbW?page=1&
    ==========================================================================  */

    if(!ismobile){

		var
		cursor = $(".cursor"),
		follower = $(".follower"),
		cWidth = 8,
		fWidth = 40,
		delay = 10,
		mouseX = 0,
		mouseY = 0,
		posX = 0,
		posY = 0;

		TweenMax.to({}, .001, {
		  repeat: -1,
		  onRepeat: function() {
		    posX += (mouseX - posX) / delay;
		    posY += (mouseY - posY) / delay;
		    
		    TweenMax.set(follower, {
		        css: {    
		          left: posX - (fWidth / 2),
		          top: posY - (fWidth / 2)
		        }
		    });
		    
		    TweenMax.set(cursor, {
		        css: {    
		          left: mouseX - (cWidth / 2),
		          top: mouseY - (cWidth / 2)
		        }
		    });
		  }
		});

		$(document).on("mousemove", function(e) {
		    mouseX = e.pageX;
		    mouseY = e.pageY;
		    $(".cursor, .follower").addClass("visible");
		});

		$("a, .js_link").on({
		  "mouseenter": function() {
		    cursor.addClass("is-active");
		    follower.addClass("is-active");
		  },
		  "mouseleave": function() {
		    cursor.removeClass("is-active");
		    follower.removeClass("is-active");
		  }
		});

	}

/*  ==========================================================================
    Blob
    ==========================================================================  */
	
	if(!ismobile && $("body").hasClass("page_home")){
		var _typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},_createClass=function(){function t(t,i){for(var n=0;n<i.length;n++){var e=i[n];e.enumerable=e.enumerable||!1,e.configurable=!0,"value"in e&&(e.writable=!0),Object.defineProperty(t,e.key,e)}}return function(i,n,e){return n&&t(i.prototype,n),e&&t(i,e),i}}();function _classCallCheck(t,i){if(!(t instanceof i))throw new TypeError("Cannot call a class as a function")}var canvas=void 0,ctx=void 0,render=void 0,init=void 0,blob=void 0,Blob=function(){function t(){_classCallCheck(this,t),this.points=[]}return _createClass(t,[{key:"init",value:function(){for(var t=0;t<this.numPoints;t++){var i=new Point(this.divisional*(t+1),this);this.push(i)}}},{key:"render",value:function(){var t=this.canvas,i=this.ctx,n=(this.position,this.points),e=(this.radius,this.numPoints),o=(this.divisional,this.center);i.clearRect(0,0,t.width,t.height),n[0].solveWith(n[e-1],n[1]);var s=n[e-1].position,a=n[0].position,r=a;i.beginPath(),i.moveTo(o.x,o.y),i.moveTo((s.x+a.x)/2,(s.y+a.y)/2);for(var c=1;c<e;c++){n[c].solveWith(n[c-1],n[c+1]||n[0]);var u=n[c].position,h=(a.x+u.x)/2,l=(a.y+u.y)/2;i.quadraticCurveTo(a.x,a.y,h,l),i.fillStyle="#ffffff",a=u}h=(a.x+r.x)/2,l=(a.y+r.y)/2;i.quadraticCurveTo(a.x,a.y,h,l),i.fillStyle=this.color,i.fill(),i.strokeStyle="#ffffff",requestAnimationFrame(this.render.bind(this))}},{key:"push",value:function(t){t instanceof Point&&this.points.push(t)}},{key:"color",set:function(t){this._color=t},get:function(){return this._color||"#ffffff"}},{key:"canvas",set:function(t){t instanceof HTMLElement&&"canvas"===t.tagName.toLowerCase()&&(this._canvas=canvas,this.ctx=this._canvas.getContext("2d"))},get:function(){return this._canvas}},{key:"numPoints",set:function(t){t>2&&(this._points=t)},get:function(){return this._points||32}},{key:"radius",set:function(t){t>0&&(this._radius=t)},get:function(){return this._radius||150}},{key:"position",set:function(t){"object"==(void 0===t?"undefined":_typeof(t))&&t.x&&t.y&&(this._position=t)},get:function(){return this._position||{x:.5,y:.5}}},{key:"divisional",get:function(){return 2*Math.PI/this.numPoints}},{key:"center",get:function(){return{x:this.canvas.width*this.position.x,y:this.canvas.height*this.position.y}}},{key:"running",set:function(t){this._running=!0===t},get:function(){return!1!==this.running}}]),t}(),Point=function(){function t(i,n){_classCallCheck(this,t),this.parent=n,this.azimuth=Math.PI-i,this._components={x:Math.cos(this.azimuth),y:Math.sin(this.azimuth)},this.acceleration=.6*Math.random()-.3}return _createClass(t,[{key:"solveWith",value:function(t,i){this.acceleration=(-.3*this.radialEffect+(t.radialEffect-this.radialEffect)+(i.radialEffect-this.radialEffect))*this.elasticity-this.speed*this.friction}},{key:"acceleration",set:function(t){"number"==typeof t&&(this._acceleration=t,this.speed+=2*this._acceleration)},get:function(){return this._acceleration||0}},{key:"speed",set:function(t){"number"==typeof t&&(this._speed=t,this.radialEffect+=5*this._speed)},get:function(){return this._speed||0}},{key:"radialEffect",set:function(t){"number"==typeof t&&(this._radialEffect=t)},get:function(){return this._radialEffect||0}},{key:"position",get:function(){return{x:this.parent.center.x+this.components.x*(this.parent.radius+this.radialEffect),y:this.parent.center.y+this.components.y*(this.parent.radius+this.radialEffect)}}},{key:"components",get:function(){return this._components}},{key:"elasticity",set:function(t){"number"==typeof t&&(this._elasticity=t)},get:function(){return this._elasticity||.001}},{key:"friction",set:function(t){"number"==typeof t&&(this._friction=t)},get:function(){return this._friction||.0085}}]),t}();blob=new Blob,(init=function(){canvas=document.getElementById("blob");var t=function(){canvas.width=window.innerWidth,canvas.height=window.innerHeight};window.addEventListener("resize",t),t();var i={x:0,y:0},n=!1;window.addEventListener("mousemove",function(t){var e=blob.center,o=t.clientX-e.x,s=t.clientY-e.y,a=Math.sqrt(o*o+s*s),r=null;if(blob.mousePos={x:e.x-t.clientX,y:e.y-t.clientY},a<blob.radius&&!1===n){var c={x:t.clientX-e.x,y:t.clientY-e.y};r=Math.atan2(c.y,c.x),n=!0}else if(a>blob.radius&&!0===n){var u={x:t.clientX-e.x,y:t.clientY-e.y};r=Math.atan2(u.y,u.x),n=!1,blob.color=null}if("number"==typeof r){var h=null,l=100;if(blob.points.forEach(function(t){Math.abs(r-t.azimuth)<l&&(h=t,l=Math.abs(r-t.azimuth))}),h){var f={x:i.x-t.clientX,y:i.y-t.clientY};(f=10*Math.sqrt(f.x*f.x+f.y*f.y))>100&&(f=100),h.acceleration=f/100*(n?-1:1)}}i.x=t.clientX,i.y=t.clientY}),blob.canvas=canvas,blob.init(),blob.render()})();
	}

/*  ==========================================================================
    Home slider : next / prev slide
    ==========================================================================  */

    function homeNextSlide(){
		var id_click = parseInt($(".slider__item--active").data("id")) + 1;
		if(id_click > max_slider){
			$(".js_home_slider[data-id=1]").trigger("click");
		} else {
			$(".js_home_slider[data-id="+id_click+"]").trigger("click");
		}    	
    }

    function homePrevSlide(){
		var id_click = parseInt($(".slider__item--active").data("id")) - 1;
		if(id_click < 1){
			$(".js_home_slider[data-id="+max_slider+"]").trigger("click");
		} else {
			$(".js_home_slider[data-id="+id_click+"]").trigger("click");
		}
    }

/*  ==========================================================================
    Home slider : mousewheel
    ==========================================================================  */

    $('.slider__item').on('mousewheel', function(event) {
    	scroll_amount = scroll_amount + event.deltaFactor;
    	if(!ismobile){
    		if(scroll_amount > 600){
		    	if(event.deltaY<0){
					homeNextSlide();
				} else {
					homePrevSlide();
				}
			}
		}
	});

/*  ==========================================================================
    Home slider : swipe
    ==========================================================================  */

	$(".slider__item").swipe({
		swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
			if(distance>50){
				if(direction=="left"){
					homeNextSlide();
				} else if(direction=="right") {
					homePrevSlide();
				}
			}
		}
	});

/*  ==========================================================================
    Home slider : keyboard
    ==========================================================================  */

	$("body").on("keydown", function(e){
	    if(e.keyCode === 37) {
	       homePrevSlide();
	    }
	    else if(e.keyCode === 39) {
	       homeNextSlide();    
	    }   
	 });

/*  ==========================================================================
    Home slider : click arrows
    ==========================================================================  */

    $(".js_prev_case").click(function(e){
    	e.preventDefault();
    	homePrevSlide();
    });

    $(".js_next_case").click(function(e){
    	e.preventDefault();
    	homeNextSlide();
    });

/*  ==========================================================================
    Home slider : show arrows on mouse move
    ==========================================================================  */

	$(document).on("mousemove", function(event){
	  var pos_x = event.pageX;
	  if(pos_x > $(window).width()/2){
	  	$(".slider__arrow").removeClass("slider__arrow--visible");
	  	$(".slider__arrow--next").addClass("slider__arrow--visible");
	  } else {
	  	$(".slider__arrow").removeClass("slider__arrow--visible");
	  	$(".slider__arrow--prev").addClass("slider__arrow--visible");
	  }
	});

/*  ==========================================================================
    Home slider : click numbers
    ==========================================================================  */

	$(".js_home_slider").click(function(){
		var id = $(this).data("id");
		if(!$(".slider__item[data-id="+id+"]").hasClass("slider__item--active")){
			$(".slider__item").removeClass("slider__item--animated");
			$(".slider__item--active").addClass("slider__item--animated").removeClass("slider__item--active");
			$(".slider__item[data-id="+id+"]").addClass("slider__item--active");
			$(".slider__nav-item").removeClass("slider__nav-item--active");
			$(".slider__nav-item[data-id="+id+"]").addClass("slider__nav-item--active");
			$(".slider__nav-counter").removeClass("slider__nav-counter--1 slider__nav-counter--2 slider__nav-counter--3 slider__nav-counter--4 slider__nav-counter--5 slider__nav-counter--6");
			$(".slider__nav-counter").addClass("slider__nav-counter--"+id);
			$(".slider__bottom").removeClass("slider__bottom--1 slider__bottom--2 slider__bottom--3 slider__bottom--4 slider__bottom--5 slider__bottom--6");
			$(".slider__bottom").addClass("slider__bottom--"+id);
			$(".js_home_slider_counter").text(id);
			scroll_amount = 0;
		}
	});

	$(".slider__item").bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
		$(".slider__item").removeClass("slider__item--animated");
	});

/*  ==========================================================================
    About : slider logos
    ==========================================================================  */

	if($('.js_slider_logos').is(":visible")){
		$('.js_slider_logos').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 8,
		  slidesToScroll: 8,
		  autoplay: true,
		  arrows: false,
		  responsive: [
		    {
		      breakpoint: 1400,
		      settings: {
		        slidesToShow: 6,
		        slidesToScroll: 6
		      }
		    },
		    {
		      breakpoint: 1000,
		      settings: {
		        slidesToShow: 4,
		        slidesToScroll: 4
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3
		      }
		    }
		  ]
		});
	}

/*  ==========================================================================
    About : scroll to subsections
    ==========================================================================  */

    $(".js_about_scrollto").click(function(e){
    	e.preventDefault();
    	var section = $(this).data("section");
    	$("html,body").stop().animate({"scrollTop":$(".js_about_section[data-section="+section+"]").offset().top},1000);
    });

/* ==========================================================================
   Navigation hamburger
   ========================================================================== */

	$('body').on('click', '.js_trigger_nav', function() {
		if($("body").hasClass("is_navigation")){
			continueScrolling();
			$("body").removeClass("is_navigation");
		} else {
			stopScrolling();
			$("body").addClass("is_navigation");
		}
	});

});

function stopScrolling() {
    $('body').addClass('noscroll');
}

function continueScrolling() {
    $('body').removeClass('noscroll');
    $('html').css({ width: "auto" });
}