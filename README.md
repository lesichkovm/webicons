# Web Icons


## Installation ##

Add to the end of the page, requires JQuery
```
<script src="https://cdn.jsdelivr.net/gh/lesichkovm/webicons@v0.0.3/webicons.js"></script>
```

## Icon ##

Add data-icon attribute. The data-icon attribute supports the following format "iconset iconname".
```
<img data-icon="ionicons ios-log-out" style="width:48px;height:48px;color:red;" />
```

## Custom Iconset ##

```
var iconsets = iconsets || {};

iconsets.myicons = iconsets.myicons || {};
iconsets.myicons['myiconname'] = 'data:image/svg+xml;base64,MYICONASBASE64';
```

## Iconsets ##

https://ionicons.com/

## Sources ##

https://github.com/ionic-team/ionicons/tree/master/src/svg

## Tools ##

https://base64.guru/converter/encode/image/svg
