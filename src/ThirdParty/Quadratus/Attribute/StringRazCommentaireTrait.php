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
 * Raz commentaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRazCommentaireTrait {

    /**
     * Raz commentaire.
     *
     * @var string
     */
    private $razCommentaire;

    /**
     * Get the raz commentaire.
     *
     * @return string Returns the raz commentaire.
     */
    public function getRazCommentaire() {
        return $this->razCommentaire;
    }

    /**
     * Set the raz commentaire.
     *
     * @param string $razCommentaire The raz commentaire.
     */
    public function setRazCommentaire($razCommentaire) {
        $this->razCommentaire = $razCommentaire;
        return $this;
    }
}
