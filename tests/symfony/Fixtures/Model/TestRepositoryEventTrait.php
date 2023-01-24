<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Tests\Fixtures\Model;

use WBW\Library\Symfony\Model\RepositoryEventTrait;

/**
 * Test repository event trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Tests\Fixtures\Model
 */
class TestRepositoryEventTrait {

    use RepositoryEventTrait {
        setRepositoryEvent as public;
    }
}
