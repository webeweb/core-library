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
 * Trs suivi dt liv mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsSuiviDtLivMailTrait {

    /**
     * Trs suivi dt liv mail.
     *
     * @var string
     */
    private $trsSuiviDtLivMail;

    /**
     * Get the trs suivi dt liv mail.
     *
     * @return string Returns the trs suivi dt liv mail.
     */
    public function getTrsSuiviDtLivMail() {
        return $this->trsSuiviDtLivMail;
    }

    /**
     * Set the trs suivi dt liv mail.
     *
     * @param string $trsSuiviDtLivMail The trs suivi dt liv mail.
     */
    public function setTrsSuiviDtLivMail($trsSuiviDtLivMail) {
        $this->trsSuiviDtLivMail = $trsSuiviDtLivMail;
        return $this;
    }
}
