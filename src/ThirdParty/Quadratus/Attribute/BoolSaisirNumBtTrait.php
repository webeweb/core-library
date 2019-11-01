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
 * Saisir num bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisirNumBtTrait {

    /**
     * Saisir num bt.
     *
     * @var bool
     */
    private $saisirNumBt;

    /**
     * Get the saisir num bt.
     *
     * @return bool Returns the saisir num bt.
     */
    public function getSaisirNumBt() {
        return $this->saisirNumBt;
    }

    /**
     * Set the saisir num bt.
     *
     * @param bool $saisirNumBt The saisir num bt.
     */
    public function setSaisirNumBt($saisirNumBt) {
        $this->saisirNumBt = $saisirNumBt;
        return $this;
    }
}
