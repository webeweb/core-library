<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Booleans;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanDismissibleTrait;

/**
 * Boolean dismissible trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanDismissibleTraitTest extends AbstractTestCase {

    /**
     * Test setDismissible()
     *
     * @return void
     */
    public function testSetDismissible(): void {

        $obj = new TestBooleanDismissibleTrait();

        $obj->setDismissible(true);
        $this->assertTrue($obj->getDismissible());
    }
}
