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

namespace WBW\Library\Ciqual\Tests\Traits\Strings;

use WBW\Library\Ciqual\Tests\AbstractTestCase;
use WBW\Library\Ciqual\Tests\Fixtures\Traits\Strings\TestStringNomFrTrait;

/**
 * String nom FR trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Traits\Strings
 */
class StringNomFrTraitTest extends AbstractTestCase {

    /**
     * Test setNomFr()
     *
     * @return void
     */
    public function testSetNomFr(): void {

        $obj = new TestStringNomFrTrait();

        $obj->setNomFr("nomFr");
        $this->assertEquals("nomFr", $obj->getNomFr());
    }
}
