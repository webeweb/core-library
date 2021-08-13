<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Serializer;

use WBW\Library\Provider\Serializer\CsvSerializerHelper;
use WBW\Library\Provider\Tests\AbstractTestCase;
use WBW\Library\Provider\Tests\Fixtures\Model\TestCsvSerializable;

/**
 * CSV serializer helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Tests\Serializer
 */
class CsvSerializerHelperTest extends AbstractTestCase {

    /**
     * Tests the serializeArray() method.
     *
     * @return void
     */
    public function testSerializeArray(): void {

        $models = [
            new TestCsvSerializable(),
            new TestCsvSerializable(),
            null,
        ];

        $res = CsvSerializerHelper::csvSerializeArray($models);
        $this->assertEquals("\n", $res);
    }
}