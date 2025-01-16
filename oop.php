<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link css 順序 1.bs 2.self -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- js include 順序 1.bs 2.jq 3.self -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    let myArr = [1, 2, 3];
    console.log('myArr', myArr);
    console.log('myArr typeof', typeof(myArr));
    console.log('myArr array ?', Array.isArray(myArr));


    let myObj = {
        s1: 'amy',
        s2: 'bob',
        s3: 'cat',
        sayHello: function() {
            console.log('hello');
        },
        call: function(data) {
            console.log(`call data is ${data}`);

        },
        helloS1: function() {
            console.log('this', this);
            console.log('this.s1', this.s1);
        },
        helloS2: () => {
            console.log('this', this);
            console.log('this.s2', this.s2);
            console.log('myObj', myObj);
            console.log("nmyObj.s2", myObj.s2);
        },
    }

    console.log('myObj array ?', Array.isArray(myObj));
    let name = 'taisan';
    console.log('myObj', myObj);
    console.log('myObj["s1"]', myObj['s1']);
    console.log('myObj點s1', myObj.s1);
    console.log('myObj點[s2Var]', myObj[name]);
    console.log('myObj點sayHello', myObj.sayHello);

    myObj.sayHello();
    myObj['sayHello']();

    myObj.call('kai hello');

    myObj.helloS1();
    myObj.helloS2();
    </script>