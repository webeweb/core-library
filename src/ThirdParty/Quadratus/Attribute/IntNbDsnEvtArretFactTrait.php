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
 * Nb dsn evt arret fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDsnEvtArretFactTrait {

    /**
     * Nb dsn evt arret fact.
     *
     * @var int
     */
    private $nbDsnEvtArretFact;

    /**
     * Get the nb dsn evt arret fact.
     *
     * @return int Returns the nb dsn evt arret fact.
     */
    public function getNbDsnEvtArretFact() {
        return $this->nbDsnEvtArretFact;
    }

    /**
     * Set the nb dsn evt arret fact.
     *
     * @param int $nbDsnEvtArretFact The nb dsn evt arret fact.
     */
    public function setNbDsnEvtArretFact($nbDsnEvtArretFact) {
        $this->nbDsnEvtArretFact = $nbDsnEvtArretFact;
        return $this;
    }
}
