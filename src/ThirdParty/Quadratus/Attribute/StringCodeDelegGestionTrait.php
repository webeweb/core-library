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
 * Code deleg gestion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDelegGestionTrait {

    /**
     * Code deleg gestion.
     *
     * @var string
     */
    private $codeDelegGestion;

    /**
     * Get the code deleg gestion.
     *
     * @return string Returns the code deleg gestion.
     */
    public function getCodeDelegGestion() {
        return $this->codeDelegGestion;
    }

    /**
     * Set the code deleg gestion.
     *
     * @param string $codeDelegGestion The code deleg gestion.
     */
    public function setCodeDelegGestion($codeDelegGestion) {
        $this->codeDelegGestion = $codeDelegGestion;
        return $this;
    }
}
