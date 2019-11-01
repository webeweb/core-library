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
 * Travail a domicile trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTravailADomicileTrait {

    /**
     * Travail a domicile.
     *
     * @var bool
     */
    private $travailADomicile;

    /**
     * Get the travail a domicile.
     *
     * @return bool Returns the travail a domicile.
     */
    public function getTravailADomicile() {
        return $this->travailADomicile;
    }

    /**
     * Set the travail a domicile.
     *
     * @param bool $travailADomicile The travail a domicile.
     */
    public function setTravailADomicile($travailADomicile) {
        $this->travailADomicile = $travailADomicile;
        return $this;
    }
}
