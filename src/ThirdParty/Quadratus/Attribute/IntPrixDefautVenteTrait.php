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
 * Prix defaut vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrixDefautVenteTrait {

    /**
     * Prix defaut vente.
     *
     * @var int
     */
    private $prixDefautVente;

    /**
     * Get the prix defaut vente.
     *
     * @return int Returns the prix defaut vente.
     */
    public function getPrixDefautVente() {
        return $this->prixDefautVente;
    }

    /**
     * Set the prix defaut vente.
     *
     * @param int $prixDefautVente The prix defaut vente.
     */
    public function setPrixDefautVente($prixDefautVente) {
        $this->prixDefautVente = $prixDefautVente;
        return $this;
    }
}
