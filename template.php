<?php 
function requireCSS(...$xs) {
  foreach ($xs as $x) {
    echo '<style>';
    require($x);
    echo '</style>';
  }
}

function requireFonts(...$xs){
  foreach ($xs as $x) {
    $b64=file_get_contents("fonts/$x.b64");
    $url="url(data:font/truetype;charset=utf-8;base64,$b64) format('truetype')";
    echo "<style> @font-face { font-family: '$x'; src: $url; } </style>";
  }
}

function listContact($xs){
  foreach ($xs as $x) {
    $svg=file_get_contents("icons/$x[type].svg");
    //<img alt=\"\" src=\"images/$x[icon]\" />
    echo "<li> $svg $x[value] </li>";
  }

}

function listHighlights($hls){
  foreach ($hls as $hl) {
    echo "<li>$hl</li>";
  }
}

function listExperience($xs,$i=0,$j=-1){
  if($j == -1){
    $j = count($xs);
  }
  
  for(;$i<$j;$i++){
    $x = $xs[$i];
    echo "<li>";
    echo "<div class=\"experience-section-header\">
      <h2>$x[company]</h2>
      <div class=\"experience-detail\">
        <span class=\"experience-title\">$x[title]</span>
        <span class=\"experience-timespan\">($x[start_time] → $x[end_time])</span>
      </div>
    </div>";
    echo "<p>$x[description]</p>";
    echo "</li>";
  }
}

// <p>$x[description]</p>

function listTimelineHeader($xs){
  echo "<thead><tr>";
  foreach ($xs as $x) { echo "<th>$x</th>"; }
  echo "</tr></thead>";
}

function listTimeline($tls){
  foreach ($tls as $tl) {
    echo "<tr>
      <td>$tl[begin_time]</td>
      <td>$tl[end_time]</td>
      <td>$tl[company]</td>
      <td>$tl[job_title]</td>
    </tr>";
  }
}

?>
