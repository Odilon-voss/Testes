window.onload = function() {
    fetch('obter_resultados.php')
    .then(response => response.json())
    .then(data => {
        const resultadosDiv = document.getElementById('resultados');
        data.forEach(resultado => {
            const resultadoContainer = document.createElement('div');
            resultadoContainer.innerHTML = `
                <p>Pergunta: ${resultado.pergunta}</p>
                <p>Média de Notas: ${resultado.media_nota}</p>
            `;
            resultadosDiv.appendChild(resultadoContainer);
        });
    });
};
