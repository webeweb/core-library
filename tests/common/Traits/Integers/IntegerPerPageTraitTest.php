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

namespace WBW\Library\Common\Tests\Traits\Integers;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Integers\TestIntegerPerPageTrait;

/**
 * Integer per page trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Integers
 */
class IntegerPerPageTraitTest extends AbstractTestCase {

    /**
     * Test setPerPage()
     *
     * @return void
     */
    public function testSetPerPage(): void {

        $obj = new TestIntegerPerPageTrait();

        $obj->setPerPage(15);
        $this->assertEquals(15, $obj->getPerPage());
    }
}
