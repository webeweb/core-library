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
 * Creation dossier cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationDossierCptaTrait {

    /**
     * Creation dossier cpta.
     *
     * @var bool
     */
    private $creationDossierCpta;

    /**
     * Get the creation dossier cpta.
     *
     * @return bool Returns the creation dossier cpta.
     */
    public function getCreationDossierCpta() {
        return $this->creationDossierCpta;
    }

    /**
     * Set the creation dossier cpta.
     *
     * @param bool $creationDossierCpta The creation dossier cpta.
     */
    public function setCreationDossierCpta($creationDossierCpta) {
        $this->creationDossierCpta = $creationDossierCpta;
        return $this;
    }
}
