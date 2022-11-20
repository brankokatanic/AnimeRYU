<div class="main_menu" id="mainMenu">
    <div class="main_menu_image">
        <a href="index.php" class="main_menu_image_2"><img src="logo\wide_cor.png"></a>
        <a href="index.php" class="main_menu_image_1"><img src="logo\full_cor.png"></a>
    </div>
    <div id="searchBox" class="searchbox">
        
        
    </div>
    <div class="main_menu_buttons">
        <div class="close_header_menu">
          <button id="closeHeaderMenu"><i class="material-icons">close</i></button>
        </div>
        <div class="open_header_menu">
          <button id="openHeaderMenu"><i class="material-icons">menu</i></button>
        </div>
        <div class="social_media">
          <button onclick="location.href='';"><i class="material-icons">tiktok</i></button>
        </div>
        <div class="social_media">
          <button onclick="location.href='https://discord.gg/sy2ppEuMQz';"><i class="material-icons">discord</i></button>
        </div>
    </div>
</div>




<div class="main_menu_underline">

</div>




<div id="searchMobile" class="search_mobile">
    
</div>






<div class="main_menu_dropdown">
    <ul>
        <li>
            <a href="homepage.php"><i class="material-icons">home</i>POČETNA</a>
        </li>
        <li>
            <a href=""><i class="material-icons">filter_list</i>FILTRIRAJ</a>
        </li>
        <li>
            <a href="">ANIME SERIJE</a>
        </li>
        <li>
            <a href=""><i class="material-icons">list_alt</i>A-Z LISTA</a>
        </li>
        <li>
            <a href="">EMITUJE SE</a>
        </li>
        <li class="header_menu_dropdown_social_media">
            <a href=""><i class="material-icons">tiktok</i>TikTok</a>
        </li>
        <li class="header_menu_dropdown_social_media">
            <a href="https://discord.gg/sy2ppEuMQz"><i class="material-icons">discord</i>Discord</a>
        </li>
        <li>
            <a href=""><i class="material-icons">star</i>NASUMICNO</a>
        </li>
    </ul>
</div>



<script>
            var width = window.innerWidth;
            if (width >= 1100) {
                search = '<form autocomplete="off" action="/action_page.php"><div class="autocomplete"><input id="myInput" type="text" placeholder="Pretraga..." autocomplete="off" name="pretraga"></div><button><i class="material-icons">search</i></button></form>';
                document.getElementById("searchBox").innerHTML = search;
                document.getElementById("searchMobile").innerHTML = '';
            }
            else{
                    document.getElementById("searchBox").innerHTML = '<button class="open_search_mobile" id="openSearchMobile"><i class="material-icons">search</i></button>';
                    document.getElementById("searchMobile").innerHTML = '<form autocomplete="off" action="/action_page.php"><div class="autocomplete"><input id="myInput" type="text" placeholder="Pretraga..." autocomplete="off" name="pretraga"></div><button><i class="material-icons">search</i></button></form><button class="close_search_mobile" id="closeSearchMobile"><i class="material-icons">close</i></button>';
                }
            if(width >= 1100){
                window.addEventListener('resize', () => {
                    var width = window.innerWidth;
                    if (width >= 1100) {
                        search = '<form autocomplete="off" action="/action_page.php"><div class="autocomplete"><input id="myInput" type="text" placeholder="Pretraga..." autocomplete="off" name="pretraga"></div><button><i class="material-icons">search</i></button></form>';
                        document.getElementById("searchBox").innerHTML = search;
                        document.getElementById("searchMobile").innerHTML = '';
                    }
                    else{
                        document.getElementById("searchBox").innerHTML = '<button class="open_search_mobile" id="openSearchMobile"><i class="material-icons">search</i></button>';
                        document.getElementById("searchMobile").innerHTML = '<form autocomplete="off" action="/action_page.php"><div class="autocomplete"><input id="myInput" type="text" placeholder="Pretraga..." autocomplete="off" name="pretraga"></div><button><i class="material-icons">search</i></button></form><button class="close_search_mobile" id="closeSearchMobile"><i class="material-icons">close</i></button>';
                    }
                });
            }
        </script>

<script>
    
        var searching_names = <?php get_all_names();?>;
        autocomplete(document.getElementById("myInput"), searching_names);
    
</script>