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
 * Immo tot par compte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolImmoTotParCompteTrait {

    /**
     * Immo tot par compte.
     *
     * @var bool
     */
    private $immoTotParCompte;

    /**
     * Get the immo tot par compte.
     *
     * @return bool Returns the immo tot par compte.
     */
    public function getImmoTotParCompte() {
        return $this->immoTotParCompte;
    }

    /**
     * Set the immo tot par compte.
     *
     * @param bool $immoTotParCompte The immo tot par compte.
     */
    public function setImmoTotParCompte($immoTotParCompte) {
        $this->immoTotParCompte = $immoTotParCompte;
        return $this;
    }
}
