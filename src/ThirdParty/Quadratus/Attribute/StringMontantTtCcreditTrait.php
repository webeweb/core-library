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
 * Montant tt ccredit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMontantTtCcreditTrait {

    /**
     * Montant tt ccredit.
     *
     * @var string
     */
    private $montantTtCcredit;

    /**
     * Get the montant tt ccredit.
     *
     * @return string Returns the montant tt ccredit.
     */
    public function getMontantTtCcredit() {
        return $this->montantTtCcredit;
    }

    /**
     * Set the montant tt ccredit.
     *
     * @param string $montantTtCcredit The montant tt ccredit.
     */
    public function setMontantTtCcredit($montantTtCcredit) {
        $this->montantTtCcredit = $montantTtCcredit;
        return $this;
    }
}
