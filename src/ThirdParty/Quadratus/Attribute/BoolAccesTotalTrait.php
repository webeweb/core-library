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
 * Acces total trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesTotalTrait {

    /**
     * Acces total.
     *
     * @var bool
     */
    private $accesTotal;

    /**
     * Get the acces total.
     *
     * @return bool Returns the acces total.
     */
    public function getAccesTotal() {
        return $this->accesTotal;
    }

    /**
     * Set the acces total.
     *
     * @param bool $accesTotal The acces total.
     */
    public function setAccesTotal($accesTotal) {
        $this->accesTotal = $accesTotal;
        return $this;
    }
}
