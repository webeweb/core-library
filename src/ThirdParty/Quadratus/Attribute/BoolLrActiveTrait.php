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
 * Lr active trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolLrActiveTrait {

    /**
     * Lr active.
     *
     * @var bool
     */
    private $lrActive;

    /**
     * Get the lr active.
     *
     * @return bool Returns the lr active.
     */
    public function getLrActive() {
        return $this->lrActive;
    }

    /**
     * Set the lr active.
     *
     * @param bool $lrActive The lr active.
     */
    public function setLrActive($lrActive) {
        $this->lrActive = $lrActive;
        return $this;
    }
}
