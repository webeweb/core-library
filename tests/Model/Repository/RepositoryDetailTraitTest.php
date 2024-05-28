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

use WBW\Library\Common\Model\Repository\RepositoryDetailInterface;
use WBW\Library\Common\Tests\AbstractTestCase;
use WBW\Library\Common\Tests\Fixtures\Model\Repository\TestRepositoryDetailTrait;

/**
 * Repository detail trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Model\Repository
 */
class RepositoryDetailTraitTest extends AbstractTestCase {

    /**
     * Test setRepositoryDetail()
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
