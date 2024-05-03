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
use WBW\Library\Easilys\Tests\Fixtures\Traits\Booleans\TestBooleanIsMainTrait;

/**
 * Boolean is main trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Booleans
 */
class BooleanIsMainTraitTest extends AbstractTestCase {

    /**
     * Test setIsMain()
     *
     * @return void
     */
    public function testSetIsMain(): void {

        $obj = new TestBooleanIsMainTrait();

        $obj->setIsMain(true);
        $this->assertTrue($obj->getIsMain());
    }
}
