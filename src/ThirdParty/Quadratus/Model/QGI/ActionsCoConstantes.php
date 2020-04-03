<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Actions co constantes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoConstantes {

    /**
     * Lieu edition.
     *
     * @var string
     */
    private $lieuEdition;

    /**
     * Num declaration.
     *
     * @var string
     */
    private $numDeclaration;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the lieu edition.
     *
     * @return string Returns the lieu edition.
     */
    public function getLieuEdition() {
        return $this->lieuEdition;
    }

    /**
     * Get the num declaration.
     *
     * @return string Returns the num declaration.
     */
    public function getNumDeclaration() {
        return $this->numDeclaration;
    }

    /**
     * Set the lieu edition.
     *
     * @param string $lieuEdition The lieu edition.
     * @return ActionsCoConstantes Returns this Actions co constantes.
     */
    public function setLieuEdition($lieuEdition) {
        $this->lieuEdition = $lieuEdition;
        return $this;
    }

    /**
     * Set the num declaration.
     *
     * @param string $numDeclaration The num declaration.
     * @return ActionsCoConstantes Returns this Actions co constantes.
     */
    public function setNumDeclaration($numDeclaration) {
        $this->numDeclaration = $numDeclaration;
        return $this;
    }
}
