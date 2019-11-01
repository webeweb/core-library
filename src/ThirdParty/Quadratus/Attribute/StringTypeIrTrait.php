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
 * Type ir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeIrTrait {

    /**
     * Type ir.
     *
     * @var string
     */
    private $typeIr;

    /**
     * Get the type ir.
     *
     * @return string Returns the type ir.
     */
    public function getTypeIr() {
        return $this->typeIr;
    }

    /**
     * Set the type ir.
     *
     * @param string $typeIr The type ir.
     */
    public function setTypeIr($typeIr) {
        $this->typeIr = $typeIr;
        return $this;
    }
}
