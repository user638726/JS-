<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
    let salary = [10000, 20000, 30000, 40000, 50000];
    let newSalary = [];
    let SUM = 0;
    salary.forEach(function(value) {

        let number = value + value * 0.1;
        if (number > 30000) {
            number += 5000;
        } else {
            console.log("沒有加薪")
        } // Correctly assigning the result of value * 2 to number
        SUM += number;
        newSalary.push(number);
        console.log("newSalary", newSalary);
        console.log("SUM", SUM);
    });
    </script>
</body>

</html>