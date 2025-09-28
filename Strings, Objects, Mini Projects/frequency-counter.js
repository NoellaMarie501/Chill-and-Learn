function count(arr){
    const counts={}
    for(let i=0;i<arr.length;i++){
        const element=arr[i];
        counts[element]=(counts[element]||0)+1
    }
    return counts
}
console.log(count(["man","boy","man","man","girl","boy"]));