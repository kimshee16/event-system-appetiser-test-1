<!DOCTYPE html>
<html>
<head>
	<title>Event Calendar System</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<br>
	<div class="container">
		<div class="card">
		  <h5 class="card-header">Calendar</h5>
		  <div class="card-body">
		    <div class="row">
		    	<div class="col-5" id="control">
					Event: <input type="text" name="event" id="event" class="form-control" required><br>
					Date from: <input type="date" name="datefrom" id="datefrom" class="form-control" required><br>
					Date to: <input type="date" name="dateto" id="dateto" class="form-control" required><br>
					<input type="checkbox" name="mon" id="cb-mon">Mon &nbsp
					<input type="checkbox" name="tue" id="cb-tue">Tue &nbsp
					<input type="checkbox" name="wed" id="cb-wed">Wed &nbsp
					<input type="checkbox" name="thu" id="cb-thu">Thu &nbsp
					<input type="checkbox" name="fri" id="cb-fri">Fri &nbsp
					<input type="checkbox" name="sat" id="cb-sat">Sat &nbsp
					<input type="checkbox" name="sun" id="cb-sun">Sun <br><br>
					<button type="button" id="SaveEvent" class="btn btn-primary" onclick="SaveEvent();">Save</button>
					<br><br>
					<div class="alert alert-danger" role="alert" style="display: none;" id="data-alert">
					  <b>Note:</b> No calendar event data yet. Kindly add new events.
					</div>
		    	</div>
		    	<div class="col-7" id="calendar">
		    		<h1>October 2021</h1>
		    		<table class="table">
					  <tbody>
					    <tr class="fri" id="day-1">
					      <td>1 Fri</td>
					      <td id="event-1" class="eventname"></td>
					    </tr>
					    <tr class="sat" id="day-2">
					      <td>2 Sat</td>
					      <td id="event-2" class="eventname"></td>
					    </tr>
					    <tr class="sun" id="day-3">
					      <td>3 Sun</td>
					      <td id="event-3" class="eventname"></td>
					    </tr>
					    <tr class="mon" id="day-4">
					      <td>4 Mon</td>
					      <td id="event-4" class="eventname"></td>
					    </tr>
					    <tr class="tue" id="day-5">
					      <td>5 Tue</td>
					      <td id="event-5" class="eventname"></td>
					    </tr>
					    <tr class="wed" id="day-6">
					      <td>6 Wed</td>
					      <td id="event-6" class="eventname"></td>
					    </tr>
					    <tr class="thu" id="day-7">
					      <td>7 Thu</td>
					      <td id="event-7" class="eventname"></td>
					    </tr>
					    <tr class="fri" id="day-8">
					      <td>8 Fri</td>
					      <td id="event-8" class="eventname"></td>
					    </tr>
					    <tr class="sat" id="day-9">
					      <td>9 Sat</td>
					      <td id="event-9" class="eventname"></td>
					    </tr>
					    <tr class="sun" id="day-10">
					      <td>10 Sun</td>
					      <td id="event-10" class="eventname"></td>
					    </tr>
					    <tr class="mon" id="day-11">
					      <td>11 Mon</td>
					      <td id="event-11" class="eventname"></td>
					    </tr>
					    <tr class="tue" id="day-12">
					      <td>12 Tue</td>
					      <td id="event-12" class="eventname"></td>
					    </tr>
					    <tr class="wed" id="day-13">
					      <td>13 Wed</td>
					      <td id="event-13" class="eventname"></td>
					    </tr>
					    <tr class="thu" id="day-14">
					      <td>14 Thu</td>
					      <td id="event-14" class="eventname"></td>
					    </tr>
					    <tr class="fri" id="day-15">
					      <td>15 Fri</td>
					      <td id="event-15" class="eventname"></td>
					    </tr>
					    <tr class="sat" id="day-16">
					      <td>16 Sat</td>
					      <td id="event-16" class="eventname"></td>
					    </tr>
					    <tr class="sun" id="day-17">
					      <td>17 Sun</td>
					      <td id="event-17" class="eventname"></td>
					    </tr>
					    <tr class="mon" id="day-18">
					      <td>18 Mon</td>
					      <td id="event-18" class="eventname"></td>
					    </tr>
					    <tr class="tue" id="day-19">
					      <td>19 Tue</td>
					      <td id="event-19" class="eventname"></td>
					    </tr>
					    <tr class="wed" id="day-20">
					      <td>20 Wed</td>
					      <td id="event-20" class="eventname"></td>
					    </tr>
					    <tr class="thu" id="day-21">
					      <td>21 Thu</td>
					      <td id="event-21" class="eventname"></td>
					    </tr>
					    <tr class="fri" id="day-22">
					      <td>22 Fri</td>
					      <td id="event-22" class="eventname"></td>
					    </tr>
					    <tr class="sat" id="day-23">
					      <td>23 Sat</td>
					      <td id="event-23" class="eventname"></td>
					    </tr>
					    <tr class="sun" id="day-24">
					      <td>24 Sun</td>
					      <td id="event-24" class="eventname"></td>
					    </tr>
					    <tr class="mon" id="day-25">
					      <td>25 Mon</td>
					      <td id="event-25" class="eventname"></td>
					    </tr>
					    <tr class="tue" id="day-26">
					      <td>26 Tue</td>
					      <td id="event-26" class="eventname"></td>
					    </tr>
					    <tr class="wed" id="day-27">
					      <td>27 Wed</td>
					      <td id="event-27" class="eventname"></td>
					    </tr>
					    <tr class="thu" id="day-28">
					      <td>28 Thu</td>
					      <td id="event-28" class="eventname"></td>
					    </tr>
					    <tr class="fri" id="day-29">
					      <td>29 Fri</td>
					      <td id="event-29" class="eventname"></td>
					    </tr>
					    <tr class="sat" id="day-30">
					      <td>30 Sat</td>
					      <td id="event-30" class="eventname"></td>
					    </tr>
					    <tr class="sun" id="day-31">
					      <td>31 Sun</td>
					      <td id="event-31" class="eventname"></td>
					    </tr>
					  </tbody>
					</table>
		    	</div>
		    </div>
		  </div>
		</div>

		<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
		  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
		    <div class="toast-header">
		      <strong class="me-auto">Notification</strong>
		      <small>Just now</small>
		      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
		    </div>
		    <div class="toast-body">
		      Successfully saved the event!
		    </div>
		  </div>
		</div>

		<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
		  <div id="liveToast2" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
		    <div class="toast-header">
		      <strong class="me-auto">Notification</strong>
		      <small>Just now</small>
		      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
		    </div>
		    <div class="toast-body">
		      Failed on saving the event!
		    </div>
		  </div>
		</div>

	</div>
	<br>

