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

namespace WBW\Library\Easilys\Tests\Fixtures\Traits\Arrays;

use WBW\Library\Easilys\Traits\Arrays\ArrayCertificationsTrait;

/**
 * Test array certifications trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Fixtures\Traits\Arrays
 */
class TestArrayCertificationsTrait {

    use ArrayCertificationsTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setCertifications([]);
    }
}
