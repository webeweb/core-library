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

use WBW\Library\Quadratus\Model\Proprete\CriteresChantier;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Criteres chantier test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class CriteresChantierTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new CriteresChantier();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new CriteresChantier();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new CriteresChantier();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeRef1()
     *
     * @return void
     */
    public function testSetCodeRef1(): void {

        $obj = new CriteresChantier();

        $obj->setCodeRef1("codeRef1");
        $this->assertEquals("codeRef1", $obj->getCodeRef1());
    }

    /**
     * Tests setCodeRef2()
     *
     * @return void
     */
    public function testSetCodeRef2(): void {

        $obj = new CriteresChantier();

        $obj->setCodeRef2("codeRef2");
        $this->assertEquals("codeRef2", $obj->getCodeRef2());
    }

    /**
     * Tests setCodeRef3()
     *
     * @return void
     */
    public function testSetCodeRef3(): void {

        $obj = new CriteresChantier();

        $obj->setCodeRef3("codeRef3");
        $this->assertEquals("codeRef3", $obj->getCodeRef3());
    }

    /**
     * Tests setCodeRef4()
     *
     * @return void
     */
    public function testSetCodeRef4(): void {

        $obj = new CriteresChantier();

        $obj->setCodeRef4("codeRef4");
        $this->assertEquals("codeRef4", $obj->getCodeRef4());
    }

    /**
     * Tests setCodeRef5()
     *
     * @return void
     */
    public function testSetCodeRef5(): void {

        $obj = new CriteresChantier();

        $obj->setCodeRef5("codeRef5");
        $this->assertEquals("codeRef5", $obj->getCodeRef5());
    }

    /**
     * Tests setTexte1()
     *
     * @return void
     */
    public function testSetTexte1(): void {

        $obj = new CriteresChantier();

        $obj->setTexte1("texte1");
        $this->assertEquals("texte1", $obj->getTexte1());
    }

    /**
     * Tests setTexte2()
     *
     * @return void
     */
    public function testSetTexte2(): void {

        $obj = new CriteresChantier();

        $obj->setTexte2("texte2");
        $this->assertEquals("texte2", $obj->getTexte2());
    }

    /**
     * Tests setTexte3()
     *
     * @return void
     */
    public function testSetTexte3(): void {

        $obj = new CriteresChantier();

        $obj->setTexte3("texte3");
        $this->assertEquals("texte3", $obj->getTexte3());
    }

    /**
     * Tests setTexte4()
     *
     * @return void
     */
    public function testSetTexte4(): void {

        $obj = new CriteresChantier();

        $obj->setTexte4("texte4");
        $this->assertEquals("texte4", $obj->getTexte4());
    }

    /**
     * Tests setTexte5()
     *
     * @return void
     */
    public function testSetTexte5(): void {

        $obj = new CriteresChantier();

        $obj->setTexte5("texte5");
        $this->assertEquals("texte5", $obj->getTexte5());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CriteresChantier();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeRef1());
        $this->assertNull($obj->getCodeRef2());
        $this->assertNull($obj->getCodeRef3());
        $this->assertNull($obj->getCodeRef4());
        $this->assertNull($obj->getCodeRef5());
        $this->assertNull($obj->getTexte1());
        $this->assertNull($obj->getTexte2());
        $this->assertNull($obj->getTexte3());
        $this->assertNull($obj->getTexte4());
        $this->assertNull($obj->getTexte5());
    }
}
