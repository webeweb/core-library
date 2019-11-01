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
 * Nb fic ascii emis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbFicAsciiEmisTrait {

    /**
     * Nb fic ascii emis.
     *
     * @var int
     */
    private $nbFicAsciiEmis;

    /**
     * Get the nb fic ascii emis.
     *
     * @return int Returns the nb fic ascii emis.
     */
    public function getNbFicAsciiEmis() {
        return $this->nbFicAsciiEmis;
    }

    /**
     * Set the nb fic ascii emis.
     *
     * @param int $nbFicAsciiEmis The nb fic ascii emis.
     */
    public function setNbFicAsciiEmis($nbFicAsciiEmis) {
        $this->nbFicAsciiEmis = $nbFicAsciiEmis;
        return $this;
    }
}
