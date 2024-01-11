 <!-- allt -->
<div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"> -->
        
        </div>
        <script>
            $(".ssaa li").hover(
                function() {

                    $("#altt").html("<pre>" +$(this).children(".all").html()  + "</pre>")
                    $("#altt").show()
                }
            )
            $(".ssaa li").mouseout(
                function() {
                    $("#altt").hide()
                }
            )
        </script>


 <!-- ssaa -->
<ul class="ssaa" style="list-style-type:decimal;">
        <?php
            $news=$News->all(['sh'=>1],' limit 5');
            foreach($news as $n){
                echo "<li>";
                echo mb_substr($n['text'],0,20);
                echo "<div class='all' style='display:none'>";
                echo $n['text'];
                echo "</div>";
                echo "...</li>";
            }

        ?>
        </ul>

 <!-- 最新消息區 -->
        <!-- <div style="width:95%; padding:2px; height:190px; margin-top:10px; padding:5px 10px 5px 10px; border:#0C3 dashed 3px; position:relative;">
        <span class="t botli">最新消息區
        <?php
                if($News->count(['sh'=>1])>5){
                    echo "<a href='?do=news' style='float:right'>More...</a>";
                }

            ?>
            
        </span>
       
    </div>