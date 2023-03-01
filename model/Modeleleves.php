<?php
class Modeleleves extends model
{
    function __construct()
    {
        $this->connecting();
    }
    public function Alleleves()
    {
        $this->table="eleves";
        return $this->GetAll();
    }
}
