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

namespace WBW\Library\Widget\Tests\Component;

use WBW\Library\Widget\Component\LabelInterface;
use WBW\Library\Widget\Tests\AbstractTestCase;

/**
 * Label interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Widget\Tests\Component
 */
class LabelInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", LabelInterface::LABEL_TYPE_DANGER);
        $this->assertEquals("info", LabelInterface::LABEL_TYPE_INFO);
        $this->assertEquals("success", LabelInterface::LABEL_TYPE_SUCCESS);
        $this->assertEquals("warning", LabelInterface::LABEL_TYPE_WARNING);
    }
}
