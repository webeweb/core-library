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
 * Trs suivi dt enl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTrsSuiviDtEnlTrait {

    /**
     * Trs suivi dt enl.
     *
     * @var bool
     */
    private $trsSuiviDtEnl;

    /**
     * Get the trs suivi dt enl.
     *
     * @return bool Returns the trs suivi dt enl.
     */
    public function getTrsSuiviDtEnl() {
        return $this->trsSuiviDtEnl;
    }

    /**
     * Set the trs suivi dt enl.
     *
     * @param bool $trsSuiviDtEnl The trs suivi dt enl.
     */
    public function setTrsSuiviDtEnl($trsSuiviDtEnl) {
        $this->trsSuiviDtEnl = $trsSuiviDtEnl;
        return $this;
    }
}
