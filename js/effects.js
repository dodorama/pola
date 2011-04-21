(function($) {
$().ready(function() {
  var tabs = $("#images").accessibleTabs({
      tabhead:'h3',
      tabbody: 'img',
      fx:"fadeIn",
      fxspeed:'slow',
      syncheights:true
  });
});
})(jQuery);