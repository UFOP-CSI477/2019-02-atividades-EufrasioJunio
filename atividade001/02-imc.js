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
    if(validar(document.dados.peso) & validar(document.dados.altura)){
        peso =parseFloat(document.dados.peso.value);
        altura = parseFloat(document.dados.altura.value);
        let imc = (peso / (Math.pow(altura,2))).toFixed(2);
        let resultado = document.getElementById('resultado');
        if (imc >18.5 & imc<24.9){
            document.getElementById('resultado').classList.add("alert-success");
            document.getElementById('resultado').classList.remove('alert-danger');
        }else{
            document.getElementById('resultado').classList.add("alert-danger");
            document.getElementById('resultado').classList.remove('alert-success');
        }
        if (imc <=18.5){
            classificacao = "Subnutrido"
        }else if (imc<=24.9){
            classificacao = "Peso Saudável"
        }else if (imc <=29.9){
            classificacao = "Sobre Peso"
        }else if(imc <=34.9){
            classificacao = "Obessidade Grau 1"
        }else if(imc<=39.9){
            classificacao = "Obessidade Grau 2"
        }else{
            classificacao = "Obessidade Grau 3"
        }
        resultado.innerHTML = "<h3>"+"Seu IMC é " + imc +"</h3>"+"<br>"+ "Sua Classifcação é " + classificacao + "<br>";
        min = 18.5;
        max =24.9;
        pesomin = ((Math.pow(altura,2)) * min).toFixed(2);
        pesomax = ((Math.pow(altura,2)) * max).toFixed(2);
        let ideal = document.getElementById('ideal');
        ideal.innerHTML = "<h3>"+"Seu Peso Ideal é entre " + pesomin + " e "+pesomax+"</h3>"+"<br>";
    }


} 