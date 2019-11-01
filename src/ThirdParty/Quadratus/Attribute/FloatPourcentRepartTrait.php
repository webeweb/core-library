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
 * Pourcent repart trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentRepartTrait {

    /**
     * Pourcent repart.
     *
     * @var float
     */
    private $pourcentRepart;

    /**
     * Get the pourcent repart.
     *
     * @return float Returns the pourcent repart.
     */
    public function getPourcentRepart() {
        return $this->pourcentRepart;
    }

    /**
     * Set the pourcent repart.
     *
     * @param float $pourcentRepart The pourcent repart.
     */
    public function setPourcentRepart($pourcentRepart) {
        $this->pourcentRepart = $pourcentRepart;
        return $this;
    }
}
