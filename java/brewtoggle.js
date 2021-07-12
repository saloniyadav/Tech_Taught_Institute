$('div.first-p').hide();
$("div.first").click(function() {
  $(this).next().slideToggle(200);
});
