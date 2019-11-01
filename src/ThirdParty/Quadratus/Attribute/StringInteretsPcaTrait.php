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
 * Interets pca trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInteretsPcaTrait {

    /**
     * Interets pca.
     *
     * @var string
     */
    private $interetsPca;

    /**
     * Get the interets pca.
     *
     * @return string Returns the interets pca.
     */
    public function getInteretsPca() {
        return $this->interetsPca;
    }

    /**
     * Set the interets pca.
     *
     * @param string $interetsPca The interets pca.
     */
    public function setInteretsPca($interetsPca) {
        $this->interetsPca = $interetsPca;
        return $this;
    }
}
