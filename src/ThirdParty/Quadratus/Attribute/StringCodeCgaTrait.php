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
 * Code cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCgaTrait {

    /**
     * Code cga.
     *
     * @var string
     */
    private $codeCga;

    /**
     * Get the code cga.
     *
     * @return string Returns the code cga.
     */
    public function getCodeCga() {
        return $this->codeCga;
    }

    /**
     * Set the code cga.
     *
     * @param string $codeCga The code cga.
     */
    public function setCodeCga($codeCga) {
        $this->codeCga = $codeCga;
        return $this;
    }
}
