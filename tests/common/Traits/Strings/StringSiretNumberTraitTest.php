<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestStringSiretNumberTrait;

/**
 * String SIRET number trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class StringSiretNumberTraitTest extends AbstractTestCase {

    /**
     * Test setSiretNumber()
     *
     * @return void
     */
    public function testSetSiretNumber(): void {

        $obj = new TestStringSiretNumberTrait();

        $obj->setSiretNumber("siretNumber");
        $this->assertEquals("siretNumber", $obj->getSiretNumber());
    }
}
