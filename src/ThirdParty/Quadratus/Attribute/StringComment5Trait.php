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
 * Comment5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComment5Trait {

    /**
     * Comment5.
     *
     * @var string
     */
    private $comment5;

    /**
     * Get the comment5.
     *
     * @return string Returns the comment5.
     */
    public function getComment5() {
        return $this->comment5;
    }

    /**
     * Set the comment5.
     *
     * @param string $comment5 The comment5.
     */
    public function setComment5($comment5) {
        $this->comment5 = $comment5;
        return $this;
    }
}
