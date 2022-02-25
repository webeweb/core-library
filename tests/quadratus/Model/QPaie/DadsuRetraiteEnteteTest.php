<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use WBW\Library\Quadratus\Model\QPaie\DadsuRetraiteEntete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dadsu retraite entete test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DadsuRetraiteEnteteTest extends AbstractTestCase {

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new DadsuRetraiteEntete();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeOrganisme()
     *
     * @return void
     */
    public function testSetCodeOrganisme(): void {

        $obj = new DadsuRetraiteEntete();

        $obj->setCodeOrganisme("codeOrganisme");
        $this->assertEquals("codeOrganisme", $obj->getCodeOrganisme());
    }

    /**
     * Tests setIntitule()
     *
     * @return void
     */
    public function testSetIntitule(): void {

        $obj = new DadsuRetraiteEntete();

        $obj->setIntitule("intitule");
        $this->assertEquals("intitule", $obj->getIntitule());
    }

    /**
     * Tests setMailContact()
     *
     * @return void
     */
    public function testSetMailContact(): void {

        $obj = new DadsuRetraiteEntete();

        $obj->setMailContact("mailContact");
        $this->assertEquals("mailContact", $obj->getMailContact());
    }

    /**
     * Tests setNomContact()
     *
     * @return void
     */
    public function testSetNomContact(): void {

        $obj = new DadsuRetraiteEntete();

        $obj->setNomContact("nomContact");
        $this->assertEquals("nomContact", $obj->getNomContact());
    }

    /**
     * Tests setTelContact()
     *
     * @return void
     */
    public function testSetTelContact(): void {

        $obj = new DadsuRetraiteEntete();

        $obj->setTelContact("telContact");
        $this->assertEquals("telContact", $obj->getTelContact());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DadsuRetraiteEntete();

        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeOrganisme());
        $this->assertNull($obj->getIntitule());
        $this->assertNull($obj->getMailContact());
        $this->assertNull($obj->getNomContact());
        $this->assertNull($obj->getTelContact());
    }
}
