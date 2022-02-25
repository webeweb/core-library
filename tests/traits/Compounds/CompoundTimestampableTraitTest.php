<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Compounds;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Compounds\TestCompoundTimestampableTrait;

/**
 * Compound timestampable trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Compounds
 */
class CompoundTimestampableTraitTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestCompoundTimestampableTrait();

        $this->assertNull($obj->getCreatedAt());
        $this->assertNull($obj->getUpdatedAt());
    }
}
