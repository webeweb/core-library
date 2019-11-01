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
 * Avec prix vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvecPrixVenteTrait {

    /**
     * Avec prix vente.
     *
     * @var bool
     */
    private $avecPrixVente;

    /**
     * Get the avec prix vente.
     *
     * @return bool Returns the avec prix vente.
     */
    public function getAvecPrixVente() {
        return $this->avecPrixVente;
    }

    /**
     * Set the avec prix vente.
     *
     * @param bool $avecPrixVente The avec prix vente.
     */
    public function setAvecPrixVente($avecPrixVente) {
        $this->avecPrixVente = $avecPrixVente;
        return $this;
    }
}
