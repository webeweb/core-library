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
 * Raison sociale societe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRaisonSocialeSocieteTrait {

    /**
     * Raison sociale societe.
     *
     * @var string
     */
    private $raisonSocialeSociete;

    /**
     * Get the raison sociale societe.
     *
     * @return string Returns the raison sociale societe.
     */
    public function getRaisonSocialeSociete() {
        return $this->raisonSocialeSociete;
    }

    /**
     * Set the raison sociale societe.
     *
     * @param string $raisonSocialeSociete The raison sociale societe.
     */
    public function setRaisonSocialeSociete($raisonSocialeSociete) {
        $this->raisonSocialeSociete = $raisonSocialeSociete;
        return $this;
    }
}
