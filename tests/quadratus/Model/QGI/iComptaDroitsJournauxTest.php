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

use WBW\Library\Quadratus\Model\QGI\iComptaDroitsJournaux;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * i compta droits journaux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class iComptaDroitsJournauxTest extends AbstractTestCase {

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new iComptaDroitsJournaux();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCodeUser() method.
     *
     * @return void
     */
    public function testSetCodeUser(): void {

        $obj = new iComptaDroitsJournaux();

        $obj->setCodeUser("codeUser");
        $this->assertEquals("codeUser", $obj->getCodeUser());
    }

    /**
     * Tests the setFlag() method.
     *
     * @return void
     */
    public function testSetFlag(): void {

        $obj = new iComptaDroitsJournaux();

        $obj->setFlag("flag");
        $this->assertEquals("flag", $obj->getFlag());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new iComptaDroitsJournaux();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNoDossCpta() method.
     *
     * @return void
     */
    public function testSetNoDossCpta(): void {

        $obj = new iComptaDroitsJournaux();

        $obj->setNoDossCpta("noDossCpta");
        $this->assertEquals("noDossCpta", $obj->getNoDossCpta());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new iComptaDroitsJournaux();

        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeUser());
        $this->assertNull($obj->getFlag());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNoDossCpta());
    }
}
