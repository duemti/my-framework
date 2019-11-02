<?PHP

$name = $request->get('name', 'World');
echo 'Hello ', htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

