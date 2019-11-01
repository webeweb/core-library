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
 * Code tache defaut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTacheDefautTrait {

    /**
     * Code tache defaut.
     *
     * @var string
     */
    private $codeTacheDefaut;

    /**
     * Get the code tache defaut.
     *
     * @return string Returns the code tache defaut.
     */
    public function getCodeTacheDefaut() {
        return $this->codeTacheDefaut;
    }

    /**
     * Set the code tache defaut.
     *
     * @param string $codeTacheDefaut The code tache defaut.
     */
    public function setCodeTacheDefaut($codeTacheDefaut) {
        $this->codeTacheDefaut = $codeTacheDefaut;
        return $this;
    }
}
