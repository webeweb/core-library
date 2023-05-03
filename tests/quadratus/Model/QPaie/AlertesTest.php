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

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\Alertes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Alertes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class AlertesTest extends AbstractTestCase {

    /**
     * Test setCloturee()
     *
     * @return void
     */
    public function testSetCloturee(): void {

        $obj = new Alertes();

        $obj->setCloturee(true);
        $this->assertTrue($obj->getCloturee());
    }

    /**
     * Test setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Alertes();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Test setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new Alertes();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new Alertes();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriode(): void {

        // Set a Date/time mock.
        $periode = new DateTime("2018-09-10");

        $obj = new Alertes();

        $obj->setPeriode($periode);
        $this->assertSame($periode, $obj->getPeriode());
    }

    /**
     * Test setType()
     *
     * @return void
     */
    public function testSetType(): void {

        $obj = new Alertes();

        $obj->setType("type");
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Alertes();

        $this->assertNull($obj->getCloturee());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getType());
    }
}
