<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\ImmoEnsemble;

/**
 * Immo ensemble test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class ImmoEnsembleTest extends AbstractTestCase {

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new ImmoEnsemble();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new ImmoEnsemble();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroEnsemble() method.
     *
     * @return void
     */
    public function testSetNumeroEnsemble() {

        $obj = new ImmoEnsemble();

        $obj->setNumeroEnsemble(10);
        $this->assertEquals(10, $obj->getNumeroEnsemble());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ImmoEnsemble();

        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroEnsemble());
    }
}
