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
 * Commentaires5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaires5Trait {

    /**
     * Commentaires5.
     *
     * @var string
     */
    private $commentaires5;

    /**
     * Get the commentaires5.
     *
     * @return string Returns the commentaires5.
     */
    public function getCommentaires5() {
        return $this->commentaires5;
    }

    /**
     * Set the commentaires5.
     *
     * @param string $commentaires5 The commentaires5.
     */
    public function setCommentaires5($commentaires5) {
        $this->commentaires5 = $commentaires5;
        return $this;
    }
}
