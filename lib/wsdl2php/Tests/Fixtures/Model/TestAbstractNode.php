<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Wsdl2Php\Tests\Fixtures\Model;

use DOMNode;
use WBW\Library\Wsdl2Php\Model\AbstractNode;

/**
 * Test abstract node.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Fixtures\Model
 */
class TestAbstractNode extends AbstractNode {

    /**
     * {@inheritDoc}
     */
    protected function init(DOMNode $domNode): void {
        // NOTHING TO DO
    }

    /**
     * {@inheritDoc}
     */
    public function setNodeName(?string $nodeName): AbstractNode {
        return parent::setNodeName($nodeName);
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(?AbstractNode $parent): AbstractNode {
        return parent::setParent($parent);
    }
}
