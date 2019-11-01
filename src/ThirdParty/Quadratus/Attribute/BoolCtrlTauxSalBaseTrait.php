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
 * Ctrl taux sal base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCtrlTauxSalBaseTrait {

    /**
     * Ctrl taux sal base.
     *
     * @var bool
     */
    private $ctrlTauxSalBase;

    /**
     * Get the ctrl taux sal base.
     *
     * @return bool Returns the ctrl taux sal base.
     */
    public function getCtrlTauxSalBase() {
        return $this->ctrlTauxSalBase;
    }

    /**
     * Set the ctrl taux sal base.
     *
     * @param bool $ctrlTauxSalBase The ctrl taux sal base.
     */
    public function setCtrlTauxSalBase($ctrlTauxSalBase) {
        $this->ctrlTauxSalBase = $ctrlTauxSalBase;
        return $this;
    }
}
