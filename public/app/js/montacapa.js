function GirarImg(idsession, posicao, angulo) {
   $(document).ready(function(){
      var response = '';
      $.ajax({ type: "GET",
               url: "http://localhost/app/save.girar.php?idsession="+idsession+"&posicao="+posicao+"&angulo="+angulo,
               async: false,
               success : function(text)
               {
                   response = text;
               }
      });
   });
}

function LimpaGirarImg(idsession, posicao) {
   GirarImg(idsession, posicao, 0);
}

function MontaCapa(modelo, layout) {
   $(document).ready(function(){
      var response = '';
      $.ajax({ type: "GET",
               url: "http://localhost/app/capinha/?m="+modelo+"&l="+layout,
               async: false,
               success : function(text)
               {
                   response = text;
               }
      });

      var myNode = document.getElementById("divcapinha");
      while (myNode.firstChild) {
          myNode.removeChild(myNode.firstChild);
      }

      $('#divcapinha').prepend(response);
   });

   if (modelo == '0') { $('#mascarasuperior').css("background-image", "url(/app/img/mask-iphone4-top.png)"); }
   if (modelo == '1') { $('#mascarasuperior').css("background-image", "url(/app/img/mask-iphone5-top.png)"); }
   if (modelo == '2') { $('#mascarasuperior').css("background-image", "url(/app/img/mask-galaxy3-top.png)"); }
   if (modelo == '3') { $('#mascarasuperior').css("background-image", "url(/app/img/mask-galaxy4-top.png)"); }
   if (modelo == '4') { $('#mascarasuperior').css("background-image", "url(/app/img/mask-galaxys2-top.png)"); }
   if (modelo == '5') { $('#mascarasuperior').css("background-image", "url(/app/img/mask-galaxyn2-top.png)"); }

}


function lixeiraremove(divname) {
   var eldvposicao=document.getElementById(divname); 

   var eldvposicaoChildren = eldvposicao.childNodes; 
   for(var i = 0; i < eldvposicaoChildren.length; i++) 
   { 
      if (eldvposicaoChildren.item(i).id != null && 
      eldvposicaoChildren.item(i).id != "" &&
      eldvposicaoChildren.item(i).id != "dvcontroles" &&
      eldvposicaoChildren.item(i).id != "dvcontroles1" &&
      eldvposicaoChildren.item(i).id != "dvcontroles2" &&
      eldvposicaoChildren.item(i).id != "dvfechar1" &&
      eldvposicaoChildren.item(i).id != "dvfechar2" &&
      eldvposicaoChildren.item(i).id != "dvfechar3" &&
      eldvposicaoChildren.item(i).id != "dvfechar4" &&
      eldvposicaoChildren.item(i).id != "dvfechar5" &&
      eldvposicaoChildren.item(i).id != "dvfechar6" &&
      eldvposicaoChildren.item(i).id != "dvfechar7" &&
      eldvposicaoChildren.item(i).id != "dvfechar8" &&
      eldvposicaoChildren.item(i).id != "dvfechar9" &&
      eldvposicaoChildren.item(i).id != "dvfechar10" &&
      eldvposicaoChildren.item(i).id != "dvfechar11" &&
      eldvposicaoChildren.item(i).id != "dvfechar12" &&
      eldvposicaoChildren.item(i).id != "dvfechar13" &&
      eldvposicaoChildren.item(i).id != "dvfechar14" &&
      eldvposicaoChildren.item(i).id != "dvfechar15" ) {

         var imgvoltar = '<div id="div'+eldvposicaoChildren.item(i).id+'" style="background-color: #FFFFFF; width: 50px; float: left; overflow: hidden; height: 50px; background: rgba(255,255,255,0.8); position: relative; display: inline-block; margin: 5px; vertical-align: top; border: 1px solid #acacac; padding: 6px 6px 6px 6px; -webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.16); box-shadow: 1px 1px 4px rgba(0,0,0,0.16); font-size: 14px; "> <img src="'+$('#'+eldvposicaoChildren.item(i).id).prop('src')+'" id="'+eldvposicaoChildren.item(i).id+'" draggable="true" ondragstart="drag(event)" style="max-width:100%; max-height:100%;"> </div>';

         $('#'+eldvposicaoChildren.item(i).id).remove();

         $('#preview').prepend(imgvoltar);
      }
   }
}


