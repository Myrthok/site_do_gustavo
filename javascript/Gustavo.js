var nome = 'gustavo'
var nome_de_usuário = 'Myrthok'
// var email = 'cotrym.gustavo38@gmail.com'
// var cpf = '059.919.411-14'
// var data_de_nascimento = '02/10/1995'
// var sexo = 'Masculino'
// var endereço = 'rua 6 chácara 269 lote 5 - vicente pires'
// console.log('bem-vindo',nome,'\n','seu ID de usuário é',nome_de_usuário,'\n','de cpf',cpf,'\n','nasceu dia',data_de_nascimento,'\n','do sexo',sexo,'\n','residente do endereço', endereço) 
var Mat = 10
var His = 10
var Port = 0
var Geo = 0

var média = (Mat + His + Port + Geo) / 4
console.log('estudante você foi')
if (média >= 7) {
    console.log('aprovado');
} else {console.log('reprovado')}

// estrutura de controle: condicionais
let idade = 18;
if (idade >=18){
    console.log("voce pode votar");
}else if (idade ==17){
    console.log('voce pode votar no proximo ano')
}
let idade = 15;
if (idade => 18){
    console.log("voce pode votar")
}
else if (idade == 17){
    console.log ("voce pode votar no proximo ano");
    else {
        console.log ("voce ainda nao pode votar")
    }
    let dia = 2;
    switch (dia){
        case 1:
            console.log ("segunda-feira");
            break;
            case 2:
                console.log ('terça-feira');
            break;
            default:
                console.log ('dia invalido');

}

for (let d=0; d< 5; d++){console.log (d);
    }
    let j= 1;
    while (i<5) {console.log (j);j++;
}

let i =0;
do{
    console.log(i); i++;
}while (i<5);

// conversai de tipos de dados

let num = 10
let str = '20'
console.log(num +str); //resultura em '1020' concatenaçao
str = number (str);
console.log(num + str); // resultura em 30 (soma)

//operadores
let a = 15;
let b = '5'
let c;  
c = a+b;

console.log(c); //resultara em 20

c=a-b; console.log(c) // resultara em 10

c=a*b; console.log(c) // resultara em 75

c=a/b; console.log(c) // resultara em 3

//funçao em js
function nomedafuncao(param1, param2, param3){
    //codigo a ser executado
}

function saudacao(nome ){
    console.log("ola," + nome + "!")
}
let cor = "vermelho "// variavel global
function mostrarcor(){ console.log(cor)
}
function mostrarcarro(){
    let carro ="ferrari"; //variavel local
    console.log(carro)
}
mostrarcarro()// imprime "ferrari"
console.log(carro) //erro carro is not difine

const numero = [1,2,3,4,5];
const quadrados = numeros,map(funcion(n){
    return n*n;
})
console.log(quadrados); //imprime [1,4,9,16,25]

function cumprimentar (callback){
    console.log('ola'); callback();
    function dizernome(){
        console.log('joao');
    }
    cumprimentar
    (dizernome);