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
 * Commentaire1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaire1Trait {

    /**
     * Commentaire1.
     *
     * @var string
     */
    private $commentaire1;

    /**
     * Get the commentaire1.
     *
     * @return string Returns the commentaire1.
     */
    public function getCommentaire1() {
        return $this->commentaire1;
    }

    /**
     * Set the commentaire1.
     *
     * @param string $commentaire1 The commentaire1.
     */
    public function setCommentaire1($commentaire1) {
        $this->commentaire1 = $commentaire1;
        return $this;
    }
}
