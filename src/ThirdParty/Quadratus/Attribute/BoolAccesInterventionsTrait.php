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
 * Acces interventions trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesInterventionsTrait {

    /**
     * Acces interventions.
     *
     * @var bool
     */
    private $accesInterventions;

    /**
     * Get the acces interventions.
     *
     * @return bool Returns the acces interventions.
     */
    public function getAccesInterventions() {
        return $this->accesInterventions;
    }

    /**
     * Set the acces interventions.
     *
     * @param bool $accesInterventions The acces interventions.
     */
    public function setAccesInterventions($accesInterventions) {
        $this->accesInterventions = $accesInterventions;
        return $this;
    }
}