function finalizar() {
   if (document.getElementById("modelodocelular").value == "") {
      alert('Selecione o modelo de seu celular!');
      goto1();
   }
   else {
      if (document.getElementById("layoutdacapinha").value == "") {
         alert('Selecione o layout de sua capinha!');
         goto2();
      }
      else {
         //alert('Selecione o filtro de suas fotos!');
         selecionarfiltro(0);
         document.getElementById("ircheckout2").style.display = "none";
         document.getElementById("ircheckout1").style.display = "block";
         goto4();
      }
   } 
}

function comprar() {
   window.parent.parent.window.location = '/app/save.product.php?idcsession='+document.getElementById("idsession").value+'&m='+document.getElementById("modelodocelular").value+'&l='+document.getElementById("layoutdacapinha").value+'&f='+document.getElementById("filtrocapinha").value;
}

function selecionarmodelo(modelo) {
   var smodelo = document.getElementById("modelodocelular").value=modelo.value;

   //Para onde vai
   if (document.getElementById("layoutdacapinha").value == "") {
      MontaCapa(smodelo,0);
      goto2();
   }
   else {
      goto3();
      var slayout = document.getElementById("layoutdacapinha").value;
      MontaCapa(smodelo,slayout);
   }

   VoltarEdicao();
}


function selecionalayout(layout) {
   var slayout = document.getElementById("layoutdacapinha").value=layout.value;
   if (document.getElementById("modelodocelular").value == "") {
      goto1();   
   }
   else {
      goto3();
      var smodelo = document.getElementById("modelodocelular").value;
      MontaCapa(smodelo,slayout);
   }

   VoltarEdicao();
}

function mostramascarasup() {
   document.getElementById("mascarasuperior").style.display="block";
   escondecontroles();
}


function escondemascarasup() {
   document.getElementById("mascarasuperior").style.display="none";
   mostracontroles();
}

function mostracontroles() {
   $('#dvcontroles').show();
   $('#dvcontroles1').show();
   $('#dvcontroles2').show();
   $('#dvfechar1').show();
   $('#dvfechar2').show();
   $('#dvfechar3').show();
   $('#dvfechar4').show();
   $('#dvfechar5').show();
   $('#dvfechar6').show();
   $('#dvfechar7').show();
   $('#dvfechar8').show();
   $('#dvfechar9').show();
   $('#dvfechar10').show();
   $('#dvfechar11').show();
   $('#dvfechar12').show();
   $('#dvfechar13').show();
   $('#dvfechar14').show();
   $('#dvfechar15').show();
}

function escondecontroles() {
   $('#dvcontroles').hide();
   $('#dvcontroles1').hide();
   $('#dvcontroles2').hide();
   $('#dvfechar1').hide();
   $('#dvfechar2').hide();
   $('#dvfechar3').hide();
   $('#dvfechar4').hide();
   $('#dvfechar5').hide();
   $('#dvfechar6').hide();
   $('#dvfechar7').hide();
   $('#dvfechar8').hide();
   $('#dvfechar9').hide();
   $('#dvfechar10').hide();
   $('#dvfechar11').hide();
   $('#dvfechar12').hide();
   $('#dvfechar13').hide();
   $('#dvfechar14').hide();
   $('#dvfechar15').hide();
}


