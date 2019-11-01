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
 * Gere fraction etab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGereFractionEtabTrait {

    /**
     * Gere fraction etab.
     *
     * @var bool
     */
    private $gereFractionEtab;

    /**
     * Get the gere fraction etab.
     *
     * @return bool Returns the gere fraction etab.
     */
    public function getGereFractionEtab() {
        return $this->gereFractionEtab;
    }

    /**
     * Set the gere fraction etab.
     *
     * @param bool $gereFractionEtab The gere fraction etab.
     */
    public function setGereFractionEtab($gereFractionEtab) {
        $this->gereFractionEtab = $gereFractionEtab;
        return $this;
    }
}
