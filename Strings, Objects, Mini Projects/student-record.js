function processStudent(){
    const students=[{
        name:"Ana",
        grade:6
    },{
        name:"Ben",
        grade:8
    }];
    let gradeThreshold=7;
    let highGrade=[];
    for(let i=0;i<students.length;i++){
        if(students[i].grade>gradeThreshold){
            highGrade.push(students[i]);
        }
    }
    console.log(`grade>${gradeThreshold}:`,highGrade);
    for(let i=0;i<students.length;i++){
        students[i].grade=students[i].grade+1
    }
    console.log("After increase:",students)
}
processStudent()