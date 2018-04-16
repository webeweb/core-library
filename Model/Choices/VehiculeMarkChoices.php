<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Choices;

/**
 * Vehicule mark choices.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Choices
 */
final class VehiculeMarkChoices implements VehiculeMarkChoicesInterface {

    /**
     * Get the choices.
     *
     * @return array Returns the choices.
     */
    public static function getChoices() {
        return [
            self::VEHICULE_MARK_AUDI       => "Audi",
            self::VEHICULE_MARK_BMW        => "BMW",
            self::VEHICULE_MARK_CITROEN    => "Citroën",
            self::VEHICULE_MARK_DACIA      => "Dacia",
            self::VEHICULE_MARK_FIAT       => "Fiat",
            self::VEHICULE_MARK_FORD       => "Ford",
            self::VEHICULE_MARK_HONDA      => "Honda",
            self::VEHICULE_MARK_HYUNDAI    => "Hyundai",
            self::VEHICULE_MARK_KIA        => "Kia",
            self::VEHICULE_MARK_LANCIA     => "Lancia",
            self::VEHICULE_MARK_LAND_ROVER => "Land Rover",
            self::VEHICULE_MARK_MERCEDES   => "Mercedes",
            self::VEHICULE_MARK_MINI       => "Mni",
            self::VEHICULE_MARK_NISSAN     => "Nissan",
            self::VEHICULE_MARK_OPEL       => "Opel",
            self::VEHICULE_MARK_PEUGEOT    => "Peugeot",
            self::VEHICULE_MARK_RENAULT    => "Renault",
            self::VEHICULE_MARK_ROVER      => "Rover",
            self::VEHICULE_MARK_SEAT       => "Seat",
            self::VEHICULE_MARK_SKODA      => "Skoda",
            self::VEHICULE_MARK_SMART      => "Smart",
            self::VEHICULE_MARK_TOYOTA     => "Toyota",
            self::VEHICULE_MARK_VOLKSWAGEN => "Volkswagen",
            self::VEHICULE_MARK_VOLVO      => "Volvo",
        ];
    }

}
