<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Provas</title>
    </head>
    <body>
        <h1>Lista de Provas</h1>
        <table border = "1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tempo</th>
                    <th>Descrição</th>
                    <th>Numero de integrantes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($provas as $p){
                    echo '<tr>';
                        echo '<td>'.$p->nome.'</td>';
                        echo '<td>'.$p->tempo.'</td>';
                        echo '<td>'.$p->descrição.'</td>';
                        echo '<td>'.$p->NIntegrantes.'</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
