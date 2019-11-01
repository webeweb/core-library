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
 * Paiement le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPaiementLeTrait {

    /**
     * Paiement le.
     *
     * @var string
     */
    private $paiementLe;

    /**
     * Get the paiement le.
     *
     * @return string Returns the paiement le.
     */
    public function getPaiementLe() {
        return $this->paiementLe;
    }

    /**
     * Set the paiement le.
     *
     * @param string $paiementLe The paiement le.
     */
    public function setPaiementLe($paiementLe) {
        $this->paiementLe = $paiementLe;
        return $this;
    }
}
