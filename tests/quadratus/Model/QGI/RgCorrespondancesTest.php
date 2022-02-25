<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\RgCorrespondances;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Rg correspondances test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class RgCorrespondancesTest extends AbstractTestCase {

    /**
     * Tests setFichiersPublierWeb()
     *
     * @return void
     */
    public function testSetFichiersPublierWeb(): void {

        $obj = new RgCorrespondances();

        $obj->setFichiersPublierWeb("fichiersPublierWeb");
        $this->assertEquals("fichiersPublierWeb", $obj->getFichiersPublierWeb());
    }

    /**
     * Tests setIgnorer()
     *
     * @return void
     */
    public function testSetIgnorer(): void {

        $obj = new RgCorrespondances();

        $obj->setIgnorer("ignorer");
        $this->assertEquals("ignorer", $obj->getIgnorer());
    }

    /**
     * Tests setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new RgCorrespondances();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Tests setTypeDonnees()
     *
     * @return void
     */
    public function testSetTypeDonnees(): void {

        $obj = new RgCorrespondances();

        $obj->setTypeDonnees("typeDonnees");
        $this->assertEquals("typeDonnees", $obj->getTypeDonnees());
    }

    /**
     * Tests setUniqId()
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new RgCorrespondances();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests setValeur()
     *
     * @return void
     */
    public function testSetValeur(): void {

        $obj = new RgCorrespondances();

        $obj->setValeur("valeur");
        $this->assertEquals("valeur", $obj->getValeur());
    }

    /**
     * Tests setValeurOrigine()
     *
     * @return void
     */
    public function testSetValeurOrigine(): void {

        $obj = new RgCorrespondances();

        $obj->setValeurOrigine("valeurOrigine");
        $this->assertEquals("valeurOrigine", $obj->getValeurOrigine());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RgCorrespondances();

        $this->assertNull($obj->getFichiersPublierWeb());
        $this->assertNull($obj->getIgnorer());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getTypeDonnees());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getValeur());
        $this->assertNull($obj->getValeurOrigine());
    }
}
