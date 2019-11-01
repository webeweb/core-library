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
 * Nb heures prevues trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeuresPrevuesTrait {

    /**
     * Nb heures prevues.
     *
     * @var float
     */
    private $nbHeuresPrevues;

    /**
     * Get the nb heures prevues.
     *
     * @return float Returns the nb heures prevues.
     */
    public function getNbHeuresPrevues() {
        return $this->nbHeuresPrevues;
    }

    /**
     * Set the nb heures prevues.
     *
     * @param float $nbHeuresPrevues The nb heures prevues.
     */
    public function setNbHeuresPrevues($nbHeuresPrevues) {
        $this->nbHeuresPrevues = $nbHeuresPrevues;
        return $this;
    }
}
