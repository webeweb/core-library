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
use WBW\Library\Ciqual\Tests\Fixtures\Traits\Strings\TestStringNomEngTrait;

/**
 * String nom ENG trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Traits\Strings
 */
class StringNomEngTraitTest extends AbstractTestCase {

    /**
     * Test setNomEng()
     *
     * @return void
     */
    public function testSetNomEng(): void {

        $obj = new TestStringNomEngTrait();

        $obj->setNomEng("nomEng");
        $this->assertEquals("nomEng", $obj->getNomEng());
    }
}
