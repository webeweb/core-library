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
 * Commentaire journee solidarite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommentaireJourneeSolidariteTrait {

    /**
     * Commentaire journee solidarite.
     *
     * @var string
     */
    private $commentaireJourneeSolidarite;

    /**
     * Get the commentaire journee solidarite.
     *
     * @return string Returns the commentaire journee solidarite.
     */
    public function getCommentaireJourneeSolidarite() {
        return $this->commentaireJourneeSolidarite;
    }

    /**
     * Set the commentaire journee solidarite.
     *
     * @param string $commentaireJourneeSolidarite The commentaire journee solidarite.
     */
    public function setCommentaireJourneeSolidarite($commentaireJourneeSolidarite) {
        $this->commentaireJourneeSolidarite = $commentaireJourneeSolidarite;
        return $this;
    }
}
