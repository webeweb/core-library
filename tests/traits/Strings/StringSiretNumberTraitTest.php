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
use WBW\Library\Traits\Tests\Fixtures\Strings\TestStringSiretNumberTrait;

/**
 * String SIRET number trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Strings
 */
class StringSiretNumberTraitTest extends AbstractTestCase {

    /**
     * Tests setSiretNumber()
     *
     * @return void
     */
    public function testSetSiretNumber(): void {

        $obj = new TestStringSiretNumberTrait();

        $obj->setSiretNumber("siretNumber");
        $this->assertEquals("siretNumber", $obj->getSiretNumber());
    }
}
