<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Compounds;

use WBW\Library\Common\Tests\Fixtures\Traits\Compounds\TestCompoundPointTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Compound point trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Compounds
 */
class CompoundPointTraitTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestCompoundPointTrait();

        $this->assertNull($obj->getX());
        $this->assertNull($obj->getY());
    }
}
