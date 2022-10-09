<?php
include_once '..\db.php';

//display data into the table 
$query = "SELECT * FROM books";
$result = mysqli_query($conn ,$query);

//search data
if (isset($_GET['search'])){
  $search = mysqli_escape_string($conn , $_GET['search']);
  $query.=  " WHERE books . book_name LIKE '%".$search."%' OR books . book_author LIKE '%".$search."%' ";
}
$result = mysqli_query($conn , $query);
   
    ?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="About Page">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" "="" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" "="" defer=""></script>
    <meta name="generator" content="Nicepage 4.17.10, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-header u-image u-header" id="sec-88fd" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" data-image-width="1500" data-image-height="1000"><div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-hover-feature u-text u-text-default u-text-1" data-animation-name="" data-animation-duration="0" data-animation-direction="">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1">Welcomg to our library</a>
        </h2>
        <form method="get" class="u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
          <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2f59"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-2f59" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
            </span>
          </button>
          <input class="u-search-input" type="search" name="search" value="" placeholder="Search">
          <input type="hidden" name="formServices" value="524b215e8f22fc707197a96e277371cf">
        </form>
        <a href="..\login.php" class="u-btn u-btn-round u-button-style u-hover-feature u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">log in</a>
        <a href="Home.php" class="u-btn u-btn-round u-button-style u-hover-feature u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-2">Reset Search</a>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-830c">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25.8%">
              <col width="24.200000000000006%">
            </colgroup>
            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
              <tr style="height: 65px;">
                <td class="u-table-cell">Book_id</td>
                <td class="u-table-cell">Book_name</td>
                <td class="u-table-cell">Book_author</td>
                <td class="u-table-cell">availability<br>
                </td>
              </tr>
              <?php
                   
                   while ($rows = mysqli_fetch_assoc($result)){
                   ?>
              <tr style="height: 65px;">
                <td class="u-table-cell"><?= $rows['book_id']?></td>
                <td class="u-table-cell"><?= $rows['book_name']?></td>
                <td class="u-table-cell"><?= $rows['book_author']?></td>
                <td class="u-table-cell"><?= $rows['availability']?></td>
              </tr>
              <?php
              }
?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9a68"><div class="u-align-left u-clearfix u-sheet u-sheet-1"></div></footer>
 
  
</body></html>
<?php
//close the connection
mysqli_free_result($result);
mysqli_close($conn);