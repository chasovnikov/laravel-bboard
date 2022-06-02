<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Объявления</title>
    </head>
    <body>
        <div class="container">
            <h1 class="my-3 text-center">Объявления</h1>

            @if (count($bbs) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Товар</th>
                        <th>Цена, руб.</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($bbs as $bb)
                    <tr>
                        <td><h3>>{{ $bb->title }}</h3></td>
                        <td>>{{ $bb->price }}</td>
                        <td>
                        <a href=""/{{ $bb->id }}/">Подробнее...</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            @endif

        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
