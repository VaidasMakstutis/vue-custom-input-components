<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Custom Input Components</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            #app {
                margin: 20px;
            }
            input {
                padding: 5px;
            }
        </style>
    </head>
    <body>

        <div id="app">
            <!-- <input type="text" v-model="coupon"> -->
            <coupon v-model="coupon">
        </div>

        <script src="https://unpkg.com/vue@2.7.10/dist/vue.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>
