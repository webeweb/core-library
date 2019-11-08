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
 * Clients favoris.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ClientsFavoris {

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code col.
     *
     * @var string
     */
    private $codeCol;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code col.
     *
     * @return string Returns the code col.
     */
    public function getCodeCol() {
        return $this->codeCol;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code col.
     *
     * @param string $codeCol The code col.
     */
    public function setCodeCol($codeCol) {
        $this->codeCol = $codeCol;
        return $this;
    }
}
