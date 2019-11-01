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
 * Tva cpt vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptVenteTrait {

    /**
     * Tva cpt vente.
     *
     * @var string
     */
    private $tvaCptVente;

    /**
     * Get the tva cpt vente.
     *
     * @return string Returns the tva cpt vente.
     */
    public function getTvaCptVente() {
        return $this->tvaCptVente;
    }

    /**
     * Set the tva cpt vente.
     *
     * @param string $tvaCptVente The tva cpt vente.
     */
    public function setTvaCptVente($tvaCptVente) {
        $this->tvaCptVente = $tvaCptVente;
        return $this;
    }
}
