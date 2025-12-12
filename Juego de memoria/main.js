const icons = [
  "fa-heart", "fa-star", "fa-moon", "fa-sun", "fa-apple-alt",
  "fa-anchor", "fa-bicycle", "fa-bolt", "fa-cat", "fa-car"
];

let selected = [];
let matched = [];
let score = 0;
let time = 0;
let timerInterval;
const maxTime = 60;

const gameContainer = document.getElementById("game");
const scoreText = document.getElementById("score");
const timerText = document.getElementById("timer");

function createCard(icon, index) {
  const card = document.createElement('div');
  card.classList.add("card");
  card.dataset.icon = icon;
  card.dataset.index = index;

  const inner = document.createElement('div');
  inner.classList.add('inner-card');

  // Estructura del frente y reverso de la carta
  inner.innerHTML = `
    <div class="front"></div>
    <div class="back"><i class="fas ${icon}"></i></div>
  `;

  card.appendChild(inner);

  // Evento de clic para voltear carta
  card.addEventListener('click', () => flipCard(card));

  return card;
}


Function shuffleArray(arr) {
return arr.sort(() => 0.5 Math.random());
}


function startGame() {
clearInterval(timerInterval);
time = 0;
gameover = false;
timerText.textContent - Tiempo: 6s";
timerInterval setInterval(() => {
time++;
timerText.textContent Tiempo: $(time)s";
if (time > maxtime) [
clearInterval(timerInterval);
gameover = true;
alert(' ¡Game Over! Se acabó el tiempo.");

},1000); 1



<!-- Limpia y reinicia todo -
gameContainer.innerHTML. '";
score = 0;
matched];
scoreText.textContent 'Puntos: 0';
selected = [];
const doubleIcons = shuffleArray ([...icons, ...icons]);
doubleIcons.forEach(icon, i) => (
const card createCard(icon, i);
gameContainer.appendChild(card);
});
}



function resetGame() {
clearInterval(timerInterval);
startGame();
}

<!-- Duplica y mezcla los iconos
I