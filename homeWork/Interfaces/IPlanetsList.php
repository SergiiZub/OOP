<?php
namespace Interfaces;


interface IPlanetsList{
    /**
     * @param IPlanet $planet - экземпляр класса планеты
     * @return int - возвращает ID планеты
     */
    public function add(IPlanet $planet):int;

    /**
     * получение списка добавленных планет
     * @return array - массив созданных планет,
     *  экземпляры классов планет,
     *  реализующих интерфейс IPlanet
     */
    public function getList():array ;

    /**
     * получение кол-ва добавленных планет
     * @return int
     */
    public function getCounts():int;
}
