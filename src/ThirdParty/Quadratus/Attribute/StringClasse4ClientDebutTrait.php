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
 * Classe4 client debut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClasse4ClientDebutTrait {

    /**
     * Classe4 client debut.
     *
     * @var string
     */
    private $classe4ClientDebut;

    /**
     * Get the classe4 client debut.
     *
     * @return string Returns the classe4 client debut.
     */
    public function getClasse4ClientDebut() {
        return $this->classe4ClientDebut;
    }

    /**
     * Set the classe4 client debut.
     *
     * @param string $classe4ClientDebut The classe4 client debut.
     */
    public function setClasse4ClientDebut($classe4ClientDebut) {
        $this->classe4ClientDebut = $classe4ClientDebut;
        return $this;
    }
}
