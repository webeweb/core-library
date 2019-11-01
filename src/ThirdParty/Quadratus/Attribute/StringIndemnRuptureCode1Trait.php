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
 * Indemn rupture code1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIndemnRuptureCode1Trait {

    /**
     * Indemn rupture code1.
     *
     * @var string
     */
    private $indemnRuptureCode1;

    /**
     * Get the indemn rupture code1.
     *
     * @return string Returns the indemn rupture code1.
     */
    public function getIndemnRuptureCode1() {
        return $this->indemnRuptureCode1;
    }

    /**
     * Set the indemn rupture code1.
     *
     * @param string $indemnRuptureCode1 The indemn rupture code1.
     */
    public function setIndemnRuptureCode1($indemnRuptureCode1) {
        $this->indemnRuptureCode1 = $indemnRuptureCode1;
        return $this;
    }
}
