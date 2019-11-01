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
 * Mercredi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMercrediTrait {

    /**
     * Mercredi.
     *
     * @var bool
     */
    private $mercredi;

    /**
     * Get the mercredi.
     *
     * @return bool Returns the mercredi.
     */
    public function getMercredi() {
        return $this->mercredi;
    }

    /**
     * Set the mercredi.
     *
     * @param bool $mercredi The mercredi.
     */
    public function setMercredi($mercredi) {
        $this->mercredi = $mercredi;
        return $this;
    }
}
