<div style="width:89%; height:480px;" class="dbor">
                    	<span class="t botli">校園映象區</span>
						<div class="cent" onclick="pp(1)"><img src="./icon/up.jpg" alt=""></div>
					<?php
					$imgs=$Image->all(['sh'=>1]);

					foreach($imgs as $idx => $img){
					?>
						<div id="ssaa<?=$idx;?>" class='im cent' >
							<img src="./img/<?=$img['img'];?>" style="width:150px;height:103px;border:3px solid orange;margin:3px">
						</div>
					<?php
					}
					?>
					<div class="cent" onclick="pp(2)"><img src="./icon/dn.jpg" alt=""></div>
						<script>
                        	var nowpage=1,num=<?=$Image->count(['sh'=>1]);?>;

							function pp(x)
							{
								var s,t;
								if(x==1 && nowpage-1>=0)
								{nowpage--;}
								if(x==2&&(nowpage+1)<=num*1-3)
								{nowpage++;}
								
								$(".im").hide()
								for(s=0;s<=2;s++)
								{
									t=s*1+nowpage*1;
									$("#ssaa"+t).show()

	 							}
							}
