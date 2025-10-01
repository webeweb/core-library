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

namespace WBW\Library\Wsdl2Php\Tests\Fixtures\Builder;

use WBW\Library\Wsdl2Php\Builder\AbstractBuilder;
use WBW\Library\Wsdl2Php\Model\AbstractNode;

/**
 * Test abstract builder.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Wsdl2Php\Tests\Fixtures\Builder
 */
class TestAbstractBuilder extends AbstractBuilder {

    /**
     * {@inheritDoc}
     */
    public function getNode(): AbstractNode {
        return parent::getNode();
    }

    /**
     * {@inheritDoc}
     */
    public function php2use(?string $type): ?string {
        return parent::php2use($type);
    }

    /**
     * {@inheritDoc}
     */
    public function type2php(?string $type): ?string {
        return parent::type2php($type);
    }
}
