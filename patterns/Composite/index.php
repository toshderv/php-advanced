<?php

require '../../vendor/autoload.php';


use Patterns\Composite\NodeInterface;
use Patterns\Composite\TextDiv;
use Patterns\Composite\TextSpan;

//$div = new Div('Div');
//$span = new Span('Span');
//$span->addChild(new Span('Inner element'));
//$div->addChild($span);

$div = new TextDiv('Text div');
$div->addChild(new TextSpan('Test span'));

// ...

render($div);

function render(NodeInterface $div)
{
    echo $div->render();
}