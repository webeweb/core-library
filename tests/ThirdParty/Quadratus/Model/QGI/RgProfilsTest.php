<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\RgProfils;

/**
 * Rg profils test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class RgProfilsTest extends AbstractTestCase {

    /**
     * Tests the setFichiersMove() method.
     *
     * @return void
     */
    public function testSetFichiersMove(): void {

        $obj = new RgProfils();

        $obj->setFichiersMove("fichiersMove");
        $this->assertEquals("fichiersMove", $obj->getFichiersMove());
    }

    /**
     * Tests the setFichiersPublierWeb() method.
     *
     * @return void
     */
    public function testSetFichiersPublierWeb(): void {

        $obj = new RgProfils();

        $obj->setFichiersPublierWeb("fichiersPublierWeb");
        $this->assertEquals("fichiersPublierWeb", $obj->getFichiersPublierWeb());
    }

    /**
     * Tests the setNiveauMaxi() method.
     *
     * @return void
     */
    public function testSetNiveauMaxi(): void {

        $obj = new RgProfils();

        $obj->setNiveauMaxi("niveauMaxi");
        $this->assertEquals("niveauMaxi", $obj->getNiveauMaxi());
    }

    /**
     * Tests the setNiveauSupplementairelibelle() method.
     *
     * @return void
     */
    public function testSetNiveauSupplementairelibelle(): void {

        $obj = new RgProfils();

        $obj->setNiveauSupplementairelibelle(true);
        $this->assertEquals(true, $obj->getNiveauSupplementairelibelle());
    }

    /**
     * Tests the setPath() method.
     *
     * @return void
     */
    public function testSetPath(): void {

        $obj = new RgProfils();

        $obj->setPath("path");
        $this->assertEquals("path", $obj->getPath());
    }

    /**
     * Tests the setPathFormat() method.
     *
     * @return void
     */
    public function testSetPathFormat(): void {

        $obj = new RgProfils();

        $obj->setPathFormat("pathFormat");
        $this->assertEquals("pathFormat", $obj->getPathFormat());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new RgProfils();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new RgProfils();

        $this->assertNull($obj->getFichiersMove());
        $this->assertNull($obj->getFichiersPublierWeb());
        $this->assertNull($obj->getNiveauMaxi());
        $this->assertNull($obj->getNiveauSupplementairelibelle());
        $this->assertNull($obj->getPath());
        $this->assertNull($obj->getPathFormat());
        $this->assertNull($obj->getUniqId());
    }
}