function zoommais(dvposicao) {
   var eldvposicao=document.getElementById(dvposicao); 

   var eldvposicaoChildren = eldvposicao.childNodes; 
   for(var i = 0; i < eldvposicaoChildren.length; i++) 
   { 
      if (eldvposicaoChildren.item(i).id != null && 
      eldvposicaoChildren.item(i).id != "" &&
      eldvposicaoChildren.item(i).id != "dvcontroles" &&
      eldvposicaoChildren.item(i).id != "dvcontroles1" &&
      eldvposicaoChildren.item(i).id != "dvcontroles2" &&
      eldvposicaoChildren.item(i).id != "dvfechar1" &&
      eldvposicaoChildren.item(i).id != "dvfechar2" &&
      eldvposicaoChildren.item(i).id != "dvfechar3" &&
      eldvposicaoChildren.item(i).id != "dvfechar4" &&
      eldvposicaoChildren.item(i).id != "dvfechar5" &&
      eldvposicaoChildren.item(i).id != "dvfechar6" &&
      eldvposicaoChildren.item(i).id != "dvfechar7" &&
      eldvposicaoChildren.item(i).id != "dvfechar8" &&
      eldvposicaoChildren.item(i).id != "dvfechar9" &&
      eldvposicaoChildren.item(i).id != "dvfechar10" &&
      eldvposicaoChildren.item(i).id != "dvfechar11" &&
      eldvposicaoChildren.item(i).id != "dvfechar12" &&
      eldvposicaoChildren.item(i).id != "dvfechar13" &&
      eldvposicaoChildren.item(i).id != "dvfechar14" &&
      eldvposicaoChildren.item(i).id != "dvfechar15" ) {

         var elimagem=document.getElementById(eldvposicaoChildren.item(i).id); 
         var imwidth=elimagem.width;
         nimwidth=imwidth*1.05;
         elimagem.width=nimwidth;

         var imheight=elimagem.height;
         nimheight=imheight*1.05;
         elimagem.height=nimheight;

         //controle
         var posicao = 0;
         if (dvposicao == 'divl1') {posicao = 1;}
         if (dvposicao == 'divl2a') {posicao = 1;}
         if (dvposicao == 'divl2b') {posicao = 2;}
         var imleft=elimagem.style.marginLeft;
         if (imleft == "") { 
            imleft = 0; 
         }
         else {
            imleft = imleft.replace("px","");   
         }
         var imtop=elimagem.style.marginTop;
         if (imtop == "") { 
            imtop = 0; 
         }
         else {
            imtop = imtop.replace("px","");   
         }   
         var imwidth=elimagem.width;
         var imheight=elimagem.height;
         idsession = document.getElementById('idsession').value;
         updateposition(idsession, posicao, imheight, imwidth, imleft, imtop);
      }
      
   }
}


function zoommenos(dvposicao) {
   var eldvposicao=document.getElementById(dvposicao); 

   var eldvposicaoChildren = eldvposicao.childNodes; 
   for(var i = 0; i < eldvposicaoChildren.length; i++) 
   { 
      if (eldvposicaoChildren.item(i).id != null && 
      eldvposicaoChildren.item(i).id != "" &&
      eldvposicaoChildren.item(i).id != "dvcontroles" &&
      eldvposicaoChildren.item(i).id != "dvcontroles1" &&
      eldvposicaoChildren.item(i).id != "dvcontroles2" &&
      eldvposicaoChildren.item(i).id != "dvfechar1" &&
      eldvposicaoChildren.item(i).id != "dvfechar2" &&
      eldvposicaoChildren.item(i).id != "dvfechar3" &&
      eldvposicaoChildren.item(i).id != "dvfechar4" &&
      eldvposicaoChildren.item(i).id != "dvfechar5" &&
      eldvposicaoChildren.item(i).id != "dvfechar6" &&
      eldvposicaoChildren.item(i).id != "dvfechar7" &&
      eldvposicaoChildren.item(i).id != "dvfechar8" &&
      eldvposicaoChildren.item(i).id != "dvfechar9" &&
      eldvposicaoChildren.item(i).id != "dvfechar10" &&
      eldvposicaoChildren.item(i).id != "dvfechar11" &&
      eldvposicaoChildren.item(i).id != "dvfechar12" &&
      eldvposicaoChildren.item(i).id != "dvfechar13" &&
      eldvposicaoChildren.item(i).id != "dvfechar14" &&
      eldvposicaoChildren.item(i).id != "dvfechar15" ) {

         var elimagem=document.getElementById(eldvposicaoChildren.item(i).id); 
         var imwidth=elimagem.width;
         nimwidth=imwidth*0.95;
         elimagem.width=nimwidth;

         var imheight=elimagem.height;
         nimheight=imheight*0.95;
         elimagem.height=nimheight;

         //controle
         var posicao = 0;
         if (dvposicao == 'divl1') {posicao = 1;}
         if (dvposicao == 'divl2a') {posicao = 1;}
         if (dvposicao == 'divl2b') {posicao = 2;}
         var imleft=elimagem.style.marginLeft;
         if (imleft == "") { 
            imleft = 0; 
         }
         else {
            imleft = imleft.replace("px","");   
         }
         var imtop=elimagem.style.marginTop;
         if (imtop == "") { 
            imtop = 0; 
         }
         else {
            imtop = imtop.replace("px","");   
         }   
         var imwidth=elimagem.width;
         var imheight=elimagem.height;
         idsession = document.getElementById('idsession').value;
         updateposition(idsession, posicao, imheight, imwidth, imleft, imtop);
      }
      
   }
}




