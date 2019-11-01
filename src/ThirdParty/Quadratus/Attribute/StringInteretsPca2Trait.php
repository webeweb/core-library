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
 * Interets pca2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInteretsPca2Trait {

    /**
     * Interets pca2.
     *
     * @var string
     */
    private $interetsPca2;

    /**
     * Get the interets pca2.
     *
     * @return string Returns the interets pca2.
     */
    public function getInteretsPca2() {
        return $this->interetsPca2;
    }

    /**
     * Set the interets pca2.
     *
     * @param string $interetsPca2 The interets pca2.
     */
    public function setInteretsPca2($interetsPca2) {
        $this->interetsPca2 = $interetsPca2;
        return $this;
    }
}
