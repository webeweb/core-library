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
 * Prix defaut inventaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrixDefautInventaireTrait {

    /**
     * Prix defaut inventaire.
     *
     * @var int
     */
    private $prixDefautInventaire;

    /**
     * Get the prix defaut inventaire.
     *
     * @return int Returns the prix defaut inventaire.
     */
    public function getPrixDefautInventaire() {
        return $this->prixDefautInventaire;
    }

    /**
     * Set the prix defaut inventaire.
     *
     * @param int $prixDefautInventaire The prix defaut inventaire.
     */
    public function setPrixDefautInventaire($prixDefautInventaire) {
        $this->prixDefautInventaire = $prixDefautInventaire;
        return $this;
    }
}
