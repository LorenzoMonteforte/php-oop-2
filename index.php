<?php
    require __DIR__ . "/Product.php";
    require __DIR__ . "/User.php";
    $logged = false;
    $index_user;
    if(isset($_GET["email"]) && isset($_GET["password"])){
        for($i=0; $i<sizeof($user); $i++){
            if($user[$i]->email == $_GET["email"] && $user[$i]->password == $_GET["password"]){
                $logged = true;
                $index_user = $i;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        if($logged == false){
            echo    '<form action="index.php">
                        <input name="email" type="text" placeholder="Email">
                        <input name="password" type="text" placeholder="Password">
                        <input type="submit" value="Accedi">
                    </form>';
        }else{
            echo 'Ciao ' . $user[$index_user]->name . " " . $user[$index_user]->surname;
            echo    '<form action="index.php">
                        <input type="submit" value="Esci">
                    </form>'; 
        }
    ?>
    <div id="cardsContainer">
        <?php
            for($i=0; $i<sizeof($products); $i++){
                echo    '<div class="card">
                            <div class="generalInfoContainer">
                                <h3>' . $products[$i]->category->get_category() . '</h3>
                                <img src="' . $products[$i]->animal->src_img . '">
                            </div>
                            <img class="marTop05rem" src="' . $products[$i]->category->src_img . '">
                            <h2 class="marTop05rem">' . $products[$i]->category->name . '</h2>
                            <h3 class="marTop05rem">' . $products[$i]->category->brand . '</h3>
                            <div class="marTop05rem">
                                <span>Prezzo: </span>
                                <span>
                                    <strong';
                if($logged == true){
                    echo ' class="listPrice"';
                }
                echo                '>' . $products[$i]->category->price . '€</strong>';
                if($logged == true){
                    $discount = number_format($products[$i]->category->price  - ($products[$i]->category->price * 20 / 100), 2);
                    echo '<strong class="marLef05rem">' . $discount . '€</strong>';
                }
                echo            '</span>
                            </div>';
                if($products[$i]->category->get_category() == "Cibo"){
                    echo    '<table class="marTop05rem">';
                    if($products[$i]->category->nutritional_characteristics != null){
                        echo    '<tr>
                                    <th>Caratteristica nutrizionale:</th>
                                    <td>' . $products[$i]->category->nutritional_characteristics . '</td>
                                </tr>';
                    }            
                    echo        '<tr>
                                    <th>Gusto:</th>
                                    <td>' . $products[$i]->category->taste . '</td>
                                </tr>
                                <tr>
                                    <th>Lifestage:</th>
                                    <td>' . $products[$i]->category->lifestage . '</td>
                                </tr>
                                <tr>
                                    <th>Razza:</th>
                                    <td>' . $products[$i]->category->breed . '</td>
                                </tr>';
                    if($products[$i]->category->size != null){
                        echo    '<tr>
                                    <th>Taglia:</th>
                                    <td>' . $products[$i]->category->size . '</td>
                                </tr>';
                    }
                    echo    '</table>';
                }elseif($products[$i]->category->get_category() == "Giochi"){
                    echo    '<table class="marTop05rem">
                                <tr>
                                    <th>Lifestage:</th>
                                    <td>Adulto</td>
                                </tr>
                            </table>';
                }elseif($products[$i]->category->get_category() == "Cucce"){
                    echo    '<table class="marTop05rem">
                                <tr>
                                    <th>Altezza:</th>
                                    <td>100cm</td>
                                </tr>
                                <tr>
                                    <th>Larghezza</th>
                                    <td>150cm</td>
                                </tr>
                                <tr>
                                    <th>Profondità</th>
                                    <td>100cm</td>
                                </tr>
                            </table>';
                }
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>