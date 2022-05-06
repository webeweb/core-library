<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Serializer\Tests;

use WBW\Library\Serializer\SerializerKeys;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Serializer\Tests
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {
        $this->assertEquals("accessToken", SerializerKeys::ACCESS_TOKEN);
        $this->assertEquals("account", SerializerKeys::ACCOUNT);
        $this->assertEquals("accountingCode", SerializerKeys::ACCOUNTING_CODE);
        $this->assertEquals("active", SerializerKeys::ACTIVE);
        $this->assertEquals("addressee", SerializerKeys::ADDRESSEE);
        $this->assertEquals("addresseeDescription", SerializerKeys::ADDRESSEE_DESCRIPTION);
        $this->assertEquals("apiToken", SerializerKeys::API_TOKEN);
        $this->assertEquals("avatar", SerializerKeys::AVATAR);
        $this->assertEquals("average", SerializerKeys::AVERAGE);
        $this->assertEquals("beginsAt", SerializerKeys::BEGINS_AT);
        $this->assertEquals("beginsOn", SerializerKeys::BEGINS_ON);
        $this->assertEquals("birthDate", SerializerKeys::BIRTH_DATE);
        $this->assertEquals("category", SerializerKeys::CATEGORY);
        $this->assertEquals("civility", SerializerKeys::CIVILITY);
        $this->assertEquals("code", SerializerKeys::CODE);
        $this->assertEquals("color", SerializerKeys::COLOR);
        $this->assertEquals("column", SerializerKeys::COLUMN);
        $this->assertEquals("comment", SerializerKeys::COMMENT);
        $this->assertEquals("content", SerializerKeys::CONTENT);
        $this->assertEquals("count", SerializerKeys::COUNT);
        $this->assertEquals("country", SerializerKeys::COUNTRY);
        $this->assertEquals("created", SerializerKeys::CREATED);
        $this->assertEquals("createdAt", SerializerKeys::CREATED_AT);
        $this->assertEquals("customer", SerializerKeys::CUSTOMER);
        $this->assertEquals("data", SerializerKeys::DATA);
        $this->assertEquals("date", SerializerKeys::DATE);
        $this->assertEquals("debug", SerializerKeys::DEBUG);
        $this->assertEquals("deleted", SerializerKeys::DELETED);
        $this->assertEquals("description", SerializerKeys::DESCRIPTION);
        $this->assertEquals("directory", SerializerKeys::DIRECTORY);
        $this->assertEquals("disabled", SerializerKeys::DISABLED);
        $this->assertEquals("discountAmount", SerializerKeys::DISCOUNT_AMOUNT);
        $this->assertEquals("discountRate", SerializerKeys::DISCOUNT_RATE);
        $this->assertEquals("discountTotal", SerializerKeys::DISCOUNT_TOTAL);
        $this->assertEquals("domain", SerializerKeys::DOMAIN);
        $this->assertEquals("duration", SerializerKeys::DURATION);
        $this->assertEquals("email", SerializerKeys::EMAIL);
        $this->assertEquals("endedAt", SerializerKeys::ENDED_AT);
        $this->assertEquals("endedOn", SerializerKeys::ENDED_ON);
        $this->assertEquals("enable", SerializerKeys::ENABLE);
        $this->assertEquals("enabled", SerializerKeys::ENABLED);
        $this->assertEquals("environment", SerializerKeys::ENVIRONMENT);
        $this->assertEquals("error", SerializerKeys::ERROR);
        $this->assertEquals("excludingVatPrice", SerializerKeys::EXCLUDING_VAT_PRICE);
        $this->assertEquals("excludingVatTotal", SerializerKeys::EXCLUDING_VAT_TOTAL);
        $this->assertEquals("extension", SerializerKeys::EXTENSION);
        $this->assertEquals("filename", SerializerKeys::FILENAME);
        $this->assertEquals("finishesAt", SerializerKeys::FINISHES_AT);
        $this->assertEquals("finishesOn", SerializerKeys::FINISHES_ON);
        $this->assertEquals("firstName", SerializerKeys::FIRST_NAME);
        $this->assertEquals("format", SerializerKeys::FORMAT);
        $this->assertEquals("from", SerializerKeys::FROM);
        $this->assertEquals("gid", SerializerKeys::GID);
        $this->assertEquals("hash", SerializerKeys::HASH);
        $this->assertEquals("hashMD5", SerializerKeys::HASH_MD5);
        $this->assertEquals("hashSHA1", SerializerKeys::HASH_SHA1);
        $this->assertEquals("hashSHA256", SerializerKeys::HASH_SHA256);
        $this->assertEquals("height", SerializerKeys::HEIGHT);
        $this->assertEquals("hostname", SerializerKeys::HOSTNAME);
        $this->assertEquals("houseNumber", SerializerKeys::HOUSE_NUMBER);
        $this->assertEquals("icon", SerializerKeys::ICON);
        $this->assertEquals("id", SerializerKeys::ID);
        $this->assertEquals("identifier", SerializerKeys::IDENTIFIER);
        $this->assertEquals("includingVatPrice", SerializerKeys::INCLUDING_VAT_PRICE);
        $this->assertEquals("includingVatTotal", SerializerKeys::INCLUDING_VAT_TOTAL);
        $this->assertEquals("income", SerializerKeys::INCOME);
        $this->assertEquals("ipAddress", SerializerKeys::IP_ADDRESS);
        $this->assertEquals("key", SerializerKeys::KEY);
        $this->assertEquals("label", SerializerKeys::LABEL);
        $this->assertEquals("lang", SerializerKeys::LANG);
        $this->assertEquals("lastName", SerializerKeys::LAST_NAME);
        $this->assertEquals("lastUpdate", SerializerKeys::LAST_UPDATE);
        $this->assertEquals("lat", SerializerKeys::LAT);
        $this->assertEquals("latitude", SerializerKeys::LATITUDE);
        $this->assertEquals("limit", SerializerKeys::LIMIT);
        $this->assertEquals("link", SerializerKeys::LINK);
        $this->assertEquals("locate", SerializerKeys::LOCATE);
        $this->assertEquals("location", SerializerKeys::LOCATION);
        $this->assertEquals("logo", SerializerKeys::LOGO);
        $this->assertEquals("lon", SerializerKeys::LON);
        $this->assertEquals("longitude", SerializerKeys::LONGITUDE);
        $this->assertEquals("macAddress", SerializerKeys::MAC_ADDRESS);
        $this->assertEquals("maritalStatus", SerializerKeys::MARITAL_STATUS);
        $this->assertEquals("max", SerializerKeys::MAX);
        $this->assertEquals("maximum", SerializerKeys::MAXIMUM);
        $this->assertEquals("maxDuration", SerializerKeys::MAX_DURATION);
        $this->assertEquals("maxWidth", SerializerKeys::MAX_WIDTH);
        $this->assertEquals("mention", SerializerKeys::MENTION);
        $this->assertEquals("message", SerializerKeys::MESSAGE);
        $this->assertEquals("mimeType", SerializerKeys::MIME_TYPE);
        $this->assertEquals("min", SerializerKeys::MIN);
        $this->assertEquals("minimum", SerializerKeys::MINIMUM);
        $this->assertEquals("minDuration", SerializerKeys::MIN_DURATION);
        $this->assertEquals("minHeight", SerializerKeys::MIN_HEIGHT);
        $this->assertEquals("minWidth", SerializerKeys::MIN_WIDTH);
        $this->assertEquals("mobile", SerializerKeys::MOBILE);
        $this->assertEquals("motif", SerializerKeys::MOTIF);
        $this->assertEquals("nafCode", SerializerKeys::NAF_CODE);
        $this->assertEquals("name", SerializerKeys::NAME);
        $this->assertEquals("number", SerializerKeys::NUMBER);
        $this->assertEquals("object", SerializerKeys::OBJECT);
        $this->assertEquals("orientation", SerializerKeys::ORIENTATION);
        $this->assertEquals("originUrl", SerializerKeys::ORIGIN_URL);
        $this->assertEquals("page", SerializerKeys::PAGE);
        $this->assertEquals("parent", SerializerKeys::PARENT);
        $this->assertEquals("password", SerializerKeys::PASSWORD);
        $this->assertEquals("pathname", SerializerKeys::PATHNAME);
        $this->assertEquals("paymentDate", SerializerKeys::PAYMENT_DATE);
        $this->assertEquals("perPage", SerializerKeys::PER_PAGE);
        $this->assertEquals("phone", SerializerKeys::PHONE);
        $this->assertEquals("picture", SerializerKeys::PICTURE);
        $this->assertEquals("port", SerializerKeys::PORT);
        $this->assertEquals("position", SerializerKeys::POSITION);
        $this->assertEquals("postalCode", SerializerKeys::POSTAL_CODE);
        $this->assertEquals("q", SerializerKeys::Q);
        $this->assertEquals("quantity", SerializerKeys::QUANTITY);
        $this->assertEquals("query", SerializerKeys::QUERY);
        $this->assertEquals("rate", SerializerKeys::RATE);
        $this->assertEquals("rawData", SerializerKeys::RAW_DATA);
        $this->assertEquals("rawResponse", SerializerKeys::RAW_RESPONSE);
        $this->assertEquals("ready", SerializerKeys::READY);
        $this->assertEquals("reference", SerializerKeys::REFERENCE);
        $this->assertEquals("redirectUrl", SerializerKeys::REDIRECT_URL);
        $this->assertEquals("remaining", SerializerKeys::REMAINING);
        $this->assertEquals("reset", SerializerKeys::RESET);
        $this->assertEquals("role", SerializerKeys::ROLE);
        $this->assertEquals("roles", SerializerKeys::ROLES);
        $this->assertEquals("salt", SerializerKeys::SALT);
        $this->assertEquals("schema", SerializerKeys::SCHEMA);
        $this->assertEquals("score", SerializerKeys::SCORE);
        $this->assertEquals("siretNumber", SerializerKeys::SIRET_NUMBER);
        $this->assertEquals("size", SerializerKeys::SIZE);
        $this->assertEquals("source", SerializerKeys::SOURCE);
        $this->assertEquals("startedAt", SerializerKeys::STARTED_AT);
        $this->assertEquals("startedOn", SerializerKeys::STARTED_ON);
        $this->assertEquals("state", SerializerKeys::STATE);
        $this->assertEquals("streetName", SerializerKeys::STREET_NAME);
        $this->assertEquals("style", SerializerKeys::STYLE);
        $this->assertEquals("subject", SerializerKeys::SUBJECT);
        $this->assertEquals("table", SerializerKeys::TABLE);
        $this->assertEquals("target", SerializerKeys::TARGET);
        $this->assertEquals("text", SerializerKeys::TEXT);
        $this->assertEquals("title", SerializerKeys::TITLE);
        $this->assertEquals("to", SerializerKeys::TO);
        $this->assertEquals("token", SerializerKeys::TOKEN);
        $this->assertEquals("tooltip", SerializerKeys::TOOLTIP);
        $this->assertEquals("total", SerializerKeys::TOTAL);
        $this->assertEquals("totalAmount", SerializerKeys::TOTAL_AMOUNT);
        $this->assertEquals("type", SerializerKeys::TYPE);
        $this->assertEquals("uid", SerializerKeys::UID);
        $this->assertEquals("unitPrice", SerializerKeys::UNIT_PRICE);
        $this->assertEquals("unitValue", SerializerKeys::UNIT_VALUE);
        $this->assertEquals("updatedAt", SerializerKeys::UPDATED_AT);
        $this->assertEquals("uri", SerializerKeys::URI);
        $this->assertEquals("url", SerializerKeys::URL);
        $this->assertEquals("username", SerializerKeys::USERNAME);
        $this->assertEquals("value", SerializerKeys::VALUE);
        $this->assertEquals("vatAmount", SerializerKeys::VAT_AMOUNT);
        $this->assertEquals("vatNumber", SerializerKeys::VAT_NUMBER);
        $this->assertEquals("vatRate", SerializerKeys::VAT_RATE);
        $this->assertEquals("vatTotal", SerializerKeys::VAT_TOTAL);
        $this->assertEquals("verbose", SerializerKeys::VERBOSE);
        $this->assertEquals("visible", SerializerKeys::VISIBLE);
        $this->assertEquals("width", SerializerKeys::WIDTH);
        $this->assertEquals("x", SerializerKeys::X);
        $this->assertEquals("y", SerializerKeys::Y);
    }
}
