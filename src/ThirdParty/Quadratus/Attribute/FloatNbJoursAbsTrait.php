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
 * Nb jours abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJoursAbsTrait {

    /**
     * Nb jours abs.
     *
     * @var float
     */
    private $nbJoursAbs;

    /**
     * Get the nb jours abs.
     *
     * @return float Returns the nb jours abs.
     */
    public function getNbJoursAbs() {
        return $this->nbJoursAbs;
    }

    /**
     * Set the nb jours abs.
     *
     * @param float $nbJoursAbs The nb jours abs.
     */
    public function setNbJoursAbs($nbJoursAbs) {
        $this->nbJoursAbs = $nbJoursAbs;
        return $this;
    }
}
