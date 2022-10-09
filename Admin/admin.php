<?php

include_once('..\db.php');
session_start();


?>


     
     



<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>admin</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="admin.css" media="screen">
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
    <meta property="og:title" content="admin">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-grey-5 u-header" id="sec-88fd" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <h3 class="u-headline u-text u-text-default u-text-1">welcome admin <?php 
        
        if (isset ( $_SESSION ['username'])) {echo $_SESSION['username'];  ?> <br></h3>
        <img class="u-image u-image-circle u-image-contain u-preserve-proportions u-image-1" src="images/40ea9df3327b291b3fc70dad2a1856583e4414c2d70e8bf64d6750c3d3bd89b5de5799c5958f59471bd2abae822165ab8d5deb600c3c86ed7e0706_1280.png" alt="" data-image-width="1280" data-image-height="1280">
      </div></header>
    <section class="u-align-center u-clearfix u-grey-90 u-section-1" id="carousel_292c">
      <a href="logout.php" class="active u-active-palette-4-base u-button-style u-custom-font u-font-montserrat ">log out</a>
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1">
          <ul class="u-spacing-0 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-palette-4-base u-button-style u-custom-font u-font-montserrat u-tab-link u-text-active-black u-text-body-color u-text-hover-grey-75 u-white u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Information</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-4-base u-button-style u-custom-font u-font-montserrat u-tab-link u-text-active-black u-text-body-color u-text-hover-grey-75 u-white u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Content<br>
              </a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-align-left u-container-style u-grey-90 u-tab-active u-tab-pane u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-container-layout-1">
                <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1280" data-image-height="1280"></div>
                
                <ul class="u-text u-text-1">
                  <li>Name:<?= $_SESSION['username']?></li>
                  <li>Email:<?= $_SESSION['email']?></li>
                  <li>Phone:<?= $_SESSION['phone']?></li>
                  <li>Adress:<?= $_SESSION['adress']?></li>
                </ul>
                <?php
        }
                ?>
              </div>
            </div>
            <div class="u-align-left u-container-style u-grey-90 u-tab-pane u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-expanded-width u-table u-table-responsive u-table-1">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="16.9%">
                      <col width="19.900000000000006%">
                      <col width="21.7%">
                      <col width="21.3%">
                      <col width="20.100000000000005%">
                    </colgroup>
                    <thead class="u-align-center u-black u-table-header u-table-header-1">
                      <tr style="height: 50px;">
                        <th class="u-align-left u-border-1 u-border-grey-30 u-table-cell">book_ID</th>
                        <th class="u-align-left u-border-1 u-border-grey-30 u-table-cell">BOOK_NAME</th>
                        <th class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-3">BOOK_AUTHOR</th>
                        <th class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-4">AVAILABILITY</th>
                        <th class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-5">ACTION</th>
                      </tr>
                    </thead>
                    <tbody class="u-align-center u-table-body">
                    <?php
                    $result2 = mysqli_query($conn ,"SELECT * FROM books");
                    //loop the rowset
                    while ($rows = mysqli_fetch_assoc($result2)){
                    ?>
                      <tr style="height: 50px;">
                        <td class="u-align-left u-border-1 u-border-grey-30 u-first-column u-table-cell"><?= $rows['book_id']?></td>
                        <td class="u-align-left u-border-1 u-border-grey-30 u-table-cell"><?= $rows['book_name']?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-8"><?= $rows['book_author']?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-9"><?= $rows['availability']?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-10"><a href="update.php?id=<?=$rows['book_id']?>">Update</a> | <a
                    href="delete.php?id=<?=$rows['book_id']?>">Delete</a></td>
                      </tr>
                      <?php 
                      }
                      ?>
                      <tr style="height: 68px;">
                        <td class="u-align-left u-border-1 u-border-grey-30 u-table-cell"></td>
                        <td class="u-align-left u-border-1 u-border-grey-30 u-table-cell"></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-33"></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-34"></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell u-table-cell-35">
                          <a href="addbook.php" class="u-border-radius-50 u-btn u-btn-round u-button-style u-hover-feature u-palette-2-base u-radius-50 u-btn-1" target="_blank">add book<br>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-9a68"><div class="u-align-left u-clearfix u-sheet u-sheet-1"></div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      
  
</body></html>
<?php

mysqli_close($conn);
