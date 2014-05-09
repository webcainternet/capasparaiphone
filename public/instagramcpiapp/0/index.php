<html>

<head>
<meta charset="utf-8" />
	

<style type="text/css">
@font-face {
  font-family: "Minha Fonte";
  src: url(/catalog/view/theme/dilecta/stylesheet/alrightsans-regularitalic-v3.ttf);
}
@font-face {
  font-family: "Minha Fonte2";
  src: url(/catalog/view/theme/dilecta/stylesheet/alrightsans-bolditalic-v3.ttf);
}
.fonte_personalizada { 
  font-family: "Minha Fonte", Arial, Verdana;
  font-size: 12px;
}

.fonte_personalizada2 { 
  font-family: "Minha Fonte2", Arial, Verdana;
  font-size: 14px;
  color: #6aa11a;
}
body, p {
font-family: "Minha Fonte2", Arial, Verdana;
}

</style>


  <title>capasparaiphone - Monte sua capinha</title>
  <link rel="stylesheet" href="./jquery-ui.css" />
  <script src="./jquery-1.9.1.js"></script>
  <script src="./jquery-ui.js"></script>
  <link rel="stylesheet" href="./style.css" />

  <script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>


  <script type="text/javascript">
    function goto1() {
      $( "#accordion" ).accordion( "option", "active", 0 );
    }
    function goto2() {
      $( "#accordion" ).accordion( "option", "active", 1 );
    }
    function goto3() {
      $( "#accordion" ).accordion( "option", "active", 2 );
    }
    function goto4() {
      $( "#accordion" ).accordion( "option", "active", 3 );
    }
    function goto5() {
      $( "#accordion" ).accordion( "option", "active", 4 );
    }


    function showfacebook() {
      window.parent.document.getElementById("frcompupload").src = "http://www.capasparaiphone.com.br/capasparaiphoneapp/1/?m="+document.getElementById("modelodocelular").value+"&l="+document.getElementById("layoutdacapinha").value;

      document.getElementById("imagensselecione").style.display = 'none';
      document.getElementById("p3desc").style.display = 'none';
      document.getElementById("compupload").style.display = 'block';
    }


    function showcomputador() {
      window.parent.document.getElementById("frcompupload").src = "http://www.capasparaiphone.com.br/capasparaiphone/1/?m="+document.getElementById("modelodocelular").value+"&l="+document.getElementById("layoutdacapinha").value;

      document.getElementById("imagensselecione").style.display = 'none';
      document.getElementById("p3desc").style.display = 'none';
      document.getElementById("compupload").style.display = 'block';
    }

    function handleClick(myRadio) {
        alert('Old value: ' + currentValue);
        alert('New value: ' + myRadio.value);
        currentValue = myRadio.value;
    }

    function selecionalayout(meulayout) {
      if (meulayout.value == '0') {
        document.getElementById("layoutdacapinha").value="0";
        goto3()
      }
      if (meulayout.value == '1') {
        document.getElementById("layoutdacapinha").value="1";
        goto3()
      }
      if (meulayout.value == '2') {
        document.getElementById("layoutdacapinha").value="2";
        goto3()
      }
      if (meulayout.value == '') {
        document.getElementById("layoutdacapinha").value="";
      }

      document.getElementById("imagensselecione").style.display = 'block';
      document.getElementById("p3desc").style.display = 'block';
      document.getElementById("compupload").style.display = 'none';
      document.getElementById("ishowcomp").checked = false;
    }


    function selecionarmodelo(meumodelo){
      if (meumodelo.value == 'iphone4') {
        document.getElementById("modelodocelular").value="0";
        goto2()
      }
      if (meumodelo.value == 'iphone5') {
        document.getElementById("modelodocelular").value="1";
        goto2()
      }
      if (meumodelo.value == 'galaxy3') {
        document.getElementById("modelodocelular").value="2";
        goto2()
      }
      if (meumodelo.value == 'galaxy4') {
        document.getElementById("modelodocelular").value="3";
        goto2()
      }
      if (meumodelo.value == '') {
        document.getElementById("modelodocelular").value="";
      }

      document.getElementById("imagensselecione").style.display = 'block';
      document.getElementById("p3desc").style.display = 'block';
      document.getElementById("compupload").style.display = 'none';
    }

    

  </script>

