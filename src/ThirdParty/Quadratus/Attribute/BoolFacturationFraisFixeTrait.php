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
 * Facturation frais fixe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFacturationFraisFixeTrait {

    /**
     * Facturation frais fixe.
     *
     * @var bool
     */
    private $facturationFraisFixe;

    /**
     * Get the facturation frais fixe.
     *
     * @return bool Returns the facturation frais fixe.
     */
    public function getFacturationFraisFixe() {
        return $this->facturationFraisFixe;
    }

    /**
     * Set the facturation frais fixe.
     *
     * @param bool $facturationFraisFixe The facturation frais fixe.
     */
    public function setFacturationFraisFixe($facturationFraisFixe) {
        $this->facturationFraisFixe = $facturationFraisFixe;
        return $this;
    }
}
