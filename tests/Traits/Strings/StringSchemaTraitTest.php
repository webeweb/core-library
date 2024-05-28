<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringSchemaTrait;

/**
 * String schema trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringSchemaTraitTest extends AbstractTestCase {

    /**
     * Test setSchema()
     *
     * @return void
     */
    public function testSetSchema(): void {

        $obj = new TestStringSchemaTrait();

        $obj->setSchema("schema");
        $this->assertEquals("schema", $obj->getSchema());
    }
}
