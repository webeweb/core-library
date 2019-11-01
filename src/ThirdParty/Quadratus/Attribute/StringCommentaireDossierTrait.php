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
 * Commentaire dossier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaireDossierTrait {

    /**
     * Commentaire dossier.
     *
     * @var string
     */
    private $commentaireDossier;

    /**
     * Get the commentaire dossier.
     *
     * @return string Returns the commentaire dossier.
     */
    public function getCommentaireDossier() {
        return $this->commentaireDossier;
    }

    /**
     * Set the commentaire dossier.
     *
     * @param string $commentaireDossier The commentaire dossier.
     */
    public function setCommentaireDossier($commentaireDossier) {
        $this->commentaireDossier = $commentaireDossier;
        return $this;
    }
}
