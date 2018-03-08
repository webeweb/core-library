<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Fixtures\Node;

use WBW\Library\Core\Node\AbstractNode;

/**
 * Test node.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Fixtures\Node
 * @final
 */
final class TestNode extends AbstractNode {

    /**
     * Constructor.
     *
     * @param string $id The id.
     */
    public function __construct($id) {
        parent::__construct($id);
    }

}
