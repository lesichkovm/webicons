iconsets = {};        
iconsets.ionicons = {};
iconsets.ionicons['ios-log-out'] = 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIyLjAuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPHBhdGggZD0iTTMxMiwzNzJjLTcuNywwLTE0LDYuMy0xNCwxNGMwLDkuOS04LjEsMTgtMTgsMThIOTRjLTkuOSwwLTE4LTguMS0xOC0xOFYxMjZjMC05LjksOC4xLTE4LDE4LTE4aDE4NmM5LjksMCwxOCw4LjEsMTgsMTgKCQljMCw3LjcsNi4zLDE0LDE0LDE0YzcuNywwLDE0LTYuMywxNC0xNGMwLTI1LjQtMjAuNi00Ni00Ni00Nkg5NGMtMjUuNCwwLTQ2LDIwLjYtNDYsNDZ2MjYwYzAsMjUuNCwyMC42LDQ2LDQ2LDQ2aDE4NgoJCWMyNS40LDAsNDYtMjAuNiw0Ni00NkMzMjYsMzc4LjMsMzE5LjcsMzcyLDMxMiwzNzJ6Ii8+Cgk8cGF0aCBkPSJNMzcyLjksMTU4LjFjLTIuNi0yLjYtNi4xLTQuMS05LjktNC4xYy0zLjcsMC03LjMsMS40LTkuOSw0LjFjLTUuNSw1LjUtNS41LDE0LjMsMCwxOS44bDY1LjIsNjQuMkgxNjIKCQljLTcuNywwLTE0LDYuMy0xNCwxNHM2LjMsMTQsMTQsMTRoMjU2LjZMMzU1LDMzNC4yYy01LjQsNS40LTUuNCwxNC4zLDAsMTkuOGMwLDAsMC4xLDAuMSwwLjEsMC4xYzIuNywyLjUsNi4yLDMuOSw5LjgsMy45CgkJYzMuOCwwLDcuMy0xLjQsOS45LTQuMWw4Mi42LTgyLjRjNC4zLTQuMyw2LjUtOS4zLDYuNS0xNC43YzAtNS4zLTIuMy0xMC4zLTYuNS0xNC41TDM3Mi45LDE1OC4xeiIvPgo8L2c+Cjwvc3ZnPgo=';

$(function(){
    $('img[data-icon]').each(function () {
      var src = $.trim($(this).data('icon'));
      var color = $.trim($(this).data('color'));
      var style = $(this).data('style');
      
      if (color == ''){
          color = "black";
      }
      
      var iconset = src.substr(0,src.indexOf(' '));
      var iconname = src.substr(src.indexOf(' ') + 1);
      var icon = $.trim(iconsets[iconset][iconname]);

      $(this).attr('src','data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'); // empty image

      if(icon!=""){
          $(this).css('mask','url('+icon+')');
      }

      $(this).css('background-color', color);
      $(this).css('background-repeat', 'no-repeat');
      $(this).css('background-size', 'cover');
    });
});
