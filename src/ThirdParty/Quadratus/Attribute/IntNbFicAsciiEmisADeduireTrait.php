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
 * Nb fic ascii emis a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbFicAsciiEmisADeduireTrait {

    /**
     * Nb fic ascii emis a deduire.
     *
     * @var int
     */
    private $nbFicAsciiEmisADeduire;

    /**
     * Get the nb fic ascii emis a deduire.
     *
     * @return int Returns the nb fic ascii emis a deduire.
     */
    public function getNbFicAsciiEmisADeduire() {
        return $this->nbFicAsciiEmisADeduire;
    }

    /**
     * Set the nb fic ascii emis a deduire.
     *
     * @param int $nbFicAsciiEmisADeduire The nb fic ascii emis a deduire.
     */
    public function setNbFicAsciiEmisADeduire($nbFicAsciiEmisADeduire) {
        $this->nbFicAsciiEmisADeduire = $nbFicAsciiEmisADeduire;
        return $this;
    }
}
