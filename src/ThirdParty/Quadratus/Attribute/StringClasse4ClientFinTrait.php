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
 * Classe4 client fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClasse4ClientFinTrait {

    /**
     * Classe4 client fin.
     *
     * @var string
     */
    private $classe4ClientFin;

    /**
     * Get the classe4 client fin.
     *
     * @return string Returns the classe4 client fin.
     */
    public function getClasse4ClientFin() {
        return $this->classe4ClientFin;
    }

    /**
     * Set the classe4 client fin.
     *
     * @param string $classe4ClientFin The classe4 client fin.
     */
    public function setClasse4ClientFin($classe4ClientFin) {
        $this->classe4ClientFin = $classe4ClientFin;
        return $this;
    }
}
