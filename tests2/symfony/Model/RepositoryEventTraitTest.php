<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Model;

use WBW\Library\Common\Model\Repository\RepositoryEventInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Model\TestRepositoryEventTrait;

/**
 * Repository event trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
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
