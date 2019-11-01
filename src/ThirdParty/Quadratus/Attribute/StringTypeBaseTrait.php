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
 * Type base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeBaseTrait {

    /**
     * Type base.
     *
     * @var string
     */
    private $typeBase;

    /**
     * Get the type base.
     *
     * @return string Returns the type base.
     */
    public function getTypeBase() {
        return $this->typeBase;
    }

    /**
     * Set the type base.
     *
     * @param string $typeBase The type base.
     */
    public function setTypeBase($typeBase) {
        $this->typeBase = $typeBase;
        return $this;
    }
}
