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
 * Niveau droit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroitTrait {

    /**
     * Niveau droit.
     *
     * @var string
     */
    private $niveauDroit;

    /**
     * Get the niveau droit.
     *
     * @return string Returns the niveau droit.
     */
    public function getNiveauDroit() {
        return $this->niveauDroit;
    }

    /**
     * Set the niveau droit.
     *
     * @param string $niveauDroit The niveau droit.
     */
    public function setNiveauDroit($niveauDroit) {
        $this->niveauDroit = $niveauDroit;
        return $this;
    }
}
