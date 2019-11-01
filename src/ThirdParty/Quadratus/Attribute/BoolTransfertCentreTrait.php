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
 * Transfert centre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTransfertCentreTrait {

    /**
     * Transfert centre.
     *
     * @var bool
     */
    private $transfertCentre;

    /**
     * Get the transfert centre.
     *
     * @return bool Returns the transfert centre.
     */
    public function getTransfertCentre() {
        return $this->transfertCentre;
    }

    /**
     * Set the transfert centre.
     *
     * @param bool $transfertCentre The transfert centre.
     */
    public function setTransfertCentre($transfertCentre) {
        $this->transfertCentre = $transfertCentre;
        return $this;
    }
}
