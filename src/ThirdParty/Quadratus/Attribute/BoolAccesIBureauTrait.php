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
 * Acces i bureau trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesIBureauTrait {

    /**
     * Acces i bureau.
     *
     * @var bool
     */
    private $accesIBureau;

    /**
     * Get the acces i bureau.
     *
     * @return bool Returns the acces i bureau.
     */
    public function getAccesIBureau() {
        return $this->accesIBureau;
    }

    /**
     * Set the acces i bureau.
     *
     * @param bool $accesIBureau The acces i bureau.
     */
    public function setAccesIBureau($accesIBureau) {
        $this->accesIBureau = $accesIBureau;
        return $this;
    }
}
