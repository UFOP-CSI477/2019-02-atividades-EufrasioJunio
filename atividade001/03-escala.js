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
function calcular(){
    if(validar(document.dados.amplitude) & validar(document.dados.tempo)){
        amplitude =parseFloat(document.dados.amplitude.value);
        tempo = parseFloat(document.dados.tempo.value);
        let magnitude = (Math.log10(amplitude) + (3 * (Math.log10(8 * tempo))) - 2.92).toFixed(2);
        let resultado = document.getElementById('resultado');
        if (magnitude <=3.5){
            document.getElementById('resultado').classList.add("alert-success");
            document.getElementById('resultado').classList.remove('alert-danger');
            document.getElementById('resultado').classList.remove('alert-warning');
            classificacao = "Geralmente não sentido,mas gravado"
        }else if (magnitude<=5.4){
            document.getElementById('resultado').classList.add("alert-warning");
            document.getElementById('resultado').classList.remove('alert-success');
            document.getElementById('resultado').classList.remove('alert-danger');
            classificacao = " Ás vezes sentido, mas raramente causa danos"
        }else if (magnitude <=6){
            document.getElementById('resultado').classList.add("alert-warning");
            document.getElementById('resultado').classList.remove('alert-success');
            document.getElementById('resultado').classList.remove('alert-danger');
            classificacao = "Causa pequenos danos a prédios bem construídos, mas danifica seriamente casas mal construídas em regiões próximas."
        }else if(magnitude <=6.9){
            document.getElementById('resultado').classList.add("alert-danger");
            document.getElementById('resultado').classList.remove('alert-success');
            document.getElementById('resultado').classList.remove('alert-warning');
            classificacao = " Pode ser destrutivo em áreas em torno de até 100km do epicentro"
        }else if(magnitude<=7.9){
            document.getElementById('resultado').classList.add("alert-danger");
            document.getElementById('resultado').classList.remove('alert-success');
            document.getElementById('resultado').classList.remove('alert-warning');
            classificacao = "Grande terremoto. Pode causar sérios danos numa grande faixa."
        }else{
            document.getElementById('resultado').classList.add("alert-danger");
            document.getElementById('resultado').classList.remove('alert-success');
            document.getElementById('resultado').classList.remove('alert-warning');
            classificacao = "Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros"
        }
        resultado.innerHTML = "<h3>"+"Terremoto de escala " + magnitude +"</h3>"+"<br>"+ "Seus efeitos são " + classificacao + "<br>";

    }


} 