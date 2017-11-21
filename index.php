<?php


class hadse_horoof
{
    private $number;
    private $verb;
    private $pluralModifier;

    public function make($candidate, $count)
    {
        $this->MasterMethod($count);
        return sprintf(
            'There %s %s %s%s', $this->verb, $this->number, $candidate, $this->pluralModifier
        );
    }

    private function MasterMethod($count)
    {
        if ($count == 0) {
            $this->bedoone_harf();
        } elseif ($count == 1) {
            $this->yek_harf();
        } else {
            $this->more_harf($count);
        }
    }

    private function more_harf($count)
    {
        $this->number = strval($count);
        $this->verb   = 'are';
        $this->pluralModifier = 's';
    }

    private function yek_harf()
    {
        $this->number = '1';
        $this->verb   = 'is';
        $this->pluralModifier = '';
    }

    private function bedoone_harf()
    {
        $this->number = 'no';
        $this->verb   = 'are';
        $this->pluralModifier = 's';
    }
}
?>
