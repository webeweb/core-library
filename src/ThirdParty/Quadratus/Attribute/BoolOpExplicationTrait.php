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
 * Op explication trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolOpExplicationTrait {

    /**
     * Op explication.
     *
     * @var bool
     */
    private $opExplication;

    /**
     * Get the op explication.
     *
     * @return bool Returns the op explication.
     */
    public function getOpExplication() {
        return $this->opExplication;
    }

    /**
     * Set the op explication.
     *
     * @param bool $opExplication The op explication.
     */
    public function setOpExplication($opExplication) {
        $this->opExplication = $opExplication;
        return $this;
    }
}
