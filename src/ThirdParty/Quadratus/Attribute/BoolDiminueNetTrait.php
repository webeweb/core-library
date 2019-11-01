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
 * Diminue net trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDiminueNetTrait {

    /**
     * Diminue net.
     *
     * @var bool
     */
    private $diminueNet;

    /**
     * Get the diminue net.
     *
     * @return bool Returns the diminue net.
     */
    public function getDiminueNet() {
        return $this->diminueNet;
    }

    /**
     * Set the diminue net.
     *
     * @param bool $diminueNet The diminue net.
     */
    public function setDiminueNet($diminueNet) {
        $this->diminueNet = $diminueNet;
        return $this;
    }
}
