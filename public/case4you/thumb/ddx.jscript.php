<script>
function allowDrop(ev)
{
	ev.preventDefault();
}

function drag(ev)
{
	ev.dataTransfer.setData("Text",ev.target.id);
}

function saveposition(posicao, imagemurl)
{
    document.getElementById("invfr1").src="http://localhost/case4you/save.posicao.php?idcsession=<?php echo $idcsession; ?>&modelo=<?php echo $gmodelo; ?>&layout=<?php echo $glayout; ?>&posicao="+posicao+"&imagem="+imagemurl;
}

function mountimage()
{
        //ev.target.appendChild(document.getElementById(data));
        //document.getElementById(data).style.opacity='0.75';
        //document.getElementById(data).style.filter='alpha(opacity=75)';

        iwidth=document.getElementById(data5).width;
        iheight=document.getElementById(data5).height;

        // --- Variaveis ---
        pheight=527;
        pwidth=340;
        // -----------------

        idiff=iheight/iwidth;
        iprop=pheight/pwidth;
        if (idiff<iprop) {
                document.getElementById(data5).height=pheight;
                nwidth=pheight/iheight*iwidth;
                document.getElementById(data5).width=nwidth;

                nleft=(pwidth-nwidth)/2;
                document.getElementById(data5).style.marginLeft=nleft+'px';
        } else {
                document.getElementById(data5).width=pwidth;
                nheight=pwidth/iwidth*iheight;
                document.getElementById(data5).height=nheight;

                ntop=(pheight-nheight)/2;
                document.getElementById(data5).style.marginTop=ntop+'px';
        }
        document.getElementById(data5).style.maxHeight='5000%';
        document.getElementById(data5).style.maxWidth='5000%';

        document.getElementById(divl1).target.appendChild(document.getElementById(data5));

}


function drop(ev, posicao)
{
	ev.preventDefault();
	var data=ev.dataTransfer.getData("Text");
	//ev.target.appendChild(document.getElementById(data));
	document.getElementById(data).style.opacity='0.75';
	document.getElementById(data).style.filter='alpha(opacity=75)';

	iwidth=document.getElementById(data).width;
	iheight=document.getElementById(data).height;

	// --- Variaveis ---
	pheight=527;
	pwidth=340;
	// -----------------

	idiff=iheight/iwidth;
	iprop=pheight/pwidth;
	if (idiff<iprop) {
		document.getElementById(data).height=pheight;
		nwidth=pheight/iheight*iwidth;
		document.getElementById(data).width=nwidth;

		nleft=(pwidth-nwidth)/2;
		document.getElementById(data).style.marginLeft=nleft+'px';
	} else {
	        document.getElementById(data).width=pwidth;
		nheight=pwidth/iwidth*iheight;
		document.getElementById(data).height=nheight;

		ntop=(pheight-nheight)/2;
		document.getElementById(data).style.marginTop=ntop+'px';
	}
	document.getElementById(data).style.maxHeight='5000%';
	document.getElementById(data).style.maxWidth='5000%';

	document.getElementById("div"+data).style.display='none';
	ev.target.appendChild(document.getElementById(data));

    imagemurl = document.getElementById(data).src;
    saveposition(posicao, imagemurl);
}

function dropl2(ev, posicao)
{
        ev.preventDefault();
        var data=ev.dataTransfer.getData("Text");
        //ev.target.appendChild(document.getElementById(data));
        document.getElementById(data).style.opacity='0.75';
        document.getElementById(data).style.filter='alpha(opacity=75)';

        iwidth=document.getElementById(data).width;
        iheight=document.getElementById(data).height;

        // --- Variaveis ---
        pheight=<?php echo $mh2; ?>;
        pwidth=<?php echo $mw2; ?>;
        // -----------------

        idiff=iheight/iwidth;
        iprop=pheight/pwidth;
        if (idiff<iprop) {
                document.getElementById(data).height=pheight;
                nwidth=pheight/iheight*iwidth;
                document.getElementById(data).width=nwidth;

                nleft=(pwidth-nwidth)/2;
                document.getElementById(data).style.marginLeft=nleft+'px';
        } else {
                document.getElementById(data).width=pwidth;
                nheight=pwidth/iwidth*iheight;
                document.getElementById(data).height=nheight;

                ntop=(pheight-nheight)/2;
                document.getElementById(data).style.marginTop=ntop+'px';
        }
        document.getElementById(data).style.maxHeight='5000%';
        document.getElementById(data).style.maxWidth='5000%';

        document.getElementById("div"+data).style.display='none';
        ev.target.appendChild(document.getElementById(data));

        imagemurl = document.getElementById(data).src;
        saveposition(posicao, imagemurl);
}

