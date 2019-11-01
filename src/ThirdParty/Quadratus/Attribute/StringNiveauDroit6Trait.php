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
 * Niveau droit6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroit6Trait {

    /**
     * Niveau droit6.
     *
     * @var string
     */
    private $niveauDroit6;

    /**
     * Get the niveau droit6.
     *
     * @return string Returns the niveau droit6.
     */
    public function getNiveauDroit6() {
        return $this->niveauDroit6;
    }

    /**
     * Set the niveau droit6.
     *
     * @param string $niveauDroit6 The niveau droit6.
     */
    public function setNiveauDroit6($niveauDroit6) {
        $this->niveauDroit6 = $niveauDroit6;
        return $this;
    }
}
