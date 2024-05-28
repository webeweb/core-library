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

namespace WBW\Library\Common\Tests\Fixtures\Model\Request;

use WBW\Library\Common\Model\Request\RequestDetailTrait;

/**
 * Test request detail trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Model\Request
 */
class TestRequestDetailTrait {

    use RequestDetailTrait {
        setRequestDetail as public;
    }
}
