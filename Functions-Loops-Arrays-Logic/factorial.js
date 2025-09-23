function factorial(n){
    let result=1;//initialise the result to 1
    for(let i=1; i<=n; i++){
        result *= i;//Multiply the current result by "i"
    }
    return result;//returns the final result
}
console.log(factorial(4)); //calls the function