function moverup(dvposicao) {
   var eldvposicao=document.getElementById(dvposicao); 

   var eldvposicaoChildren = eldvposicao.childNodes; 
   for(var i = 0; i < eldvposicaoChildren.length; i++) 
   { 
      if (eldvposicaoChildren.item(i).id != null && 
      eldvposicaoChildren.item(i).id != "" &&
      eldvposicaoChildren.item(i).id != "dvcontroles" &&
      eldvposicaoChildren.item(i).id != "dvcontroles1" &&
      eldvposicaoChildren.item(i).id != "dvcontroles2" &&
      eldvposicaoChildren.item(i).id != "dvfechar1" &&
      eldvposicaoChildren.item(i).id != "dvfechar2" &&
      eldvposicaoChildren.item(i).id != "dvfechar3" &&
      eldvposicaoChildren.item(i).id != "dvfechar4" &&
      eldvposicaoChildren.item(i).id != "dvfechar5" &&
      eldvposicaoChildren.item(i).id != "dvfechar6" &&
      eldvposicaoChildren.item(i).id != "dvfechar7" &&
      eldvposicaoChildren.item(i).id != "dvfechar8" &&
      eldvposicaoChildren.item(i).id != "dvfechar9" &&
      eldvposicaoChildren.item(i).id != "dvfechar10" &&
      eldvposicaoChildren.item(i).id != "dvfechar11" &&
      eldvposicaoChildren.item(i).id != "dvfechar12" &&
      eldvposicaoChildren.item(i).id != "dvfechar13" &&
      eldvposicaoChildren.item(i).id != "dvfechar14" &&
      eldvposicaoChildren.item(i).id != "dvfechar15" ) {

         var elimagem=document.getElementById(eldvposicaoChildren.item(i).id); 
         var imtop=elimagem.style.marginTop;
         if (imtop == "") { 
            imtop = 0; 
         }
         else {
            imtop = imtop.replace("px","");   
         }         
         var nimtop=parseFloat(0);
         nimtop=parseFloat(imtop)+parseFloat(-5);
         elimagem.style.marginTop=nimtop;

         //controle
         var posicao = 0;
         if (dvposicao == 'divl1') {posicao = 1;}
         if (dvposicao == 'divl2a') {posicao = 1;}
         if (dvposicao == 'divl2b') {posicao = 2;}
         var imleft=elimagem.style.marginLeft;
         if (imleft == "") { 
            imleft = 0; 
         }
         else {
            imleft = imleft.replace("px","");   
         }
         var imtop=elimagem.style.marginTop;
         if (imtop == "") { 
            imtop = 0; 
         }
         else {
            imtop = imtop.replace("px","");   
         }   
         var imwidth=elimagem.width;
         var imheight=elimagem.height;
         idsession = document.getElementById('idsession').value;
         updateposition(idsession, posicao, imheight, imwidth, imleft, imtop);
      }
      
   }
}


