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
 * Comment6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComment6Trait {

    /**
     * Comment6.
     *
     * @var string
     */
    private $comment6;

    /**
     * Get the comment6.
     *
     * @return string Returns the comment6.
     */
    public function getComment6() {
        return $this->comment6;
    }

    /**
     * Set the comment6.
     *
     * @param string $comment6 The comment6.
     */
    public function setComment6($comment6) {
        $this->comment6 = $comment6;
        return $this;
    }
}
