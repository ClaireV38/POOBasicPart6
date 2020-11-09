<?php


class Speedometer
{
    /**
     * coef km to miles
     * @var float
     */
    const COEF_KM_TO_MILES = 0.621371;

    /**
     * coef miles to km
     * @var float
     */
    const COEF_MILES_TO_KM = 1 / self::COEF_KM_TO_MILES;

    /**
     * convert distance in km to miles
     * @param float
     * @return float
     */
    public static function convertKmToMiles(float $distanceInkm): float
    {
        return round($distanceInkm * self::COEF_KM_TO_MILES, 2);
    }

    /**
     * convert distance in miles to km
     * @param float
     * @return float
     */
    public static function convertMilesToKm(float $distanceInMiles): float
    {
        return round($distanceInMiles * self::COEF_MILES_TO_KM, 2);
    }

}