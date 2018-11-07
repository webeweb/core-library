<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * Actions taches model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class ActionsTaches {

    /**
     * Code action.
     *
     * @var string
     */
    private $codeAction;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code action.
     *
     * @return string Returns the code action.
     */
    public function getCodeAction() {
        return $this->codeAction;
    }

    /**
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Set the code action.
     *
     * @param string $codeAction The code action.
     * @return ActionsTaches Returns this actions taches.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     * @return ActionsTaches Returns this actions taches.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

}
