<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Booleans;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Booleans\TestBooleanOnPostNewTrait;

/**
 * Boolean on post new trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Booleans
 */
class BooleanOnPostNewTraitTest extends AbstractTestCase {

    /**
     * Tests setOnPostNew()
     *
     * @return void
     */
    public function testSetOnPostNew(): void {

        $obj = new TestBooleanOnPostNewTrait();

        $obj->setOnPostNew(true);
        $this->assertTrue($obj->getOnPostNew());
    }
}
