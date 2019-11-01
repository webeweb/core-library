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
 * Sans images trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSansImagesTrait {

    /**
     * Sans images.
     *
     * @var bool
     */
    private $sansImages;

    /**
     * Get the sans images.
     *
     * @return bool Returns the sans images.
     */
    public function getSansImages() {
        return $this->sansImages;
    }

    /**
     * Set the sans images.
     *
     * @param bool $sansImages The sans images.
     */
    public function setSansImages($sansImages) {
        $this->sansImages = $sansImages;
        return $this;
    }
}
