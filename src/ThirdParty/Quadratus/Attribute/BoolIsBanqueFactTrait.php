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
 * Is banque fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIsBanqueFactTrait {

    /**
     * Is banque fact.
     *
     * @var bool
     */
    private $isBanqueFact;

    /**
     * Get the is banque fact.
     *
     * @return bool Returns the is banque fact.
     */
    public function getIsBanqueFact() {
        return $this->isBanqueFact;
    }

    /**
     * Set the is banque fact.
     *
     * @param bool $isBanqueFact The is banque fact.
     */
    public function setIsBanqueFact($isBanqueFact) {
        $this->isBanqueFact = $isBanqueFact;
        return $this;
    }
}
