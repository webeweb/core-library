<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use WBW\Library\Quadratus\Model\QCompta\ImmoEnsemble;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Immo ensemble test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class ImmoEnsembleTest extends AbstractTestCase {

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new ImmoEnsemble();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new ImmoEnsemble();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setNumeroEnsemble()
     *
     * @return void
     */
    public function testSetNumeroEnsemble(): void {

        $obj = new ImmoEnsemble();

        $obj->setNumeroEnsemble(10);
        $this->assertEquals(10, $obj->getNumeroEnsemble());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ImmoEnsemble();

        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroEnsemble());
    }
}
