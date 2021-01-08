$(document).ready(function () {

	var moviecontainers = document.getElementsByClassName("customcontrols");

	Array.prototype.forEach.call(moviecontainers, function (element) {
		var movie = element.querySelector("video"),
			controls = element.querySelector("figcaption"),
			playpause = controls.querySelector("a");
		movie.removeAttribute("controls");
		controls.style.display = "block";

		movie.addEventListener('ended', (event) => {
			playpause.innerHTML = "⭮";
		});

		playpause.addEventListener("click", function (e) {
			e.preventDefault()
			if (movie.paused) {
				movie.play();
				playpause.innerHTML = "◼";
			} else {
				movie.pause();
				playpause.innerHTML = "►";
			}
		});
	});
});