<form method="POST">
    <label>
        Novo Nome:<br/>
        <input type="text" name="nome"/>
    </label>
    <input type="submit" value="Adicionar"/>
</form>
<h1>Lista de nomes</h1>

<?php  
    $name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    if(isset($name) && $name != '') {
        $list = file_get_contents('lista.txt');
        $list .= "\n$name";
        file_put_contents('lista.txt', $list);
        $list = explode("\n", $list);
        echo "<ul>";
        foreach($list as $item) {
            echo "<li>".$item."</li>";
        }      
        echo "</ul>";      
    } else {
        $list = file_get_contents('lista.txt');
        $list = explode("\n", $list);
        echo "<ul>";
        foreach($list as $item) {
            echo "<li>".$item."</li>";
        }  
        echo "</ul>";
    }