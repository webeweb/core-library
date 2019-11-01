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
 * Active smic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveSmicTrait {

    /**
     * Active smic.
     *
     * @var bool
     */
    private $activeSmic;

    /**
     * Get the active smic.
     *
     * @return bool Returns the active smic.
     */
    public function getActiveSmic() {
        return $this->activeSmic;
    }

    /**
     * Set the active smic.
     *
     * @param bool $activeSmic The active smic.
     */
    public function setActiveSmic($activeSmic) {
        $this->activeSmic = $activeSmic;
        return $this;
    }
}
