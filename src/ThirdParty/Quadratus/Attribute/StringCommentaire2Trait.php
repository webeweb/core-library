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
 * Commentaire2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaire2Trait {

    /**
     * Commentaire2.
     *
     * @var string
     */
    private $commentaire2;

    /**
     * Get the commentaire2.
     *
     * @return string Returns the commentaire2.
     */
    public function getCommentaire2() {
        return $this->commentaire2;
    }

    /**
     * Set the commentaire2.
     *
     * @param string $commentaire2 The commentaire2.
     */
    public function setCommentaire2($commentaire2) {
        $this->commentaire2 = $commentaire2;
        return $this;
    }
}