<style>
#holder { border: 10px dashed #ccc; width: 200px; min-height: 200px; margin: 20px auto;}
#holder.hover { border: 10px dashed #0c0; }
#holder img { display: block; margin: 10px auto; }
#holder p { margin: 10px; font-size: 14px; }
progress { width: 100%; }
progress:after { content: '%'; }
.fail { background: #c00; padding: 2px; color: #fff; }
.hidden { display: none !important;}
</style>

<body  class="fonte_personalizada">
<input type="hidden" name="modelodocelular" id="modelodocelular" value="">
<input type="hidden" name="layoutdacapinha" id="layoutdacapinha" value="">



<div id="accordion">


  <h3>Passo 1 - Modelo do seu celular</h3>
  <div>
    <div style="float: left; width: 350px; height: 550px;">
      <p>
        Qual o modelo de seu celular? <br />&nbsp;<br />
        
	<div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
		<div style="float: left; text-align: left">
			<input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="miphone4" value="iphone4">
		</div>
                <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
			<img style="width: 39px;" src="./img/iphone4.png" alt="">
                </div>
                <div style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
			Iphone4/4S
		</div>
	</div>

        <div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
                <div style="float: left; text-align: left">
                        <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="miphone5" value="iphone5">
                </div>
                <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
                        <img style="width: 49px;" src="./img/iphone5.png" alt="">
                </div>
                <div style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
                        Iphone5/5S
                </div>
        </div>

        <div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
                <div style="float: left; text-align: left">
                        <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="mgalaxy3" value="galaxy3">
                </div>
                <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
                        <img style="width: 45px;" src="./img/galaxys3.png" alt="">
                </div>
                <div style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
                        Galaxy S3
                </div>
        </div>

        <div style="float: left; text-align: left; width: 95px; margin-bottom: 20px; margin-left: 15px;">
                <div style="float: left; text-align: left">
                        <input onChange="selecionarmodelo(this)" type="radio" name="modelo" id="mgalaxy4" value="galaxy4">
                </div>
                <div style="float: left; text-align: left;padding-left: 5px; height: 90px;">
                        <img style="width: 45px;" src="./img/galaxys4.png" alt="">
                </div>
                <div style="float: left; text-align: left; padding-left: 20px;margin-top: 5px;">
                        Galaxy S4
                </div>
        </div>

<!--
	<div style="float: left; text-align: center;">
        <input onChange="selecionarmodelo(this)" type="radio" name="modelo" value="iphone4" style="display: inline; float: none;position: relative; top: -85px;">
          <img style="margin-left: 2px; margin-right: 5px; width: 45px; float: none;position: relative; top: -10px;" src="./img/iphone4.png" alt="">
	<br />iphone4
        </div>

       <div style="float: left; text-align: center;">
        <input onChange="selecionarmodelo(this)" type="radio" name="modelo" value="iphone5" style="display: inline; float: none;position: relative; top: -85px;">
          <img style="margin-left: 2px; margin-right: 5px; width: 55px; float: none;position: relative; top: -3px;" src="./img/iphone5.png" alt="">
        <br />iphone4
        </div>

       <div style="float: left; text-align: center;">        <input onChange="selecionarmodelo(this)" type="radio" name="modelo" value="galaxy3" style="display: inline; float: none;position: relative; top: -85px;">
          <img style="margin-left: 2px; margin-right: 5px; width: 55px; float: none;position: relative; top: 1px;" src="./img/galaxys3.png" alt="">
        <br />iphone4
        </div>

       <div style="float: left; text-align: center;">        <input onChange="selecionarmodelo(this)" type="radio" name="modelo" value="galaxy4" style="display: inline; float: none;position: relative; top: -85px;">
          <img style="margin-left: 2px; margin-right: 5px; width: 55px; float: none;position: relative; top: 1px;" src="./img/galaxys4.png" alt="">
        <br />iphone41
	</div>
-->
      </p>
    </div>
    <div id="p1-dvfoto-img" style="float: left; width: 348px; border-left: solid 1px #CCC; height: 540px; text-align: left; background-repeat: no-repeat; background-position: 15px 10px;">
      <div style="float: left;
                  width: 15px;
                  height: 20px;
                  margin-left: 20px;
                  margin-top: 20px;
                  background-color: #6aa11a;
                  border-radius: 20px;
                  padding: 5px;
                  padding-left: 10px;
                  padding-top: 5px;
                  color: #FFFFFF;
                  font-size: 14px;
                  font-weight: bold;">1</div>

      <div style="float: left;
                  width: 260px;
                  margin-left: 10px;
                  margin-top: 13px;
                  padding: 5px;
                  color: #6aa11a;
                  font-size: 14px;
                  font-weight: bold;">SELECIONE O MODELO DE SEU CELULAR!</div>
      <div style="float: left; width: 340px; margin-left: 20px; margin-top: 20px;">
        AJUDA: Temos diversas opções como Iphone4/4S, Iphone5/5S, Galaxy S3, Galaxy S4, e em breve outros modelos!
      </div>

    
    </div>
  </div>



  <h3>Passo 2 - Escolha de Layout</h3>
  <div>
    <div style="float: left; width: 350px;">
      <p>
        Selecione o layout de sua capinha: <br />&nbsp;<br />
        
        <input onChange="selecionalayout(this)" type="radio" name="layout" value="0" style="display: inline; float: none;position: relative; top: -50px;">
          <img style="margin-left: 2px; margin-right: 15px;" src="./img/modelo-1.png" alt="">
        
        <input onChange="selecionalayout(this)" type="radio" name="layout" value="1" style="display: inline; float: none;position: relative; top: -50px;">
          <img style="margin-left: 2px; margin-right: 15px;" src="./img/modelo-2.png" alt="">
        
        <input onChange="selecionalayout(this)" type="radio" name="layout" value="2" style="display: inline; float: none;position: relative; top: -50px;">
          <img style="margin-left: 2px; margin-right: 15px;" src="./img/modelo-3.png" alt="">
      </p>
    </div>
    <div id="p1-dvfoto-img" style="float: left; width: 348px; border-left: solid 1px #CCC; height: 540px; text-align: left; background-repeat: no-repeat; background-position: 15px 10px;">
      <div style="float: left;
                  width: 15px;
                  height: 20px;
                  margin-left: 20px;
                  margin-top: 20px;
                  background-color: #6aa11a;
                  border-radius: 20px;
                  padding: 5px;
                  padding-left: 10px;
                  padding-top: 5px;
                  color: #FFFFFF;
                  font-size: 14px;
                  font-weight: bold;">2</div>

      <div style="float: left;
                  width: 260px;
                  margin-left: 10px;
                  margin-top: 13px;
                  padding: 5px;
                  color: #6aa11a;
                  font-size: 14px;
                  font-weight: bold;">ESCOLHA O TIPO DE LAYOUT DE SUA CAPINHA!</div>
      <div style="float: left; width: 340px; margin-left: 20px; margin-top: 20px;">
        AJUDA: De acordo com o layout que for selecionado, você deverá escolher um determinado numero de fotos!<br />&nbsp;<br />
Layout 1: 1 foto; Layout 2: 2 fotos; Layout 3: 15 fotos
</div>

    </div>
  </div>




  <h3>Passo 3 - Selecionar Fotos</h3>
  <div>
    <div id="imagensselecione" style="float: left; width: 348px;">
      <p>
        Selecione de onde você quer selecionar as fotos: <br />&nbsp;<br />
        
        <input onChange="showcomputador()" type="radio" name="modelo" id="ishowcomp" value="" style="display: inline; float: none;position: relative; top: -50px;">
          <img style="margin-left: 2px; margin-right: 15px;" src="./img/computador.png" alt="">
        
        <input onChange="showfacebook()" type="radio" name="modelo" id="ishowface" value="" style="display: inline; float: none;position: relative; top: -50px;">
          <img style="margin-left: 2px; margin-right: 15px;" src="./img/facebook.png" alt="">
        
        <input onChange="showfacebook()" type="radio" name="modelo" id="ishowinst" value="" style="display: inline; float: none;position: relative; top: -50px;">
          <img style="margin-left: 2px; margin-right: 15px;" src="./img/instagram.png" alt="">
      </p>
    </div>
    <div id="p3desc" style="float: left; width: 348px; border-left: solid 1px #CCC; height: 540px; text-align: left; background-repeat: no-repeat; background-position: 15px 10px;">
      <div style="float: left;
                  width: 15px;
                  height: 20px;
                  margin-left: 20px;
                  margin-top: 20px;
                  background-color: #6aa11a;
                  border-radius: 20px;
                  padding: 5px;
                  padding-left: 10px;
                  padding-top: 5px;
                  color: #FFFFFF;
                  font-size: 14px;
                  font-weight: bold;">3</div>

      <div style="float: left;
                  width: 260px;
                  margin-left: 10px;
                  margin-top: 13px;
                  padding: 5px;
                  color: #6aa11a;
                  font-size: 14px;
                  font-weight: bold;">SELECIONE AS FOTOS QUE SERAM IMPRESSAS!</div>
      <div style="float: left; width: 340px; margin-left: 20px; margin-top: 20px;">
        AJUDA: Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</div>
    
    </div>
    <div id="compupload" style="display: none; float: right; width: 100%; yellow; height: 540px; text-align: center; background-repeat: no-repeat; background-position: 15px 10px;">
	<iframe id="frcompupload" name="frcompupload" src="about:blank" scrolling="no" frameborder="0" style="width: 100%; height: 540px;"></iframe>
    </div>



  </div>




  <h3>Passo 4 - Aplicar filtros</h3>
  <div>
    <div style="float: left; width: 350px; height: 550px;">
      <p>
        A capinha não foi finalizada! <br />&nbsp;<br />
        
        
      </p>
    </div>
    <div id="p1-dvfoto-img" style="float: left; width: 348px; border-left: solid 1px #CCC; height: 540px; text-align: left; background-repeat: no-repeat; background-position: 15px 10px;">
      <div style="float: left;
                  width: 15px;
                  height: 20px;
                  margin-left: 20px;
                  margin-top: 20px;
                  background-color: #6aa11a;
                  border-radius: 20px;
                  padding: 5px;
                  padding-left: 10px;
                  padding-top: 5px;
                  color: #FFFFFF;
                  font-size: 14px;
                  font-weight: bold;">4</div>

      <div style="float: left;
                  width: 260px;
                  margin-left: 10px;
                  margin-top: 13px;
                  padding: 5px;
                  color: #6aa11a;
                  font-size: 14px;
                  font-weight: bold;">APLICAR FILTRO DE CORES!</div>
      <div style="float: left; width: 340px; margin-left: 20px; margin-top: 20px;">
        AJUDA: Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</div>
    
    </div>
  </div>


</div>






</body>



</html>
