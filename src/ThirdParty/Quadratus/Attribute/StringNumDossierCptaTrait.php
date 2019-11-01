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
 * Num dossier cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumDossierCptaTrait {

    /**
     * Num dossier cpta.
     *
     * @var string
     */
    private $numDossierCpta;

    /**
     * Get the num dossier cpta.
     *
     * @return string Returns the num dossier cpta.
     */
    public function getNumDossierCpta() {
        return $this->numDossierCpta;
    }

    /**
     * Set the num dossier cpta.
     *
     * @param string $numDossierCpta The num dossier cpta.
     */
    public function setNumDossierCpta($numDossierCpta) {
        $this->numDossierCpta = $numDossierCpta;
        return $this;
    }
}
