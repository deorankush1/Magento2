<?php
namespace Demo\World\NotMagento;

class YellowPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "Yellow Pencil";
    }
}
