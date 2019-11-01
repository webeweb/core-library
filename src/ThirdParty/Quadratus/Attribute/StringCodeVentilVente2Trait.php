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
 * Code ventil vente2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeVentilVente2Trait {

    /**
     * Code ventil vente2.
     *
     * @var string
     */
    private $codeVentilVente2;

    /**
     * Get the code ventil vente2.
     *
     * @return string Returns the code ventil vente2.
     */
    public function getCodeVentilVente2() {
        return $this->codeVentilVente2;
    }

    /**
     * Set the code ventil vente2.
     *
     * @param string $codeVentilVente2 The code ventil vente2.
     */
    public function setCodeVentilVente2($codeVentilVente2) {
        $this->codeVentilVente2 = $codeVentilVente2;
        return $this;
    }
}
