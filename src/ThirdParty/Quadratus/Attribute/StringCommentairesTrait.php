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
 * Commentaires trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentairesTrait {

    /**
     * Commentaires.
     *
     * @var string
     */
    private $commentaires;

    /**
     * Get the commentaires.
     *
     * @return string Returns the commentaires.
     */
    public function getCommentaires() {
        return $this->commentaires;
    }

    /**
     * Set the commentaires.
     *
     * @param string $commentaires The commentaires.
     */
    public function setCommentaires($commentaires) {
        $this->commentaires = $commentaires;
        return $this;
    }
}
