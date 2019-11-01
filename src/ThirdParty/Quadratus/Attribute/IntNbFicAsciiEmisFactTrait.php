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
 * Nb fic ascii emis fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbFicAsciiEmisFactTrait {

    /**
     * Nb fic ascii emis fact.
     *
     * @var int
     */
    private $nbFicAsciiEmisFact;

    /**
     * Get the nb fic ascii emis fact.
     *
     * @return int Returns the nb fic ascii emis fact.
     */
    public function getNbFicAsciiEmisFact() {
        return $this->nbFicAsciiEmisFact;
    }

    /**
     * Set the nb fic ascii emis fact.
     *
     * @param int $nbFicAsciiEmisFact The nb fic ascii emis fact.
     */
    public function setNbFicAsciiEmisFact($nbFicAsciiEmisFact) {
        $this->nbFicAsciiEmisFact = $nbFicAsciiEmisFact;
        return $this;
    }
}
