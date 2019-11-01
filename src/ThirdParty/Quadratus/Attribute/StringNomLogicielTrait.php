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
 * Nom logiciel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomLogicielTrait {

    /**
     * Nom logiciel.
     *
     * @var string
     */
    private $nomLogiciel;

    /**
     * Get the nom logiciel.
     *
     * @return string Returns the nom logiciel.
     */
    public function getNomLogiciel() {
        return $this->nomLogiciel;
    }

    /**
     * Set the nom logiciel.
     *
     * @param string $nomLogiciel The nom logiciel.
     */
    public function setNomLogiciel($nomLogiciel) {
        $this->nomLogiciel = $nomLogiciel;
        return $this;
    }
}
