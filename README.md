# Web Icons

Icons done right.

## Versions ##

Boxicons 2.0.5  
   - Example: https://rawgit.com/lesichkovm/webicons/master/example/boxicons.html
   
Flag Icons  3.4.6   
   - Example: https://rawgit.com/lesichkovm/webicons/master/example/flags-1x1.html
   - Example: https://rawgit.com/lesichkovm/webicons/master/example/flags-4x3.html

Fontawesome 5.12.1  
   - Example: https://rawgit.com/lesichkovm/webicons/master/example/fontawesome.html

Ionicons    5.0.0   
   - Example: https://rawgit.com/lesichkovm/webicons/master/example/ionicons.html

Typicons    2.0.7   
   - Example: https://rawgit.com/lesichkovm/webicons/master/example/icons.html

## Installation ##

Add to the end of the page, requires JQuery to be incuded on the page before this library

```
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
```

- Step 1. Include only the iconset(s) you want

```html
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.6.0/webicons.boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.6.0/webicons.flags_1x1"></script>
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.6.0/webicons.flags_4x3.js"></script>
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.6.0/webicons.fontawesome.js"></script>
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.6.0/webicons.ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.6.0/webicons.typicons.js"></script>
```

- Step 2. Include the icon runtime

```html
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.5.0/webicons.runtime.js"></script>
```

## Icon ##

Add data-icon attribute. The data-icon attribute supports the following format "iconset iconname".
```
<img data-icon="ionicons ios-log-out" style="width:48px;height:48px;color:red;" />
<img data-icon="fontawesome fas-card" style="width:48px;height:48px;color:red;" />
<img data-icon="typicons zoom" style="width:48px;height:48px;color:red;" />
```

## Create Custom Iconset ##

```
var iconsets = iconsets || {};

iconsets.myicons = iconsets.myicons || {};
iconsets.myicons['myiconname'] = 'data:image/svg+xml;base64,MYICONASBASE64';
```

## Iconsets ##

https://boxicons.com/

https://github.com/lipis/flag-icon-css

https://fontawesome.com/

https://ionicons.com/

https://www.s-ings.com/typicons/

## Sources ##

https://github.com/ionic-team/ionicons/tree/master/src/svg

https://fontawesome.com/

https://github.com/stephenhutchings/typicons.font

https://github.com/atisawd/boxicons/tree/master/svg/

https://github.com/lipis/flag-icon-css

## Tools ##

https://base64.guru/converter/encode/image/svg
