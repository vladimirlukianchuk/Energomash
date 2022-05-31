$("dl.mini-accordion div").on("click", function() {
  $(this).parent().find("div").removeClass("is-open");
  return $.each([$(this), $(this).next()], function(i, e) {
    return $(e).addClass("is-open");
  });
});
