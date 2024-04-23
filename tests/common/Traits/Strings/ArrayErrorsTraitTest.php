<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Strings;

use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Traits\Strings\TestArrayErrorsTrait;

/**
 * Array errors trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Strings
 */
class ArrayErrorsTraitTest extends AbstractTestCase {

    /**
     * Test setErrors()
     *
     * @return void
     */
    public function testSetErrors(): void {

        $obj = new TestArrayErrorsTrait();

        $obj->setErrors([]);
        $this->assertEquals([], $obj->getErrors());
    }
}
