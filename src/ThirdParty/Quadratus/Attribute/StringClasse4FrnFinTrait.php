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
 * Classe4 frn fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringClasse4FrnFinTrait {

    /**
     * Classe4 frn fin.
     *
     * @var string
     */
    private $classe4FrnFin;

    /**
     * Get the classe4 frn fin.
     *
     * @return string Returns the classe4 frn fin.
     */
    public function getClasse4FrnFin() {
        return $this->classe4FrnFin;
    }

    /**
     * Set the classe4 frn fin.
     *
     * @param string $classe4FrnFin The classe4 frn fin.
     */
    public function setClasse4FrnFin($classe4FrnFin) {
        $this->classe4FrnFin = $classe4FrnFin;
        return $this;
    }
}
