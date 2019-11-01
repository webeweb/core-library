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
 * Detail effet cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDetailEffetCptaTrait {

    /**
     * Detail effet cpta.
     *
     * @var bool
     */
    private $detailEffetCpta;

    /**
     * Get the detail effet cpta.
     *
     * @return bool Returns the detail effet cpta.
     */
    public function getDetailEffetCpta() {
        return $this->detailEffetCpta;
    }

    /**
     * Set the detail effet cpta.
     *
     * @param bool $detailEffetCpta The detail effet cpta.
     */
    public function setDetailEffetCpta($detailEffetCpta) {
        $this->detailEffetCpta = $detailEffetCpta;
        return $this;
    }
}
