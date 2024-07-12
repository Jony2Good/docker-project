<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300&display=swap" rel="stylesheet">
    <title>НЛК Портфолио</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">НЛК</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Портфолио</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Рейтинг</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Помощь</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="jumbotron">
    <h1 class="display-4">Портфолио</h1>
    <p>Это место, где собраны ваши научные публикации. Здесь вы можете добавлять <br> свои научные работы, получать информацию об их уникальности <br> и смотреть отзывы ваших научных руководителей.</p>
    <p class="lead">
        <a class="btn btn-primary btn-md" href="#" role="button">Добавить работу</a>
    </p>
</div>
<div class="row">
    <div class="col-lg-5 col-md-7 col-xs-6">
        <div class="card">
            <div class="card-header">
                Ваш профиль
            </div>
            <div class="card-body">
                <h5 class="card-title">Сергей Павлович Фролов</h5>
                <p class="card-text"><strong>Научная степень:</strong> Магистр. <br><strong>Специализация:</strong> Инвестиционные проблемы экономически развивающихся рынков.</p>
                <a href="#" class="btn btn-primary">Редактировать</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-5 col-xs-6">
        <div class="card">
            <div class="card-header">
                Статистика
            </div>
            <div class="card-body">
                <p class="card-text"><strong>На платформе:</strong> 2 года.<br> <strong>Добавлено работ:</strong> 10.<br> <strong>Средняя уникальность:</strong> 75%. <br><strong>Языки работ:</strong> русский, английский.</p>
            </div>
        </div>
    </div>
</div>
<div class="table-responsive-sm">
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th scope="col-lg-6">Название работы</th>
            <th scope="col-lg-2">Дата загрузки</th>
            <th scope="col-lg-2">Научный руководитель</th>
            <th scope="col-lg-2">Уникальность</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td scope="row"><a href="#">Привлечение инвестиций как факт развития экономики</a></td>
            <td>21.05.2019</td>
            <td><a href="#">Асаншоева А.М.</a></td>
            <td><a href="#">89%</a></td>
        </tr>
        <tr>
            <td scope="row"><a href="#">The role of accounting in sustainable development</a></td>
            <td>11.02.2019</td>
            <td><a href="#">Шаляпина В.С.</a></td>
            <td><a href="#">78%</a></td>
        </tr>
        <tr>
            <td scope="row"><a href="#">Сценарный анализ как инструмент учета рисков инвестиционного проекта</a></td>
            <td>05.09.2018</td>
            <td><a href="#">Васильев М.Г.</a></td>
            <td><a href="#">67%</a></td>
        </tr>
        <tr>
            <td scope="row"><a href="#">Глобальные и региональные инвестиционные тенденции</a></td>
            <td>09.07.2018</td>
            <td><a href="#">Асаншоева А.М.</a></td>
            <td><a href="#">73%</a></td>
        </tr>
        <tr>
            <td scope="row"><a href="#">Systemic risks in financical markets</a></td>
            <td>18.05.2018</td>
            <td><a href="#">Леонидов В.Б.</a></td>
            <td><a href="#">77%</a></td>
        </tr>
        <tr>
            <td scope="row"><a href="#">The influence of tax regulation liberalisation on the domestic debt market</a></td>
            <td>09.03.2018</td>
            <td><a href="#">Шаляпина В.С.</a></td>
            <td><a href="#">82%</a></td>
        </tr>
        <tr>
            <td scope="row"><a href="#">Биткоин как новый вид инвестиций</a></td>
            <td>29.01.2018</td>
            <td><a href="#">Асаншоева А.М.</a></td>
            <td><a href="#">71%</a></td>
        </tr>
        <tr>
            <td scope="row"><a href="#">Проблема воспроизводства жилищного фонда в России</a></td>
            <td>08.11.2017</td>
            <td><a href="#">Васильев М.Г.</a></td>
            <td><a href="#">65%</a></td>
        </tr>
        <tr>
            <td scope="row"><a href="#">Влияние безраюотицы на экономику СНГ</a></td>
            <td>17.09.2017</td>
            <td><a href="#">Васильев М.Г.</a></td>
            <td><a href="#">68%</a></td>
        </tr>
        <tr>
            <td scope="row"><a href="#">Мировой валютный рынок Форекс</a></td>
            <td>02.07.2017</td>
            <td><a href="#">Васильев М.Г.</a></td>
            <td><a href="#">67%</a></td>
        </tr>
        </tbody>
    </table>
</div>
<nav class="navbar navbar-light bg-light">
        <span class="navbar-text">
          © Научный личный кабинет. Все права защищены
        </span>
</nav>
</body>
</html>
