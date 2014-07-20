<style type="text/css"> 
    .controleico { float: left; width: 25px; height: 25px; border: 0px; padding: 0px; margin: 0px; } 
    .dvbtfechar { position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px; }
    .bordapontilhada { width: <?php echo $larguratotal; ?>; height: <?php echo $alturatotal; ?>; }
</style>
<?php
    $layout = $_GET["l"];
?>
<?php //Layout 1 Foto
    if ($layout == 0) { ?>
        <div class="bordapontilhada">
            <div id="divmask" style="padding: 0px; height: <?php echo $alturatotal; ?>px; width: <?php echo $larguratotal; ?>px; margin-left: 0px; background-image: url(https://www.capasparaiphone.com.br/app/img/<?php echo $mimage; ?>); background-repeat: no-repeat no-repeat;">
                
                <!-- Tabela -->
                <table style="margin: 0px; padding: 0px; border: 0px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <div id="divl1" ondrop="drop(event, '1')" ondragover="allowDrop(event)"
                                 style="width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <!-- Controles -->
                                <div id="dvfechar1" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                                <div id="dvcontroles" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: <?php echo $larguratotal - 112; ?>px;">
                                    <div class="controleico" style="display: none;"><a style="cursor: pointer;" onclick="virarmais('divl1')"><img border="0" src="/app/img/seta_rotmais.png"></a></div>
                                    <div class="controleico" style="display: none;">&nbsp;</div>
                                    <div class="controleico" style="display: none;"><a style="cursor: pointer;" onclick="virarmenos('divl1')"><img border="0" src="/app/img/seta_rotmenos.png"></a></div>
                                    <div class="controleico" style="display: none;">&nbsp;</div>
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
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- Fechamento -->
                <div style="display: none;">
                    <div id="dvfechar2" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar3" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar4" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar5" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar6" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar7" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar8" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar9" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar10" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar11" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar12" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar13" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar14" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar15" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                </div>
                <div style="display: none;">
                    <div id="dvcontroles1" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: <?php echo $larguratotal - 112; ?>px;">&nbsp;</div>
                    <div id="dvcontroles2" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: <?php echo $larguratotal - 112; ?>px;">&nbsp;</div>
                </div>
            </div>
        </div>
<?php } ?>
<?php //Layout 2 Foto
    if ($layout == 1) { ?>
        <div class="bordapontilhada">
            <div id="divmask" style="padding: 0px; height: <?php echo $alturatotal; ?>px; width: <?php echo $larguratotal; ?>px; margin-left: 0px; background-image: url(https://www.capasparaiphone.com.br/app/img/<?php echo $mimage; ?>); background-repeat: no-repeat no-repeat;">
                
                <!-- Tabela -->
                <table style="margin: 0px; padding: 0px; border: 0px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <div id="divl2a" ondrop="dropl2(event, '1')" ondragover="allowDrop(event)" 
                                 style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden; text-align: center; align: middle; background-repeat: no-repeat;">

                                <div id="dvfechar1" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl2a')"><img border="0" src="/app/img/close_red.gif"></a></div>
                                <div id="dvcontroles1" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: <?php echo $larguratotal - 112; ?>px;">
                                    <div class="controleico" style="display: none;"><a style="cursor: pointer;" onclick="virarmais('divl2a')"><img border="0" src="/app/img/seta_rotmais.png"></a></div>
                                    <div class="controleico" style="display: none;">&nbsp;</div>
                                    <div class="controleico" style="display: none;"><a style="cursor: pointer;" onclick="virarmenos('divl2a')"><img border="0" src="/app/img/seta_rotmenos.png"></a></div>
                                    <div class="controleico" style="display: none;">&nbsp;</div>
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
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divl2b" ondrop="dropl2(event, '2')" ondragover="allowDrop(event)" 
                                 style="float: left; border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle; background-repeat: no-repeat;">

                                <div id="dvfechar2" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl2b')"><img border="0" src="/app/img/close_red.gif"></a></div>
                                <div id="dvcontroles2" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: <?php echo $larguratotal - 112; ?>px;">
                                    <div class="controleico" style="display: none;"><a style="cursor: pointer;" onclick="virarmais('divl2b')"><img border="0" src="/app/img/seta_rotmais.png"></a></div>
                                    <div class="controleico" style="display: none;">&nbsp;</div>
                                    <div class="controleico" style="display: none;"><a style="cursor: pointer;" onclick="virarmenos('divl2b')"><img border="0" src="/app/img/seta_rotmenos.png"></a></div>
                                    <div class="controleico" style="display: none;">&nbsp;</div>
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
                        </td>
                    </tr>
                </table>
                <!-- Fechamento -->
                <div style="display: none;">
                    <div id="dvfechar3" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar4" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar5" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar6" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar7" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar8" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar9" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar10" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar11" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar12" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar13" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar14" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar15" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                </div>
                <div style="display: none;">
                    <div id="dvcontroles" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: <?php echo $larguratotal - 112; ?>px;">&nbsp;</div>
                </div>
            </div>
        </div>
<?php } ?>
<?php //Layout 6 Foto
    if ($layout == 2) { ?>
        <div class="bordapontilhada">
            <div id="divmask" style="padding: 0px; height: <?php echo $alturatotal; ?>px; width: <?php echo $larguratotal; ?>px; margin-left: 0px; background-image: url(https://www.capasparaiphone.com.br/app/img/<?php echo $mimage; ?>); background-repeat: no-repeat no-repeat;">
                
                <!-- Tabela -->
                <table style="margin: 0px; padding: 0px; border: 0px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <div id="divl6a" ondrop="dropl6(event, '1')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar1" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl6a')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                        <td>
                            <div id="divl6b" ondrop="dropl6(event, '2')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar2" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl6b')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divl6c" ondrop="dropl6(event, '3')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar3" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl6c')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                        <td>
                            <div id="divl6d" ondrop="dropl6(event, '4')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar4" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl6d')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divl6e" ondrop="dropl6(event, '5')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar5" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl6e')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                        <td>
                            <div id="divl6f" ondrop="dropl6(event, '6')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar6" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl6f')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- Fechamento -->
                <div style="display: none;">
                    <div id="dvcontroles" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                    <div id="dvcontroles1" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                    <div id="dvcontroles2" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                </div>
                <div style="display: none;">
                    <div id="dvfechar7" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar8" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar9" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar10" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar11" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar12" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar13" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar14" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar15" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                </div>
            </div>
        </div>
