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
 * Qwsipl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQwsiplTrait {

    /**
     * Qwsipl.
     *
     * @var string
     */
    private $qwsipl;

    /**
     * Get the qwsipl.
     *
     * @return string Returns the qwsipl.
     */
    public function getQwsipl() {
        return $this->qwsipl;
    }

    /**
     * Set the qwsipl.
     *
     * @param string $qwsipl The qwsipl.
     */
    public function setQwsipl($qwsipl) {
        $this->qwsipl = $qwsipl;
        return $this;
    }
}
