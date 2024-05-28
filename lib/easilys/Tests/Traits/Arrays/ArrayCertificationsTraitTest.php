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

namespace WBW\Library\Easilys\Tests\Traits\Arrays;

use WBW\Library\Easilys\Model\Certification;
use WBW\Library\Easilys\Tests\AbstractTestCase;
use WBW\Library\Easilys\Tests\Fixtures\Traits\Arrays\TestArrayCertificationsTrait;

/**
 * Array certifications trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Traits\Arrays
 */
class ArrayCertificationsTraitTest extends AbstractTestCase {

    /**
     * Test addCertification()
     *
     * @return void
     */
    public function testAddCertification(): void {

        // Set a Certification mock.
        $certification = new Certification();

        $obj = new TestArrayCertificationsTrait();

        $obj->addCertification($certification);
        $this->assertSame($certification, $obj->getCertifications()[0]);
    }
}
