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
 * Comment7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComment7Trait {

    /**
     * Comment7.
     *
     * @var string
     */
    private $comment7;

    /**
     * Get the comment7.
     *
     * @return string Returns the comment7.
     */
    public function getComment7() {
        return $this->comment7;
    }

    /**
     * Set the comment7.
     *
     * @param string $comment7 The comment7.
     */
    public function setComment7($comment7) {
        $this->comment7 = $comment7;
        return $this;
    }
}
