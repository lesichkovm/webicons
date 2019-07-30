var iconsets = iconsets || {};

$(function(){
    $('img[data-icon]').each(function () {
      var src = $.trim($(this).data('icon'));
      var color = $.trim($(this).data('color'));
      var style = $(this).data('style');
        
      if (color == ''){
          color = $(this).css('color');
      }
      
      if (color == ''){
          color = "black";
      }
      
      var iconset = $.trim(src.substr(0,src.indexOf(' ')));
      var iconname = $.trim(src.substr(src.indexOf(' ') + 1));
        
      if (iconset != ""){
        var icon = $.trim(iconsets[iconset][iconname]);
      } else {
        var icon = "";
      }

      $(this).attr('src','data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'); // empty image

      if(icon!=""){
          $(this).css('mask','url('+icon+')');
      }

      $(this).css('background-color', color);
      $(this).css('background-repeat', 'no-repeat');
      $(this).css('background-size', 'cover');
    });
});
