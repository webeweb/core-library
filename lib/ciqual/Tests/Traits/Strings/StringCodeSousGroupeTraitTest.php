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
use WBW\Library\Ciqual\Tests\Fixtures\Traits\Strings\TestStringCodeSousGroupeTrait;

/**
 * String code sous-groupe trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Traits\Strings
 */
class StringCodeSousGroupeTraitTest extends AbstractTestCase {

    /**
     * Test setCodeSousGroupe()
     *
     * @return void
     */
    public function testSetCodeSousGroupe(): void {

        $obj = new TestStringCodeSousGroupeTrait();

        $obj->setCodeSousGroupe("codeSousGroupe");
        $this->assertEquals("codeSousGroupe", $obj->getCodeSousGroupe());
    }
}
