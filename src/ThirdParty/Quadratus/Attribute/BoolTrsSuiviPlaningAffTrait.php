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
 * Trs suivi planing aff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTrsSuiviPlaningAffTrait {

    /**
     * Trs suivi planing aff.
     *
     * @var bool
     */
    private $trsSuiviPlaningAff;

    /**
     * Get the trs suivi planing aff.
     *
     * @return bool Returns the trs suivi planing aff.
     */
    public function getTrsSuiviPlaningAff() {
        return $this->trsSuiviPlaningAff;
    }

    /**
     * Set the trs suivi planing aff.
     *
     * @param bool $trsSuiviPlaningAff The trs suivi planing aff.
     */
    public function setTrsSuiviPlaningAff($trsSuiviPlaningAff) {
        $this->trsSuiviPlaningAff = $trsSuiviPlaningAff;
        return $this;
    }
}
