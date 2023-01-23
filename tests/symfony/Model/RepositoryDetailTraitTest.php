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

use WBW\Library\Symfony\Model\RepositoryDetailInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Model\TestRepositoryDetailTrait;

/**
 * Repository detail trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class RepositoryDetailTraitTest extends AbstractTestCase {

    /**
     * Tests setRepositoryDetail()
     *
     * @return void
     */
    public function testSetRepositoryDetail(): void {

        // Set a Repository detail mock.
        $repositoryDetail = $this->getMockBuilder(RepositoryDetailInterface::class)->getMock();

        $obj = new TestRepositoryDetailTrait();

        $obj->setRepositoryDetail($repositoryDetail);
        $this->assertSame($repositoryDetail, $obj->getRepositoryDetail());
    }
}
