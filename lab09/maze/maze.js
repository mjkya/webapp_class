/* CSE3026 : Web Application Development
 * Lab 09 - Maze
 */

var loser = null;
var end = true;  // whether the user has hit a wall

window.onload = function() {
	$$('div#maze div.boundary').each(function (item) {
		item.observe('mouseover', overBoundary);
	});
	$('end').observe('mouseover', overEnd);
	$('start').observe('click', startClick);
	document.body.observe('mouseover', overBody);
};

// called when mouse enters the walls; 
// signals the end of the game with a loss
function overBoundary(event) {
	
	$$("div#maze div.boundary").each(function (item) {
		item.addClassName("youlose");
	});
	$("status").textContent = "You lose! :(";
	// alert('You lose! :(');
}

// called when mouse is clicked on Start div;
// sets the maze back to its initial playable state
function startClick() {
	$$("div#maze div.boundary").each(function (item) {
		item.removeClassName("youlose");
	});
	end = true;
	$("status").textContent = "Find the end";
}

// called when mouse is on top of the End div.
// signals the end of the game with a win
function overEnd() {
	$("status").textContent = "You win! :)";
	// alert('You win! :)');

}

// test for mouse being over document.body so that the player
// can't cheat by going outside the maze
function overBody(event) {
	var x = document.getElementsByTagName("BODY")[0];
	if(event.element()==x){
		overBoundary(event);
	$("status").textContent = "You lose! :(";
	end = true;
	// alert('You lose! :(');
	}
}




