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
 * Nb jours ouvrables trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJoursOuvrablesTrait {

    /**
     * Nb jours ouvrables.
     *
     * @var float
     */
    private $nbJoursOuvrables;

    /**
     * Get the nb jours ouvrables.
     *
     * @return float Returns the nb jours ouvrables.
     */
    public function getNbJoursOuvrables() {
        return $this->nbJoursOuvrables;
    }

    /**
     * Set the nb jours ouvrables.
     *
     * @param float $nbJoursOuvrables The nb jours ouvrables.
     */
    public function setNbJoursOuvrables($nbJoursOuvrables) {
        $this->nbJoursOuvrables = $nbJoursOuvrables;
        return $this;
    }
}