function moverbaixo(dvposicao) {
   var eldvposicao=document.getElementById(dvposicao); 

   var eldvposicaoChildren = eldvposicao.childNodes; 
   for(var i = 0; i < eldvposicaoChildren.length; i++) 
   { 
      if (eldvposicaoChildren.item(i).id != null && 
      eldvposicaoChildren.item(i).id != "" &&
      eldvposicaoChildren.item(i).id != "dvcontroles" &&
      eldvposicaoChildren.item(i).id != "dvcontroles1" &&
      eldvposicaoChildren.item(i).id != "dvcontroles2" &&
      eldvposicaoChildren.item(i).id != "dvfechar1" &&
      eldvposicaoChildren.item(i).id != "dvfechar2" &&
      eldvposicaoChildren.item(i).id != "dvfechar3" &&
      eldvposicaoChildren.item(i).id != "dvfechar4" &&
      eldvposicaoChildren.item(i).id != "dvfechar5" &&
      eldvposicaoChildren.item(i).id != "dvfechar6" &&
      eldvposicaoChildren.item(i).id != "dvfechar7" &&
      eldvposicaoChildren.item(i).id != "dvfechar8" &&
      eldvposicaoChildren.item(i).id != "dvfechar9" &&
      eldvposicaoChildren.item(i).id != "dvfechar10" &&
      eldvposicaoChildren.item(i).id != "dvfechar11" &&
      eldvposicaoChildren.item(i).id != "dvfechar12" &&
      eldvposicaoChildren.item(i).id != "dvfechar13" &&
      eldvposicaoChildren.item(i).id != "dvfechar14" &&
      eldvposicaoChildren.item(i).id != "dvfechar15" ) {

         var elimagem=document.getElementById(eldvposicaoChildren.item(i).id); 
         var imtop=elimagem.style.marginTop;
         if (imtop == "") { 
            imtop = 0; 
         }
         else {
            imtop = imtop.replace("px","");   
         }         
         var nimtop=parseFloat(0);
         nimtop=parseFloat(imtop)+parseFloat(5);
         elimagem.style.marginTop=nimtop;

         //controle
         var posicao = 0;
         if (dvposicao == 'divl1') {posicao = 1;}
         if (dvposicao == 'divl2a') {posicao = 1;}
         if (dvposicao == 'divl2b') {posicao = 2;}
         var imleft=elimagem.style.marginLeft;
         if (imleft == "") { 
            imleft = 0; 
         }
         else {
            imleft = imleft.replace("px","");   
         }
         var imtop=elimagem.style.marginTop;
         if (imtop == "") { 
            imtop = 0; 
         }
         else {
            imtop = imtop.replace("px","");   
         }   
         var imwidth=elimagem.width;
         var imheight=elimagem.height;
         idsession = document.getElementById('idsession').value;
         updateposition(idsession, posicao, imheight, imwidth, imleft, imtop);
      }
      
   }
}




