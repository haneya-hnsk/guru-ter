<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PEMILOS</title>
    <link rel = "icon" href =  
"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADGklEQVR4AWLABrqmtLPXT6nUqppVVl02o6iyZnKZZsvEJjYGYkDblBbrnMWZOyJXxbz1Xh/+32t92P+IVdGvs5dkbquZUGOOU2NVezlL96wWp+RliXc8tgDapIZFKaAwPPkF8nu0ztce89q2xp6ubVtjW9k2d+3aZHydzMPfZiPf24CmsAriaBsKfQ04aqYjdzn7nm5IdkjY2bT1D+Wx0fEd+UPZcxkG1vtKfxM2blsxc3UF2rPDGLw0j6FLU2g/N4wyXz1SN+jviifzFgcGBnb8NKCalopijBkoD4hhveeFhHiN1Wej2kNFlZeK4xuZUJ3uhuZsL9iOcsQZqZCPixq/KmuGVdlpK7TXNGsBlm8YUB1QEIUM1PkyIApyIQrxUE/gmI10NIW0MN91ItWcA+oq4wXRZVC6jbrZI4Z01AXkaAnrkG5modJLg+KkDLb7J+F5fAqqU3JCo4JtFWDhugGtYS0Ob6Shy6ibprStavpj9DQs3zRCGu1ELPEuDpfAcNsBz30LbLf6EHgchSRSigQ9lTjRQEnSiSMdEi/UD1Dki6LxWBMD6zfNqA9qkGtPgSxSD9d9B5YvZcByLRWGm3qICS3XkQzlqX5MX1tBjImJmrmiIYpySJ7F0HPeV/nF4NoqQCMpFLj4WLtjxrlnBoQerqDr7AjynDxQCS/f1YC6kBzUdeZrYU9zGmVocGRT02yV87iRjhQjh1wBhEE6eLYcSE/1oTXSCZY1kxSTgWSTAMlEJsZER+1E+frPNjbM11lYLiZK3TziiU2McEktODi0RsdhcuP0XKSYuMQ796sM00FH02Lj7E8Dmk51Am+d96rQy0Sjvxjlnmpk2rOIZwGpPB85zhzUB5pRT3hfZPhrvOd9I70H/pjGuhNVhVwrE3leLoo95WgNilDurSbFk5CZaECZtxI5Xg54VhaE3U0ZlL+X2+bdpl6Uz+Qu5N9iGNlgObgosPJQaOOTkDlgGFnIns+9KJsWj54Ond1E+d8y6k1bNT2K/dXa6ryi8VyvbkojVE7IZCUT+faGtgamvEO8a3JyevPvOp8Bv+EDlu3FT9oAAAAASUVORK5CYII=" 
        type = "image/x-icon"> 
<link rel="stylesheet" href="sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <header>@include('layouts.header')</header>

    <div class="container" style="min-height: 75vh;">
        @yield('content')
    </div>

    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="sweetalert2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>