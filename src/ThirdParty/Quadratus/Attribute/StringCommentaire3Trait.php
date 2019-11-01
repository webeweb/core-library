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
 * Commentaire3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaire3Trait {

    /**
     * Commentaire3.
     *
     * @var string
     */
    private $commentaire3;

    /**
     * Get the commentaire3.
     *
     * @return string Returns the commentaire3.
     */
    public function getCommentaire3() {
        return $this->commentaire3;
    }

    /**
     * Set the commentaire3.
     *
     * @param string $commentaire3 The commentaire3.
     */
    public function setCommentaire3($commentaire3) {
        $this->commentaire3 = $commentaire3;
        return $this;
    }
}
