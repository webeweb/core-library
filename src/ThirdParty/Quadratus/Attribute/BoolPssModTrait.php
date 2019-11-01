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
 * Pss mod trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPssModTrait {

    /**
     * Pss mod.
     *
     * @var bool
     */
    private $pssMod;

    /**
     * Get the pss mod.
     *
     * @return bool Returns the pss mod.
     */
    public function getPssMod() {
        return $this->pssMod;
    }

    /**
     * Set the pss mod.
     *
     * @param bool $pssMod The pss mod.
     */
    public function setPssMod($pssMod) {
        $this->pssMod = $pssMod;
        return $this;
    }
}
