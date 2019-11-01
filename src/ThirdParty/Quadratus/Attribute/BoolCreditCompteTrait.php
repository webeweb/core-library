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
 * Credit compte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreditCompteTrait {

    /**
     * Credit compte.
     *
     * @var bool
     */
    private $creditCompte;

    /**
     * Get the credit compte.
     *
     * @return bool Returns the credit compte.
     */
    public function getCreditCompte() {
        return $this->creditCompte;
    }

    /**
     * Set the credit compte.
     *
     * @param bool $creditCompte The credit compte.
     */
    public function setCreditCompte($creditCompte) {
        $this->creditCompte = $creditCompte;
        return $this;
    }
}
