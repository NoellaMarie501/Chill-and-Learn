function fizzbuzz(n){
    for( let i=1;i<=n;i++){//Ilterates through the function
   if(i%3===0 && i%5===0){//Check if number is a modulus of 5 and 3
     console.log("FizzBuzz");//Prints Fizz
   }
   else if(i%5===0){//Checks if the number is strictly a modulus of 5
    console.log("Buzz");//Prints Buzz
   }
   else if(i%3===0) {//Checks if the number is a modulus of 3
    console.log("Fizz");//Prints Fizz
   }
   else {//Checks if no condition is met
    console.log(i); //Prints the number
   }
}
}
fizzbuzz(20);//Calls the function
