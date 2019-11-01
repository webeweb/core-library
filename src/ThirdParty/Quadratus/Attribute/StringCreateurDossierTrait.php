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
 * Createur dossier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCreateurDossierTrait {

    /**
     * Createur dossier.
     *
     * @var string
     */
    private $createurDossier;

    /**
     * Get the createur dossier.
     *
     * @return string Returns the createur dossier.
     */
    public function getCreateurDossier() {
        return $this->createurDossier;
    }

    /**
     * Set the createur dossier.
     *
     * @param string $createurDossier The createur dossier.
     */
    public function setCreateurDossier($createurDossier) {
        $this->createurDossier = $createurDossier;
        return $this;
    }
}
