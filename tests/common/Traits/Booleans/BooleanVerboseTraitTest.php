<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Booleans;

use WBW\Library\Common\Tests\Fixtures\Traits\Booleans\TestBooleanVerboseTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Boolean verbose trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Booleans
 */
class BooleanVerboseTraitTest extends AbstractTestCase {

    /**
     * Test setVerbose()
     *
     * @return void
     */
    public function testSetVerbose(): void {

        $obj = new TestBooleanVerboseTrait();

        $obj->setVerbose(true);
        $this->assertTrue($obj->getVerbose());
    }
}
