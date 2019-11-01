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
 * Niveau droit3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroit3Trait {

    /**
     * Niveau droit3.
     *
     * @var string
     */
    private $niveauDroit3;

    /**
     * Get the niveau droit3.
     *
     * @return string Returns the niveau droit3.
     */
    public function getNiveauDroit3() {
        return $this->niveauDroit3;
    }

    /**
     * Set the niveau droit3.
     *
     * @param string $niveauDroit3 The niveau droit3.
     */
    public function setNiveauDroit3($niveauDroit3) {
        $this->niveauDroit3 = $niveauDroit3;
        return $this;
    }
}
