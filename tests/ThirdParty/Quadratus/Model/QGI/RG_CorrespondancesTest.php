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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\RG_Correspondances;

/**
 * R g_ correspondances model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class RG_CorrespondancesTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RG_Correspondances();

        $this->assertNull($obj->getFichiers_PublierWeb());
        $this->assertNull($obj->getIgnorer());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getTypeDonnees());
        $this->assertNull($obj->getUniqID());
        $this->assertNull($obj->getValeur());
        $this->assertNull($obj->getValeurOrigine());
    }

    /**
     * Tests the setFichiers_PublierWeb() method.
     *
     * @return void
     */
    public function testSetFichiers_PublierWeb() {

        $obj = new RG_Correspondances();

        $obj->setFichiers_PublierWeb("fichiers_PublierWeb");
        $this->assertEquals("fichiers_PublierWeb", $obj->getFichiers_PublierWeb());
    }

    /**
     * Tests the setIgnorer() method.
     *
     * @return void
     */
    public function testSetIgnorer() {

        $obj = new RG_Correspondances();

        $obj->setIgnorer("ignorer");
        $this->assertEquals("ignorer", $obj->getIgnorer());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau() {

        $obj = new RG_Correspondances();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Tests the setTypeDonnees() method.
     *
     * @return void
     */
    public function testSetTypeDonnees() {

        $obj = new RG_Correspondances();

        $obj->setTypeDonnees("typeDonnees");
        $this->assertEquals("typeDonnees", $obj->getTypeDonnees());
    }

    /**
     * Tests the setUniqID() method.
     *
     * @return void
     */
    public function testSetUniqID() {

        $obj = new RG_Correspondances();

        $obj->setUniqID("uniqID");
        $this->assertEquals("uniqID", $obj->getUniqID());
    }

    /**
     * Tests the setValeur() method.
     *
     * @return void
     */
    public function testSetValeur() {

        $obj = new RG_Correspondances();

        $obj->setValeur("valeur");
        $this->assertEquals("valeur", $obj->getValeur());
    }

    /**
     * Tests the setValeurOrigine() method.
     *
     * @return void
     */
    public function testSetValeurOrigine() {

        $obj = new RG_Correspondances();

        $obj->setValeurOrigine("valeurOrigine");
        $this->assertEquals("valeurOrigine", $obj->getValeurOrigine());
    }
}
