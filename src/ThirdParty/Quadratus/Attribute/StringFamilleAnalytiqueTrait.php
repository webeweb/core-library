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
 * Famille analytique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamilleAnalytiqueTrait {

    /**
     * Famille analytique.
     *
     * @var string
     */
    private $familleAnalytique;

    /**
     * Get the famille analytique.
     *
     * @return string Returns the famille analytique.
     */
    public function getFamilleAnalytique() {
        return $this->familleAnalytique;
    }

    /**
     * Set the famille analytique.
     *
     * @param string $familleAnalytique The famille analytique.
     */
    public function setFamilleAnalytique($familleAnalytique) {
        $this->familleAnalytique = $familleAnalytique;
        return $this;
    }
}
