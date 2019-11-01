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
 * Niveau droit generaux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroitGenerauxTrait {

    /**
     * Niveau droit generaux.
     *
     * @var string
     */
    private $niveauDroitGeneraux;

    /**
     * Get the niveau droit generaux.
     *
     * @return string Returns the niveau droit generaux.
     */
    public function getNiveauDroitGeneraux() {
        return $this->niveauDroitGeneraux;
    }

    /**
     * Set the niveau droit generaux.
     *
     * @param string $niveauDroitGeneraux The niveau droit generaux.
     */
    public function setNiveauDroitGeneraux($niveauDroitGeneraux) {
        $this->niveauDroitGeneraux = $niveauDroitGeneraux;
        return $this;
    }
}
