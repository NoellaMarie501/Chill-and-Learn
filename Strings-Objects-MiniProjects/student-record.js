function processStudent(gradeThreshold){
    const students=[{//array of student
        name:"Ana",
        grade:6
    },{
        name:"Ben",
        grade:8
    }];
    
    //An array storing student grade
    let highGrade=[];
    for(let i=0;i<students.length;i++){
        //checks if student grade is greater than gradeThreshold
        if(students[i].grade>gradeThreshold){
            students[i].grade++
            highGrade.push(students[i]);
        }
    }
    console.log(`grade>${gradeThreshold}:`,highGrade);
    
    console.log("after increase",students)
    return {highGrade: highGrade, students: students}
}

console.log(processStudent((7)))