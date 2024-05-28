<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Traits\Booleans;

use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Booleans\TestBooleanIsValidatedTrait;

/**
 * Boolean is validated trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Booleans
 */
class BooleanIsValidatedTraitTest extends AbstractTestCase {

    /**
     * Test setIsValidated()
     *
     * @return void
     */
    public function testSetIsValidated(): void {

        $obj = new TestBooleanIsValidatedTrait();

        $obj->setIsValidated(true);
        $this->assertTrue($obj->getIsValidated());
    }
}
