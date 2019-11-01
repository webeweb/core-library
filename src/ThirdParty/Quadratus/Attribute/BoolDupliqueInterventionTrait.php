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
 * Duplique intervention trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDupliqueInterventionTrait {

    /**
     * Duplique intervention.
     *
     * @var bool
     */
    private $dupliqueIntervention;

    /**
     * Get the duplique intervention.
     *
     * @return bool Returns the duplique intervention.
     */
    public function getDupliqueIntervention() {
        return $this->dupliqueIntervention;
    }

    /**
     * Set the duplique intervention.
     *
     * @param bool $dupliqueIntervention The duplique intervention.
     */
    public function setDupliqueIntervention($dupliqueIntervention) {
        $this->dupliqueIntervention = $dupliqueIntervention;
        return $this;
    }
}
