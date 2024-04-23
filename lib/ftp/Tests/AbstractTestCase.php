<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Ftp\Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use WBW\Library\Security\Authenticator;
use WBW\Library\Security\PasswordAuthentication;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ftp\Tests
 * @abstract
 */
abstract class AbstractTestCase extends BaseTestCase {

    /**
     * Authenticator.
     *
     * @var Authenticator|null
     */
    protected $authenticator;

    /**
     * Local directory.
     *
     * @var string|null
     */
    protected $localDir;

    /**
     * Local file.
     *
     * @var string|null
     */
    protected $localFile;

    /**
     * Remote directory.
     *
     * @var string|null
     */
    protected $remoteDir;

    /**
     * Remote file.
     *
     * @var string|null
     */
    protected $remoteFile;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        //
        $this->remoteDir  = "/pub";
        $this->remoteFile = "/readme.txt";

        $this->localDir  = realpath(__DIR__ . "/../../../var");
        $this->localFile = implode("", [$this->localDir, $this->remoteFile]);

        if (true === file_exists($this->localFile)) {
            unlink($this->localFile);
        }

        // Set a Password authentication mock.
        $passwordAuthentication = new PasswordAuthentication("demo", "password");

        // Set an Authenticator mock.
        $this->authenticator = new Authenticator("hostname", $passwordAuthentication);
        $this->authenticator->setHostname("test.rebex.net");
        $this->authenticator->setPort(null);
    }
}
