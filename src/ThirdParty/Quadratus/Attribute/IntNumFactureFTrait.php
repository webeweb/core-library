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
 * Num facture f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumFactureFTrait {

    /**
     * Num facture f.
     *
     * @var int
     */
    private $numFactureF;

    /**
     * Get the num facture f.
     *
     * @return int Returns the num facture f.
     */
    public function getNumFactureF() {
        return $this->numFactureF;
    }

    /**
     * Set the num facture f.
     *
     * @param int $numFactureF The num facture f.
     */
    public function setNumFactureF($numFactureF) {
        $this->numFactureF = $numFactureF;
        return $this;
    }
}
