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

use WBW\Library\Symfony\Model\RepositoryReportInterface;
use WBW\Library\Symfony\Tests\AbstractTestCase;
use WBW\Library\Symfony\Tests\Fixtures\Model\TestRepositoryReportTrait;

/**
 * Repository report trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Model
 */
class RepositoryReportTraitTest extends AbstractTestCase {

    /**
     * Test setRepositoryReport()
     *
     * @return void
     */
    public function testSetRepositoryReport(): void {

        // Set a Repository report mock.
        $repositoryReport = $this->getMockBuilder(RepositoryReportInterface::class)->getMock();

        $obj = new TestRepositoryReportTrait();

        $obj->setRepositoryReport($repositoryReport);
        $this->assertSame($repositoryReport, $obj->getRepositoryReport());
    }
}
