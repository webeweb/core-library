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
 * Format duree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFormatDureeTrait {

    /**
     * Format duree.
     *
     * @var bool
     */
    private $formatDuree;

    /**
     * Get the format duree.
     *
     * @return bool Returns the format duree.
     */
    public function getFormatDuree() {
        return $this->formatDuree;
    }

    /**
     * Set the format duree.
     *
     * @param bool $formatDuree The format duree.
     */
    public function setFormatDuree($formatDuree) {
        $this->formatDuree = $formatDuree;
        return $this;
    }
}
