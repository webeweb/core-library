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
 * Nb dsn mensuelle fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDsnMensuelleFactTrait {

    /**
     * Nb dsn mensuelle fact.
     *
     * @var int
     */
    private $nbDsnMensuelleFact;

    /**
     * Get the nb dsn mensuelle fact.
     *
     * @return int Returns the nb dsn mensuelle fact.
     */
    public function getNbDsnMensuelleFact() {
        return $this->nbDsnMensuelleFact;
    }

    /**
     * Set the nb dsn mensuelle fact.
     *
     * @param int $nbDsnMensuelleFact The nb dsn mensuelle fact.
     */
    public function setNbDsnMensuelleFact($nbDsnMensuelleFact) {
        $this->nbDsnMensuelleFact = $nbDsnMensuelleFact;
        return $this;
    }
}
