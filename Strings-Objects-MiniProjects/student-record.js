function processStudent(){
    const students=[{//array of student
        name:"Ana",
        grade:6
    },{
        name:"Ben",
        grade:8
    }];
    let gradeThreshold=7;
    //An array storing student grade
    let highGrade=[];
    for(let i=0;i<students.length;i++){
        //checks if student grade is greater than gradeThreshold
        if(students[i].grade>gradeThreshold){
            highGrade.push(students[i]);
        }
    }
    console.log(`grade>${gradeThreshold}:`,highGrade);
    //increases the student grade by one
    for(let i=0;i<students.length;i++){
         //Adds to existing grade
        students[i].grade=students[i].grade+1
    }
    console.log("after increase",students)
    return {highGrade: highGrade, students: students}
 
}
processStudent()
