  <p><b><u>Estimated Delivery Date (US orders only)</u></b><br>
                <i>Standard shipping:</i> <span id="fromDate"></span> - <span id="toDate"></span></p>
              <p><i>Express shipping:</i> <span id="fromDateExpress"></span> - <span id="toDateExpress"></span></p>
{{ '//cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js' | script_tag }}
<script>
  var dd = someDate.getDate();
var mm = someDate.getMonth() + 1;
var y = someDate.getFullYear();

var someFormattedDate = dd + '/'+ mm + '/'+ y;
  
  var fromDate = Date.today().addDays(10);
  if (fromDate.is().sunday()) { 
    fromDate = fromDate.next().monday(14);
  }
  var toDate = Date.today().addDays(4);
  if (toDate.is().sunday()) { 
    toDate = toDate.next().monday(); 
  }
  document.getElementById('fromDate').innerHTML = someFormattedDate;
  document.getElementById('toDate').innerHTML = toDate.toString('MMMM dS');
</script>
              <script>
  var fromDateExpress = Date.today().addDays(4);
  if (fromDateExpress.is().sunday()) { 
    fromDateExpress = fromDateExpress.next().monday();
  }
  var toDateExpress = Date.today().addDays(7);
  if (toDateExpress.is().sunday()) { 
    toDateExpress = toDateExpress.next().monday(); 
  }
  document.getElementById('fromDateExpress').innerHTML = fromDateExpress.toString('MMMM dS');
  document.getElementById('toDateExpress').innerHTML = toDateExpress.toString('MMMM dS');
</script>

<?php

class Notification{


public function __construct(){

	
}



}