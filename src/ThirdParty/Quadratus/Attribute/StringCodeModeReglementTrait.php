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
 * Code mode reglement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeModeReglementTrait {

    /**
     * Code mode reglement.
     *
     * @var string
     */
    private $codeModeReglement;

    /**
     * Get the code mode reglement.
     *
     * @return string Returns the code mode reglement.
     */
    public function getCodeModeReglement() {
        return $this->codeModeReglement;
    }

    /**
     * Set the code mode reglement.
     *
     * @param string $codeModeReglement The code mode reglement.
     */
    public function setCodeModeReglement($codeModeReglement) {
        $this->codeModeReglement = $codeModeReglement;
        return $this;
    }
}
