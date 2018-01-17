(function($){
  $('.ccn-bg-img').each(function(){
    var $ccn_bg_img = $(this).find('img').attr('src');
    $(this).parent().attr('style', 'background:url(' + $ccn_bg_img + ')');
    $(this).remove();
  });
  $('.js-target-scroll-container').each(function(){
    $(this).find('a').addClass('js-target-scroll');
  });
  $('form .form-text, form .form-textarea, form .form-email').addClass('form-control');
  $('.modal-body .button').addClass('btn btn-b-white');
  $('.modal-body form > div').each(function(){
    var $placeholder = $(this).find('label').text();
    $(this).find('input').attr('placeholder', $placeholder);
    $(this).find('textarea').attr('placeholder', $placeholder);
    $(this).find('label').remove();
  });
  $('.block-simplenews form .form-item').each(function(){
    var $placeholder = $(this).find('label').text();
    $(this).find('input').attr('placeholder', $placeholder);
    $(this).find('label').remove();
  });
}(jQuery));