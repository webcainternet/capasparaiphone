<style>
.controleico {
    float: left;
    width: 25px;
    height: 25px;
    border: 0px;
    padding: 0px;
    margin: 0px;
}
</style>

<script>
function teste() {
    //var myNode = document.getElementById('divl1');
    //alert($("#divl1 > img").size());

    //alert($("#divl1:first-child").attr("id"));

    //$('#divl1 img').each(function(){
    //    console.log($(this).attr('src'));
    //    console.log($(this).attr('id'));
    //});

 //   $("#testFind").click(function () {
 
        $('divl1 > img').css('background','red');
 
        $('.divl1').find('.child').css('background','red');
 
 //       });
}
</script>

<?php
switch ($ql) {
    //Layout 1 foto
    case 0: ?>

<!-- LAYOUT 1 -->
        <div class="bordapontilhada">
    	<div id="divmask" style="padding: 0px; height: <?php echo $mh; ?>px; width: 340px; margin-left: 0px; background-size: 340px; background-image: url(http://capasparaiphone.webca.com.br/app/img/<?php echo $mimage; ?>); background-repeat: no-repeat no-repeat;">
    		<div id="divl1" ondrop="drop(event, '1')" ondragover="allowDrop(event)" style="width: 339px; height: 100%; overflow: hidden;text-align: center;
	align: middle; border: 0px; background-repeat: no-repeat;">
                <div id="dvfechar1" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>

                <div id="dvcontroles" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">
                    <div class="controleico"><a style="cursor: pointer;" onclick="virarmais('divl1')"><img border="0" src="/app/img/seta_rotmais.png"></a></div>
                    <div class="controleico">&nbsp;</div>
                    <div class="controleico"><a style="cursor: pointer;" onclick="virarmenos('divl1')"><img border="0" src="/app/img/seta_rotmenos.png"></a></div>
                    <div class="controleico">&nbsp;</div>

                    <div class="controleico">&nbsp;</div>
                    <div class="controleico"><a style="cursor: pointer;" onclick="moverup('divl1')"><img border="0" src="/app/img/seta_cim.png"></a></div>
                    <div class="controleico">&nbsp;</div>
                    <div class="controleico"><a style="cursor: pointer;" onclick="zoommais('divl1')"><img border="0" src="/app/img/seta_mai.png"></a></div>

                    <div class="controleico"><a style="cursor: pointer;" onclick="moveresq('divl1')"><img border="0" src="/app/img/seta_esq.png"></a></div>
                    <div class="controleico">&nbsp;</div>
                    <div class="controleico"><a style="cursor: pointer;" onclick="moverdir('divl1')"><img border="0" src="/app/img/seta_dir.png"></a></div>
                    <div class="controleico">&nbsp;</div>

                    <div class="controleico">&nbsp;</div>
                    <div class="controleico"><a style="cursor: pointer;" onclick="moverbaixo('divl1')"><img border="0" src="/app/img/seta_bai.png"></a></div>
                    <div class="controleico">&nbsp;</div>
                    <div class="controleico"><a style="cursor: pointer;" onclick="zoommenos('divl1')"><img border="0" src="/app/img/seta_men.png"></a></div>
                </div>

                <div style="display: none;">
                    <div id="dvfechar2" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar3" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar4" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar5" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar6" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar7" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar8" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar9" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar10" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar11" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar12" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar13" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar14" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar15" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div style="display: none;">
                    <div id="dvcontroles1" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                    <div id="dvcontroles2" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                </div>
            </div>
  	</div>
    </div>
<!-- FIM LAYOUT 1 -->

    <?php break;
    case 1: ?>

<!-- LAYOUT 2 -->
        <div class="bordapontilhada">
        <div id="divmask" style="padding: 0px; height: <?php echo $mh; ?>px; width: 340px; margin: 0px; background-size: 340px; background-image: url(http://capasparaiphone.webca.com.br/app/img/<?php echo $mimage; ?>); background-repeat: no-repeat no-repeat;">
                <div id="divl2a" ondrop="dropl2(event, '1')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw2; ?>px; height: <?php echo $mh2; ?>px; overflow: hidden;text-align: center;
        align: middle; background-repeat: no-repeat;">
                    <div id="dvfechar1" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl2a')"><img border="0" src="img/close_red.gif"></a></div>

                    <div id="dvcontroles1" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">
                        <div class="controleico"><a style="cursor: pointer;" onclick="virarmais('divl2a')"><img border="0" src="/app/img/seta_rotmais.png"></a></div>
                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="virarmenos('divl2a')"><img border="0" src="/app/img/seta_rotmenos.png"></a></div>
                        <div class="controleico">&nbsp;</div>

                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="moverup('divl2a')"><img border="0" src="/app/img/seta_cim.png"></a></div>
                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="zoommais('divl2a')"><img border="0" src="/app/img/seta_mai.png"></a></div>

                        <div class="controleico"><a style="cursor: pointer;" onclick="moveresq('divl2a')"><img border="0" src="/app/img/seta_esq.png"></a></div>
                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="moverdir('divl2a')"><img border="0" src="/app/img/seta_dir.png"></a></div>
                        <div class="controleico">&nbsp;</div>

                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="moverbaixo('divl2a')"><img border="0" src="/app/img/seta_bai.png"></a></div>
                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="zoommenos('divl2a')"><img border="0" src="/app/img/seta_men.png"></a></div>
                    </div>

                </div>

        		<div id="divl2b" ondrop="dropl2(event, '2')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw2; ?>px; height: <?php echo $mh2; ?>px; overflow: hidden;text-align: center;
        align: middle; background-repeat: no-repeat;">
                    <div id="dvfechar2" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl2b')"><img border="0" src="img/close_red.gif"></a></div>

                    <div id="dvcontroles2" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">
                        <div class="controleico"><a style="cursor: pointer;" onclick="virarmais('divl2b')"><img border="0" src="/app/img/seta_rotmais.png"></a></div>
                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="virarmenos('divl2b')"><img border="0" src="/app/img/seta_rotmenos.png"></a></div>
                        <div class="controleico">&nbsp;</div>
                        
                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="moverup('divl2b')"><img border="0" src="/app/img/seta_cim.png"></a></div>
                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="zoommais('divl2b')"><img border="0" src="/app/img/seta_mai.png"></a></div>

                        <div class="controleico"><a style="cursor: pointer;" onclick="moveresq('divl2b')"><img border="0" src="/app/img/seta_esq.png"></a></div>
                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="moverdir('divl2b')"><img border="0" src="/app/img/seta_dir.png"></a></div>
                        <div class="controleico">&nbsp;</div>

                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="moverbaixo('divl2b')"><img border="0" src="/app/img/seta_bai.png"></a></div>
                        <div class="controleico">&nbsp;</div>
                        <div class="controleico"><a style="cursor: pointer;" onclick="zoommenos('divl2b')"><img border="0" src="/app/img/seta_men.png"></a></div>
                    </div>
                </div>

                <div style="display: none;">
                    <div id="dvfechar3" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar4" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar5" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar6" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar7" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar8" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar9" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar10" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar11" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar12" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar13" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar14" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                    <div id="dvfechar15" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div style="display: none;">
                    <div id="dvcontroles" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                </div>

        </div>
        </div>
<!-- FIM LAYOUT 2 -->

    <?php break;
    case 2: ?>

<!-- LAYOUT 3 -->
        <div style="border: dashed 3px white; margin-left: 10px; width: 339px;">
        <div id="divmask" style="padding: 0px; height: <?php echo $mh; ?>px; width: 340px; margin: 0px; background-size: 340px; background-image: url(http://capasparaiphone.webca.com.br/app/img/<?php echo $mimage; ?>); background-repeat: no-repeat no-repeat;">


                <div id="divl15b1" ondrop="dropl15b(event, '1')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar1" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b1')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

		        <div id="divl15b2" ondrop="dropl15b(event, '2')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar2" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b2')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div id="divl15a1" ondrop="dropl15a(event, '5')" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15a; ?>px; height: <?php echo $mh15a; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar3" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15a1')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div id="divl15b3" ondrop="dropl15b(event, '3')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar4" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b3')"><img border="0" src="img/close_red.gif"></a></div>
                </div>                    

                <div id="divl15b4" ondrop="dropl15b(event, '4')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar5" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b4')"><img border="0" src="img/close_red.gif"></a></div>
                </div>



		        <div id="divl15a2" ondrop="dropl15a(event, '6')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15a; ?>px; height: <?php echo $mh15a; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar6" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15a2')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div id="divl15b5" ondrop="dropl15b(event, '8')" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar7" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b5')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div id="divl15b6" ondrop="dropl15b(event, '7')" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar8" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b6')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div id="divl15b7" ondrop="dropl15b(event, '10')" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar9" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b7')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div id="divl15b8" ondrop="dropl15b(event, '9')" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar10" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b8')"><img border="0" src="img/close_red.gif"></a></div>
                </div>



                <div id="divl15b9" ondrop="dropl15b(event, '11')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar11" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b9')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div id="divl15b10" ondrop="dropl15b(event, '12')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar12" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b10')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div id="divl15a3" ondrop="dropl15a(event, '15')" ondragover="allowDrop(event)" style="float: right; border: solid 1px #4faad6; width: <?php echo $mw15a; ?>px; height: <?php echo $mh15a; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar13" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15a3')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div id="divl15b11" ondrop="dropl15b(event, '13')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar14" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b11')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div id="divl15b12" ondrop="dropl15b(event, '14')" ondragover="allowDrop(event)" style="float: left; border: solid 1px #4faad6; width: <?php echo $mw15b; ?>px; height: <?php echo $mh15b; ?>px; overflow: hidden;text-align: center; align: middle;">
                    <div id="dvfechar15" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl15b12')"><img border="0" src="img/close_red.gif"></a></div>
                </div>

                <div style="display: none;">
                    <div id="dvcontroles" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                    <div id="dvcontroles1" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                    <div id="dvcontroles2" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                </div>
        </div>
        </div>
<!-- FIM LAYOUT 3 -->

    <?php break;
} ?>

<!-- invisible iframes -->
<div style="display: none;">
    <iframe id="invfr1"  name="invfr1"  src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr2"  name="invfr2"  src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr3"  name="invfr3"  src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr4"  name="invfr4"  src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr5"  name="invfr5"  src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr6"  name="invfr6"  src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr7"  name="invfr7"  src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr8"  name="invfr8"  src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr9"  name="invfr9"  src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr10" name="invfr10" src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr11" name="invfr11" src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr12" name="invfr12" src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr13" name="invfr13" src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr14" name="invfr14" src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
    <iframe id="invfr15" name="invfr15" src="http://capasparaiphone.webca.com.br/case4you/2/blank.html"></iframe>
</div>




