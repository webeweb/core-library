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
 * Type chom cdd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeChomCddTrait {

    /**
     * Type chom cdd.
     *
     * @var string
     */
    private $typeChomCdd;

    /**
     * Get the type chom cdd.
     *
     * @return string Returns the type chom cdd.
     */
    public function getTypeChomCdd() {
        return $this->typeChomCdd;
    }

    /**
     * Set the type chom cdd.
     *
     * @param string $typeChomCdd The type chom cdd.
     */
    public function setTypeChomCdd($typeChomCdd) {
        $this->typeChomCdd = $typeChomCdd;
        return $this;
    }
}
