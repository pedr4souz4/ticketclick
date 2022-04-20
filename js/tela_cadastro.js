function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('endereco').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('numero').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('estado').value=("");
    }
    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('numero').value=("");
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
    function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('endereco').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('numero').value=("...");
            document.getElementById('cidade').value="...";
            document.getElementById('estado').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
}
    // function mostrar_convidado() {
//     if (x==onclick) {
//         document.getElementById("demo1").innerHTML="convidado";
//     } else if (x==!onclick) {
//         document.getElementById('demo1').value=("");
//     }
// }

// function mostrar_organizador() {
//     var y,conta,a,b,answer;
//     y=document.getElementById("form_organizador");
//     if (y==onclick) {
//         document.getElementById("demo2").innerHTML="organizador";
//     } else {

//     }
// }

// function ocultar() {    
//     if (document.getElementById("div_convidados").style.display == "block") { 
//         document.getElementById("div_convidados").style.display = "none";    
//     } else {
//         document.getElementById("div_convidados").style.display = "block";          
//     }
// }
// function mostrar_convidado() {
//     if (x==onclick) {
//         document.getElementById("demo1").innerHTML="convidado";
//     } else if (x==!onclick) {
//         document.getElementById('demo1').value=("");
//     }
// }

// function mostrar_organizador() {
//     var y,conta,a,b,answer;
//     y=document.getElementById("form_organizador");
//     if (y==onclick) {
//         document.getElementById("demo2").innerHTML="organizador";
//     } else {

//     }
// }

// function ocultar2() {    
//     if (document.getElementById("div_organizador").style.display == "block") { 
//         document.getElementById("div_organizador").style.display = "none";    
//     } else {
//         document.getElementById("div_organizador").style.display = "block";          
//     }  
// }