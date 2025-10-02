function hashtag(letter,string){
    //an array to store the indices where character is found
    const result=[];
    //Loops through each character
    for(let i=0;i<=string.length;i++){
        //checks if currents character===target character
        if(string[i]===letter){
            //adds the current index to the result array
            result.push(i)
        }
    }
    //returns array with the indices of character
    return result
}
//outputs the result
console.log(hashtag("a","banana"))
console.log(hashtag("w","hello"))
  