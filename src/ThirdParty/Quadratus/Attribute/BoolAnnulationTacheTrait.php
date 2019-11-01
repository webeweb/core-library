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
 * Annulation tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationTacheTrait {

    /**
     * Annulation tache.
     *
     * @var bool
     */
    private $annulationTache;

    /**
     * Get the annulation tache.
     *
     * @return bool Returns the annulation tache.
     */
    public function getAnnulationTache() {
        return $this->annulationTache;
    }

    /**
     * Set the annulation tache.
     *
     * @param bool $annulationTache The annulation tache.
     */
    public function setAnnulationTache($annulationTache) {
        $this->annulationTache = $annulationTache;
        return $this;
    }
}
