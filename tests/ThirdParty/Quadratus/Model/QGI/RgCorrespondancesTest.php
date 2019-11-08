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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\RgCorrespondances;

/**
 * Rg correspondances test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class RgCorrespondancesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RgCorrespondances();

        $this->assertNull($obj->getFichiersPublierWeb());
        $this->assertNull($obj->getIgnorer());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getTypeDonnees());
        $this->assertNull($obj->getUniqId());
        $this->assertNull($obj->getValeur());
        $this->assertNull($obj->getValeurOrigine());
    }

    /**
     * Tests the setFichiersPublierWeb() method.
     *
     * @return void
     */
    public function testSetFichiersPublierWeb() {

        $obj = new RgCorrespondances();

        $obj->setFichiersPublierWeb("fichiersPublierWeb");
        $this->assertEquals("fichiersPublierWeb", $obj->getFichiersPublierWeb());
    }

    /**
     * Tests the setIgnorer() method.
     *
     * @return void
     */
    public function testSetIgnorer() {

        $obj = new RgCorrespondances();

        $obj->setIgnorer("ignorer");
        $this->assertEquals("ignorer", $obj->getIgnorer());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau() {

        $obj = new RgCorrespondances();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Tests the setTypeDonnees() method.
     *
     * @return void
     */
    public function testSetTypeDonnees() {

        $obj = new RgCorrespondances();

        $obj->setTypeDonnees("typeDonnees");
        $this->assertEquals("typeDonnees", $obj->getTypeDonnees());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId() {

        $obj = new RgCorrespondances();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur() {

        $obj = new RgCorrespondances();

        $obj->setValeur("valeur");
        $this->assertEquals("valeur", $obj->getValeur());
    }

    /**
     * Tests the setValeurOrigine() method.
     *
     * @return void
     */
    public function testSetValeurOrigine() {

        $obj = new RgCorrespondances();

        $obj->setValeurOrigine("valeurOrigine");
        $this->assertEquals("valeurOrigine", $obj->getValeurOrigine());
    }
}
