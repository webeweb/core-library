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
 * Fait ifu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitIfuTrait {

    /**
     * Fait ifu.
     *
     * @var string
     */
    private $faitIfu;

    /**
     * Get the fait ifu.
     *
     * @return string Returns the fait ifu.
     */
    public function getFaitIfu() {
        return $this->faitIfu;
    }

    /**
     * Set the fait ifu.
     *
     * @param string $faitIfu The fait ifu.
     */
    public function setFaitIfu($faitIfu) {
        $this->faitIfu = $faitIfu;
        return $this;
    }
}
