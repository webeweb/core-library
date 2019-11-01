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
 * Commentaires1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaires1Trait {

    /**
     * Commentaires1.
     *
     * @var string
     */
    private $commentaires1;

    /**
     * Get the commentaires1.
     *
     * @return string Returns the commentaires1.
     */
    public function getCommentaires1() {
        return $this->commentaires1;
    }

    /**
     * Set the commentaires1.
     *
     * @param string $commentaires1 The commentaires1.
     */
    public function setCommentaires1($commentaires1) {
        $this->commentaires1 = $commentaires1;
        return $this;
    }
}
