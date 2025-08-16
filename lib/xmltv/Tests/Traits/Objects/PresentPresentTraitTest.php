<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Traits\Objects;

use WBW\Library\XmlTv\Model\Present;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Objects\TestPresentPresentTrait;

/**
 * Present present trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Objects
 */
class PresentPresentTraitTest extends AbstractTestCase {

    /**
     * Test setPresent()
     *
     * @return void
     */
    public function testSetPresent(): void {

        // Set a Present mock.
        $present = new Present();

        $obj = new TestPresentPresentTrait();

        $obj->setPresent($present);
        $this->assertSame($present, $obj->getPresent());
    }
}
