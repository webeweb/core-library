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
 * Commentaire5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaire5Trait {

    /**
     * Commentaire5.
     *
     * @var string
     */
    private $commentaire5;

    /**
     * Get the commentaire5.
     *
     * @return string Returns the commentaire5.
     */
    public function getCommentaire5() {
        return $this->commentaire5;
    }

    /**
     * Set the commentaire5.
     *
     * @param string $commentaire5 The commentaire5.
     */
    public function setCommentaire5($commentaire5) {
        $this->commentaire5 = $commentaire5;
        return $this;
    }
}
