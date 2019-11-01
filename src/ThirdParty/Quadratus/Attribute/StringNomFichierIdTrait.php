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
 * Nom fichier id trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomFichierIdTrait {

    /**
     * Nom fichier id.
     *
     * @var string
     */
    private $nomFichierId;

    /**
     * Get the nom fichier id.
     *
     * @return string Returns the nom fichier id.
     */
    public function getNomFichierId() {
        return $this->nomFichierId;
    }

    /**
     * Set the nom fichier id.
     *
     * @param string $nomFichierId The nom fichier id.
     */
    public function setNomFichierId($nomFichierId) {
        $this->nomFichierId = $nomFichierId;
        return $this;
    }
}
