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
 * Commentaire4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaire4Trait {

    /**
     * Commentaire4.
     *
     * @var string
     */
    private $commentaire4;

    /**
     * Get the commentaire4.
     *
     * @return string Returns the commentaire4.
     */
    public function getCommentaire4() {
        return $this->commentaire4;
    }

    /**
     * Set the commentaire4.
     *
     * @param string $commentaire4 The commentaire4.
     */
    public function setCommentaire4($commentaire4) {
        $this->commentaire4 = $commentaire4;
        return $this;
    }
}
