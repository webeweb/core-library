<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\SeuilReposRecup;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Seuil repos recup model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class SeuilReposRecupTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new SeuilReposRecup();

        $this->assertNull($obj->getDateApplication());
        $this->assertNull($obj->getNbJourReposRecup());
        $this->assertNull($obj->getNumeroGrilleType());
        $this->assertNull($obj->getSeuilDeclenche());
    }

    /**
     * Tests the setDateApplication() method.
     *
     * @return void
     */
    public function testSetDateApplication() {

        $obj = new SeuilReposRecup();

        $obj->setDateApplication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateApplication());
    }

    /**
     * Tests the setNbJourReposRecup() method.
     *
     * @return void
     */
    public function testSetNbJourReposRecup() {

        $obj = new SeuilReposRecup();

        $obj->setNbJourReposRecup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourReposRecup());
    }

    /**
     * Tests the setNumeroGrilleType() method.
     *
     * @return void
     */
    public function testSetNumeroGrilleType() {

        $obj = new SeuilReposRecup();

        $obj->setNumeroGrilleType(10);
        $this->assertEquals(10, $obj->getNumeroGrilleType());
    }

    /**
     * Tests the setSeuilDeclenche() method.
     *
     * @return void
     */
    public function testSetSeuilDeclenche() {

        $obj = new SeuilReposRecup();

        $obj->setSeuilDeclenche(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuilDeclenche());
    }

}
