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
 * Nom fact nb lignes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomFactNbLignesTrait {

    /**
     * Nom fact nb lignes.
     *
     * @var string
     */
    private $nomFactNbLignes;

    /**
     * Get the nom fact nb lignes.
     *
     * @return string Returns the nom fact nb lignes.
     */
    public function getNomFactNbLignes() {
        return $this->nomFactNbLignes;
    }

    /**
     * Set the nom fact nb lignes.
     *
     * @param string $nomFactNbLignes The nom fact nb lignes.
     */
    public function setNomFactNbLignes($nomFactNbLignes) {
        $this->nomFactNbLignes = $nomFactNbLignes;
        return $this;
    }
}
