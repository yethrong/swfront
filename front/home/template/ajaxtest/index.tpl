<!DOCTYPE html>
<html>
<head>
</head>
<body>
<!-- {getLink type='js' files='ajaxtrans.js' root='true'} -->
Field1: <input type="text" id="field1" value="Hello World!"><br>
Field2: <div id="field2">文本</div><br>

<button onclick="get_cat_recommend('/front/index/ajaxtest/getdata', 'rec_object', 'get_query')">复制文本</button>

<p>当按钮被单击时触发函数。此函数把文本从 Field1 复制到 Field2 中。</p>

</body>
</html>