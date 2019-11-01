<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Type operation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeOperationTrait {

    /**
     * Type operation.
     *
     * @var string
     */
    private $typeOperation;

    /**
     * Get the type operation.
     *
     * @return string Returns the type operation.
     */
    public function getTypeOperation() {
        return $this->typeOperation;
    }

    /**
     * Set the type operation.
     *
     * @param string $typeOperation The type operation.
     */
    public function setTypeOperation($typeOperation) {
        $this->typeOperation = $typeOperation;
        return $this;
    }
}
