
function checker(str){

    const check=str.split("").reverse().join("")
    //checks if the reversed name is equal to the original name
    if(str===check){
        //return true if condition is met
        return "True" 
    }else{
        //else return false
        return "False"
    }
    
}
//prints the result
console.log(checker("fan"))