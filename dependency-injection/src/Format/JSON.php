<?php

namespace App\Format;

use App\Format\FormatInterface;

class JSON extends BaseFormat implements FormatInterface
{
    public function convert(): string
    {
        return json_encode($this->data);
    }

    public function getName(): string
    {
        return 'JSON';
    }

}