</body>
</html>

<script type="text/javascript">
	function reloadAllData() {
		$('.mon').css("background-color", "white");
		$('.tue').css("background-color", "white");
		$('.wed').css("background-color", "white");
		$('.thu').css("background-color", "white");
		$('.fri').css("background-color", "white");
		$('.sat').css("background-color", "white");
		$('.sun').css("background-color", "white");
		$('.eventname').html('');

		$.ajax({
         url: 'getEvents/',
         type: 'get',
         dataType: 'json',
         success: function(response){
           var dayfrom = Number(response['data'][0].dayfrom);
           var dayto = Number(response['data'][0].dayto);
           for(var i = dayfrom; i <= dayto; i++){
           		if($('#day-'+i).attr('class') == "mon") {
           			if(response['data'][0].mon == "1") {
           				$('#day-'+i).css("background-color", "#d1e7dd");
           				$('#event-'+i).html(response['data'][0].event);
           				$("#cb-mon").prop('checked', true);
           			}
           		} else if($('#day-'+i).attr('class') == "tue") {
           			if(response['data'][0].tue == "1") {
           				$('#day-'+i).css("background-color", "#d1e7dd");
           				$('#event-'+i).html(response['data'][0].event);
           				$("#cb-tue").prop('checked', true);
           			}
           		} else if($('#day-'+i).attr('class') == "wed") {
           			if(response['data'][0].wed == "1") {
           				$('#day-'+i).css("background-color", "#d1e7dd");
           				$('#event-'+i).html(response['data'][0].event);
           				$("#cb-wed").prop('checked', true);
           			}
           		} else if($('#day-'+i).attr('class') == "thu") {
           			if(response['data'][0].thu == "1") {
           				$('#day-'+i).css("background-color", "#d1e7dd");
           				$('#event-'+i).html(response['data'][0].event);
           				$("#cb-thu").prop('checked', true);
           			}
           		} else if($('#day-'+i).attr('class') == "fri") {
           			if(response['data'][0].fri == "1") {
           				$('#day-'+i).css("background-color", "#d1e7dd");
           				$('#event-'+i).html(response['data'][0].event);
           				$("#cb-fri").prop('checked', true);
           			}
           		} else if($('#day-'+i).attr('class') == "sat") {
           			if(response['data'][0].sat == "1") {
           				$('#day-'+i).css("background-color", "#d1e7dd");
           				$('#event-'+i).html(response['data'][0].event);
           				$("#cb-sat").prop('checked', true);
           			}
           		} else if($('#day-'+i).attr('class') == "sun") {
           			if(response['data'][0].sun == "1") {
           				$('#day-'+i).css("background-color", "#d1e7dd");
           				$('#event-'+i).html(response['data'][0].event);
           				$("#cb-sun").prop('checked', true);
           			}
           		}
           }
           $("#data-alert").css("display", "none");

         }
       });
	}

	function SaveEvent() {
		var event = $("#event").val();
		var datefrom = $("#datefrom").val();
		var dateto = $("#dateto").val();
		var mon = 0;
		var tue = 0;
		var wed = 0;
		var thu = 0;
		var fri = 0;
		var sat = 0;
		var sun = 0;

		console.log($("#cb-mon").val());

		if($("#cb-mon").is(":checked")) {
			mon = 1;
		} 
		if ($("#cb-tue").is(":checked")) {
			tue = 1;
		}
		if ($("#cb-wed").is(":checked")) {
			wed = 1;
		}
		if ($("#cb-thu").is(":checked")) {
			thu = 1;
		}
		if ($("#cb-fri").is(":checked")) {
			fri = 1;
		}
		if ($("#cb-sat").is(":checked")) {
			sat = 1;
		}
		if ($("#cb-sun").is(":checked")) {
			sun = 1;
		}

		$.ajax({
         url: 'storeEvents/'+event+'/'+datefrom+'/'+dateto+'/'+mon+'/'+tue+'/'+wed+'/'+thu+'/'+fri+'/'+sat+'/'+sun,
         type: 'get',
         success: function(response){
           $("#data-alert").css("display", "none");
           var toast = new bootstrap.Toast(toastLive)
	       toast.show()
           reloadAllData();
         },error: function(response){
           var toast = new bootstrap.Toast(toastLive2)
	       toast.show()
         }
       });

	}

	$.ajax({
         url: 'getEvents/',
         type: 'get',
         dataType: 'json',
         success: function(response){
           //alert(response['data'].length);
           if(response['data'].length > 0){
           	   var dayfrom = Number(response['data'][0].dayfrom);
	           var dayto = Number(response['data'][0].dayto);
	           for(var i = dayfrom; i <= dayto; i++){
	           		if($('#day-'+i).attr('class') == "mon") {
	           			if(response['data'][0].mon == "1") {
	           				$('#day-'+i).css("background-color", "#d1e7dd");
	           				$('#event-'+i).html(response['data'][0].event);
	           				$("#cb-mon").prop('checked', true);
	           			}
	           		} else if($('#day-'+i).attr('class') == "tue") {
	           			if(response['data'][0].tue == "1") {
	           				$('#day-'+i).css("background-color", "#d1e7dd");
	           				$('#event-'+i).html(response['data'][0].event);
	           				$("#cb-tue").prop('checked', true);
	           			}
	           		} else if($('#day-'+i).attr('class') == "wed") {
	           			if(response['data'][0].wed == "1") {
	           				$('#day-'+i).css("background-color", "#d1e7dd");
	           				$('#event-'+i).html(response['data'][0].event);
	           				$("#cb-wed").prop('checked', true);
	           			}
	           		} else if($('#day-'+i).attr('class') == "thu") {
	           			if(response['data'][0].thu == "1") {
	           				$('#day-'+i).css("background-color", "#d1e7dd");
	           				$('#event-'+i).html(response['data'][0].event);
	           				$("#cb-thu").prop('checked', true);
	           			}
	           		} else if($('#day-'+i).attr('class') == "fri") {
	           			if(response['data'][0].fri == "1") {
	           				$('#day-'+i).css("background-color", "#d1e7dd");
	           				$('#event-'+i).html(response['data'][0].event);
	           				$("#cb-fri").prop('checked', true);
	           			}
	           		} else if($('#day-'+i).attr('class') == "sat") {
	           			if(response['data'][0].sat == "1") {
	           				$('#day-'+i).css("background-color", "#d1e7dd");
	           				$('#event-'+i).html(response['data'][0].event);
	           				$("#cb-sat").prop('checked', true);
	           			}
	           		} else if($('#day-'+i).attr('class') == "sun") {
	           			if(response['data'][0].sun == "1") {
	           				$('#day-'+i).css("background-color", "#d1e7dd");
	           				$('#event-'+i).html(response['data'][0].event);
	           				$("#cb-sun").prop('checked', true);
	           			}
	           		}
	           }
	           $("#data-alert").css("display", "none");
           } else {
           		$("#data-alert").css("display", "block");
           }
         }
       });

	var toastTrigger = document.getElementById('liveToastBtn')
	var toastLive = document.getElementById('liveToast')
	var toastLive2 = document.getElementById('liveToast2')
	if (toastTrigger) {
	  toastTrigger.addEventListener('click', function () {
	    var toast = new bootstrap.Toast(toastLiveExample)

	    toast.show()
	  })
	}

</script>