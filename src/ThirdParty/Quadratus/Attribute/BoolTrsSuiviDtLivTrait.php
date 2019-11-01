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
 * Trs suivi dt liv trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTrsSuiviDtLivTrait {

    /**
     * Trs suivi dt liv.
     *
     * @var bool
     */
    private $trsSuiviDtLiv;

    /**
     * Get the trs suivi dt liv.
     *
     * @return bool Returns the trs suivi dt liv.
     */
    public function getTrsSuiviDtLiv() {
        return $this->trsSuiviDtLiv;
    }

    /**
     * Set the trs suivi dt liv.
     *
     * @param bool $trsSuiviDtLiv The trs suivi dt liv.
     */
    public function setTrsSuiviDtLiv($trsSuiviDtLiv) {
        $this->trsSuiviDtLiv = $trsSuiviDtLiv;
        return $this;
    }
}
