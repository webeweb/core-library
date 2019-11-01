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
 * Comment3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComment3Trait {

    /**
     * Comment3.
     *
     * @var string
     */
    private $comment3;

    /**
     * Get the comment3.
     *
     * @return string Returns the comment3.
     */
    public function getComment3() {
        return $this->comment3;
    }

    /**
     * Set the comment3.
     *
     * @param string $comment3 The comment3.
     */
    public function setComment3($comment3) {
        $this->comment3 = $comment3;
        return $this;
    }
}
