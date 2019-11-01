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
 * Etablissements paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtablissementsPaieTrait {

    /**
     * Etablissements paie.
     *
     * @var string
     */
    private $etablissementsPaie;

    /**
     * Get the etablissements paie.
     *
     * @return string Returns the etablissements paie.
     */
    public function getEtablissementsPaie() {
        return $this->etablissementsPaie;
    }

    /**
     * Set the etablissements paie.
     *
     * @param string $etablissementsPaie The etablissements paie.
     */
    public function setEtablissementsPaie($etablissementsPaie) {
        $this->etablissementsPaie = $etablissementsPaie;
        return $this;
    }
}
