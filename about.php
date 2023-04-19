<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ماشین حساب</title>
</head>
<body>

<form action="index.php" method="get">
    <div>
        <label for="number_1">عدد اول:</label>
        <input type="text" id="number_1" name="a1">
    </div>
    <div>
        <label for="select">حاصل:</label>
        <select name="res" id="select">
            <option value="+">جمع</option>
            <option value="-">منها</option>
            <option value="*">ضرب</option>
            <option value="/">تقسیم</option>
            <option value="**">توان</option>
            <option value="%">باقیمانده</option>
        </select>
    </div>
    <div>
        <label for="number_2">عدد دوم:</label>
        <input type="text" id="number_2" name="a2">
    </div>

    <div>
        <button type="submit">نتیجه</button>
    </div>
</form>

</body>
</html>