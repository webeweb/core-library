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

use WBW\Library\Quadratus\Model\Proprete\ArticlesRisques;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Articles risques test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ArticlesRisquesTest extends AbstractTestCase {

    /**
     * Tests setCodeArticle()
     *
     * @return void
     */
    public function testSetCodeArticle(): void {

        $obj = new ArticlesRisques();

        $obj->setCodeArticle("codeArticle");
        $this->assertEquals("codeArticle", $obj->getCodeArticle());
    }

    /**
     * Tests setCodeRisque()
     *
     * @return void
     */
    public function testSetCodeRisque(): void {

        $obj = new ArticlesRisques();

        $obj->setCodeRisque("codeRisque");
        $this->assertEquals("codeRisque", $obj->getCodeRisque());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ArticlesRisques();

        $this->assertNull($obj->getCodeArticle());
        $this->assertNull($obj->getCodeRisque());
    }
}
