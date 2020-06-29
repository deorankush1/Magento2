<?php
namespace Demo\World\NotMagento;

class RedPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "Red Pencil";
    }
}
