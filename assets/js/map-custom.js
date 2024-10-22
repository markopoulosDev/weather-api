

$(function () {

//create the map with leaflet plugin and openstreet maps in index page
if (window.location.href.indexOf("submitdata") <= -1) {
//center in Kavala area
var map = L.map('map').setView([40.9380752, 24.4105424], 13);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);



//create datatable
$("#weather_data").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    //the following two lines are to show the buttons to the top
    dom: 'Bfrtip',
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "sAjaxDataProp": "",
    //call of the read.php with the correct parameter
    "sAjaxSource": 'api/items/read.php',
    "fnServerParams": function (aoData) {
      aoData.push({ "name": "getfortable", "value": 1 });
    },
    //assign the object data to the corresponding columns of the table
    "columns": [
      { "data": "date" },
      { "data": "temperature" },
      { "data": "tmin" },
      { "data": "tmax" },
      { "data": "precipitation" },
      { "data": "snow" },
      { "data": "wdir" },
      { "data": "wspeed" },
      { "data": "pressure" }
    ]

  }).buttons().container().appendTo('#weather_data_wrapper .col-md-6:eq(0)');

}

  //call the rest api when search button is pressed
  $(document).on("click", '#searchBtn', function (e) {
    
    //get the date value from the form
    var date=$('#date').val();

  $.ajax({
    url: 'api/items/filter.php',
    type: 'POST',
    dataType: "html",
    data: 'date='+date,
    async: true,
    success: function (data) {
      console.log(data);
      //create the popup window on the map
      dataJson=jQuery.parseJSON(data);
      var html='Date:<strong>'+dataJson[0].date+'</strong><br/>Θερμοκρασία:<strong>'+dataJson[0].temperature+' &#8451;</strong><br/>Ελαχ. Θερμοκρασία:<strong>'+dataJson[0].tmin+' &#8451;</strong><br/>Μεγ. Θερμοκρασία:<strong>'+dataJson[0].tmax+
      ' &#8451;</strong><br/>Υετός:<strong>'+dataJson[0].precipitation+' mm</strong><br/>Χιονόπτωση:<strong>'+dataJson[0].snow+'mm</strong><br/>Φορά ανέμου:<strong>'+dataJson[0].wdir+' &deg;</strong><br/>Ταχύτητα ανέμου:<strong>'+dataJson[0].wspeed+' km/h</strong><br/>Ατμ. πίεση:<strong>'+dataJson[0].pressure+' hPa</strong>';
      L.marker([40.9380752, 24.4105424]).addTo(map)
    .bindPopup(html)
    .openPopup();
    },
    error:function (xhr, ajaxOptions, thrownError){
      if(xhr.status==404) {
      L.marker([40.9380752, 24.4105424]).addTo(map)
    .bindPopup('Date data '+thrownError)
    .openPopup();
      }
  }
  });
});

//submit new data when submit button is pressed
$(document).on("click", '#submitBtn', function (e) {
  e.preventDefault();
  var formdata=$('#submitData').serialize();
  console.log(formdata);
  //https://dev.meteostat.net/
  $.ajax({
    url: 'api/items/create.php',
    type: 'POST',
    dataType: "html",
    data: formdata,
    async: true,
    success: function (data) {
      json=jQuery.parseJSON(data);
      alert(json.message);
    }
  });
});

});
