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

namespace WBW\Library\Common\Tests\Fixtures\Model\Repository;

use WBW\Library\Common\Model\Repository\RepositoryEventTrait;

/**
 * Test repository event trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Model\Repository
 */
class TestRepositoryEventTrait {

    use RepositoryEventTrait {
        setRepositoryEvent as public;
    }
}
