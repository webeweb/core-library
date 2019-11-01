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
 * Code prime paniers trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimePaniersTrait {

    /**
     * Code prime paniers.
     *
     * @var string
     */
    private $codePrimePaniers;

    /**
     * Get the code prime paniers.
     *
     * @return string Returns the code prime paniers.
     */
    public function getCodePrimePaniers() {
        return $this->codePrimePaniers;
    }

    /**
     * Set the code prime paniers.
     *
     * @param string $codePrimePaniers The code prime paniers.
     */
    public function setCodePrimePaniers($codePrimePaniers) {
        $this->codePrimePaniers = $codePrimePaniers;
        return $this;
    }
}
