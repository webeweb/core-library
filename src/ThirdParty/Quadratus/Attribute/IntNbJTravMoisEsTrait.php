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
 * Nb j trav mois es trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbJTravMoisEsTrait {

    /**
     * Nb j trav mois es.
     *
     * @var int
     */
    private $nbJTravMoisEs;

    /**
     * Get the nb j trav mois es.
     *
     * @return int Returns the nb j trav mois es.
     */
    public function getNbJTravMoisEs() {
        return $this->nbJTravMoisEs;
    }

    /**
     * Set the nb j trav mois es.
     *
     * @param int $nbJTravMoisEs The nb j trav mois es.
     */
    public function setNbJTravMoisEs($nbJTravMoisEs) {
        $this->nbJTravMoisEs = $nbJTravMoisEs;
        return $this;
    }
}
