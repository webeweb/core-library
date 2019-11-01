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
 * Dossier sur web trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDossierSurWebTrait {

    /**
     * Dossier sur web.
     *
     * @var bool
     */
    private $dossierSurWeb;

    /**
     * Get the dossier sur web.
     *
     * @return bool Returns the dossier sur web.
     */
    public function getDossierSurWeb() {
        return $this->dossierSurWeb;
    }

    /**
     * Set the dossier sur web.
     *
     * @param bool $dossierSurWeb The dossier sur web.
     */
    public function setDossierSurWeb($dossierSurWeb) {
        $this->dossierSurWeb = $dossierSurWeb;
        return $this;
    }
}
