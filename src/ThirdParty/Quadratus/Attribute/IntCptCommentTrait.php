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
 * Cpt comment trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCptCommentTrait {

    /**
     * Cpt comment.
     *
     * @var int
     */
    private $cptComment;

    /**
     * Get the cpt comment.
     *
     * @return int Returns the cpt comment.
     */
    public function getCptComment() {
        return $this->cptComment;
    }

    /**
     * Set the cpt comment.
     *
     * @param int $cptComment The cpt comment.
     */
    public function setCptComment($cptComment) {
        $this->cptComment = $cptComment;
        return $this;
    }
}
