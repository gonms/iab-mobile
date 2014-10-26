<?php

class Eventos{
    
    function Eventos()
    {
    }
	
    function getCalendar($mes = "", $anio = "")
    {
    	$mes = (empty($mes)?date("m"):$mes);
    	$anio = (empty($anio)?date("Y"):$anio);

    	// Create array containing abbreviations of days of week.
	     $daysOfWeek = array('L','M','X','J','V','S','D');
	     $months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

	     // What is the first day of the month in question?
	     $firstDayOfMonth = mktime(0,0,0,$mes,1,$anio);

	     // How many days does this month contain?
	     $numberDays = date('t',$firstDayOfMonth);

	     // Retrieve some information about the first day of the
	     // month in question.
	     $dateComponents = getdate($firstDayOfMonth);

	     // What is the name of the month in question?
	     $monthName = $months[$dateComponents['mon']-1];

	     // What is the index value (0-6) of the first day of the
	     // month in question.
	     $dayOfWeek = $dateComponents['wday'] - 1;

	     // Create the table tag opener and day headers
	     $calendar = "<table class='tCalendario' cellpadding='2' cellspacing='3'>";
	     $calendar .= "<caption class='mes'>$monthName $anio</caption>";
	     $calendar .= "<tr>";

	     // Create the calendar headers
	     foreach($daysOfWeek as $day) {
	          $calendar .= "<th class='diasemana'>$day</th>";
	     } 

	     // Create the rest of the calendar
	     // Initiate the day counter, starting with the 1st.

	     $currentDay = 1;

	     $calendar .= "</tr><tr>";

	     // The variable $dayOfWeek is used to
	     // ensure that the calendar
	     // display consists of exactly 7 columns.

	     if ($dayOfWeek > 0) { 
	          $calendar .= "<td colspan='$dayOfWeek' class='tdDisabled'>&nbsp;</td>"; 
	     }
	     	  
	     while ($currentDay <= $numberDays)
	     {
	          // Seventh column (Saturday) reached. Start a new row.
	          if ($dayOfWeek == 7) {

	               $dayOfWeek = 0;
	               $calendar .= "</tr><tr>";
	          }
	          
	          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
	          
	          $calendar .= "<td class='tdNormal'>$currentDay</td>";

	          // Increment counters
	          $currentDay++;
	          $dayOfWeek++;
	     }
	     

	     // Complete the row of the last week in month, if necessary
	     if ($dayOfWeek != 7) { 
	          $remainingDays = 7 - $dayOfWeek;
	          $calendar .= "<td colspan='$remainingDays' class='tdDisabled'>&nbsp;</td>"; 
	     }
	     
	     $calendar .= "</tr>";
	     $calendar .= "</table>";

	     return $calendar;
    }
}
?>