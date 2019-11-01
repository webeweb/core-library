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
 * Immo numero compte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringImmoNumeroCompteTrait {

    /**
     * Immo numero compte.
     *
     * @var string
     */
    private $immoNumeroCompte;

    /**
     * Get the immo numero compte.
     *
     * @return string Returns the immo numero compte.
     */
    public function getImmoNumeroCompte() {
        return $this->immoNumeroCompte;
    }

    /**
     * Set the immo numero compte.
     *
     * @param string $immoNumeroCompte The immo numero compte.
     */
    public function setImmoNumeroCompte($immoNumeroCompte) {
        $this->immoNumeroCompte = $immoNumeroCompte;
        return $this;
    }
}
