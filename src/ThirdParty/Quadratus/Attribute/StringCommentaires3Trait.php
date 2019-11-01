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
 * Commentaires3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaires3Trait {

    /**
     * Commentaires3.
     *
     * @var string
     */
    private $commentaires3;

    /**
     * Get the commentaires3.
     *
     * @return string Returns the commentaires3.
     */
    public function getCommentaires3() {
        return $this->commentaires3;
    }

    /**
     * Set the commentaires3.
     *
     * @param string $commentaires3 The commentaires3.
     */
    public function setCommentaires3($commentaires3) {
        $this->commentaires3 = $commentaires3;
        return $this;
    }
}
