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
 * Frp dossier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFrpDossierTrait {

    /**
     * Frp dossier.
     *
     * @var string
     */
    private $frpDossier;

    /**
     * Get the frp dossier.
     *
     * @return string Returns the frp dossier.
     */
    public function getFrpDossier() {
        return $this->frpDossier;
    }

    /**
     * Set the frp dossier.
     *
     * @param string $frpDossier The frp dossier.
     */
    public function setFrpDossier($frpDossier) {
        $this->frpDossier = $frpDossier;
        return $this;
    }
}
