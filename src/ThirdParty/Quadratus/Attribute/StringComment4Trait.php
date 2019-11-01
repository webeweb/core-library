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
 * Comment4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComment4Trait {

    /**
     * Comment4.
     *
     * @var string
     */
    private $comment4;

    /**
     * Get the comment4.
     *
     * @return string Returns the comment4.
     */
    public function getComment4() {
        return $this->comment4;
    }

    /**
     * Set the comment4.
     *
     * @param string $comment4 The comment4.
     */
    public function setComment4($comment4) {
        $this->comment4 = $comment4;
        return $this;
    }
}