<?php } ?>
<?php //Layout 8 Foto
    if ($layout == 3) { ?>
        <div class="bordapontilhada">
            <div id="divmask" style="padding: 0px; height: <?php echo $alturatotal; ?>px; width: <?php echo $larguratotal; ?>px; margin-left: 0px; background-image: url(https://www.capasparaiphone.com.br/app/img/<?php echo $mimage; ?>); background-repeat: no-repeat no-repeat;">
                
                <!-- Tabela -->
                <table style="margin: 0px; padding: 0px; border: 0px;" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <div id="divl8a" ondrop="dropl8(event, '1')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar1" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl8a')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                        <td>
                            <div id="divl8b" ondrop="dropl8(event, '2')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar2" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl8b')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divl8c" ondrop="dropl8(event, '3')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar3" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl8c')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                        <td>
                            <div id="divl8d" ondrop="dropl8(event, '4')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar4" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl8d')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divl8e" ondrop="dropl8(event, '5')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar5" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl8e')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                        <td>
                            <div id="divl8f" ondrop="dropl8(event, '6')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar6" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl8f')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="divl8g" ondrop="dropl8(event, '7')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar7" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl8g')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                        <td>
                            <div id="divl8h" ondrop="dropl8(event, '8')" ondragover="allowDrop(event)" style="border: solid 1px #4faad6; width: <?php echo $larguraunitaria; ?>px; height: <?php echo $alturaunitaria; ?>px; overflow: hidden;text-align: center; align: middle;  background-repeat: no-repeat;">
                                <div id="dvfechar8" style="position: absolute; width: 10px; height: 10px;z-index: 100; margin: 5px;"><a href="#" onclick="lixeiraremove('divl8h')"><img border="0" src="/app/img/close_red.gif"></a></div>
                            </div>
                        </td>
                    </tr>
                </table>
                <!-- Fechamento -->
                <div style="display: none;">
                    <div id="dvcontroles" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                    <div id="dvcontroles1" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                    <div id="dvcontroles2" style="position: absolute; width: 100px; height: 75px;z-index: 100; margin-top: 10px; margin-left: 230px;">&nbsp;</div>
                </div>
                <div style="display: none;">
                    <div id="dvfechar9" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar10" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar11" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar12" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar13" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar14" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                    <div id="dvfechar15" class="dvbtfechar"><a href="#" onclick="lixeiraremove('divl1')"><img border="0" src="/app/img/close_red.gif"></a></div>
                </div>
            </div>
        </div>
<?php } ?>

<!-- invisible iframes -->
<div style="display: none;">
    <iframe id="invfr1"  name="invfr1"  src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr2"  name="invfr2"  src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr3"  name="invfr3"  src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr4"  name="invfr4"  src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr5"  name="invfr5"  src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr6"  name="invfr6"  src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr7"  name="invfr7"  src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr8"  name="invfr8"  src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr9"  name="invfr9"  src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr10" name="invfr10" src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr11" name="invfr11" src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr12" name="invfr12" src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr13" name="invfr13" src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr14" name="invfr14" src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
    <iframe id="invfr15" name="invfr15" src="https://www.capasparaiphone.com.br/capasparaiphone/2/blank.html"></iframe>
</div>




