<script type="text/javascript">
window.onload=function() {
   doTime();
 }
function doTime() {

   now=new Date ();
   then=new Date ('jul,18,2011,18:00:00');

   difference=(now-then);

   days=Math.floor(difference/(60*60*1000*24)*1);
   hours=Math.floor((difference%(60*60*1000*24))/(60*60*1000)*1);
   mins=Math.floor(((difference%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
   secs=Math.floor((((difference%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);

   document.getElementById('timer').firstChild.nodeValue=

     'Det er nu '+days+' dage, '+hours+' timer, '+mins+' minutter og '+secs+' sekunder siden serveren startede!';

   setTimeout('doTime()',1000);
 }
</script>