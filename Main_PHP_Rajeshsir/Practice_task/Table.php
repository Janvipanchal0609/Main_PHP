<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product table</title>
</head>

<style>
    div{
        margin-left:350px;
        margin-top: 50px;
    }
</style>

<body>
        <div class="Product">
            <table border="2" cellpadding="5">
                <h1>
                    <tr>
                        <th>Product</th>
                        <th>Flavors</th>
                    </tr>
                </h1>
                    <tr>
                        <td rowspan="3">Milk</td>
                        <td>Almond</td>
                    </tr>
                    <tr>
                        <td>Mango</td>
                    </tr>
                    <tr>
                        <td>Chocolate</td>
                    </tr>
            
                     <tr>
                        <td colspan="2">These are exclusive flavors</td>
                    </tr>
            </table>
        </div>
</body>
</html>