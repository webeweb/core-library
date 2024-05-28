<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringIdentifierTrait;

/**
 * String identifier trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringIdentifierTraitTest extends AbstractTestCase {

    /**
     * Test setIdentifier()
     *
     * @return void
     */
    public function testSetIdentifier(): void {

        $obj = new TestStringIdentifierTrait();

        $obj->setIdentifier("identifier");
        $this->assertEquals("identifier", $obj->getIdentifier());
    }
}
