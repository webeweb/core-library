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
 * Niveau droit clients trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauDroitClientsTrait {

    /**
     * Niveau droit clients.
     *
     * @var string
     */
    private $niveauDroitClients;

    /**
     * Get the niveau droit clients.
     *
     * @return string Returns the niveau droit clients.
     */
    public function getNiveauDroitClients() {
        return $this->niveauDroitClients;
    }

    /**
     * Set the niveau droit clients.
     *
     * @param string $niveauDroitClients The niveau droit clients.
     */
    public function setNiveauDroitClients($niveauDroitClients) {
        $this->niveauDroitClients = $niveauDroitClients;
        return $this;
    }
}
