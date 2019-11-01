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
 * Groupe crc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGroupeCrcTrait {

    /**
     * Groupe crc.
     *
     * @var string
     */
    private $groupeCrc;

    /**
     * Get the groupe crc.
     *
     * @return string Returns the groupe crc.
     */
    public function getGroupeCrc() {
        return $this->groupeCrc;
    }

    /**
     * Set the groupe crc.
     *
     * @param string $groupeCrc The groupe crc.
     */
    public function setGroupeCrc($groupeCrc) {
        $this->groupeCrc = $groupeCrc;
        return $this;
    }
}
