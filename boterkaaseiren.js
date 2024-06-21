document.addEventListener('DOMContentLoaded', () => {
    const cells = document.querySelectorAll('.cell');
    const statusText = document.getElementById('status');
    const resetButton = document.getElementById('reset');
    const confirmationTemplate = document.getElementById('confirmation-template').innerHTML;
    let currentPlayer = 'X';
    let gameActive = true;
    let board = ['', '', '', '', '', '', '', '', ''];

    const winningConditions = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];

    function handleCellPlayed(clickedCell, clickedCellIndex) {
        board[clickedCellIndex] = currentPlayer;
        clickedCell.innerHTML = currentPlayer;
        localStorage.setItem('ticTacToeBoard', JSON.stringify(board));
    }

    function handlePlayerChange() {
        currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
        statusText.innerHTML = `Het is ${currentPlayer}'s beurt`;
        localStorage.setItem('ticTacToeCurrentPlayer', currentPlayer);
    }

    function handleResultValidation() {
        let roundWon = false;
        for (let i = 0; i < winningConditions.length; i++) {
            const winCondition = winningConditions[i];
            let a = board[winCondition[0]];
            let b = board[winCondition[1]];
            let c = board[winCondition[2]];
            if (a === '' || b === '' || c === '') {
                continue;
            }
            if (a === b && b === c) {
                roundWon = true;
                break;
            }
        }

        if (roundWon) {
            statusText.innerHTML = `Speler ${currentPlayer} heeft gewonnen!`;
            gameActive = false;
            localStorage.setItem('ticTacToeStatus', 'finished');
            return;
        }

        let roundDraw = !board.includes('');
        if (roundDraw) {
            statusText.innerHTML = 'Gelijkspel!';
            gameActive = false;
            localStorage.setItem('ticTacToeStatus', 'finished');
            return;
        }

        handlePlayerChange();
    }

    function handleCellClick(event) {
        const clickedCell = event.target;
        const clickedCellIndex = parseInt(clickedCell.getAttribute('data-index'));

        if (board[clickedCellIndex] !== '' || !gameActive) {
            return;
        }

        handleCellPlayed(clickedCell, clickedCellIndex);
        handleResultValidation();
    }

    function showConfirmation(message, onConfirm, onCancel) {
        const confirmationContainer = document.createElement('div');
        confirmationContainer.innerHTML = confirmationTemplate;
        document.body.appendChild(confirmationContainer);
        const confirmationMessage = confirmationContainer.querySelector('#confirmation-message');
        const confirmButton = confirmationContainer.querySelector('#confirm');
        const cancelButton = confirmationContainer.querySelector('#cancel');

        confirmationMessage.innerHTML = message;
        confirmButton.addEventListener('click', () => {
            onConfirm();
            document.body.removeChild(confirmationContainer);
        });
        cancelButton.addEventListener('click', () => {
            onCancel();
            document.body.removeChild(confirmationContainer);
        });
    }

    function handleRestartGame() {
        showConfirmation('Weet je zeker dat je het spel opnieuw wilt starten?', () => {
            gameActive = true;
            currentPlayer = 'X';
            board = ['', '', '', '', '', '', '', '', ''];
            statusText.innerHTML = `Het is ${currentPlayer}'s beurt`;
            cells.forEach(cell => cell.innerHTML = '');
            localStorage.setItem('ticTacToeBoard', JSON.stringify(board));
            localStorage.setItem('ticTacToeCurrentPlayer', currentPlayer);
            localStorage.setItem('ticTacToeStatus', 'active');
        }, () => {
        });
    }

    cells.forEach(cell => cell.addEventListener('click', handleCellClick));
    resetButton.addEventListener('click', handleRestartGame);

    function loadGameState() {
        const savedBoard = localStorage.getItem('ticTacToeBoard');
        const savedCurrentPlayer = localStorage.getItem('ticTacToeCurrentPlayer');
        const savedStatus = localStorage.getItem('ticTacToeStatus');

        if (savedBoard && savedCurrentPlayer && savedStatus) {
            board = JSON.parse(savedBoard);
            currentPlayer = savedCurrentPlayer;
            gameActive = savedStatus === 'active';

            board.forEach((cell, index) => {
                cells[index].innerHTML = cell;
            });

            statusText.innerHTML = gameActive
                ? `Het is ${currentPlayer}'s beurt`
                : `Speler ${currentPlayer} heeft gewonnen!`;
        } else {
            statusText.innerHTML = `Het is ${currentPlayer}'s beurt`;
        }
    }

    loadGameState();
});
