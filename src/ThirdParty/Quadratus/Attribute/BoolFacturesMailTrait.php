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
 * Factures mail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFacturesMailTrait {

    /**
     * Factures mail.
     *
     * @var bool
     */
    private $facturesMail;

    /**
     * Get the factures mail.
     *
     * @return bool Returns the factures mail.
     */
    public function getFacturesMail() {
        return $this->facturesMail;
    }

    /**
     * Set the factures mail.
     *
     * @param bool $facturesMail The factures mail.
     */
    public function setFacturesMail($facturesMail) {
        $this->facturesMail = $facturesMail;
        return $this;
    }
}
