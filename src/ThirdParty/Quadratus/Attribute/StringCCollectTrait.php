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
 * C collect trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCCollectTrait {

    /**
     * C collect.
     *
     * @var string
     */
    private $cCollect;

    /**
     * Get the c collect.
     *
     * @return string Returns the c collect.
     */
    public function getCCollect() {
        return $this->cCollect;
    }

    /**
     * Set the c collect.
     *
     * @param string $cCollect The c collect.
     */
    public function setCCollect($cCollect) {
        $this->cCollect = $cCollect;
        return $this;
    }
}
