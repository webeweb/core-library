<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringPrudLieuVoteTrait;

/**
 * Prud lieu vote trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringPrudLieuVoteTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrudLieuVote() method.
     *
     * @return void
     */
    public function testSetPrudLieuVote() {

        $obj = new TestStringPrudLieuVoteTrait();

        $obj->setPrudLieuVote("prudLieuVote");
        $this->assertEquals("prudLieuVote", $obj->getPrudLieuVote());
    }
}
