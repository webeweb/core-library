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
 * Cpt interet emprunt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptInteretEmpruntTrait {

    /**
     * Cpt interet emprunt.
     *
     * @var string
     */
    private $cptInteretEmprunt;

    /**
     * Get the cpt interet emprunt.
     *
     * @return string Returns the cpt interet emprunt.
     */
    public function getCptInteretEmprunt() {
        return $this->cptInteretEmprunt;
    }

    /**
     * Set the cpt interet emprunt.
     *
     * @param string $cptInteretEmprunt The cpt interet emprunt.
     */
    public function setCptInteretEmprunt($cptInteretEmprunt) {
        $this->cptInteretEmprunt = $cptInteretEmprunt;
        return $this;
    }
}
