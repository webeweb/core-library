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
 * Indemn rupture code2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIndemnRuptureCode2Trait {

    /**
     * Indemn rupture code2.
     *
     * @var string
     */
    private $indemnRuptureCode2;

    /**
     * Get the indemn rupture code2.
     *
     * @return string Returns the indemn rupture code2.
     */
    public function getIndemnRuptureCode2() {
        return $this->indemnRuptureCode2;
    }

    /**
     * Set the indemn rupture code2.
     *
     * @param string $indemnRuptureCode2 The indemn rupture code2.
     */
    public function setIndemnRuptureCode2($indemnRuptureCode2) {
        $this->indemnRuptureCode2 = $indemnRuptureCode2;
        return $this;
    }
}
