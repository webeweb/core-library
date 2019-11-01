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
 * z rbtiban trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringzRbtibanTrait {

    /**
     * z rbtiban.
     *
     * @var string
     */
    private $zRbtiban;

    /**
     * Get the z rbtiban.
     *
     * @return string Returns the z rbtiban.
     */
    public function getzRbtiban() {
        return $this->zRbtiban;
    }

    /**
     * Set the z rbtiban.
     *
     * @param string $zRbtiban The z rbtiban.
     */
    public function setzRbtiban($zRbtiban) {
        $this->zRbtiban = $zRbtiban;
        return $this;
    }
}
