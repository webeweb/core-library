<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Symfony\Model\RepositoryEventInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;

/**
 * Repository event interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class RepositoryEventInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("delete", RepositoryEventInterface::EVENT_DELETE);
        $this->assertEquals("insert", RepositoryEventInterface::EVENT_INSERT);
        $this->assertEquals("update", RepositoryEventInterface::EVENT_UPDATE);
    }
}
