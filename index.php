<?php
    declare(strict_types=1);
    
    spl_autoload_register(function ($class)
    {
        $path = __DIR__."/Objects/".$class."/".$class.".php";
        echo "<div class=\"log\">LOG: load class ".$class." in path ".$path."</div>";
        if (file_exists($path))
            require_once($path);
        else echo "Error load class ".$class."\n";
    });

    $student = new Human("Stanislav", "Forsberg", 1986);
    $car = new Transport("BMW", "Чёрный");
    $tv = new Technics("Samsung", "МИР", 1);

    echo "<br /><div id=\"content\">";

    echo "Имя студента: ".$student->getFName()."<br />";
    echo "Фамилия студента: ".$student->getLName()."<br />";
    echo "Год рождения студента: ".$student->year."<br />";
    echo "Возраст студента: ".$student->getAge()."<br />";

    echo "<br />";

    echo "Марка машины: ".$car->getMark()."<br />";
    echo "Цвет машины: ".$car->getColor()."<br />";
    echo "Скорость машины: ".$car->speed." км/ч<br />";
    echo "Изменение скорости - ";
    $car->Speed(130);
    echo "Скорость машины: ".$car->speed." км/ч<br />";

    echo "<br />";

    echo "Бренд телевизора: ".$tv->getBrand()."<br />";
    echo "Оператор ТВ: ".$tv->getOperator()."<br />";
    echo "Текущий канал телевизора: ".$tv->channel."<br />";
    echo "Смена канала - ";
    $tv->channel = 11;
    echo "Текущий канал телевизора: ".$tv->channel."<br />";

    echo "</div>";