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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringSubjectTrait;

/**
 * String subject trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringSubjectTraitTest extends AbstractTestCase {

    /**
     * Tests setSubject()
     *
     * @return void
     */
    public function testSetSubject(): void {

        $obj = new TestStringSubjectTrait();

        $obj->setSubject("subject");
        $this->assertEquals("subject", $obj->getSubject());
    }
}
