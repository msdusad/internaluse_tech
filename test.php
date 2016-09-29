<!-- 
Go Back History Didnot work

// <script type="text/javascript">
//         window.history.forward();
//         function noBack()
//         {
//             window.history.forward();
//         }
// </script>
// <body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
//    <a href="index.php">sdfg</a> -->
<script>
$(document).ready(function() {

if( document.location.href.indexOf('section') == -1 ) {
var categories = $('ul.article-list');
for (var j = categories.length - 1; j >= 0; j--) {
var articles = $(categories[j]).find('li'),
nativeMore = $(categories[j]).siblings('.see-all-articles');
if ( articles.length > 3 ) {
for (var k = 3; k < articles.length; k++ ) {
$(articles[k]).hide();
}
var moreLink = $(categories[j]).parent().find('h3 a').attr('href'),
linkText = '';
if( articles.length <= 6 && nativeMore.length == 0 ) {
linkText += "See all " + articles.length + " articles";
}
$("<a class='see-all-articles' href=" + moreLink + ">" + linkText + "</a>").insertAfter($(categories[j]));
}
}
}
});