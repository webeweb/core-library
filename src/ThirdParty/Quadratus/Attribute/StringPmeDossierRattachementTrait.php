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
 * Pme dossier rattachement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPmeDossierRattachementTrait {

    /**
     * Pme dossier rattachement.
     *
     * @var string
     */
    private $pmeDossierRattachement;

    /**
     * Get the pme dossier rattachement.
     *
     * @return string Returns the pme dossier rattachement.
     */
    public function getPmeDossierRattachement() {
        return $this->pmeDossierRattachement;
    }

    /**
     * Set the pme dossier rattachement.
     *
     * @param string $pmeDossierRattachement The pme dossier rattachement.
     */
    public function setPmeDossierRattachement($pmeDossierRattachement) {
        $this->pmeDossierRattachement = $pmeDossierRattachement;
        return $this;
    }
}
