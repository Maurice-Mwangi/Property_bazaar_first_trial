<body>
    
    <div class="header">    
        <div class="sub_headings">
            <div class="subHead title">
                SORT POSTS BY:
            </div>
            <div class="subHead opt">LOCATION</div>
            <div class="subHead opt">TYPE</div>
            <div class="subHead opt">PRICE</div>
            <?php
                if(isset($_SESSION['id'])){
            ?>
                    <div class="subHead opt">MINE</div>
                    <div class="subHead opt">FOLLOWING</div>
            <?php } ?>

        </div>
    </div>

</body>