function dropl15a(ev, posicao)
{
        ev.preventDefault();
        var data=ev.dataTransfer.getData("Text");
        //ev.target.appendChild(document.getElementById(data));
        document.getElementById(data).style.opacity='0.75';
        document.getElementById(data).style.filter='alpha(opacity=75)';

        iwidth=document.getElementById(data).width;
        iheight=document.getElementById(data).height;

        // --- Variaveis ---
        pheight=<?php echo $mh15a; ?>;
        pwidth=<?php echo $mw15a; ?>;
        // -----------------

        idiff=iheight/iwidth;
        iprop=pheight/pwidth;
        if (idiff<iprop) {
                document.getElementById(data).height=pheight;
                nwidth=pheight/iheight*iwidth;
                document.getElementById(data).width=nwidth;

                nleft=(pwidth-nwidth)/2;
                document.getElementById(data).style.marginLeft=nleft+'px';
        } else {
                document.getElementById(data).width=pwidth;
                nheight=pwidth/iwidth*iheight;
                document.getElementById(data).height=nheight;

                ntop=(pheight-nheight)/2;
                document.getElementById(data).style.marginTop=ntop+'px';
        }
        document.getElementById(data).style.maxHeight='5000%';
        document.getElementById(data).style.maxWidth='5000%';

        document.getElementById("div"+data).style.display='none';
        ev.target.appendChild(document.getElementById(data));

        imagemurl = document.getElementById(data).src;
        saveposition(posicao, imagemurl);
}

function droplixeira(ev)
{
        ev.preventDefault();
        var data=ev.dataTransfer.getData("Text");
        //ev.target.appendChild(document.getElementById(data));
        document.getElementById(data).style.opacity='0.75';
        document.getElementById(data).style.filter='alpha(opacity=75)';

	document.getElementById(data).style.display='none';

        iwidth=document.getElementById(data).width;
        iheight=document.getElementById(data).height;

        // --- Variaveis ---
        pheight=55;
        pwidth=55;
        // -----------------

        idiff=iheight/iwidth;
        iprop=pheight/pwidth;
        if (idiff<iprop) {
                document.getElementById(data).height=pheight;
                nwidth=pheight/iheight*iwidth;
                document.getElementById(data).width=nwidth;

                nleft=(pwidth-nwidth)/2;
                document.getElementById(data).style.marginLeft=nleft+'px';
        } else {
                document.getElementById(data).width=pwidth;
                nheight=pwidth/iwidth*iheight;
                document.getElementById(data).height=nheight;

                ntop=(pheight-nheight)/2;
                document.getElementById(data).style.marginTop=ntop+'px';
        }
        document.getElementById(data).style.maxHeight='5000%';
        document.getElementById(data).style.maxWidth='5000%';

        document.getElementById("div"+data).style.display='none';
        ev.target.appendChild(document.getElementById(data));
}

function dropl15b(ev, posicao)
{
        ev.preventDefault();
        var data=ev.dataTransfer.getData("Text");
        //ev.target.appendChild(document.getElementById(data));
        document.getElementById(data).style.opacity='0.75';
        document.getElementById(data).style.filter='alpha(opacity=75)';

        iwidth=document.getElementById(data).width;
        iheight=document.getElementById(data).height;

        // --- Variaveis ---
        pheight=<?php echo $mh15b; ?>;
        pwidth=<?php echo $mw15b; ?>;
        // -----------------

        idiff=iheight/iwidth;
        iprop=pheight/pwidth;
        if (idiff<iprop) {
                document.getElementById(data).height=pheight;
                nwidth=pheight/iheight*iwidth;
                document.getElementById(data).width=nwidth;

                nleft=(pwidth-nwidth)/2;
                document.getElementById(data).style.marginLeft=nleft+'px';
        } else {
                document.getElementById(data).width=pwidth;
                nheight=pwidth/iwidth*iheight;
                document.getElementById(data).height=nheight;

                ntop=(pheight-nheight)/2;
                document.getElementById(data).style.marginTop=ntop+'px';
        }
        document.getElementById(data).style.maxHeight='5000%';
        document.getElementById(data).style.maxWidth='5000%';

        document.getElementById("div"+data).style.display='none';
        ev.target.appendChild(document.getElementById(data));

        imagemurl = document.getElementById(data).src;
        saveposition(posicao, imagemurl);
}

</script>
