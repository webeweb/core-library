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
 * Controle saisie tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringControleSaisieTpTrait {

    /**
     * Controle saisie tp.
     *
     * @var string
     */
    private $controleSaisieTp;

    /**
     * Get the controle saisie tp.
     *
     * @return string Returns the controle saisie tp.
     */
    public function getControleSaisieTp() {
        return $this->controleSaisieTp;
    }

    /**
     * Set the controle saisie tp.
     *
     * @param string $controleSaisieTp The controle saisie tp.
     */
    public function setControleSaisieTp($controleSaisieTp) {
        $this->controleSaisieTp = $controleSaisieTp;
        return $this;
    }
}
