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
 * Cpt emprunt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptEmpruntTrait {

    /**
     * Cpt emprunt.
     *
     * @var string
     */
    private $cptEmprunt;

    /**
     * Get the cpt emprunt.
     *
     * @return string Returns the cpt emprunt.
     */
    public function getCptEmprunt() {
        return $this->cptEmprunt;
    }

    /**
     * Set the cpt emprunt.
     *
     * @param string $cptEmprunt The cpt emprunt.
     */
    public function setCptEmprunt($cptEmprunt) {
        $this->cptEmprunt = $cptEmprunt;
        return $this;
    }
}
