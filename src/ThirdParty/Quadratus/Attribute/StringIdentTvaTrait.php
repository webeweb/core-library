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
 * Ident tva trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdentTvaTrait {

    /**
     * Ident tva.
     *
     * @var string
     */
    private $identTva;

    /**
     * Get the ident tva.
     *
     * @return string Returns the ident tva.
     */
    public function getIdentTva() {
        return $this->identTva;
    }

    /**
     * Set the ident tva.
     *
     * @param string $identTva The ident tva.
     */
    public function setIdentTva($identTva) {
        $this->identTva = $identTva;
        return $this;
    }
}
