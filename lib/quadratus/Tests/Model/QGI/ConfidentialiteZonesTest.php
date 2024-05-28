<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\ConfidentialiteZones;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Confidentialite zones test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ConfidentialiteZonesTest extends AbstractTestCase {

    /**
     * Test setChamp()
     *
     * @return void
     */
    public function testSetChamp(): void {

        $obj = new ConfidentialiteZones();

        $obj->setChamp("champ");
        $this->assertEquals("champ", $obj->getChamp());
    }

    /**
     * Test setChapitre()
     *
     * @return void
     */
    public function testSetChapitre(): void {

        $obj = new ConfidentialiteZones();

        $obj->setChapitre("chapitre");
        $this->assertEquals("chapitre", $obj->getChapitre());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new ConfidentialiteZones();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new ConfidentialiteZones();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConfidentialiteZones();

        $this->assertNull($obj->getChamp());
        $this->assertNull($obj->getChapitre());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getType());
    }
}
