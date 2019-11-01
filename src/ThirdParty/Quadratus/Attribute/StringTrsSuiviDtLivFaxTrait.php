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
 * Trs suivi dt liv fax trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsSuiviDtLivFaxTrait {

    /**
     * Trs suivi dt liv fax.
     *
     * @var string
     */
    private $trsSuiviDtLivFax;

    /**
     * Get the trs suivi dt liv fax.
     *
     * @return string Returns the trs suivi dt liv fax.
     */
    public function getTrsSuiviDtLivFax() {
        return $this->trsSuiviDtLivFax;
    }

    /**
     * Set the trs suivi dt liv fax.
     *
     * @param string $trsSuiviDtLivFax The trs suivi dt liv fax.
     */
    public function setTrsSuiviDtLivFax($trsSuiviDtLivFax) {
        $this->trsSuiviDtLivFax = $trsSuiviDtLivFax;
        return $this;
    }
}
