function reverse(array){
let reversedArray= [];//For storing the reversed array
console.log("Input:", array);//Prints the numbers in the variable "myArray"
for(let i = array.length - 1; i>=0; i--){
    reversedArray.push(array[i]);//Pushes the reverse of "myArray" into the reversed array 
   }
   return reversedArray;//Return the reversed array
}
const array=[1,2,3,4,5];
console.log(reverse(array));//Prints the reverse array to the console

