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
 * Compteur fil discussion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCompteurFilDiscussionTrait {

    /**
     * Compteur fil discussion.
     *
     * @var int
     */
    private $compteurFilDiscussion;

    /**
     * Get the compteur fil discussion.
     *
     * @return int Returns the compteur fil discussion.
     */
    public function getCompteurFilDiscussion() {
        return $this->compteurFilDiscussion;
    }

    /**
     * Set the compteur fil discussion.
     *
     * @param int $compteurFilDiscussion The compteur fil discussion.
     */
    public function setCompteurFilDiscussion($compteurFilDiscussion) {
        $this->compteurFilDiscussion = $compteurFilDiscussion;
        return $this;
    }
}
