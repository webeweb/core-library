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
 * Ya droits collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolYaDroitsCollabTrait {

    /**
     * Ya droits collab.
     *
     * @var bool
     */
    private $yaDroitsCollab;

    /**
     * Get the ya droits collab.
     *
     * @return bool Returns the ya droits collab.
     */
    public function getYaDroitsCollab() {
        return $this->yaDroitsCollab;
    }

    /**
     * Set the ya droits collab.
     *
     * @param bool $yaDroitsCollab The ya droits collab.
     */
    public function setYaDroitsCollab($yaDroitsCollab) {
        $this->yaDroitsCollab = $yaDroitsCollab;
        return $this;
    }
}
