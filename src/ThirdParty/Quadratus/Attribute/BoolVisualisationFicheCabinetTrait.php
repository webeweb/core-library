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
 * Visualisation fiche cabinet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVisualisationFicheCabinetTrait {

    /**
     * Visualisation fiche cabinet.
     *
     * @var bool
     */
    private $visualisationFicheCabinet;

    /**
     * Get the visualisation fiche cabinet.
     *
     * @return bool Returns the visualisation fiche cabinet.
     */
    public function getVisualisationFicheCabinet() {
        return $this->visualisationFicheCabinet;
    }

    /**
     * Set the visualisation fiche cabinet.
     *
     * @param bool $visualisationFicheCabinet The visualisation fiche cabinet.
     */
    public function setVisualisationFicheCabinet($visualisationFicheCabinet) {
        $this->visualisationFicheCabinet = $visualisationFicheCabinet;
        return $this;
    }
}
