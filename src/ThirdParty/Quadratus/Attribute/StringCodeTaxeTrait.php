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
 * Code taxe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTaxeTrait {

    /**
     * Code taxe.
     *
     * @var string
     */
    private $codeTaxe;

    /**
     * Get the code taxe.
     *
     * @return string Returns the code taxe.
     */
    public function getCodeTaxe() {
        return $this->codeTaxe;
    }

    /**
     * Set the code taxe.
     *
     * @param string $codeTaxe The code taxe.
     */
    public function setCodeTaxe($codeTaxe) {
        $this->codeTaxe = $codeTaxe;
        return $this;
    }
}
