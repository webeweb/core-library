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
 * Compression trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCompressionTrait {

    /**
     * Compression.
     *
     * @var bool
     */
    private $compression;

    /**
     * Get the compression.
     *
     * @return bool Returns the compression.
     */
    public function getCompression() {
        return $this->compression;
    }

    /**
     * Set the compression.
     *
     * @param bool $compression The compression.
     */
    public function setCompression($compression) {
        $this->compression = $compression;
        return $this;
    }
}
