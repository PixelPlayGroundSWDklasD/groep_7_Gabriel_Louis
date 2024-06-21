const words = ["javascript", "hangman", "developer", "programming", "game"];
let selectedWord = words[Math.floor(Math.random() * words.length)];
let correctGuesses = [];
let wrongGuesses = [];
let lives = 7;
let score = 0;
let coins = 0;

const wordContainer = document.getElementById("word-container");
const keyboardContainer = document.getElementById("keyboard-container");
const hangmanImage = document.getElementById("hangman-image");
const scoreElement = document.getElementById("score");
const coinsElement = document.getElementById("coins");
const livesElement = document.getElementById("lives");

function displayWord() {
    wordContainer.innerHTML = "";
    selectedWord.split("").forEach(letter => {
        const letterElement = document.createElement("span");
        letterElement.textContent = correctGuesses.includes(letter) ? letter : "_";
        wordContainer.appendChild(letterElement);
    });
}

function createKeyboard() {
    const alphabet = "abcdefghijklmnopqrstuvwxyz".split("");
    alphabet.forEach(letter => {
        const button = document.createElement("button");
        button.textContent = letter;
        button.addEventListener("click", () => handleGuess(letter));
        keyboardContainer.appendChild(button);
    });
}

function handleGuess(letter) {
    if (selectedWord.includes(letter)) {
        correctGuesses.push(letter);
        score += 10;
        coins += 2;
    } else {
        wrongGuesses.push(letter);
        lives--;
        hangmanImage.src = `images/hangman-${7 - lives}.png`;
    }

    updateStats();
    displayWord();
    disableButton(letter);

    if (lives === 0) {
        alert("Game Over!");
        resetGame();
    } else if (selectedWord.split("").every(letter => correctGuesses.includes(letter))) {
        alert("You Win!");
        resetGame();
    }
}

function updateStats() {
    scoreElement.textContent = score;
    coinsElement.textContent = coins;
    livesElement.textContent = lives;
}

function disableButton(letter) {
    const buttons = Array.from(keyboardContainer.querySelectorAll("button"));
    buttons.forEach(button => {
        if (button.textContent === letter) {
            button.disabled = true;
        }
    });
}

function resetGame() {
    selectedWord = words[Math.floor(Math.random() * words.length)];
    correctGuesses = [];
    wrongGuesses = [];
    lives = 7;
    hangmanImage.src = "images/hangman-0.png";
    keyboardContainer.innerHTML = "";
    createKeyboard();
    displayWord();
    updateStats();
}

createKeyboard();
displayWord();
updateStats();
