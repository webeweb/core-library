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
 * Controler cde frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolControlerCdeFrnTrait {

    /**
     * Controler cde frn.
     *
     * @var bool
     */
    private $controlerCdeFrn;

    /**
     * Get the controler cde frn.
     *
     * @return bool Returns the controler cde frn.
     */
    public function getControlerCdeFrn() {
        return $this->controlerCdeFrn;
    }

    /**
     * Set the controler cde frn.
     *
     * @param bool $controlerCdeFrn The controler cde frn.
     */
    public function setControlerCdeFrn($controlerCdeFrn) {
        $this->controlerCdeFrn = $controlerCdeFrn;
        return $this;
    }
}
