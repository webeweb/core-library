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
 * G uniq id trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGUniqIdTrait {

    /**
     * G uniq id.
     *
     * @var string
     */
    private $gUniqId;

    /**
     * Get the g uniq id.
     *
     * @return string Returns the g uniq id.
     */
    public function getGUniqId() {
        return $this->gUniqId;
    }

    /**
     * Set the g uniq id.
     *
     * @param string $gUniqId The g uniq id.
     */
    public function setGUniqId($gUniqId) {
        $this->gUniqId = $gUniqId;
        return $this;
    }
}
