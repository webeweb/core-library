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
 * Dossier proprete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossierPropreteTrait {

    /**
     * Dossier proprete.
     *
     * @var string
     */
    private $dossierProprete;

    /**
     * Get the dossier proprete.
     *
     * @return string Returns the dossier proprete.
     */
    public function getDossierProprete() {
        return $this->dossierProprete;
    }

    /**
     * Set the dossier proprete.
     *
     * @param string $dossierProprete The dossier proprete.
     */
    public function setDossierProprete($dossierProprete) {
        $this->dossierProprete = $dossierProprete;
        return $this;
    }
}