function moveresq(dvposicao) {
   var eldvposicao=document.getElementById(dvposicao); 

   var eldvposicaoChildren = eldvposicao.childNodes; 
   for(var i = 0; i < eldvposicaoChildren.length; i++) 
   { 
      if (eldvposicaoChildren.item(i).id != null && 
      eldvposicaoChildren.item(i).id != "" &&
      eldvposicaoChildren.item(i).id != "dvcontroles" &&
      eldvposicaoChildren.item(i).id != "dvcontroles1" &&
      eldvposicaoChildren.item(i).id != "dvcontroles2" &&
      eldvposicaoChildren.item(i).id != "dvfechar1" &&
      eldvposicaoChildren.item(i).id != "dvfechar2" &&
      eldvposicaoChildren.item(i).id != "dvfechar3" &&
      eldvposicaoChildren.item(i).id != "dvfechar4" &&
      eldvposicaoChildren.item(i).id != "dvfechar5" &&
      eldvposicaoChildren.item(i).id != "dvfechar6" &&
      eldvposicaoChildren.item(i).id != "dvfechar7" &&
      eldvposicaoChildren.item(i).id != "dvfechar8" &&
      eldvposicaoChildren.item(i).id != "dvfechar9" &&
      eldvposicaoChildren.item(i).id != "dvfechar10" &&
      eldvposicaoChildren.item(i).id != "dvfechar11" &&
      eldvposicaoChildren.item(i).id != "dvfechar12" &&
      eldvposicaoChildren.item(i).id != "dvfechar13" &&
      eldvposicaoChildren.item(i).id != "dvfechar14" &&
      eldvposicaoChildren.item(i).id != "dvfechar15" ) {

         var elimagem=document.getElementById(eldvposicaoChildren.item(i).id); 
         var imleft=elimagem.style.marginLeft;
         if (imleft == "") { 
            imleft = 0; 
         }
         else {
            imleft = imleft.replace("px","");   
         }         
         var nimleft=parseFloat(0);
         nimleft=parseFloat(imleft)+parseFloat(-5);
         elimagem.style.marginLeft=nimleft;

         //controle
         var posicao = 0;
         if (dvposicao == 'divl1') {posicao = 1;}
         if (dvposicao == 'divl2a') {posicao = 1;}
         if (dvposicao == 'divl2b') {posicao = 2;}
         var imleft=elimagem.style.marginLeft;
         if (imleft == "") { 
            imleft = 0; 
         }
         else {
            imleft = imleft.replace("px","");   
         }
         var imtop=elimagem.style.marginTop;
         if (imtop == "") { 
            imtop = 0; 
         }
         else {
            imtop = imtop.replace("px","");   
         }   
         var imwidth=elimagem.width;
         var imheight=elimagem.height;
         idsession = document.getElementById('idsession').value;
         updateposition(idsession, posicao, imheight, imwidth, imleft, imtop);
      }
      
   }
}





function moverdir(dvposicao) {
   var eldvposicao=document.getElementById(dvposicao); 

   var eldvposicaoChildren = eldvposicao.childNodes; 
   for(var i = 0; i < eldvposicaoChildren.length; i++) 
   { 
      if (eldvposicaoChildren.item(i).id != null && 
      eldvposicaoChildren.item(i).id != "" &&
      eldvposicaoChildren.item(i).id != "dvcontroles" &&
      eldvposicaoChildren.item(i).id != "dvcontroles1" &&
      eldvposicaoChildren.item(i).id != "dvcontroles2" &&
      eldvposicaoChildren.item(i).id != "dvfechar1" &&
      eldvposicaoChildren.item(i).id != "dvfechar2" &&
      eldvposicaoChildren.item(i).id != "dvfechar3" &&
      eldvposicaoChildren.item(i).id != "dvfechar4" &&
      eldvposicaoChildren.item(i).id != "dvfechar5" &&
      eldvposicaoChildren.item(i).id != "dvfechar6" &&
      eldvposicaoChildren.item(i).id != "dvfechar7" &&
      eldvposicaoChildren.item(i).id != "dvfechar8" &&
      eldvposicaoChildren.item(i).id != "dvfechar9" &&
      eldvposicaoChildren.item(i).id != "dvfechar10" &&
      eldvposicaoChildren.item(i).id != "dvfechar11" &&
      eldvposicaoChildren.item(i).id != "dvfechar12" &&
      eldvposicaoChildren.item(i).id != "dvfechar13" &&
      eldvposicaoChildren.item(i).id != "dvfechar14" &&
      eldvposicaoChildren.item(i).id != "dvfechar15" ) {

         var elimagem=document.getElementById(eldvposicaoChildren.item(i).id); 
         var imleft=elimagem.style.marginLeft;
         if (imleft == "") { 
            imleft = 0; 
         }
         else {
            imleft = imleft.replace("px","");   
         }         
         var nimleft=parseFloat(0);
         nimleft=parseFloat(imleft)+parseFloat(5);
         elimagem.style.marginLeft=nimleft;


         //controle
         var posicao = 0;
         if (dvposicao == 'divl1') {posicao = 1;}
         if (dvposicao == 'divl2a') {posicao = 1;}
         if (dvposicao == 'divl2b') {posicao = 2;}
         var imleft=elimagem.style.marginLeft;
         if (imleft == "") { 
            imleft = 0; 
         }
         else {
            imleft = imleft.replace("px","");   
         }
         var imtop=elimagem.style.marginTop;
         if (imtop == "") { 
            imtop = 0; 
         }
         else {
            imtop = imtop.replace("px","");   
         }   
         var imwidth=elimagem.width;
         var imheight=elimagem.height;
         idsession = document.getElementById('idsession').value;
         updateposition(idsession, posicao, imheight, imwidth, imleft, imtop);
      }
      
   }
}

