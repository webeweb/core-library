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
 * Acces stat cab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesStatCabTrait {

    /**
     * Acces stat cab.
     *
     * @var bool
     */
    private $accesStatCab;

    /**
     * Get the acces stat cab.
     *
     * @return bool Returns the acces stat cab.
     */
    public function getAccesStatCab() {
        return $this->accesStatCab;
    }

    /**
     * Set the acces stat cab.
     *
     * @param bool $accesStatCab The acces stat cab.
     */
    public function setAccesStatCab($accesStatCab) {
        $this->accesStatCab = $accesStatCab;
        return $this;
    }
}
