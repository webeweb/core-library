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
 * Code tva fourn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTvaFournTrait {

    /**
     * Code tva fourn.
     *
     * @var string
     */
    private $codeTvaFourn;

    /**
     * Get the code tva fourn.
     *
     * @return string Returns the code tva fourn.
     */
    public function getCodeTvaFourn() {
        return $this->codeTvaFourn;
    }

    /**
     * Set the code tva fourn.
     *
     * @param string $codeTvaFourn The code tva fourn.
     */
    public function setCodeTvaFourn($codeTvaFourn) {
        $this->codeTvaFourn = $codeTvaFourn;
        return $this;
    }
}
