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
<!DOCTYPE html>
<html>
<head>
<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\02795';
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2796";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.6s ease-in-out;
    opacity: 0;
}

div.panel.show {
    opacity: 1;
    max-height: 500px;
}
</style>
</head>
<body>

<h2>Accordion with symbols</h2>
<p>In this example we have added a "plus" sign to each button. When the user clicks on the button, the "plus" sign is replaced with a "minus" sign.</p>
<button class="accordion">Section 1</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div id="foo" class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<h2>Another Testing </h2>  

<form id="form">
////These row repeat. Total of 10 
<input name="agent_name" type="text"  id="PartQuantity" size="2" /> 
<select name="PartType"  id="PartType">
<option>MAhe</option>
	</select>
<input name="PartNumber[]" type="text"  id="PartNumber" size="10" />

<p class="showResults">Mahender</p>
</form>

<script>
$(document).ready(function(){
$('.showResults').click(function() {

var post = $('#form').serialize(); 
$.ajax({
        type: "Post",
        url: "classes/AddAssets.php",
        data: post,
        cache: false,
        success: function(html)
            {
            $("#res").html(html);
            alert(html)

                }
        });
 });

 });
 </script>

