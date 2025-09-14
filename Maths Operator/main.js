function maths(fig1,fig2,operator){
    let result=0;
    switch(operator){
    case "+":
    result=fig1+fig2;
    break;
    case "-":
    result=fig1-fig2;
    break;
    case "*":
    result=fig1*fig2;
    break;
    case "/":
    result=fig1/fig2;
    break;
    default:
       return "enter an operator";
    }
}