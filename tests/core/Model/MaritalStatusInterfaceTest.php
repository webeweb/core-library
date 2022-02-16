<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model;

use WBW\Library\Core\Model\MaritalStatusInterface;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Marital status interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Model
 */
class MaritalStatusInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(-1, MaritalStatusInterface::MARITAL_STATUS_EMPTY);
        $this->assertEquals(323, MaritalStatusInterface::MARITAL_STATUS_DIVORCED);
        $this->assertEquals(244, MaritalStatusInterface::MARITAL_STATUS_MARRIED);
        $this->assertEquals(103, MaritalStatusInterface::MARITAL_STATUS_PACS);
        $this->assertEquals(197, MaritalStatusInterface::MARITAL_STATUS_SINGLE);
        $this->assertEquals(384, MaritalStatusInterface::MARITAL_STATUS_WIDOWER);
    }
}
