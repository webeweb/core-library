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
 * Hp theo non affectees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHpTheoNonAffecteesTrait {

    /**
     * Hp theo non affectees.
     *
     * @var float
     */
    private $hpTheoNonAffectees;

    /**
     * Get the hp theo non affectees.
     *
     * @return float Returns the hp theo non affectees.
     */
    public function getHpTheoNonAffectees() {
        return $this->hpTheoNonAffectees;
    }

    /**
     * Set the hp theo non affectees.
     *
     * @param float $hpTheoNonAffectees The hp theo non affectees.
     */
    public function setHpTheoNonAffectees($hpTheoNonAffectees) {
        $this->hpTheoNonAffectees = $hpTheoNonAffectees;
        return $this;
    }
}
