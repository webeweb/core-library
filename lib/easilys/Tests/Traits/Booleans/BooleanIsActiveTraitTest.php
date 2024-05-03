<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Easilys\Tests\Traits\Booleans;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Booleans\TestBooleanIsActiveTrait;

/**
 * Boolean is active trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Booleans
 */
class BooleanIsActiveTraitTest extends AbstractTestCase {

    /**
     * Test setIsActive()
     *
     * @return void
     */
    public function testSetIsActive(): void {

        $obj = new TestBooleanIsActiveTrait();

        $obj->setIsActive(true);
        $this->assertTrue($obj->getIsActive());
    }
}
