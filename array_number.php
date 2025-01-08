<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
    let myArr = [1, 2, 3, 4, 5]

    let myArray = []
    myArr.forEach(function(value) {

        let number = value * 2; // Correctly assigning the result of value * 2 to number

        myArray.push(number);

    });
    console.log('myArray', myArray);

    let newArr = myArr.map(function(value) {
        return value * 2;
    });
    console.log('newArr', newArr);


    let filterArr = myArr.filter(function(value) {
        return value > 3;
    })
    console.log('filterArr', filterArr);

    let sum = myArr.reduce(myFunction, 100);

    function myFunction(total, value) {
        return total + value;
    }
    console.log("sum", sum);
    </script>
</body>

</html>