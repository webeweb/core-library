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
 * Niveau droit5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroit5Trait {

    /**
     * Niveau droit5.
     *
     * @var string
     */
    private $niveauDroit5;

    /**
     * Get the niveau droit5.
     *
     * @return string Returns the niveau droit5.
     */
    public function getNiveauDroit5() {
        return $this->niveauDroit5;
    }

    /**
     * Set the niveau droit5.
     *
     * @param string $niveauDroit5 The niveau droit5.
     */
    public function setNiveauDroit5($niveauDroit5) {
        $this->niveauDroit5 = $niveauDroit5;
        return $this;
    }
}
