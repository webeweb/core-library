<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Fixtures\Sorter;

use WBW\Library\Widget\Component\AbstractNavigationNode;

/**
 * Test alphabetical node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Fixtures\Sorter
 */
class TestAlphabeticalNode extends AbstractNavigationNode {

    /**
     * Constructor.
     *
     * @param string $id The id.
     */
    public function __construct(string $id) {
        parent::__construct("test");

        $this->setId($id);
    }
}
