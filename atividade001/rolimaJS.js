var corredores = [];



function addCorredor() {
    if (validar(document.dados.posicao) & validar(document.dados.tempo) & corredores.length < 6) {
        var aux = {
            posicao: document.dados.posicao.value,
            nome: document.dados.nome.value,
            tempo: document.dados.tempo.value,
        }
        let controle = 1;
        corredores.forEach(elem => {
            if (elem.posicao == aux.posicao) {
                document.dados.posicao.classList.add("is-invalid");
                controle = 0;
            }

        })
        if (controle == 1) {
            document.dados.posicao.classList.remove("is-invalid");
            corredores.push(aux);
            let nlinha = document.createElement('tr');
            nlinha.insertCell(0).innerHTML = aux.posicao;
            nlinha.insertCell(1).innerHTML = aux.nome;
            nlinha.insertCell(2).innerHTML = aux.tempo;
            document.getElementById('T1').appendChild(nlinha);
        }

        document.dados.posicao.value = '';
        document.dados.nome.value = '';
        document.dados.tempo.value = '';

    }
    if (corredores.length > 5) {
        document.getElementById('registrar').disabled = true;
        document.dados.posicao.value = '';
        document.dados.nome.value = '';
        document.dados.tempo.value = '';
    }
    document.getElementById('tabela').style.display = 'block'
}

function ordenar() {

    corredores.sort((a, b) => parseFloat(a.tempo) - parseFloat(b.tempo));
}


function validar(campo) {
    if (campo.value.length == 0) {
        //erro
        //reportar campo invalido
        campo.classList.add("is-invalid");
        //reportando label do campo invalido
        //finalizar
        campo.value = "";
        campo.focus();
        return false;
    }
    // tudo correto
    campo.classList.remove("is-invalid");
    return true;

}
function colocacao() {
    ordenar();
    let aux = 1;
    tempo = corredores[0].tempo;
    console.log(corredores)
    corredores.forEach(elem => {
        let nlinha = document.createElement('tr');
        if (tempo >= elem.tempo) {
            nlinha.insertCell(0).innerHTML = aux;
        } else {
            aux++;
            nlinha.insertCell(0).innerHTML = aux;
            tempo = elem.tempo;
        }
        nlinha.insertCell(1).innerHTML = elem.posicao;
        nlinha.insertCell(2).innerHTML = elem.nome;
        nlinha.insertCell(3).innerHTML = elem.tempo;
        if (aux == 1) {
            nlinha.insertCell(4).innerHTML = 'Vencedor';
        }
        document.getElementById('T2').appendChild(nlinha);
    })
    document.getElementById('tabelaFinal').style.display = 'block';
}