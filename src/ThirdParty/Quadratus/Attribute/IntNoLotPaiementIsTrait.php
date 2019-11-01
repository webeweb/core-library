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
 * No lot paiement is trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNoLotPaiementIsTrait {

    /**
     * No lot paiement is.
     *
     * @var int
     */
    private $noLotPaiementIs;

    /**
     * Get the no lot paiement is.
     *
     * @return int Returns the no lot paiement is.
     */
    public function getNoLotPaiementIs() {
        return $this->noLotPaiementIs;
    }

    /**
     * Set the no lot paiement is.
     *
     * @param int $noLotPaiementIs The no lot paiement is.
     */
    public function setNoLotPaiementIs($noLotPaiementIs) {
        $this->noLotPaiementIs = $noLotPaiementIs;
        return $this;
    }
}
