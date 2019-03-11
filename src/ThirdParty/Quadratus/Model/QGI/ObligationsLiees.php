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
 * Obligations liees model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ObligationsLiees {

    /**
     * Code action.
     *
     * @var string
     */
    private $codeAction;

    /**
     * Code obligation.
     *
     * @var string
     */
    private $codeObligation;

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
     * Get the code obligation.
     *
     * @return string Returns the code obligation.
     */
    public function getCodeObligation() {
        return $this->codeObligation;
    }

    /**
     * Set the code action.
     *
     * @param string $codeAction The code action.
     * @return ObligationsLiees Returns this obligations liees.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code obligation.
     *
     * @param string $codeObligation The code obligation.
     * @return ObligationsLiees Returns this obligations liees.
     */
    public function setCodeObligation($codeObligation) {
        $this->codeObligation = $codeObligation;
        return $this;
    }
}
