<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\Code;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Code test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class CodeTest extends AbstractTestCase {

    /**
     * Test setCodePackaging()
     *
     * @return void
     */
    public function testSetCodePackaging() {

        $obj = new Code();

        $obj->setCodePackaging("codePackaging");
        $this->assertEquals("codePackaging", $obj->getCodePackaging());
    }

    /**
     * Test setIdPackagingUnit()
     *
     * @return void
     */
    public function testSetIdPackagingUnit() {

        $obj = new Code();

        $obj->setIdPackagingUnit(1);
        $this->assertEquals(1, $obj->getIdPackagingUnit());
    }

    /**
     * Test setLabelPackaging()
     *
     * @return void
     */
    public function testSetLabelPackaging() {

        $obj = new Code();

        $obj->setLabelPackaging("codePackaging");
        $this->assertEquals("codePackaging", $obj->getLabelPackaging());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Code();

        $this->assertNull($obj->getId());

        $this->assertNull($obj->getCodePackaging());
        $this->assertNull($obj->getIdPackagingUnit());
        $this->assertNull($obj->getLabelPackaging());
    }
}
