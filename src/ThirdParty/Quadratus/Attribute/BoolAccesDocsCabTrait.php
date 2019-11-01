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
 * Acces docs cab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesDocsCabTrait {

    /**
     * Acces docs cab.
     *
     * @var bool
     */
    private $accesDocsCab;

    /**
     * Get the acces docs cab.
     *
     * @return bool Returns the acces docs cab.
     */
    public function getAccesDocsCab() {
        return $this->accesDocsCab;
    }

    /**
     * Set the acces docs cab.
     *
     * @param bool $accesDocsCab The acces docs cab.
     */
    public function setAccesDocsCab($accesDocsCab) {
        $this->accesDocsCab = $accesDocsCab;
        return $this;
    }
}
