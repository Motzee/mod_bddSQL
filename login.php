<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<meta name="description" content="modèle de formulaire centré et responsive" />
		<title>Test de présentation de form centré et responsive</title>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--> <!--si t'es un vieux navigateur, t'as besoin de ça pour comprendre la nouvelle ossature de page issue de html5-->
	</head>

<body>
<style>
* {
    box-sizing : border-box ;
}

form {
    padding : 1.5rem ;
    padding-bottom : 0 ;
    width : 600px ;
    background : grey ;
    border : 2px solid black ;
    border-radius : 25px ;
    box-shadow : 2px 2px 2px grey ;
    margin : auto ;
}

h1 {
    font-size : 1.25rem ;
    text-align : center ;
    margin-top : 0.25rem ;
    margin-bottom : 2rem ;
}

input[type="text"], input[type="password"], input[type="email"], input[type="url"], input[type="tel"], input[type="number"], input[type="range"], input[type="color"], input[type="search"], select, textarea {
    width : calc((600px - 4px - 3rem) / 3 * 2) ;
    margin-top : -0.15rem ;
}

.champ_aligne {
    display: block;
    width : calc((600px - 4px - 3rem) / 3 - 1rem) ;
    float : left ;
    text-align : right ;
    margin-right : 1rem ;
}

.champ_decale {
    margin-left : calc((600px - 4px - 3rem) / 3) ;
}

.radio {
    display : flex ;
    flex-wrap : wrap ;
}

.radio > * {
    width : 50% ;
    hyphens: auto;
}

.champ_droite  {
    text-align : right ;
}

label[required]::after {
    content : " *" ;
    color : red ;
    font-weight : bold ;
}


input[type="checkbox"], input[type="radio"] {
    position : relative ;
    top : 0.15rem ;
}

@media screen and (max-width : 600px) {
    form {
        width : 100% ;
        min-width : 320px ;
    }

    input[type="text"], input[type="password"], input[type="email"], input[type="url"], input[type="tel"], input[type="number"], input[type="range"], input[type="color"], input[type="search"], select, textarea {
        width : 100% ;
        margin-top : 0 ;
    }

    .champ_aligne {
        text-align : left ;
        width : 100% ;
    }


    .champ_decale {
        margin : 0 ;
    }

    .radio {
        margin-bottom : 0.5rem ;
    }

    .champ_droite  {
        text-align : center ;
    }
    
}
</style>

<main>
<form>
<legend><h1>Complétez le formulaire</h1></legend>

<!--Petit champ texte-->
<p><label for="thetruc" class="champ_aligne" required >Pseudo</label>
<input id="thetruc" name="truc" type="text" value="par défaut"/></p>

<!--Textarea-->
<p><label for="ameliorer" class="champ_aligne">Que faire si le label est vraiment très grand ???</label>
<textarea id="ameliorer" name="messageAmeliore" rows="8" cols="45">
Votre message (valeur par défaut) ici.
</textarea></p>

<!--Boutons select-->
<p><label for="pays" class="champ_aligne">Dans quel pays habitez-vous ?</label>
<select name="choixPays" id="pays">
	<option value="choix1" selected="selected" >Choix 1</option>
	<option value="choix2">Choix 2</option>
	<option value="choix3">Choix 3</option>
	<option value="choix4">Choix 4</option>
</select></p>

<!--Boutons radio-->
<p class="champ_decale radio">
<span class="bouton-radio"><input type="radio" name="frites" value="oui" id="yes" checked="checked" /> <label for="yes">Oui</label></span>
<span class="bouton-radio"><input type="radio" name="frites" value="non" id="no" /> <label for="no">Non, j'ai un gros problème avec les choix</label></span>
<span class="bouton-radio"><input type="radio" name="frites" value="oui" id="yes" checked="checked" /> <label for="yes">Peut-être</label></span>
<span class="bouton-radio"><input type="radio" name="frites" value="oui" id="yes" checked="checked" /> <label for="yes">Je sais pas</label></span>
</p>


<!--Boites à cocher-->
<p class="champ_decale"><input type="checkbox" name="lacase1" id="case" /> <label for="case">Ma case à</label></p>
<p class="champ_decale"><input type="checkbox" name="lacase2" id="case2" /> <label for="case2">Ma case à cocher dans le cas où le texte est long long super long</label></p>
<p class="champ_decale"><input type="checkbox" name="lacase3" id="case3" checked="checked" /> <label for="case3">Ma case à cocher ou pas</label></p>

<!--Bouton de validation-->
<p class="champ_droite"><input type="submit" value="Valider" /></p>
</form>
</main>


</body>
</html>
