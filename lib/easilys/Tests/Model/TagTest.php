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

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\Tag;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Tag test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class TagTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Tag();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getBackgroundColor());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getType());
    }
}
