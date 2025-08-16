<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Traits\Objects;

use WBW\Library\XmlTv\Model\Value;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Objects\TestValueValueTrait;

/**
 * Value value trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Objects
 */
class ValueValueTraitTest extends AbstractTestCase {

    /**
     * Test setValue()
     *
     * @return void
     */
    public function testSetValue(): void {

        // Set a Value mock.
        $value = new Value();

        $obj = new TestValueValueTrait();

        $obj->setValue($value);
        $this->assertSame($value, $obj->getValue());
    }
}
