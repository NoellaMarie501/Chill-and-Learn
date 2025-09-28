const name="dad"
function checker(str){
    const check=name.split("").reverse().join("")//Split divides letters into array,
                                                //reverse displays in descending order
                                                //join :joins the word without spacing them
    if(name===check){//checks if the reversed name is equal to the original name
        console.log("True") //displays true
    }else{
        console.log("False")//else displays false
    }
    return check//returns checks
}
console.log(checker(name))//prints the result