function virarmais(dvposicao) {
   var estavirado = document.getElementById('rot'+dvposicao).value;
   var novovirado = '0';
   if (estavirado == '0') { novovirado = '90'; }
   if (estavirado == '90') { novovirado = '180'; }
   if (estavirado == '180') { novovirado = '270'; }
   if (estavirado == '270') { novovirado = '0'; }

   var eldvposicao=document.getElementById(dvposicao); 

   var eldvposicaoChildren = eldvposicao.childNodes; 
   for(var i = 0; i < eldvposicaoChildren.length; i++) 
   { 
      if (eldvposicaoChildren.item(i).id != null && 
      eldvposicaoChildren.item(i).id != "" &&
      eldvposicaoChildren.item(i).id != "dvcontroles" &&
      eldvposicaoChildren.item(i).id != "dvcontroles1" &&
      eldvposicaoChildren.item(i).id != "dvcontroles2" &&
      eldvposicaoChildren.item(i).id != "dvfechar1" &&
      eldvposicaoChildren.item(i).id != "dvfechar2" &&
      eldvposicaoChildren.item(i).id != "dvfechar3" &&
      eldvposicaoChildren.item(i).id != "dvfechar4" &&
      eldvposicaoChildren.item(i).id != "dvfechar5" &&
      eldvposicaoChildren.item(i).id != "dvfechar6" &&
      eldvposicaoChildren.item(i).id != "dvfechar7" &&
      eldvposicaoChildren.item(i).id != "dvfechar8" &&
      eldvposicaoChildren.item(i).id != "dvfechar9" &&
      eldvposicaoChildren.item(i).id != "dvfechar10" &&
      eldvposicaoChildren.item(i).id != "dvfechar11" &&
      eldvposicaoChildren.item(i).id != "dvfechar12" &&
      eldvposicaoChildren.item(i).id != "dvfechar13" &&
      eldvposicaoChildren.item(i).id != "dvfechar14" &&
      eldvposicaoChildren.item(i).id != "dvfechar15" ) {

      

         var elimagem=document.getElementById(eldvposicaoChildren.item(i).id); 

         /* virar */
         (function( $ ){
         $.fn.rotate = function(deg) {
             this.css({'transform': 'rotate('+deg+'deg)'});
             this.css({'-ms-transform': 'rotate('+deg+'deg)'});
             this.css({'-moz-transform': 'rotate('+deg+'deg)'});
             this.css({'-o-transform': 'rotate('+deg+'deg)'}); 
             this.css({'-webkit-transform': 'rotate('+deg+'deg)'});
             return this; 
         };
         })( jQuery );
         /* virar fim */

         $('#'+eldvposicaoChildren.item(i).id).rotate(novovirado);
         $("#rot"+dvposicao).val(novovirado);
      }
   }

   //Grava no banco
   var novapos = '99';
   if (dvposicao == 'divl1') {novapos = '1';}
   if (dvposicao == 'divl2a') {novapos = '1';}
   if (dvposicao == 'divl2b') {novapos = '2';}
   idsession = document.getElementById('idsession').value;
   GirarImg(''+idsession, ''+novapos, ''+novovirado);
}


