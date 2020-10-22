<?php include './class/Developer.class.php'; ?>
<?php include './class/Game.class.php'; ?>
<?php include './class/Platform.class.php'; ?>

<?php

$databaseHandler = new PDO('mysql:host=localhost;dbname=videogames', 'root', 'root');

$result = $databaseHandler->query('SELECT * FROM `developer`');
$developer = $result->fetchAll();
$arrayDeveloper = $developer[0];

$result = $databaseHandler->query('SELECT * FROM `game`');
$game = $result->fetchAll();
$arrayGame = $game[0];

$result = $databaseHandler->query('SELECT * FROM `platform`');
$platform = $result->fetchAll();
$arrayPlatform = $platform[0];


// var_dump($arrayPlatform);
// die();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet" />

<body>
    <div class="container">
        <div class="card text-center">
            <img src="images/data-original.jpg" class="card-img-top" alt="Retro gaming banner">
            <div class="card-header">
                <h1 class="mt-4 mb-4">My beautiful video games</h1>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"># <i class="fas fa-sort-down"></i></th>
                        <th scope="col">Title <i class="fas fa-sort-down"></i></th>
                        <th scope="col">Release date <i class="fas fa-sort-down"></i></th>
                        <th scope="col">Developer <i class="fas fa-sort-down"></i></th>
                        <th scope="col">Platform <i class="fas fa-sort-down"></i></th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>



                    <tr>
                        <th scope="row"><?= $arrayGame['id'] ?></th>
                        <td>
                            <a href="<?= $arrayGame['link'] ?>"><?= $arrayGame['title'] ?></a>
                        </td>
                        <td><?= $arrayGame['release_date'] ?></td>
                        <td>
                            <a href="<?= $arrayDeveloper['link'] ?>"><?= $arrayDeveloper['name'] ?></a>
                        </td>
                        <td>
                            <a href="<?= $arrayPlatform['link'] ?>"><?= $arrayPlatform['name'] ?></a>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm">
                                <i class="fas fa-edit"></i>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>



                    <form>
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <input type="text" name="title" placeholder="Title" />
                                <br />
                                <input type="text" name="link" placeholder="External link" />
                            </td>
                            <td>
                                <input type="date" name="release_date" />
                            </td>
                            <td>
                                <select name="developer">
                                    <option value="1">Bullfrog Productions</option>
                                    <option value="2">id Software</option>
                                </select>
                            </td>
                            <td>
                                <select name="platform">
                                    <option value="1">SNES</option>
                                    <option value="2">MS-DOS</option>
                                </select>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </td>
                            <td></td>
                        </tr>
                    </form>
                </tbody>
            </table>
            <div class="card-body">
                <p class="card-text">This interface lets you sort and organize your video games!</p>
                <p class="card-text">Let us know what you think and give us some love! 🥰</p>
            </div>
            <div class="card-footer text-muted">
                Created by <a href="https://github.com/M2i-DWWM-0920-Lyon-AURA">DWWM Lyon</a> &copy; 2020
            </div>
        </div>
    </div>
</body>

</html>