<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\PointageReglementsLignes;

/**
 * Pointage reglements lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class PointageReglementsLignesTest extends AbstractTestCase {

    /**
     * Tests the setMontantPointe() method.
     *
     * @return void
     */
    public function testSetMontantPointe(): void {

        $obj = new PointageReglementsLignes();

        $obj->setMontantPointe(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantPointe());
    }

    /**
     * Tests the setNumCptPayeur() method.
     *
     * @return void
     */
    public function testSetNumCptPayeur(): void {

        $obj = new PointageReglementsLignes();

        $obj->setNumCptPayeur("numCptPayeur");
        $this->assertEquals("numCptPayeur", $obj->getNumCptPayeur());
    }

    /**
     * Tests the setNumDoss() method.
     *
     * @return void
     */
    public function testSetNumDoss(): void {

        $obj = new PointageReglementsLignes();

        $obj->setNumDoss("numDoss");
        $this->assertEquals("numDoss", $obj->getNumDoss());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new PointageReglementsLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumUniqEcr() method.
     *
     * @return void
     */
    public function testSetNumUniqEcr(): void {

        $obj = new PointageReglementsLignes();

        $obj->setNumUniqEcr(10);
        $this->assertEquals(10, $obj->getNumUniqEcr());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new PointageReglementsLignes();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PointageReglementsLignes();

        $this->assertNull($obj->getMontantPointe());
        $this->assertNull($obj->getNumCptPayeur());
        $this->assertNull($obj->getNumDoss());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumUniqEcr());
        $this->assertNull($obj->getNumeroCompte());
    }
}
