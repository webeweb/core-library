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
 * Famille elements trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamilleElementsTrait {

    /**
     * Famille elements.
     *
     * @var string
     */
    private $familleElements;

    /**
     * Get the famille elements.
     *
     * @return string Returns the famille elements.
     */
    public function getFamilleElements() {
        return $this->familleElements;
    }

    /**
     * Set the famille elements.
     *
     * @param string $familleElements The famille elements.
     */
    public function setFamilleElements($familleElements) {
        $this->familleElements = $familleElements;
        return $this;
    }
}
