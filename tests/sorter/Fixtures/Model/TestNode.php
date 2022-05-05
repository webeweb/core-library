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

use WBW\Library\Core\Tests\Fixtures\Model\TestNode as BaseNode;
use WBW\Library\Sorter\Model\AlphabeticalTreeNodeInterface;

/**
 * Test node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter\Tests\Fixtures\Model
 */
class TestNode extends BaseNode implements AlphabeticalTreeNodeInterface {

    /**
     * {@inheritdoc}
     */
    public function getAlphabeticalTreeNodeLabel(): ?string {
        return $this->getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getAlphabeticalTreeNodeParent(): ?AlphabeticalTreeNodeInterface {
        return $this->getParent();
    }
}
