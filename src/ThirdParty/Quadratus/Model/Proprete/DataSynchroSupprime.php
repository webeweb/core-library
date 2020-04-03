<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Data synchro supprime.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class DataSynchroSupprime {

    /**
     * Type data.
     *
     * @var string
     */
    private $typeData;

    /**
     * Uniq id blocage.
     *
     * @var string
     */
    private $uniqIdBlocage;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the type data.
     *
     * @return string Returns the type data.
     */
    public function getTypeData() {
        return $this->typeData;
    }

    /**
     * Get the uniq id blocage.
     *
     * @return string Returns the uniq id blocage.
     */
    public function getUniqIdBlocage() {
        return $this->uniqIdBlocage;
    }

    /**
     * Set the type data.
     *
     * @param string $typeData The type data.
     * @return DataSynchroSupprime Returns this Data synchro supprime.
     */
    public function setTypeData($typeData) {
        $this->typeData = $typeData;
        return $this;
    }

    /**
     * Set the uniq id blocage.
     *
     * @param string $uniqIdBlocage The uniq id blocage.
     * @return DataSynchroSupprime Returns this Data synchro supprime.
     */
    public function setUniqIdBlocage($uniqIdBlocage) {
        $this->uniqIdBlocage = $uniqIdBlocage;
        return $this;
    }
}
