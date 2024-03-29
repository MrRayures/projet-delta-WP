console.log('hello world')
/*
* Javascript base variables & functions
* Auteur : MrRayures - www.mr-rayures.com		
* Copyright (C) 2018
*/


/*  
* Breackpoint 
* Based on CSS breackpoint (scss/settings/breckpoints)
* Use : if (window.innerWidth <= xsmall ) {}
*/
var xsmall  = "450";
var small   = "768";
var medium  = "960";
var large   = "1200";
var xlarge  = "1600";

console.log('hello')


/*
* Resize event
* Function :
  window.addEventListener("optimizedResize", function() {
    console.log("Resource conscious resize callback!");
  });
*/
(function() {
  var throttle = function(type, name, obj) {
    obj = obj || window;
    var running = false;
    var func = function() {
      if (running) { return; }
      running = true;
       requestAnimationFrame(function() {
        obj.dispatchEvent(new CustomEvent(name));
        running = false;
      });
    };
    obj.addEventListener(type, func);
  };

  /* init - you can init any event */
  throttle("resize", "optimizedResize");
})();




/*
* jQuery version if needed
* debouncing function from John Hann
* http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
* USE : $(window).smartresize(function() {});
*/
/*
(function($,sr){
  var debounce = function (func, threshold, execAsap) {
      var timeout;
      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);
          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };
})(jQuery,'smartresize');
*/



/*
* lazysizes for lazy IMG
* Infos : https://github.com/aFarkas/lazysizes
*/
var lazy = function lazy() {
  document.addEventListener('lazyloaded', function (e)  {
    e.target.parentNode.classList.add('image-loaded');
    e.target.parentNode.classList.remove('loading');
  });
}
lazy();


/*
* SVG polyfill for IE 9-11
* Doc : https://github.com/jonathantneal/svg4everybody
*/
svg4everybody(); // run it now or whenever you are ready









