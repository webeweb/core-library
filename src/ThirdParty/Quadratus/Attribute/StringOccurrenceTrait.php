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
 * Occurrence trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOccurrenceTrait {

    /**
     * Occurrence.
     *
     * @var string
     */
    private $occurrence;

    /**
     * Get the occurrence.
     *
     * @return string Returns the occurrence.
     */
    public function getOccurrence() {
        return $this->occurrence;
    }

    /**
     * Set the occurrence.
     *
     * @param string $occurrence The occurrence.
     */
    public function setOccurrence($occurrence) {
        $this->occurrence = $occurrence;
        return $this;
    }
}
