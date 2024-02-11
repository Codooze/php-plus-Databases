<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/create.css">
    <title>Agrega nuevo ingreso</title>
</head>
<body>
    <h1>Agrega un nuevo gasto</h1>
    <main>
    <!-- en el case income en public/index.php se establece el metodo por post, y segun el RouterHandler.php si el case es post va a usar store() para crear el nuevo registro 
    el "name" es importante que coincida con los campos de la base de datos, (ver IncomesController.php)

    the hidden input is to send the method to the RouterHandler.php, so it can be used to determine the method to use in the switch statement
-->
        <form action="/incomes" method="post">
            
            <div class="input-group">
                <label for="payment_method">Método de pago</label>
                <select name="payment_method" id="payment_method">
                    <option value="1" selected>Cuenta bancaria</option>
                    <option value="2">Tarjeta de crédito</option>
                </select>
            </div>
        
            <div class="input-group">
                <label for="type">Tipo de ingreso</label>
                <select name="type" id="type">
                    <option value="1" selected>Pago de nómina</option>
                    <option value="2">Reembolso</option>
                </select>
            </div>
        
            <div class="input-group">
                <label for="date">Fecha</label>
                <input type="text" name="date" id="date">
            </div>
        
            <div class="input-group">
                <label for="amount">Monto</label>
                <input type="text" name="amount" id="amount">
            </div>
        
            <div class="input-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description"></textarea>
            </div>
        
            <input type="hidden" name="method" value="post">
        
            <div class="button-container">
                <button class="button-link" type="submit">Guardar</button>
            </div>
        
        </form>
    </main>
    
</body>
</html>