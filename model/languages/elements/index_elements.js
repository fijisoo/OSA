// function ile_inputow(name){
//     var ile_liter = name.length;
//     var ile_null = 0;
//     var output = 0;
//
//     var inputs = document.getElementsByTagName("input");
//
//     for(x=0;x < inputs.length ;x++)
//     {
//         newpost = inputs[x].getAttribute("id");
//         if(newpost === null){
//             ile_null ++;
//         }
//         else{
//             newpost = inputs[x].getAttribute("id");
//             if(newpost.substr(0, ile_liter) == name){
//                 output++;
//             }
//         }
//     } return output;
// }
//
// var output = ile_inputow("form_input");
// console.log(output);

var elements = [[]];

elements[0][0] = 'form_input_3';
elements[0][1] = 'placeholder';


console.log(elements[0][1]);