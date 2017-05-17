<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\Map
 * @author    Aurelien FOUCRET <aurelien.foucret@smile.fr>
 * @copyright 2016 Smile
 * @license   Apache License Version 2.0
 */
namespace Smile\Map\Api\Data;

/**
 * Geo point interface definition.
 *
 * @category Smile
 * @package  Smile\Map
 * @author   Aurelien FOUCRET <aurelien.foucret@smile.fr>
 */
interface GeoPointInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const LATITUDE = 'latitude';
    const LONGITUDE = 'longitude';
    /**#@-*/

    /**
     * Set Latitude value.
     *
     * @param float $latitude
     *
     * @return self
     */
    public function setLatitude($latitude);

    /**
     * Geopoint latitude.
     *
     * @return float
     */
    public function getLatitude();

    /**
     * Set Longitude value.
     *
     * @param float $longitude
     *
     * @return self
     */
    public function setLongitude($longitude);

    /**
     * Geopoint longitude.
     *
     * @return float
     */
    public function getLongitude();
}
