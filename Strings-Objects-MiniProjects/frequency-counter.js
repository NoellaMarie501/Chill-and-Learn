function count(arr){
    //Object to store the array
    const counts={}
    //loops through each element in the input arr()
    for(let i=0;i<arr.length;i++){
        //gets the current element from the array
        const element=arr[i];
        //increase the number of repeated elements
        counts[element]=(counts[element]||0)+1
    }
    //returns the object containing the array
    return counts
}
//calls the count function
console.log(count(["man","boy","man","man","girl","boy"]));