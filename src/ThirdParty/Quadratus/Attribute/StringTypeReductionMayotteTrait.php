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
 * Type reduction mayotte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeReductionMayotteTrait {

    /**
     * Type reduction mayotte.
     *
     * @var string
     */
    private $typeReductionMayotte;

    /**
     * Get the type reduction mayotte.
     *
     * @return string Returns the type reduction mayotte.
     */
    public function getTypeReductionMayotte() {
        return $this->typeReductionMayotte;
    }

    /**
     * Set the type reduction mayotte.
     *
     * @param string $typeReductionMayotte The type reduction mayotte.
     */
    public function setTypeReductionMayotte($typeReductionMayotte) {
        $this->typeReductionMayotte = $typeReductionMayotte;
        return $this;
    }
}
