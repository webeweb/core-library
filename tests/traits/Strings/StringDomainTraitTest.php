<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Strings;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringDomainTrait;

/**
 * String domain trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringDomainTraitTest extends AbstractTestCase {

    /**
     * Tests setDomain()
     *
     * @return void
     */
    public function testSetDomain(): void {

        $obj = new TestStringDomainTrait();

        $obj->setDomain("domain");
        $this->assertEquals("domain", $obj->getDomain());
    }
}
