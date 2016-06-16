<?php
namespace Interfaces;


interface IPlanet {
    /**
     * возвращаем ID добавленного существа
     * @param IBeing $being
     * @return int $id_being
     */
    public function addBeing(IBeing $being) :int ;

    /**
     * возвращает количество существ на планете
     * @return int $cnt_being
     */
    public function getCountBeings():int ;

    /**
     * возвращает имя планеты
     * @return string $planet_name
     */
    public function getName():string ;

    /**
     * получение веса планеты
     * @return float $planet_weight
     */
    public function getWeight():float ;
}