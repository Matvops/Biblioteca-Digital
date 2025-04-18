<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style> 
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');

        @theme {
            --main-font: 'Open Sans';
        }

        @keyframes apagaToast {
              0% {
                  opacity: 1;
              }
              66% { 
                  opacity: 1;
              }
              100% { 
                  opacity: 0;
            }
        }

        .apaga-toast {
            animation: apagaToast 1.5s forwards;
        }
    </style>
</head>
<body class="bg-stone-50">
    {{ $content }}
</body>
</html>