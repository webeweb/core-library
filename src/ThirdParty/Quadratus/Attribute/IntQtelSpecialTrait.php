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
 * Qtel special trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntQtelSpecialTrait {

    /**
     * Qtel special.
     *
     * @var int
     */
    private $qtelSpecial;

    /**
     * Get the qtel special.
     *
     * @return int Returns the qtel special.
     */
    public function getQtelSpecial() {
        return $this->qtelSpecial;
    }

    /**
     * Set the qtel special.
     *
     * @param int $qtelSpecial The qtel special.
     */
    public function setQtelSpecial($qtelSpecial) {
        $this->qtelSpecial = $qtelSpecial;
        return $this;
    }
}
