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
 * Numero bs genere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroBsGenereTrait {

    /**
     * Numero bs genere.
     *
     * @var string
     */
    private $numeroBsGenere;

    /**
     * Get the numero bs genere.
     *
     * @return string Returns the numero bs genere.
     */
    public function getNumeroBsGenere() {
        return $this->numeroBsGenere;
    }

    /**
     * Set the numero bs genere.
     *
     * @param string $numeroBsGenere The numero bs genere.
     */
    public function setNumeroBsGenere($numeroBsGenere) {
        $this->numeroBsGenere = $numeroBsGenere;
        return $this;
    }
}
