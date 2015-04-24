# zend-fw-head-compressor

Copy of zend-fw-head-compressor written by Alex S. Kachayev

  * Helper for pooling all CSS or JS scripts to one cached file
    * For minifying script file JSMin library is used
    * For minifying script file CSS compressor library is used

 Prototype for this helper comes from here: http://habrahabr.ru/blogs/zend_framework/85324/
 
  * There were some great problems with given code:
    * no testing facilities cause of using $_SERVER array
    * - hard to change rules for folders mapping when additional domains/CDN are used
    * - several bags with static variables using
    * - many code repeats
    * - etc...
    * So, I rewrite most code of this helper to make it more flexible and stable,
    
Great thanks previous author for idea and first steps!
