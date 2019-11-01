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
 * Code semaine tache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeSemaineTacheTrait {

    /**
     * Code semaine tache.
     *
     * @var string
     */
    private $codeSemaineTache;

    /**
     * Get the code semaine tache.
     *
     * @return string Returns the code semaine tache.
     */
    public function getCodeSemaineTache() {
        return $this->codeSemaineTache;
    }

    /**
     * Set the code semaine tache.
     *
     * @param string $codeSemaineTache The code semaine tache.
     */
    public function setCodeSemaineTache($codeSemaineTache) {
        $this->codeSemaineTache = $codeSemaineTache;
        return $this;
    }
}
