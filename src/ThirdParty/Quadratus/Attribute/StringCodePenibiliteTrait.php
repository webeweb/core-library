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
 * Code penibilite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePenibiliteTrait {

    /**
     * Code penibilite.
     *
     * @var string
     */
    private $codePenibilite;

    /**
     * Get the code penibilite.
     *
     * @return string Returns the code penibilite.
     */
    public function getCodePenibilite() {
        return $this->codePenibilite;
    }

    /**
     * Set the code penibilite.
     *
     * @param string $codePenibilite The code penibilite.
     */
    public function setCodePenibilite($codePenibilite) {
        $this->codePenibilite = $codePenibilite;
        return $this;
    }
}
