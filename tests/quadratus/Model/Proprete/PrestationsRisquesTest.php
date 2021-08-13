<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\PrestationsRisques;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Prestations risques test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PrestationsRisquesTest extends AbstractTestCase {

    /**
     * Tests the setCodeArticle() method.
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new PrestationsRisques();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new PrestationsRisques();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests the setTauxExposition() method.
     *
     * @return void
     */
    public function testSetTauxExposition(): void {

        $obj = new PrestationsRisques();

        $obj->setTauxExposition(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxExposition());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PrestationsRisques();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getTauxExposition());
    }
}
