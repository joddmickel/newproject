<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Storeapp</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
<form action="/welcome" method="POST">
@csrf
<input type="hidden" name="device">


       <table border="1" width="300px" height="200px">
<tr>
    <td>Device Name</td>
    <td><input type="text" name="DeviceName"></input></td>
</tr>
<tr>
    <td>Serial Number</td>
    <td><input type="text" name="SerialNumber"></input></td>
</tr>
<tr>
    <td>Status</td>
    <td>
        <input type="text" name="Status"></input>
    </td>
</tr>
<tr>
    <td>Count</td>
    <td>
        <input type="number" name="Count"></input>
    </td>
</tr>
<tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add Device"/>
               </td>
            </tr>
        </table>  
        </form>
    </body>
</html>
