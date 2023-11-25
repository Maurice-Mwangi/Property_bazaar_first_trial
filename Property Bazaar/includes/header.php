<?php
    session_start();

?>


<body>
    <div class="header">
        <div class="headings">
            <div class="head image">
                <img src="\media\icons\fav_icon\favicon-32x32.png" alt="">
            </div>
            <div class="head title">                    
                THE PROPERTY BAZAAR
            </div>
            <div class="head accounts">
                <?php
                    if(isset($_SESSION['id'])){
                ?>
                        <div class="acc_head">
                            <img src="\media\icons\account.png" alt=""><br>
                            <span id="acc">My Account</span>
                        </div>
                        <div class="acc_head">
                            <img src="\media\icons\logout.png" alt=""> <br>
                            <span id="logOut">Log Out</span>
                        </div>
                <?php
                    }else{
                ?>
                        <div class="acc_head">
                            <img src="\media\icons\login.png" alt=""><br>
                            <span id="logIn">Login</span>                          
                        </div>
                        <div class="acc_head">
                            <img src="\media\icons\add.png" alt=""><br>
                            <span id="newAcc">Account</span>
                        </div>
                <?php
                    }
                ?>
            </div>
        </div>

       
    </div>
</body>
