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
 * Format non etendu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFormatNonEtenduTrait {

    /**
     * Format non etendu.
     *
     * @var bool
     */
    private $formatNonEtendu;

    /**
     * Get the format non etendu.
     *
     * @return bool Returns the format non etendu.
     */
    public function getFormatNonEtendu() {
        return $this->formatNonEtendu;
    }

    /**
     * Set the format non etendu.
     *
     * @param bool $formatNonEtendu The format non etendu.
     */
    public function setFormatNonEtendu($formatNonEtendu) {
        $this->formatNonEtendu = $formatNonEtendu;
        return $this;
    }
}
