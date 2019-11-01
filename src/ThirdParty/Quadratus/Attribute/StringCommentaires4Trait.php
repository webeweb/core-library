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
 * Commentaires4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaires4Trait {

    /**
     * Commentaires4.
     *
     * @var string
     */
    private $commentaires4;

    /**
     * Get the commentaires4.
     *
     * @return string Returns the commentaires4.
     */
    public function getCommentaires4() {
        return $this->commentaires4;
    }

    /**
     * Set the commentaires4.
     *
     * @param string $commentaires4 The commentaires4.
     */
    public function setCommentaires4($commentaires4) {
        $this->commentaires4 = $commentaires4;
        return $this;
    }
}
