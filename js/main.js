/*
 * _select()
 *  
 * Extends the native JavaScript select() (which only works 
 * on input and textarea) so that it can be used to select 
 * the content of every DOM element you want.
 *
 * _select(document.querySelector('.class')) or 
 * _select($('.class'))
 * 
 * 2013 by Tim Pietrusky
 * timpietrusky.com
 */
function _select(el) {
  var d = document, r, s;
  
  // Transform jQuery into vanilla JS
  el = typeof el[0] === 'undefined' ? el : el[0];
  
  try {
    // Try the default select() for input / textarea
    el.select();
  } catch(e) {
    
    // Fallback for most browsers
    if (window.getSelection) {
      s = window.getSelection();
      r = d.createRange();
      r.selectNodeContents(el);
      s.removeAllRanges();
      s.addRange(r);
      
    // Fallback for <= IE8
    } else if (d.body.createTextRange) { 
      r = d.body.createTextRange();
      r.moveToElementText(el);
      r.select();
    }
  }
}




/**
 *
 * Demo code
 *
 */
var d = document;

/**
 * Helper function for event binding. 
 */ 
function bind(el, eventName, eventHandler) {
  var el = document.getElementsByClassName(el)[0];
  
  if (el.addEventListener) {
    el.addEventListener(eventName, eventHandler, false); 
  } else if (el.attachEvent){
    el.attachEvent('on'+eventName, eventHandler);
  }
}

bind('demo1', 'click', function () {
  _select(this);
});

bind('demo2', 'click', function () {
  _select(this.children[0]);
});

bind('demo3', 'click', function () {
  _select(this);
});

bind('demo4', 'click', function () {
  _select(this);
});

bind('demo5', 'click', function () {
  _select(this);
});