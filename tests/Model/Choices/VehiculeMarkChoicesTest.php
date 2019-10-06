<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model\Choices;

use WBW\Library\Core\Model\Choices\VehiculeMarkChoices;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Vehicule mark choices test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Model\Choices
 */
class VehiculeMakChoicesTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getChoices() method.
     *
     * @return void
     */
    public function testGetChoices() {

        $res = [
            1  => "Audi",
            2  => "BMW",
            3  => "Citroën",
            4  => "Dacia",
            5  => "Fiat",
            6  => "Ford",
            7  => "Honda",
            8  => "Hyundai",
            9  => "Kia",
            10 => "Lancia",
            11 => "Land Rover",
            12 => "Mercedes",
            13 => "Mni",
            14 => "Nissan",
            15 => "Opel",
            16 => "Peugeot",
            17 => "Renault",
            18 => "Rover",
            19 => "Seat",
            20 => "Skoda",
            21 => "Smart",
            22 => "Toyota",
            23 => "Volkswagen",
            24 => "Volvo",
        ];
        $this->assertEquals($res, VehiculeMarkChoices::getChoices());
    }

}
