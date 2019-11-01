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
 * Grand decalage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGrandDecalageTrait {

    /**
     * Grand decalage.
     *
     * @var bool
     */
    private $grandDecalage;

    /**
     * Get the grand decalage.
     *
     * @return bool Returns the grand decalage.
     */
    public function getGrandDecalage() {
        return $this->grandDecalage;
    }

    /**
     * Set the grand decalage.
     *
     * @param bool $grandDecalage The grand decalage.
     */
    public function setGrandDecalage($grandDecalage) {
        $this->grandDecalage = $grandDecalage;
        return $this;
    }
}
