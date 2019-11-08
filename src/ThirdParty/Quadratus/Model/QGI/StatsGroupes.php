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
 * Stats groupes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class StatsGroupes {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Groupe stat.
     *
     * @var string
     */
    private $groupeStat;

    /**
     * Type champ.
     *
     * @var string
     */
    private $typeChamp;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the groupe stat.
     *
     * @return string Returns the groupe stat.
     */
    public function getGroupeStat() {
        return $this->groupeStat;
    }

    /**
     * Get the type champ.
     *
     * @return string Returns the type champ.
     */
    public function getTypeChamp() {
        return $this->typeChamp;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the groupe stat.
     *
     * @param string $groupeStat The groupe stat.
     */
    public function setGroupeStat($groupeStat) {
        $this->groupeStat = $groupeStat;
        return $this;
    }

    /**
     * Set the type champ.
     *
     * @param string $typeChamp The type champ.
     */
    public function setTypeChamp($typeChamp) {
        $this->typeChamp = $typeChamp;
        return $this;
    }
}
