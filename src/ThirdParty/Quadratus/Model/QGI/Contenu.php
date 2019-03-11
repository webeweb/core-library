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
 * Contenu model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Contenu {

    /**
     * Position.
     *
     * @var int
     */
    private $position;

    /**
     * Texte contenu.
     *
     * @var string
     */
    private $texteContenu;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the position.
     *
     * @return int Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Get the texte contenu.
     *
     * @return string Returns the texte contenu.
     */
    public function getTexteContenu() {
        return $this->texteContenu;
    }

    /**
     * Set the position.
     *
     * @param int $position The position.
     * @return Contenu Returns this contenu.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Set the texte contenu.
     *
     * @param string $texteContenu The texte contenu.
     * @return Contenu Returns this contenu.
     */
    public function setTexteContenu($texteContenu) {
        $this->texteContenu = $texteContenu;
        return $this;
    }
}
