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
 * Montant tt cdebit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMontantTtCdebitTrait {

    /**
     * Montant tt cdebit.
     *
     * @var string
     */
    private $montantTtCdebit;

    /**
     * Get the montant tt cdebit.
     *
     * @return string Returns the montant tt cdebit.
     */
    public function getMontantTtCdebit() {
        return $this->montantTtCdebit;
    }

    /**
     * Set the montant tt cdebit.
     *
     * @param string $montantTtCdebit The montant tt cdebit.
     */
    public function setMontantTtCdebit($montantTtCdebit) {
        $this->montantTtCdebit = $montantTtCdebit;
        return $this;
    }
}
