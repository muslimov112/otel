<?

try{
    $db = new PDO('mysql:host=localhost;dbname=hotel', 'root', 'root');
} catch (PDOExeption $e) {
    echo $e->getMessage();
    die();
}