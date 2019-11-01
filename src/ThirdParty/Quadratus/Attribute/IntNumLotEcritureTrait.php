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
 * Num lot ecriture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumLotEcritureTrait {

    /**
     * Num lot ecriture.
     *
     * @var int
     */
    private $numLotEcriture;

    /**
     * Get the num lot ecriture.
     *
     * @return int Returns the num lot ecriture.
     */
    public function getNumLotEcriture() {
        return $this->numLotEcriture;
    }

    /**
     * Set the num lot ecriture.
     *
     * @param int $numLotEcriture The num lot ecriture.
     */
    public function setNumLotEcriture($numLotEcriture) {
        $this->numLotEcriture = $numLotEcriture;
        return $this;
    }
}
