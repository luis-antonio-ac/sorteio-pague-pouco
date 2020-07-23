const input_planilha = document.querySelector('#planilha-clientes')

input_planilha.addEventListener('change', () => {
    const button_importar = document.querySelector('#importar-arquivo');
    button_importar.innerHTML = 'Importando...'

    setTimeout(() => {
        button_importar.style.border = '1px solid green'
        button_importar.style.color = 'green'
        button_importar.innerHTML = 'Arquivo carregado'
    }, 1000)
})