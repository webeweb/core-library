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
 * Code coll genere trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollGenereTrait {

    /**
     * Code coll genere.
     *
     * @var string
     */
    private $codeCollGenere;

    /**
     * Get the code coll genere.
     *
     * @return string Returns the code coll genere.
     */
    public function getCodeCollGenere() {
        return $this->codeCollGenere;
    }

    /**
     * Set the code coll genere.
     *
     * @param string $codeCollGenere The code coll genere.
     */
    public function setCodeCollGenere($codeCollGenere) {
        $this->codeCollGenere = $codeCollGenere;
        return $this;
    }
}
