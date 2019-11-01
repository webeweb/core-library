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
 * Code liv par defaut trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeLivParDefautTrait {

    /**
     * Code liv par defaut.
     *
     * @var string
     */
    private $codeLivParDefaut;

    /**
     * Get the code liv par defaut.
     *
     * @return string Returns the code liv par defaut.
     */
    public function getCodeLivParDefaut() {
        return $this->codeLivParDefaut;
    }

    /**
     * Set the code liv par defaut.
     *
     * @param string $codeLivParDefaut The code liv par defaut.
     */
    public function setCodeLivParDefaut($codeLivParDefaut) {
        $this->codeLivParDefaut = $codeLivParDefaut;
        return $this;
    }
}
