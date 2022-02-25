<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\ValorisationHoraire;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Valorisation horaire test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ValorisationHoraireTest extends AbstractTestCase {

    /**
     * Tests setCoutHoraire()
     *
     * @return void
     */
    public function testSetCoutHoraire(): void {

        $obj = new ValorisationHoraire();

        $obj->setCoutHoraire(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutHoraire());
    }

    /**
     * Tests setQualification()
     *
     * @return void
     */
    public function testSetQualification(): void {

        $obj = new ValorisationHoraire();

        $obj->setQualification("qualification");
        $this->assertEquals("qualification", $obj->getQualification());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ValorisationHoraire();

        $this->assertNull($obj->getCoutHoraire());
        $this->assertNull($obj->getQualification());
    }
}
