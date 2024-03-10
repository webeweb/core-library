<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Sorter\Tests\Fixtures\Model;

use WBW\Library\Symfony\Assets\AbstractNavigationNode;

/**
 * Test node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter\Tests\Fixtures\Model
 */
class TestNode extends AbstractNavigationNode {

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
