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
use Exception;
use WBW\Library\Quadratus\Model\QPaie\SeuilReposRecup;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Seuil repos recup test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class SeuilReposRecupTest extends AbstractTestCase {

    /**
     * Tests setDateApplication()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateApplication(): void {

        // Set a Date/time mock.
        $dateApplication = new DateTime("2018-09-10");

        $obj = new SeuilReposRecup();

        $obj->setDateApplication($dateApplication);
        $this->assertSame($dateApplication, $obj->getDateApplication());
    }

    /**
     * Tests setNbJourReposRecup()
     *
     * @return void
     */
    public function testSetNbJourReposRecup(): void {

        $obj = new SeuilReposRecup();

        $obj->setNbJourReposRecup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourReposRecup());
    }

    /**
     * Tests setNumeroGrilleType()
     *
     * @return void
     */
    public function testSetNumeroGrilleType(): void {

        $obj = new SeuilReposRecup();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests setSeuilDeclenche()
     *
     * @return void
     */
    public function testSetSeuilDeclenche(): void {

        $obj = new SeuilReposRecup();

        $obj->setSeuilDeclenche(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuilDeclenche());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SeuilReposRecup();

        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getNbJourReposRecup());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getSeuilDeclenche());
    }
}
