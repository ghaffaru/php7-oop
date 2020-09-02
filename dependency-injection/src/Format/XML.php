<?php

namespace App\Format;

use App\Format\FormatInterface;

class XML extends BaseFormat implements FormatInterface
{
    public function convert(): string
    {
        $result = '';

        foreach ($this->data as $key => $value) {
            $result .= '<'. $key. '>' . $value . '</' . $key. '>';
        }

        return htmlspecialchars($result);
    }

    public function getName(): string
    {
        return 'XML';
    }
}