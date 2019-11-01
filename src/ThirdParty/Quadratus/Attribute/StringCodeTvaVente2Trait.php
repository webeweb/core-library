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
 * Code tva vente2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTvaVente2Trait {

    /**
     * Code tva vente2.
     *
     * @var string
     */
    private $codeTvaVente2;

    /**
     * Get the code tva vente2.
     *
     * @return string Returns the code tva vente2.
     */
    public function getCodeTvaVente2() {
        return $this->codeTvaVente2;
    }

    /**
     * Set the code tva vente2.
     *
     * @param string $codeTvaVente2 The code tva vente2.
     */
    public function setCodeTvaVente2($codeTvaVente2) {
        $this->codeTvaVente2 = $codeTvaVente2;
        return $this;
    }
}
