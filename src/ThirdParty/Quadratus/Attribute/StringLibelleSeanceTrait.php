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
 * Libelle seance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleSeanceTrait {

    /**
     * Libelle seance.
     *
     * @var string
     */
    private $libelleSeance;

    /**
     * Get the libelle seance.
     *
     * @return string Returns the libelle seance.
     */
    public function getLibelleSeance() {
        return $this->libelleSeance;
    }

    /**
     * Set the libelle seance.
     *
     * @param string $libelleSeance The libelle seance.
     */
    public function setLibelleSeance($libelleSeance) {
        $this->libelleSeance = $libelleSeance;
        return $this;
    }
}
