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
 * Tva dom trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTvaDomTrait {

    /**
     * Tva dom.
     *
     * @var bool
     */
    private $tvaDom;

    /**
     * Get the tva dom.
     *
     * @return bool Returns the tva dom.
     */
    public function getTvaDom() {
        return $this->tvaDom;
    }

    /**
     * Set the tva dom.
     *
     * @param bool $tvaDom The tva dom.
     */
    public function setTvaDom($tvaDom) {
        $this->tvaDom = $tvaDom;
        return $this;
    }
}
