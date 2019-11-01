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
 * Arrondir base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArrondirBaseTrait {

    /**
     * Arrondir base.
     *
     * @var string
     */
    private $arrondirBase;

    /**
     * Get the arrondir base.
     *
     * @return string Returns the arrondir base.
     */
    public function getArrondirBase() {
        return $this->arrondirBase;
    }

    /**
     * Set the arrondir base.
     *
     * @param string $arrondirBase The arrondir base.
     */
    public function setArrondirBase($arrondirBase) {
        $this->arrondirBase = $arrondirBase;
        return $this;
    }
}
