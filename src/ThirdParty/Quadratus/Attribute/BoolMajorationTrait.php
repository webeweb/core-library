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
 * Majoration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMajorationTrait {

    /**
     * Majoration.
     *
     * @var bool
     */
    private $majoration;

    /**
     * Get the majoration.
     *
     * @return bool Returns the majoration.
     */
    public function getMajoration() {
        return $this->majoration;
    }

    /**
     * Set the majoration.
     *
     * @param bool $majoration The majoration.
     */
    public function setMajoration($majoration) {
        $this->majoration = $majoration;
        return $this;
    }
}
