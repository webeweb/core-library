<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\SkiData\Parser;

use WBW\Library\Core\Argument\IntegerHelper;
use WBW\Library\Core\SkiData\Entity\SkiDataStartRecordFormat;

/**
 * SkiData start record format parser.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\SkiData\Parser
 */
class SkiDataStartRecordFormatParser extends AbstractSkiDataParser {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Parse a start record format entity.
     *
     * @param SkiDataStartRecordFormat $entity The start record format entity.
     * @return string Returns the parsed start record format entity.
     */
    public function parseEntity(SkiDataStartRecordFormat $entity) {

        // Initialise the output.
        $output = [];

        $output[] = $this->encodeInteger($entity->getVersionRecordStructure(), 6);
        $output[] = $this->encodeInteger($entity->getFacilityNumber(), 7);
        $output[] = $this->encodeDate($entity->getDateFile());
        $output[] = $this->encodeInteger($entity->getNumberRecords(), 5);
        $output[] = $this->encodeString($entity->getCurrency(), 6);

        // Return the output.
        return implode(";", $output);
    }

    /**
     * Parse a line.
     *
     * @param string $line The line.
     * @return SkiDataStartRecordFormat Returns a start record format entity.
     */
    public function parseLine($line) {

        // Split the line.
        $data = explode(";", $line);
        $i    = 0;

        // Initialize the entity.
        $entity = new SkiDataStartRecordFormat();

        $entity->setVersionRecordStructure(IntegerHelper::parseString($data[$i++]));
        $entity->setFacilityNumber(IntegerHelper::parseString($data[$i++]));
        $entity->setDateFile($this->decodeDate($data[$i++]));
        $entity->setNumberRecords(IntegerHelper::parseString($data[$i++]));
        $entity->setCurrency($this->decodeString($data[$i++]));

        // Return the entity.
        return $entity;
    }

}
