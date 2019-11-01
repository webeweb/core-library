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
 * Nb mois applic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbMoisApplicTrait {

    /**
     * Nb mois applic.
     *
     * @var int
     */
    private $nbMoisApplic;

    /**
     * Get the nb mois applic.
     *
     * @return int Returns the nb mois applic.
     */
    public function getNbMoisApplic() {
        return $this->nbMoisApplic;
    }

    /**
     * Set the nb mois applic.
     *
     * @param int $nbMoisApplic The nb mois applic.
     */
    public function setNbMoisApplic($nbMoisApplic) {
        $this->nbMoisApplic = $nbMoisApplic;
        return $this;
    }
}
