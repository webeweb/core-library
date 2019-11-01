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
 * Annulation plan tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAnnulationPlanTacheTrait {

    /**
     * Annulation plan tache.
     *
     * @var bool
     */
    private $annulationPlanTache;

    /**
     * Get the annulation plan tache.
     *
     * @return bool Returns the annulation plan tache.
     */
    public function getAnnulationPlanTache() {
        return $this->annulationPlanTache;
    }

    /**
     * Set the annulation plan tache.
     *
     * @param bool $annulationPlanTache The annulation plan tache.
     */
    public function setAnnulationPlanTache($annulationPlanTache) {
        $this->annulationPlanTache = $annulationPlanTache;
        return $this;
    }
}
