/*
 * DATA: 30/07/2024
 * AUTORES: Adilson Kina, Gabriel Possato, Gabriel Schultz
 *
 * */

// Constantes da formula
const a = -2;
const b = 8;

// Formula da trajetoria do atleta
function trajetoria(dist_hori) {
  return a * (dist_hori * dist_hori) + b * dist_hori;
}

// Formulas para resolução dos exercicios
let h_max = -b / (2 * a);
let quando_h_max = trajetoria(h_max);

// Descubra a altura em que o atleta estava de acordo com a distancia percorrida
let h_atual = parseInt(prompt("Digite em que ponto horizontalmente deseja saber a altura do ginasta:"));
if(h_atual <=4 && h_atual >= 0){
  window.alert("Na distancia " + h_atual + " o atleta estava em " + trajetoria(h_atual) + " metros");
}
else{
  window.alert("O atleta estava em posições validas apenas entre 0 e 4 metros de distancia");
}

// Respostas dos exercicios em si
window.alert("Qual a altura máxima alcançada pelo ginasta? Resposta: " + h_max + " metros");
window.alert("Em que ponto horizontalmente essa altura máxima ocorre? Resposta: " + quando_h_max + " metros");

