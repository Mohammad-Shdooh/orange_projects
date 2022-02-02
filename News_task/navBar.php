

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="newsPage_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
</head>
<body>
<nav>
      <!--BBC Logo to the far left of the navbar-->
      <a href="javascript:void(0);" id="BBCImg">
        <img
          src="https://1000logos.net/wp-content/uploads/2016/10/BBC-Logo-1.png"
          alt="BBC Logo"
        />
      </a>
      <!--User Sign In-->
      <a href="logIn.php" id="nav-sign-in">
        <i class="fas fa-user-circle"></i>
        <div id="nav-sign-in-text">Sign In</div>
        <div class="nav-line nav-blue"></div>
      </a>
      <!--Bell Icon-->
      <a href="javascript:void(0);" id="nav-bell-icon">
        <i class="fas fa-bell"></i>
        <div class="nav-line nav-dark-blue"></div>
      </a>
      <!--Main Nav Here. On full width - starts with Home & ends with CBeebies-->
      <section id="main-nav">
        <!-- <a href="newsPage.php" class="main-nav-entry" id="main-nav-home">
          <div>Home</div>
          <div class="nav-line nav-blue"></div>
        </a> -->
        <a href="newsPage.php" class="main-nav-entry" id="main-nav-news">
          <div>News</div>
          <div class="nav-line nav-red"></div>
        </a>
        <a
          href="sportPage.php"
          class="main-nav-entry"
          id="main-nav-sport"
        >
          <div>Sport</div>
          <div class="nav-line nav-yellow"></div>
        </a>
        <a
          href="weather.php"
          class="main-nav-entry"
          id="main-nav-weather"
        >
          <div>Weather</div>
          <div class="nav-line nav-light-blue"></div>
        </a>
        <!-- <a
          href="javascript:void(0);"
          class="main-nav-entry"
          id="main-nav-iplayer"
        >
          <div>iPlayer</div>
          <div class="nav-line nav-pink"></div>
        </a> -->

        <a
          href="sound.php"
          class="main-nav-entry"
          id="main-nav-sounds"
        >
          <div>Sounds</div>
          <div class="nav-line nav-orange"></div>
        </a>
        <!-- <a href="javascript:void(0);" class="main-nav-entry" id="main-nav-cbbc">
          <div>CBBC</div>
          <div class="nav-line nav-green"></div>
        </a> -->
        <!-- <a
          href="javascript:void(0);"
          class="main-nav-entry"
          id="main-nav-cbeebies"
        >
          <div>CBeebies</div>
          <div class="nav-line nav-yellow"></div>
        </a> -->
        <a href="javascript:void(0);" class="main-nav-entry" id="main-nav-more">
          <div>More</div>
          <i class="fas fa-caret-down"></i>
          <div class="nav-line nav-black"></div>
        </a>
      </section>
      <!--Search-->
      <a href="javascript:void(0);" id="nav-search">
        <i class="fas fa-search"></i>
        <div id="nav-search-text">Search</div>
        <div class="nav-line nav-black"></div>
      </a>
    </nav>


    
    <!--Extra drop down that opens up when user clicks on the more tab-->
    <section id="more-nav">
      <!--X that user clicks on to close the menu-->
      <div id="more-nav-content">
        <div id="cross-icon"><i class="fas fa-times"></i></div>
        <a href="javascript:void(0);">News</a>
        <a href="javascript:void(0);">Sport</a>
        <a href="javascript:void(0);">Weather</a>
        <a href="javascript:void(0);">iPlayer</a>
        <a href="javascript:void(0);">Sounds</a>
        <a href="javascript:void(0);">CBBC</a>
        <a href="javascript:void(0);">CBeebies</a>
        <a href="javascript:void(0);">Food</a>
        <a href="javascript:void(0);">Bitesize</a>
        <a href="javascript:void(0);">Arts</a>
        <a href="javascript:void(0);">Taster</a>
        <a href="javascript:void(0);">Local</a>
        <a href="javascript:void(0);">Three</a>
      </div>
    </section>
    <!--END OF NAVBAR. START OF MAIN PAGE-->

</body>
</html>