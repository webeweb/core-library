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

use WBW\Library\Core\Model\CivilityInterface;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Civility interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Model
 */
class CivilityInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(-1, CivilityInterface::CIVILITY_EMPTY);
        $this->assertEquals(164, CivilityInterface::CIVILITY_MISS);
        $this->assertEquals(301, CivilityInterface::CIVILITY_MISTER);
        $this->assertEquals(106, CivilityInterface::CIVILITY_MRS);
    }
}