function virarmenos(dvposicao) {
   var estavirado = document.getElementById('rot'+dvposicao).value;
   var novovirado = '270';
   if (estavirado == '90') { novovirado = '0'; }
   if (estavirado == '180') { novovirado = '90'; }
   if (estavirado == '270') { novovirado = '180'; }
   if (estavirado == '0') { novovirado = '270'; }

   var eldvposicao=document.getElementById(dvposicao); 

   var eldvposicaoChildren = eldvposicao.childNodes; 
   for(var i = 0; i < eldvposicaoChildren.length; i++) 
   { 
      if (eldvposicaoChildren.item(i).id != null && 
      eldvposicaoChildren.item(i).id != "" &&
      eldvposicaoChildren.item(i).id != "dvcontroles" &&
      eldvposicaoChildren.item(i).id != "dvcontroles1" &&
      eldvposicaoChildren.item(i).id != "dvcontroles2" &&
      eldvposicaoChildren.item(i).id != "dvfechar1" &&
      eldvposicaoChildren.item(i).id != "dvfechar2" &&
      eldvposicaoChildren.item(i).id != "dvfechar3" &&
      eldvposicaoChildren.item(i).id != "dvfechar4" &&
      eldvposicaoChildren.item(i).id != "dvfechar5" &&
      eldvposicaoChildren.item(i).id != "dvfechar6" &&
      eldvposicaoChildren.item(i).id != "dvfechar7" &&
      eldvposicaoChildren.item(i).id != "dvfechar8" &&
      eldvposicaoChildren.item(i).id != "dvfechar9" &&
      eldvposicaoChildren.item(i).id != "dvfechar10" &&
      eldvposicaoChildren.item(i).id != "dvfechar11" &&
      eldvposicaoChildren.item(i).id != "dvfechar12" &&
      eldvposicaoChildren.item(i).id != "dvfechar13" &&
      eldvposicaoChildren.item(i).id != "dvfechar14" &&
      eldvposicaoChildren.item(i).id != "dvfechar15" ) {

      

         var elimagem=document.getElementById(eldvposicaoChildren.item(i).id); 

         /* virar */
         (function( $ ){
         $.fn.rotate = function(deg) {
             this.css({'transform': 'rotate('+deg+'deg)'});
             this.css({'-ms-transform': 'rotate('+deg+'deg)'});
             this.css({'-moz-transform': 'rotate('+deg+'deg)'});
             this.css({'-o-transform': 'rotate('+deg+'deg)'}); 
             this.css({'-webkit-transform': 'rotate('+deg+'deg)'});
             return this; 
         };
         })( jQuery );
         /* virar fim */

         $('#'+eldvposicaoChildren.item(i).id).rotate(novovirado);
         $("#rot"+dvposicao).val(novovirado);
      }
   }

   //Grava no banco
   var novapos = '99';
   if (dvposicao == 'divl1') {novapos = '1';}
   if (dvposicao == 'divl2a') {novapos = '1';}
   if (dvposicao == 'divl2b') {novapos = '2';}
   idsession = document.getElementById('idsession').value;
   GirarImg(''+idsession, ''+novapos, ''+novovirado);
}

function updateposition(idsession, posicao, nheight, nwidth, nleft, ntop)
{
    document.getElementById("invfr"+posicao).src="http://localhost/app/update.posicao.php?idcsession="+idsession+"&posicao="+posicao+"&imagem="+imagemurl+"&nheight="+nheight+"&nwidth="+nwidth+"&nleft="+nleft+"&ntop="+ntop;
}





