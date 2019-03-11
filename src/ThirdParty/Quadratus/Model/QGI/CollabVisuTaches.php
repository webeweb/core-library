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
 * Collab visu taches model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CollabVisuTaches {

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Code tache visu.
     *
     * @var string
     */
    private $codeTacheVisu;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collab.
     *
     * @return string Returns the code collab.
     */
    public function getCodeCollab() {
        return $this->codeCollab;
    }

    /**
     * Get the code tache visu.
     *
     * @return string Returns the code tache visu.
     */
    public function getCodeTacheVisu() {
        return $this->codeTacheVisu;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return CollabVisuTaches Returns this collab visu taches.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code tache visu.
     *
     * @param string $codeTacheVisu The code tache visu.
     * @return CollabVisuTaches Returns this collab visu taches.
     */
    public function setCodeTacheVisu($codeTacheVisu) {
        $this->codeTacheVisu = $codeTacheVisu;
        return $this;
    }
}
