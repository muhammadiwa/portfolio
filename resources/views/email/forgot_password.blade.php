<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - New Password</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">

    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; margin-top: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
        <tr>
            <td align="center" bgcolor="#343a40" style="padding: 20px 0; color: #fff;">
                {{ config('app.name') }}
            </td>
        </tr>
        <tr>
            <td style="padding: 20px;">
                <h3>Hello {{ $user->name }},</h3>
                <p>Your new login password: <strong>{{ $user->str }}</strong></p>
                <br>
                <p>Thank You,</p>
                <p>{{ config('app.name') }}</p>
            </td>
        </tr>
        <tr>
            <td align="center" bgcolor="#343a40" style="padding: 20px 0; color: #fff;">
                &copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.
            </td>
        </tr>
    </table>

</body>
</html>
