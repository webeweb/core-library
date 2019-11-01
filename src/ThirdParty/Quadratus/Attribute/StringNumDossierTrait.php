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
 * Num dossier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumDossierTrait {

    /**
     * Num dossier.
     *
     * @var string
     */
    private $numDossier;

    /**
     * Get the num dossier.
     *
     * @return string Returns the num dossier.
     */
    public function getNumDossier() {
        return $this->numDossier;
    }

    /**
     * Set the num dossier.
     *
     * @param string $numDossier The num dossier.
     */
    public function setNumDossier($numDossier) {
        $this->numDossier = $numDossier;
        return $this;
    }
}
