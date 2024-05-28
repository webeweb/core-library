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

namespace WBW\Library\Common\Tests\Model\Repository;

use WBW\Library\Common\Model\Repository\RepositoryEventInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\Repository\TestRepositoryEventTrait;

/**
 * Repository event trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Repository
 */
class RepositoryEventTraitTest extends AbstractTestCase {

    /**
     * Test setRepositoryEvent()
     *
     * @return void
     */
    public function testSetRepositoryEvent(): void {

        // Set a Repository event mock.
        $repositoryEvent = $this->getMockBuilder(RepositoryEventInterface::class)->getMock();

        $obj = new TestRepositoryEventTrait();

        $obj->setRepositoryEvent($repositoryEvent);
        $this->assertSame($repositoryEvent, $obj->getRepositoryEvent());
    }
}
