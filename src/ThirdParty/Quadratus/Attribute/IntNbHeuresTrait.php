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
 * Nb heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbHeuresTrait {

    /**
     * Nb heures.
     *
     * @var int
     */
    private $nbHeures;

    /**
     * Get the nb heures.
     *
     * @return int Returns the nb heures.
     */
    public function getNbHeures() {
        return $this->nbHeures;
    }

    /**
     * Set the nb heures.
     *
     * @param int $nbHeures The nb heures.
     */
    public function setNbHeures($nbHeures) {
        $this->nbHeures = $nbHeures;
        return $this;
    }
}
