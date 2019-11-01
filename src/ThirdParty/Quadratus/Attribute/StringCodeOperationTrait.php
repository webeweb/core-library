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
 * Code operation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOperationTrait {

    /**
     * Code operation.
     *
     * @var string
     */
    private $codeOperation;

    /**
     * Get the code operation.
     *
     * @return string Returns the code operation.
     */
    public function getCodeOperation() {
        return $this->codeOperation;
    }

    /**
     * Set the code operation.
     *
     * @param string $codeOperation The code operation.
     */
    public function setCodeOperation($codeOperation) {
        $this->codeOperation = $codeOperation;
        return $this;
    }
}
