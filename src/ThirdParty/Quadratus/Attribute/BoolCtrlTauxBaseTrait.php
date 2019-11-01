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
 * Ctrl taux base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCtrlTauxBaseTrait {

    /**
     * Ctrl taux base.
     *
     * @var bool
     */
    private $ctrlTauxBase;

    /**
     * Get the ctrl taux base.
     *
     * @return bool Returns the ctrl taux base.
     */
    public function getCtrlTauxBase() {
        return $this->ctrlTauxBase;
    }

    /**
     * Set the ctrl taux base.
     *
     * @param bool $ctrlTauxBase The ctrl taux base.
     */
    public function setCtrlTauxBase($ctrlTauxBase) {
        $this->ctrlTauxBase = $ctrlTauxBase;
        return $this;
    }
}
