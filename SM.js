window.onload = function() {
    fetch('obter_perguntas.php')
    .then(response => response.json())
    .then(data => {
        const perguntasDiv = document.getElementById('perguntas');
        data.forEach(pergunta => {
            const perguntaContainer = document.createElement('div');
            perguntaContainer.innerHTML = `
                <p>${pergunta.pergunta}</p>
                <input type="range" name="nota_${pergunta.id}" min="0" max="10" value="5">
            `;
            perguntasDiv.appendChild(perguntaContainer);
        });
    });
};
