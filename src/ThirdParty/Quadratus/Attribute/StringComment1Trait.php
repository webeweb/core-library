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
 * Comment1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComment1Trait {

    /**
     * Comment1.
     *
     * @var string
     */
    private $comment1;

    /**
     * Get the comment1.
     *
     * @return string Returns the comment1.
     */
    public function getComment1() {
        return $this->comment1;
    }

    /**
     * Set the comment1.
     *
     * @param string $comment1 The comment1.
     */
    public function setComment1($comment1) {
        $this->comment1 = $comment1;
        return $this;
    }
}
