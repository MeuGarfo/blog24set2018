<?php
$links=[
    '/'=>'Página principal',
    '/entrar.php'=>'Entrar',
    '/novoPost.php'=>'Criar novo post'
];
$uri=$_SERVER['REQUEST_URI'];
print '<b>Menu</b>';
print '<ul>';
foreach ($links as $key => $value) {
    if($key==$uri){
        print '<li>'.$value.'</li>';
    }else{
        $link='<a href="'.$key.'">'.$value.'</a>';
        print '<li>'.$link.'</li>';
    }
}
print '</ul>';
?>
