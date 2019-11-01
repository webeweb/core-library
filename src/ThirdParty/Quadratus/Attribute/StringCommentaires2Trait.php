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
 * Commentaires2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaires2Trait {

    /**
     * Commentaires2.
     *
     * @var string
     */
    private $commentaires2;

    /**
     * Get the commentaires2.
     *
     * @return string Returns the commentaires2.
     */
    public function getCommentaires2() {
        return $this->commentaires2;
    }

    /**
     * Set the commentaires2.
     *
     * @param string $commentaires2 The commentaires2.
     */
    public function setCommentaires2($commentaires2) {
        $this->commentaires2 = $commentaires2;
        return $this;
    }
}
