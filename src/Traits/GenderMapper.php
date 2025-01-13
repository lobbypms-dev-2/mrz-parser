<?php

namespace Rakibdevs\MrzParser\Traits;

trait GenderMapper
{
    /**
     * Map Gender based on Code (M/F)
     *
     * @param string|null $code
     * @return string|null
     */
    public function mapGender(string $code = null): ?string
    {
        /*return match ($code) {
            "M" => "Male",
            "F" => "Female",
            default => null
        };*/


        switch ($code) {
            case "M":
                return "Male";
            case "F":
                return "Female";
            default:
                return null;
        }


    }
}
