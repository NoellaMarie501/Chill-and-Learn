function fibonacci(n){
    //initialise the sequence with the first two numbers in the sequence 
    let sequence=[0, 1]; 
    // iteration
    for(i=2;i<n;i++){ 
    //Calculates number from 2 based on formula
        sequence.push(sequence[i-1] + sequence[i-2]); 
    }
    //returns the sequence
    return sequence;
}
console.log(fibonacci(7))