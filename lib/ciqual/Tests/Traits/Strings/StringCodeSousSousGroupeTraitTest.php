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
use WBW\Library\Ciqual\Tests\Fixtures\Traits\Strings\TestStringCodeSousSousGroupeTrait;

/**
 * String code sous sous-groupe trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Tests\Traits\Strings
 */
class StringCodeSousSousGroupeTraitTest extends AbstractTestCase {

    /**
     * Test setCodeSousSousGroupe()
     *
     * @return void
     */
    public function testSetCodeSousSousGroupe(): void {

        $obj = new TestStringCodeSousSousGroupeTrait();

        $obj->setCodeSousSousGroupe("codeSousSousGroupe");
        $this->assertEquals("codeSousSousGroupe", $obj->getCodeSousSousGroupe());
    }
}
