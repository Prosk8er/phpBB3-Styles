	window.setInterval("zeitanzeige()",1000);

	function zeitanzeige()
	{
	 d = new Date ();
 
	 h = (d.getHours () < 10 ? '0' + d.getHours () : d.getHours ());
	 m = (d.getMinutes () < 10 ? '0' + d.getMinutes () : d.getMinutes ());
	 s = (d.getSeconds () < 10 ? '0' + d.getSeconds () : d.getSeconds ());

	/* var wochentage = new Array ("So", "Mo", "Di",
	 "Mi", "Do", "Fr", "Sa");*/

	 var tage = new Array ("00", "01", "02", "03", "04",
	 "05", "06", "07", "08", "09", "10", "11", "12",
	 "13", "14", "15", "16", "17", "18", "19", "20",
	 "21", "22", "23", "24", "25", "26", "27", "28",
	 "29", "30", "31"); 

	 var monate = new Array ("01", "02", "03", "04",
	 "05", "06", "07", "08", "09",
	 "10", "11", "12");

	 document.getElementById("zeit").innerHTML = ' '
	/* + wochentage[d.getDay ()] + '&nbsp; ' */
	 + tage[d.getDate ()] + '.'
	 + monate[d.getMonth ()] + '.'
	 + d.getFullYear () +
	 '&nbsp;'
	 + h + ':' + m + ':' + s + ' ';
	} 