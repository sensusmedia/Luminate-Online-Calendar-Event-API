<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/luminateExtend/1.7.1/luminateExtend.min.js"></script>
<script>
  jQuery(document).ready(function($){
    luminateExtend({
      apiKey: '',
      path: {
        nonsecure: 'http://convio.net/site/',
        secure: 'https://secure2.convio.net/'
      }
    });
    getMonthEvents = function(month, year) {
      console.log('month: ' + month);
      var requestData = '';
      requestData += 'method=getMonthEvents&month=' + month + '&year=' + year;
      luminateExtend.api({
        api: 'CROrgEventAPI',
        data: requestData,
        callback: {
          error: function(response) {
            console.log('error:');
            console.log(response);
          },
          success: function(response) {
            console.log('success:');
            console.log(response);
            var events = luminateExtend.utils.ensureArray(response.getMonthEventsResponse.event);
            $.each(events, function() {
              $('#events_list p.loading').hide();
// depending on the event type, this info could be structured differently or different info may be available. Check the response object (already logged to console above) to see.
var id = this.id;
var location = this.eventLocation.location;
var street1 = this.eventLocation.street1;
var street2 = this.eventLocation.street2;
var stateProv = this.eventLocation.stateProv;
var city = this.eventLocation.city;
var zip = this.eventLocation.zip;
// You will probably want to add additional code to give the date/time a more user-friendly format. The API response returns them the way the server reads them.

// Please pay attention to the month (parts[1]); JavaScript counts months from 0:
// January - 0, February - 1, etc.
// Get Full Date
var startDate = this.eventDate.startDate;
var eventDate = moment(startDate, "YYYY-MM-DD-Z");
var eventD = moment(eventDate).format('dddd, MMMM Do, YYYY');
console.log(eventD);
console.log(startDate);

// Get Start Time
var startTime = this.eventDate.startTime;
var eventStart = moment(startTime, "hh:mm:ss.s+zzzzzz");
var eventS = moment(eventStart).format('hh:mm a');

// Get End Time
var endTime = this.eventDate.endTime;
var eventEnd = moment(endTime, "hh:mm:ss.s+zzzzzz");
var eventE = moment(eventEnd).format('hh:mm a');

var endDate = this.eventDate.endDate;
var endTime = this.eventDate.endTime;
var description = this.description;
var name = this.name;
var eventUrl = this.eventUrl;
var eventType = this.eventType;
$('#events_list').append($('<div id="lo-event" class="event_row"><h2>' + name + '</h2><p><strong>Details:</strong><br><em>' + eventD + '<br>' + eventS + ' - ' + eventE + ' ET' +

  '</em></p><div class="event-des"><strong>Description:</strong><br>' + description + '</div>' +
  (location.length > 0 ?
    ('<p><strong>Event Location:</strong><br />' + location + '<br />') : '') +
  (street1.length > 0 ?
    (street1 + '<br />') : '') +
  (street2.length > 0 ?
    (street2 + '<br />') : '') +
  (city.length > 0 ?
    (city + ', ') : '') +
  (stateProv.length > 0 ?
    (stateProv + ' ') : '') +
  (zip.length > 0 ?
    (zip + '') : '') +
  '</div>' + '<a href="' + eventUrl + '">' + 'Learn More</a>'));
});
          }
        }
      });
    }
var month = new Date().getMonth() + 1;  // january is 0
var year = new Date().getFullYear();
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}
getMonthEvents(month, year)
if(month == 12) {
  month = 1;
  year ++;
} else {
  month ++;
}

});
</script>


<h1 class="text-center">Events</h1>
<br />
<div id="events_list"><p class="loading">Loading...</p></div>


