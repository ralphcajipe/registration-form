/* Using jQuery to initialize a datepicker on an element with the id "dob". The datepicker
is configured with the following options: */
$(function () {
  $("#dob").datepicker({
    changeMonth: true,
    changeYear: true,
    yearRange: "-100:+0", // Allow selection of dates in the past 100 years
    maxDate: new Date(), // The maximum selectable date is today
    dateFormat: "mm/dd/yy", // Set the date format to match the format used by PHP
  });
});
