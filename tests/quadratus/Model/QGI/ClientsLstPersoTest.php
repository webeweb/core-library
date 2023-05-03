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

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\ClientsLstPerso;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients lst perso test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ClientsLstPersoTest extends AbstractTestCase {

    /**
     * Test setChapitre()
     *
     * @return void
     */
    public function testSetChapitre(): void {

        $obj = new ClientsLstPerso();

        $obj->setChapitre("chapitre");
        $this->assertEquals("chapitre", $obj->getChapitre());
    }

    /**
     * Test setCollCreat()
     *
     * @return void
     */
    public function testSetCollCreat(): void {

        $obj = new ClientsLstPerso();

        $obj->setCollCreat("collCreat");
        $this->assertEquals("collCreat", $obj->getCollCreat());
    }

    /**
     * Test setCollModif()
     *
     * @return void
     */
    public function testSetCollModif(): void {

        $obj = new ClientsLstPerso();

        $obj->setCollModif("collModif");
        $this->assertEquals("collModif", $obj->getCollModif());
    }

    /**
     * Test setDateCreat()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreat(): void {

        // Set a Date/time mock.
        $dateCreat = new DateTime("2018-09-10");

        $obj = new ClientsLstPerso();

        $obj->setDateCreat($dateCreat);
        $this->assertSame($dateCreat, $obj->getDateCreat());
    }

    /**
     * Test setDateModif()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new ClientsLstPerso();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Test setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new ClientsLstPerso();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Test setGUniqId()
     *
     * @return void
     */
    public function testSetGUniqId(): void {

        $obj = new ClientsLstPerso();

        $obj->setGUniqId("gUniqId");
        $this->assertEquals("gUniqId", $obj->getGUniqId());
    }

    /**
     * Test setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new ClientsLstPerso();

        $obj->setIndice(10);
        $this->assertEquals(10, $obj->getIndice());
    }

    /**
     * Test setLstCollab()
     *
     * @return void
     */
    public function testSetLstCollab(): void {

        $obj = new ClientsLstPerso();

        $obj->setLstCollab("lstCollab");
        $this->assertEquals("lstCollab", $obj->getLstCollab());
    }

    /**
     * Test setOptionVisu()
     *
     * @return void
     */
    public function testSetOptionVisu(): void {

        $obj = new ClientsLstPerso();

        $obj->setOptionVisu("optionVisu");
        $this->assertEquals("optionVisu", $obj->getOptionVisu());
    }

    /**
     * Test setOrigine()
     *
     * @return void
     */
    public function testSetOrigine(): void {

        $obj = new ClientsLstPerso();

        $obj->setOrigine(10);
        $this->assertEquals(10, $obj->getOrigine());
    }

    /**
     * Test setPeriodeDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeDeb(): void {

        // Set a Date/time mock.
        $periodeDeb = new DateTime("2018-09-10");

        $obj = new ClientsLstPerso();

        $obj->setPeriodeDeb($periodeDeb);
        $this->assertSame($periodeDeb, $obj->getPeriodeDeb());
    }

    /**
     * Test setPeriodeFin()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeFin(): void {

        // Set a Date/time mock.
        $periodeFin = new DateTime("2018-09-10");

        $obj = new ClientsLstPerso();

        $obj->setPeriodeFin($periodeFin);
        $this->assertSame($periodeFin, $obj->getPeriodeFin());
    }

    /**
     * Test setTypeSaisie()
     *
     * @return void
     */
    public function testSetTypeSaisie(): void {

        $obj = new ClientsLstPerso();

        $obj->setTypeSaisie(true);
        $this->assertTrue($obj->getTypeSaisie());
    }

    /**
     * Test setTypeSel()
     *
     * @return void
     */
    public function testSetTypeSel(): void {

        $obj = new ClientsLstPerso();

        $obj->setTypeSel("typeSel");
        $this->assertEquals("typeSel", $obj->getTypeSel());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ClientsLstPerso();

        $this->assertNull($obj->getChapitre());
        $this->assertNull($obj->getCollCreat());
        $this->assertNull($obj->getCollModif());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getGUniqId());
        $this->assertNull($obj->getIndice());
        $this->assertNull($obj->getLstCollab());
        $this->assertNull($obj->getOptionVisu());
        $this->assertNull($obj->getOrigine());
        $this->assertNull($obj->getPeriodeDeb());
        $this->assertNull($obj->getPeriodeFin());
        $this->assertNull($obj->getTypeSaisie());
        $this->assertNull($obj->getTypeSel());
    }
}
