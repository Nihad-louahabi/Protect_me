<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacter pour adoption</title>
</head>
<body>
    <p>Bonjour {{ $user->firstname }} {{ $user->lastname }}</p>
    <p>Je veux Contacter pour </p>
    <br/>
    <table style="width: 600px ; text-align:right">
        <thead>
            <tr>
                <th>Subtotal</th>
                <th>Tax</th>
                <th>Shipping</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $order->subtotal }} DH</td>
                    <td>{{ $order->tax }} DH</td>
                    <td> Free shipping</td>
                    <td>{{ $order->total }} DH</td>
                </tr>
        </tbody>

    </table>

</body>
</html>
