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
 * Ed bord choix modele trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEdBordChoixModeleTrait {

    /**
     * Ed bord choix modele.
     *
     * @var string
     */
    private $edBordChoixModele;

    /**
     * Get the ed bord choix modele.
     *
     * @return string Returns the ed bord choix modele.
     */
    public function getEdBordChoixModele() {
        return $this->edBordChoixModele;
    }

    /**
     * Set the ed bord choix modele.
     *
     * @param string $edBordChoixModele The ed bord choix modele.
     */
    public function setEdBordChoixModele($edBordChoixModele) {
        $this->edBordChoixModele = $edBordChoixModele;
        return $this;
    }
}
