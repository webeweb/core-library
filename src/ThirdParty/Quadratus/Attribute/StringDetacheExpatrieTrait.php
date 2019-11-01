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
 * Detache expatrie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDetacheExpatrieTrait {

    /**
     * Detache expatrie.
     *
     * @var string
     */
    private $detacheExpatrie;

    /**
     * Get the detache expatrie.
     *
     * @return string Returns the detache expatrie.
     */
    public function getDetacheExpatrie() {
        return $this->detacheExpatrie;
    }

    /**
     * Set the detache expatrie.
     *
     * @param string $detacheExpatrie The detache expatrie.
     */
    public function setDetacheExpatrie($detacheExpatrie) {
        $this->detacheExpatrie = $detacheExpatrie;
        return $this;
    }
}
