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
 * Niveau droit9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroit9Trait {

    /**
     * Niveau droit9.
     *
     * @var string
     */
    private $niveauDroit9;

    /**
     * Get the niveau droit9.
     *
     * @return string Returns the niveau droit9.
     */
    public function getNiveauDroit9() {
        return $this->niveauDroit9;
    }

    /**
     * Set the niveau droit9.
     *
     * @param string $niveauDroit9 The niveau droit9.
     */
    public function setNiveauDroit9($niveauDroit9) {
        $this->niveauDroit9 = $niveauDroit9;
        return $this;
    }
}
