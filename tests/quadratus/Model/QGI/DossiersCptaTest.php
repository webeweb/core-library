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

use WBW\Library\Quadratus\Model\QGI\DossiersCpta;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dossiers cpta test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class DossiersCptaTest extends AbstractTestCase {

    /**
     * Tests setCheminDossierCpta()
     *
     * @return void
     */
    public function testSetCheminDossierCpta(): void {

        $obj = new DossiersCpta();

        $obj->setCheminDossierCpta("cheminDossierCpta");
        $this->assertEquals("cheminDossierCpta", $obj->getCheminDossierCpta());
    }

    /**
     * Tests setNumDossierCpta()
     *
     * @return void
     */
    public function testSetNumDossierCpta(): void {

        $obj = new DossiersCpta();

        $obj->setNumDossierCpta("numDossierCpta");
        $this->assertEquals("numDossierCpta", $obj->getNumDossierCpta());
    }

    /**
     * Tests setNumDossierFact()
     *
     * @return void
     */
    public function testSetNumDossierFact(): void {

        $obj = new DossiersCpta();

        $obj->setNumDossierFact("numDossierFact");
        $this->assertEquals("numDossierFact", $obj->getNumDossierFact());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DossiersCpta();

        $this->assertNull($obj->getCheminDossierCpta());
        $this->assertNull($obj->getNumDossierCpta());
        $this->assertNull($obj->getNumDossierFact());
    }
}
