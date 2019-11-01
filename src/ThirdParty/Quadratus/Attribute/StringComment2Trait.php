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
 * Comment2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComment2Trait {

    /**
     * Comment2.
     *
     * @var string
     */
    private $comment2;

    /**
     * Get the comment2.
     *
     * @return string Returns the comment2.
     */
    public function getComment2() {
        return $this->comment2;
    }

    /**
     * Set the comment2.
     *
     * @param string $comment2 The comment2.
     */
    public function setComment2($comment2) {
        $this->comment2 = $comment2;
        return $this;
    }
}
