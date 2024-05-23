var byline = document.getElementById('byline');  	//trouve le h2 byline
bylineText = byline.innerHTML;										// Récupere le contenu
bylineArr = bylineText.split('');									// transforme en tableau
byline.innerHTML = '';														// contenu vide

var span;					// crée les variables
var letter;

for(i=0;i<bylineArr.length;i++){									//loop pour toute les lettres
  span = document.createElement("span");					// Crée le span
  letter = document.createTextNode(bylineArr[i]);	// Create et les lettres
  if(bylineArr[i] == ' ') {												// Si les lettres sont 'espace'
    byline.appendChild(letter);					// ajouter l'espace sans span
  } else {
		span.appendChild(letter);						// ajouter les lettres au span
  	byline.appendChild(span); 					// ajouter le span au h2
  }
}
