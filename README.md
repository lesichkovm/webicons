# Web Icons

Icons done right. Example: https://rawgit.com/lesichkovm/webicons/master/example/icons.html

## Installation ##

Add to the end of the page, requires JQuery to be incuded on the page before this library

- Step 1. Include only the iconset(s) you want

```html
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.4.0/webicons.ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.4.0/webicons.fontawesome.js"></script>
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.4.0/webicons.typicons.js"></script>
```

- Step 2. Include the icon runtime

```html
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v1.4.0/webicons.runtime.js"></script>
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

https://ionicons.com/
https://fontawesome.com/
https://www.s-ings.com/typicons/

## Sources ##

https://github.com/ionic-team/ionicons/tree/master/src/svg
https://fontawesome.com/
https://github.com/stephenhutchings/typicons.font

## Tools ##

https://base64.guru/converter/encode/image/svg
