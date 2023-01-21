<?php
// Include the Simple HTML DOM library
include('simple_html_dom.php');

//emploi.ma

for ($i = 1; $i <= 5; $i++) {
    $html = file_get_html('https://www.emploi.ma/recherche-jobs-maroc?f%5B0%5D=im_field_offre_metiers%3A31&page='.$i);

    //url
     foreach($html->find('div[.job-search-result featured] h5 a') as $job) {
      $link =  $job->href ."<br>";
      
      $url = "https://www.emploi.ma" . $link;
      echo $url;
    }
}

//wetech.ma

for ($i = 1; $i <= 5; $i++) {
  $html = file_get_html("https://www.wetech.ma/offres-emploi/'.$i'/");

  //url
   foreach($html->find('div[#centreLeftN] h2 a') as $job) {
    $link =  $job->href ."<br>";
    
    $url = "https://www.wetech.ma/" . $link;
    echo $url;
  }
}

//jobs-ma

$html = file_get_html('https://jobs-ma.com/jobfind.php?action=search&auth_sess=enpuoa6i6a1upiskh6lo9q4je9&ref=6b349f2243f814aeb6d548b24&jids%5B%5D=24&lids%5B%5D=000&kwd=&cmdSearch=++Rechercher');

foreach($html->find( 'div[#idjobsearchresults] h2 a' ) as $job) {
 $link =  $job->href ."<br>";
  
 $url = "https:" . $link;
 echo $url;

}

//stagiares.ma

for ($i = 1; $i <= 2; $i++) {
$html = file_get_html("https://www.stagiaires.ma/offres-stages/recherche/keyword:,date_depart:,duree:,ville:,type:,formation:73,niveau:,convention:,remunere:/".$i);
foreach($html->find( 'div[#wrapper] div[.offer-container.p-xxs m-b-xs] a'  ) as $job) {
  $link =  $job->href ."<br>";
  echo $link;
}
}

for ($i = 1; $i <= 2; $i++) {
  $html = file_get_html("https://www.stagiaires.ma/offres-stages/recherche/keyword:,date_depart:,duree:,ville:,type:,formation:73,niveau:,convention:,remunere:/".$i);
  foreach($html->find( 'div[#wrapper] div[.offer-container.p-xxs m-b-xs] a'  ) as $job) {
    $link =  $job->href ."<br>";
    echo $link;
  }
  }

?>